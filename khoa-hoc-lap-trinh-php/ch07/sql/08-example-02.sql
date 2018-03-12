-- 01. Cho biết tên công trình có kinh phí cao nhất

SELECT name, cost 
FROM building
WHERE cost = 
	(
		SELECT MAX(cost) FROM building
	);

-- 02. Cho biết tên các kiến trúc sư (architect) vừa thiết kế các công trình (design) do Phòng dịch vụ sở xây dựng (contractor) thi công,
-- vừa thiết kế các công trình do chủ thầu Lê Văn Sơn thi công

SELECT DISTINCT a.name
FROM architect AS a, building AS b,contractor AS c, design AS d
WHERE a.id = d.architect_id
  AND b.id = d.building_id
  AND c.id = b.contractor_id
  AND c.name = 'phong dich vu so xd'
  AND a.id IN 
	(
		SELECT DISTINCT a.id
		FROM architect AS a, building AS b,contractor AS c, design AS d
		WHERE a.id = d.architect_id
		  AND b.id = d.building_id
		  AND c.id = b.contractor_id
		  AND c.name = 'le van son'
	);

-- 03. Cho biết họ tên các công nhân (worker) có tham gia (work) các công trình ở Cần Thơ (building) nhưng không có tham gia công 
-- trình ở Vĩnh Long

SELECT DISTINCT w.name
FROM building AS b, work AS d, worker AS w
WHERE b.id = d.building_id
  AND d.worker_id = w.id
  AND b.city = 'can tho'
  AND w.id NOT IN 
	(
		SELECT w.id
		FROM building AS b, work AS d, worker AS w
		WHERE b.id = d.building_id
		  AND d.worker_id = w.id
		  AND b.city = 'vinh long'
	);

-- 04. Cho biết tên của các chủ thầu đã thi công các công trình có kinh phí lớn hơn tất cả các công trìng
-- do chủ thầu phòng Dịch vụ Sở xây dựng thi công

SELECT c.name
FROM building AS b, contractor AS c
WHERE b.contractor_id = c.id
  AND cost > ALL
	(
		SELECT cost
		FROM building AS b, contractor AS c
		WHERE b.contractor_id = c.id
		  AND c.name = 'phong dich vu so xd'
	);

-- 05. Cho biết họ tên các kiến trúc sư có thù lao thiết kế một công trình nào đó dưới già trị trung bình
-- thù lao thiết kế cho một công trình

SELECT DISTINCT a.name
FROM architect AS a, design AS d
WHERE a.id = d.architect_id
  AND benefit >
	(
		SELECT AVG(benefit) FROM design
	);


-- 06. Tìm tên và địa chỉ những chủ thầu đã trúng thầu công trình có kinh phí thấp nhất

SELECT DISTINCT c.name
FROM building AS b, contractor AS c
WHERE c.id = b.contractor_id
  AND cost =
	(
		SELECT MIN(cost) FROM building
	);

-- 07. Tìm họ tên và chuyên môn của các công nhân (worker) tham gia (work) các công trình do kiến trúc sư Le Thanh Tung thiet ke (architect) (design)

SELECT w.name, w.skill
FROM worker AS w, work AS d
WHERE w.id = d.worker_id
 AND d.building_id IN 
	(
		SELECT d.building_id
		FROM architect AS a, design AS d
		WHERE a.id = d.architect_id
		  AND a.name = 'le thanh tung'
	);

SELECT w.name, w.skill
FROM architect AS a, design AS d, work as wo, worker as w, building AS b
WHERE a.id = d.architect_id
  AND b.id = d.building_id
  AND b.id = wo.building_id
  AND wo.worker_id = w.id
  AND a.name = 'le thanh tung';

-- 08. Tìm các cặp tên của chủ thầu có trúng thầu các công trình tại cùng một thành phố

SELECT DISTINCT c1.name, c2.name, b1.city
FROM building AS b1, building AS b2, contractor AS c1, contractor AS c2 
WHERE b1.city = b2.city 
  AND b1.contractor_id = c1.id
  AND b2.contractor_id = c2.id
  AND b1.contractor_id > b2.contractor_id;














