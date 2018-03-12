-- 01. LENGTH (str): Xác định chiều dài chuỗi str

SELECT LENGTH('MySQL');
SELECT LENGTH('MySQL is easy');

-- 02. CONCAT (str1, str2, …, strn) Nối các chuỗi str1, str2, …, strn thành một chuỗi duy nhất

SELECT CONCAT('MySQL', ' is', ' easy');
SELECT CONCAT('MySQL', ' is', NULL, ' easy');

-- 03. FORMAT (str, n) Chuyển đổi định dạng chuỗi str theo dạng #,###,###.##, trong đó làm tròn đến n 
-- số thập phân.

SELECT FORMAT(12345.6789, 2);
SELECT FORMAT(12345.6789, 0);

-- 04. INSERT (str, pos, len, newstr) Thay thế các ký tự trong chuỗi str từ vị trí thứ pos đến vị trí 
-- thứ pos+len-1 bởi chuỗi ký tự newstr.

SELECT INSERT('MySQL is easy', 3, 3, 'Library'); -- SQL
SELECT INSERT('MySQL is easy', 3, 100, 'Library'); -- S

-- 05. INSTR (str, substr) Trả về vị trí xuất hiện đầu tiên của chuỗi substr trong chuỗi str

SELECT INSTR('MySQL', 'SQL');
SELECT INSTR('Mysql SQL', 'PHP');

-- 06. LEFT (str, len) Trả về chuỗi ký tự tính từ vị trí bên trái của chuỗi str từ vị trí thứ nhất đến 
-- vị trí thứ len.

SELECT LEFT('MySQL is easy',7);

-- 07. RIGHT (str, len) Trả về chuỗi ký tự tính từ vị trí bên phải của chuỗi str từ vị trí thứ nhất đến 
-- vị trí thứ len.

SELECT RIGHT('MySQL is easy',6);

-- 08. LOCATE (substr, str, pos) Trả về vị trí xuất hiện đầu tiên của chuỗi substr trong chuỗi str tính 
-- từ vị trí thứ pos

SELECT LOCATE('very', 'MySQL is very easy'); -- v: 10
SELECT LOCATE('very', 'MySQL is very very easy', 11); -- v: 10

-- 09. LOWER (str) Chuyển đổi chuỗi str thành chữ thường

SELECT LOWER('MySQL is very easy');

-- 10. UPPER (str) Chuyển đổi chuỗi str thành chữ hoa

SELECT UPPER('MySQL is very easy');

-- 11. LTRIM (str) Loại bỏ tất cả khoảng trắng bên trái chuỗi str

SELECT LTRIM('     MySQL is very easy');

-- 12. RTRIM (str) Loại bỏ tất cả khoảng trắng bên phải chuỗi str

SELECT RTRIM('     MySQL is very easy        ');

-- 13. REPLACE (str, from_str, to_str) Thay thế các ký tự from_str trong chuỗi str bởi các ký tự to_str

SELECT REPLACE('MySQL is very easy', 'MySQL', 'PHP');
SELECT REPLACE('MySQL is very easy', 'mysql', 'PHP');

-- 14. REVERSE (str) Đảo ngược chuỗi str

SELECT REVERSE('MySQL is very easy');

-- 15. SUBSTRING (str FROM pos FOR len) Trích lọc  từ  chuỗi  str  một chuỗi mới, chuỗi mới này  có các 
-- ký tự  bắt đầu từ  vị  trí  pos  (tính từ  vị  trí biên trái) cho đến vị trí pos+len-1.

SELECT SUBSTRING('MySQL is easy' FROM 2 FOR 5);

-- 16. TRIM ([{BOTH | LEADING | TRAILING} [remstr] FROM] str), TRIM([remstr FROM] str
-- Trả  về  chuỗi  str  với các  ký tự  remstr  đã bị  loại bỏ, theo các tiêu chí  LEADING  (bên trái), 
-- TRAILING (bên phải) và BOTH (cả hai vị trí bên trái và bên phải).

SELECT TRIM('   MySQL is easy    ');
SELECT TRIM(LEADING '-' FROM '-------MySQL is easy--------');
SELECT TRIM(TRAILING '-' FROM '-------MySQL is easy--------');
SELECT TRIM(BOTH '-' FROM '-------MySQL is easy--------');
