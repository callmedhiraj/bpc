
CREATE PROCEDURE sp_get_payment_details_by_cusotmer_number(IN cno INT)
BEGIN
SELECT 
    c.customerNumber, c.customerName, checkNumber, paymentDate, amount
    FROM customers as c
    INNER JOIN payments as p
    ON c.customerNumber = p.customerNumber
    WHERE c.customerNumber = cno;

END