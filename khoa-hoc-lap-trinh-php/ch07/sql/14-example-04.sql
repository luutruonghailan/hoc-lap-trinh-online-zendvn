-- 01. Hiển thị thông tin kiến trúc sư gồm: Họ tên, tuổi và giới tính

SELECT 	name, 
		(YEAR(CURDATE()) - birthday) AS tuoi, 
		CASE sex
			WHEN 1 THEN 'Nam'
			WHEN 0 THEN 'Nu'
		END	AS gioi_tinh
FROM architect;

-- 02. Hiển thị thông tin kiến trúc sư gồm: Họ tên đầy đủ, họ, họ lót và tên
-- le thanh tung -> gnut hnaht el -> 8

SELECT 	name,
		LEFT(name, INSTR(name, ' ') - 1) AS ho,
		SUBSTRING(name FROM INSTR(name, ' ') FOR (LENGTH(name) - INSTR(REVERSE(name), ' ') - INSTR(name, ' ') + 1) + 1) AS holot,
		RIGHT(name, INSTR(REVERSE(name), ' ') - 1) AS ten
FROM architect;

-- 03. Cho biết vào ngày 23/05/1994 còn những công nhân nào tham gia xây dựng công trình

SELECT w.name
FROM worker AS w ,
	(
		SELECT worker_id, date AS date_start, ADDDATE(date,INTERVAL total DAY) AS date_end
		FROM work
	) AS wo
WHERE w.id = wo.worker_id
  AND '1994.05.23' BETWEEN date_start AND date_end;






