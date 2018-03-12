-- 01. NOW() xác định thời gian tại thời điểm hiện tại

-- 02. CURDATE() xác định ngày, tháng, năm tại thời điểm hiện tại

-- 03. CURTIME() xác định giờ, phút, giây tại thời điểm hiện tại

-- 04. DATE(expr) xác định ngày, tháng, năm tại thời điểm expr

-- 05. TIME(expr) xác định giờ, phút, giây tại thời điểm expr

-- 06. YEAR(expr) xác định năm tại thời điểm expr

-- 07. MONTH(expr) xác định tháng (chỉ số 1, 2, 3, …) tại thời điểm expr

-- 08. MONTHNAME(expr) xác định tên tháng tại thời điểm expr

-- 09. WEEKDAY(expr) xác định chỉ số ngày trong tuần (0 = Monday, 1 = Tuesday, … 6 = Sunday)

-- 10. WEEKOFYEAR(expr) xác định chỉ số tuần trong năm (kết quả nằm trong khoảng từ 1 đến 55)

-- 11. DAY(expr) xác định ngày (chỉ số) tại thời điểm expr

-- 12. DAYOFYEAR(expr) xác định số thứ tự của ngày trong năm tại thời điểm expr (kết quả nằm trong khoảng từ 1 đến 366)

-- 13. DAYOFMONTH(expr) xác định số thứ tự của ngày trong tháng tại thời điểm expr (kết quả nằm trong khoảng từ 1 đến 31)
  
-- 14. DAYNAME(expr) xác định tên (thứ) của ngày tại thời điểm expr

-- 15. DAYOFWEEK(expr) xác định ngày (chỉ số) của ngày tại thời điểm expr (1 = Sunday, 2 = Monday, …, 7 = Saturday)

-- 16. HOUR(expr) xác định giờ tại thời điểm expr

-- 17. MINUTE(expr) xác định phút tại thời điểm expr

-- 18. SECOND(expr) xác định giây tại thời điểm expr

-- 19. MICROSECOND(expr) xác định mili giây tại thời điểm expr

-- 20. TIME_TO_SEC(expr) chuyển thời gian tại thời điểm expr ra số giây
  
-- 21. FROM_DAYS(N) chuyển về định dạng thời gian của giá trị số N

-- 22. LAST_DAY(expr) xác định ngày cuối cùng trong tháng của tháng tại thời điểm expr
 
-- 23. ADDDATE(date, INTERVAL expr unit) cộng vào thời điểm date một giá trị expr thuộc dạng unitTest and fix app

-- 24. DATE_ADD(date, INTERVAL expr unit) cộng vào thời điểm date một giá trị expr thuộc dạng unit

-- 25. DATEDIFF(expr1,expr2) tính số  ngày giữa hai khoảng thời gian cụ  thể  (chỉ  phần ngày, tháng, năm của hai khoảng thời gian 
-- nay mới được tính toán)

-- 26. SUBDATE(date, INTERVAL expr unit) trừ vào thời điểm date một giá trị expr thuộc dạng unit

-- 27. DATE_SUB(date, INTERVAL expr unit) trừ vào thời điểm date một giá trị expr thuộc dạng unit

-- 28.  SUBTIME(expr1,expr2) xác định hiệu của expr1 và expr2, giá trị kết quả này có định dạng như expr1

-- 29.  EXTRACT(unit FROM date) xác định chính xác thành phần unit tại thời điểm date

-- 30.  DATE_FORMAT(date,format) định dạng thời gian tại thời điểm date với kiểu định dạng format.
