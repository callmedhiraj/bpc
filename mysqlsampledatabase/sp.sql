/**
The general syntax of creating a stored procedure
**/
DELIMITER $$

CREATE PROCEDURE getAllOrderDetailsByCustomerNumber(IN cno INT )
BEGIN
SELECT 
    c.customerNumber, c.customerName, o.orderNumber, orderDate, 
    p.productCode, productName, quantityOrdered
    FROM customers AS c
    INNER JOIN orders AS o
    ON c.customerNumber = o.customerNumber
    INNER JOIN orderDetails as od
    ON o.orderNumber = od.orderNumber
    INNER JOIN products as p
    ON od.productCode = p.productCode
    WHERE c.customerNumber = cno;
END $$



