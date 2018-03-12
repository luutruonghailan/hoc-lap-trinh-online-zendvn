-- 01. Hiển thị thông tin công trình có chi phí cao nhất

SELECT * FROM building
WHERE cost = 
	(
		SELECT MAX(cost) FROM building
	);

-- 02. Hiển thị thông tin công trình có chi phí lớn hơn tất cả các công trình được xây dựng ở Cần Thơ

SELECT * FROM building
WHERE cost > ALL
	(
		SELECT cost FROM building
		WHERE city = 'can tho'
	);

SELECT * FROM building
WHERE cost >
	(
		SELECT MAX(cost) FROM building
		WHERE city = 'can tho'
	);

-- 03. Hiển thị thông tin công trình có chi phí lớn hơn một trong các công trình được xây dựng ở Cần Thơ

SELECT * FROM building
WHERE city <> "can tho" AND cost > ANY
	(
		SELECT cost FROM building
		WHERE city = 'can tho'
	);

-- 04. Hiển thị thông tin công trình chưa có kiến trúc sư thiết kế

SELECT * FROM building
WHERE id NOT IN 
	(
		SELECT building_id FROM design
	);

SELECT * FROM building
WHERE id IN 
	(
		SELECT building_id FROM design
	);

-- 05. Hiển thị thông tin các kiến trúc sư cùng năm sinh và cùng nơi tốt nghiệp

SELECT name , birthday, place FROM architect AS a
WHERE EXISTS 
	(
		SELECT * FROM architect AS b
		WHERE a.birthday = b.birthday AND a.place = b.place
			AND a.id <> b.id
	)







