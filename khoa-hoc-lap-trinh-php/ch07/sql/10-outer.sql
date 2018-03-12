-- Outer Join

-- Case 1
SELECT a.name, SUM(benefit) AS tong
FROM architect AS a, design AS d
WHERE a.id = d.architect_id
GROUP BY d.architect_id;

-- Case 2

SELECT a.name, SUM(benefit) AS tong
FROM architect AS a JOIN design AS d ON a.id = d.architect_id
GROUP BY d.architect_id;

-- Case 3

SELECT a.name, SUM(benefit) AS tong
FROM architect AS a LEFT JOIN design AS d ON a.id = d.architect_id
GROUP BY d.architect_id;

-- Case 4

SELECT a.name, SUM(benefit) AS tong
FROM architect AS a RIGHT JOIN design AS d ON a.id = d.architect_id
GROUP BY d.architect_id;

SELECT a.name, SUM(benefit) AS tong
FROM design AS d RIGHT JOIN architect AS a ON a.id = d.architect_id
GROUP BY d.architect_id;