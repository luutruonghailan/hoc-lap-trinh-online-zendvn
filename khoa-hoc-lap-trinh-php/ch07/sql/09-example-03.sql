-- 01. Tìm tổng kinh phí của tất cả các công trình theo từng chủ thầu

SELECT c.name, sum(cost)
FROM building AS b, contractor AS c
WHERE b.contractor_id = c.id
GROUP BY contractor_id;

-- 02. Cho biết họ tên các kiến trúc sư có tổng thù lao thiết kế các công trình lớn hơn 25 triệu

SELECT a.name, sum(benefit) AS total
FROM architect AS a, design AS d
WHERE a.id = d.architect_id
GROUP BY d.architect_id
HAVING total > 25;

-- 03. Cho biết số lượng các kiến trúc sư có tổng thù lao thiết kế các công trình lớn hơn 25 triệu

SELECT COUNT(temp3.name)
FROM 
	(
		SELECT a.name, sum(benefit) AS total
		FROM architect AS a, design AS d
		WHERE a.id = d.architect_id
		GROUP BY d.architect_id
		HAVING total > 25
	) AS temp3; -- temp3(name, total)

-- 04. Tìm tổng số công nhân đã than gia ở mỗi công trình

SELECT b.name, COUNT(worker_id)
FROM building AS b, work AS w
WHERE b.id = w.building_id
GROUP BY w.building_id;

-- 05. Tìm tên và địa chỉ công trình có tổng số công nhân tham gia nhiều nhất

SELECT b.id, b.name, b.address, COUNT(worker_id) as tong_cn
FROM building AS b, work AS w
WHERE b.id = w.building_id
GROUP BY w.building_id
ORDER BY tong_cn DESC
LIMIT 0,1;

-- 06. Cho biêt tên các thành phố và kinh phí trung bình cho mỗi công trình của từng thành phố tương ứng

SELECT city, AVG(cost)
FROM building
GROUP BY city;

-- 07. Cho biết họ tên các công nhân có tổng số ngày tham gia vào các công trình lớn hơn tổng số ngày tham gia của công nhân Nguyen Hồng Vân

SELECT w.name, SUM(total) AS tong_ngay
FROM work AS wo, worker AS w
WHERE wo.worker_id = w.id
GROUP BY wo.worker_id
HAVING tong_ngay >
	(
		SELECT SUM(total)
		FROM work AS wo, worker AS w
		WHERE wo.worker_id = w.id
		  AND w.name = 'nguyen hong van'
		GROUP BY wo.worker_id
	);

-- 08. Cho biết tổng số công trình mà mỗi chủ thầu đã thi công tại mỗi thành phố

SELECT c.name, city, COUNT(b.id)
FROM building AS b, contractor AS c
WHERE b.contractor_id = c.id
GROUP BY contractor_id, city;

-- 09. Cho biết họ tên công nhân có tham gia ở tất cả các công trình

SELECT w.name, COUNT(building_id) AS tong_ct
FROM work AS wo, worker AS w
WHERE w.id = wo.worker_id
GROUP BY worker_id
HAVING tong_ct = 
	(
		SELECT COUNT(id) FROM building
	)

