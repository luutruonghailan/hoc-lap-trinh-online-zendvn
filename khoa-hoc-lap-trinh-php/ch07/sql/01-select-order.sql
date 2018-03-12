-- 01. Hiển thị toàn bộ nội dung của bảng Architect

SELECT * FROM architect;

-- 02. Hiển thị danh sách gồm họ tên và giới tính của kiến trúc sư

SELECT name, sex FROM architect;

-- 03. Hiển thị những năm sinh có thể có của các kiến trúc sư

SELECT DISTINCT birthday FROM architect;

-- 04. Hiển thị danh sách các kiến trúc sư (họ tên và năm sinh) (giá trị năm sinh tăng dần)

SELECT name, birthday FROM architect
ORDER BY birthday;

-- 05. Hiển thị danh sách các kiến trúc sư (họ tên và năm sinh) (giá trị năm sinh giảm dần)

SELECT name, birthday FROM architect
ORDER BY birthday DESC;

-- 06. Hiển thị danh sách các công trình có chi phí từ thấp đến cao. Nếu 2 công trình có chi phí bằng nhau sắp xếp tên thành phố theo bảng chữ cáibuilding

SELECT name, cost, city FROM building
ORDER BY cost ASC, city DESC;





