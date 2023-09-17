-- to find all the customers
SELECT *
    FROM customers ;
-- to find the customerNumber,customerName,city,phone
SELECT
    customerNumber, customerName, phone, city
    FROM customers;
-- LIKE Operator -- matches the string / patterns
-- to find the customerNumber,customerName,city,phone whose
-- name starts with 'mini'
-- LIKE 'mini%'
SELECT
    customerNumber, customerName, phone, city
    FROM customers
    WHERE customerName LIKE 'mini%';
    
    
-- to find the customerNumber,customerName,city,phone whose
-- name has  'mini'
-- LIKE '%mini%'
SELECT
    customerNumber, customerName, phone, city
    FROM customers
    WHERE customerName LIKE '%mini%'; -- BINARY()
-- name having third character l and fifth character as n
-- '_' represents a single character
SELECT
    customerNumber, customerName, phone, city
    FROM customers
    WHERE customerName LIKE '__l_n';
-- find the list of all the customers and their payment dtails
-- LEFT JOIN
SELECT c.customerNumber, c.customerName, c.phone, SUM(p.amount) AS `Total payments`
    FROM customers as c
    INNER JOIN payments as p
    ON c.customerNumber = p.customerNumber
    GROUP BY c.customerNumber
    ORDER BY SUM(p.amount) DESC ;
-- top 5 most paying customers
SELECT c.customerNumber, c.customerName, c.phone, SUM(p.amount) AS `Total payments`
    FROM customers as c
    INNER JOIN payments as p
    ON c.customerNumber = p.customerNumber
    GROUP BY c.customerNumber
    ORDER BY SUM(p.amount) DESC 
    LIMIT 0,5;
-- find the list of customers and their total sales in the fiscal year 2003 (2003-01-01 TO 2003-12-31)
SELECT c.customerNumber, c.customerName, c.phone, 
   CONCAT(SUM(quantityOrdered*priceEach) / (select sum(quantityOrdered*priceEach) FROM orderdetails) * 100, '%') as `Sales Amount in Percentage`
    FROM customers AS c
    INNER JOIN orders AS o
    ON c.customerNumber  = o.customerNumber
    INNER JOIN orderdetails as od
    ON o.orderNumber = od.orderNumber
    WHERE orderDate BETWEEN '2003-01-01' AND '2003-12-31'
    GROUP BY c.customerNumber
    HAVING `Sales Amount in Percentage` > 1.00
    ORDER BY `Sales Amount in Percentage` DESC
    LIMIT 5;
    
    SELECT * FROM ORDERS;
-- VIEWs
/**
lets create a view to find the list of all the offices, 
branches and their total sales
**/
CREATE OR REPLACE VIEW vw_sales_by_branch
AS
SELECT 
    o.officeCode, o.city, 
    SUM(od.quantityOrdered*od.priceEach) as total_sales
    FROM offices as o
    INNER JOIN employees as e
    ON o.officeCode = e.officeCode
    INNER JOIN customers as c
    ON e.employeeNumber = c.salesRepEmployeeNumber
    INNER JOIN orders as ord
    ON c.customerNumber = ord.customerNumber
    INNER JOIN orderDetails as od
    ON ord.orderNumber = od.orderNumber
    GROUP BY o.officeCode
    ORDER BY total_sales DESC;
    
-- query
SELECT city, total_sales AS `sales amount` FROM vw_sales_by_branch
WHERE total_sales > 1400000;

-- To remove a view 
-- DROP VIEW vw_name;
DROP VIEW vw_sales_by_branch;

-- to change the delimiter
DELIMITER $$
CREATE PROCEDURE sp_get_payment_details_by_cusotmer_number(IN cno INT)
BEGIN
SELECT 
    c.customerNumber, c.customerName, checkNumber, paymentDate, amount
    FROM customers as c
    INNER JOIN payments as p
    ON c.customerNumber = p.customerNumber
    WHERE c.customerNumber = cno;
END $$

-- to change the delimiter back to semi colon
DELIMITER ;
-- to execute the sp
CALL sp_get_payment_details_by_cusotmer_number(116);

-- to remove a SP 
-- DROP PROCEDURE procedure_name;
DROP PROCEDURE sp_get_payment_details_by_cusotmer_number;



