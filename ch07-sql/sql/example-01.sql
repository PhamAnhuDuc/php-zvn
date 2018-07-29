-- 01. hiển thị toàn bộ nội dung của bảng architect

SELECT * FROM architect;

-- 02. hiển thị danh sách gồm họ tên và giới tính

SELECT  name, sex FROM architect;

-- 03. hiển thị năm sinh có thể có của các kiến trúc sư k được phép trùng nhau

SELECT DISTINCT birthday FROM architect;

-- 04. Hiển thị danh sách các kiến trúc sư gồm họ tên và năm sinh tăng dần

SELECT name, birthday FROM architect ORDER BY birthday ASC;

-- 05. Hiển thị danh sách các kiến trúc sư gồm họ tên và năm sinh giảm dần

SELECT name, birthday FROM architect ORDER BY birthday DESC;

-- 06. Hiển thị tên, thành phố, chi phí của công trình sắp xếp từ thấp đến cao nếu chi phí = nhau thì theo tên  ngược bảng chữ cái
SELECT name,cost,city FROM building ORDER BY cost ASC, city DESC;