-- 07. Hiển thị tất cả thông tin của kiến trúc sư "le thanh tung"

SELECT * FROM architect
WHERE name = "le thanh tung";

-- 08. Hiển thị tên, năm sinh các công nhân có chuyên môn hàn hoặc điện

SELECT name, birthday, skill FROM worker
WHERE skill = "han" OR skill = "dien";

-- 09. Hiển thị tên các công nhân có chuyên môn hàn hoặc điện và năm sinh lớn hơn 1948

SELECT name, birthday, skill FROM worker
WHERE (skill = "han" OR skill = "dien") AND (birthday > 1948);

-- 10. Hiển thị những công nhân bắt đầu vào nghề khi dưới 20 (birthday + 20 > year)

SELECT * FROM worker
WHERE birthday + 20 > year;

-- 11. Hiển thị những công nhân có năm sinh 1945, 1940, 1948

-- C1
SELECT * FROM worker
WHERE birthday = 1945 OR birthday = 1940 OR birthday = 1948;

-- C2
SELECT * FROM worker
WHERE birthday NOT IN (1940, 1945, 1948);

-- 12. Tìm những công trình có chi phí đầu tư từ 200 đến 500 triệu đồng

-- C1
SELECT * FROM building
WHERE cost >= 200 AND cost <= 500;

-- C2
SELECT * FROM building
WHERE cost BETWEEN 200 AND 500;

-- 13. Tìm kiếm những kiến trúc sư có họ là nguyen: % chuỗi
SELECT * FROM architect
WHERE name LIKE "nguyen%";

-- 14. Tìm kiếm những kiến trúc sư có họ lót là anh

SELECT * FROM architect
WHERE name LIKE "%anh%";

-- 15. Tìm kiếm những kiến trúc sư có tên bắt đầu th và có 3 ký tự

SELECT * FROM architect
WHERE name LIKE "%th_";

-- 16. Tìm chủ thầu không có phone

SELECT * FROM contractor
WHERE phone IS NOT NULL;






