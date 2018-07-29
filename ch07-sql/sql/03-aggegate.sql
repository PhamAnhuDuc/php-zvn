-- 01. Thống kê tổng số kiến trúc sưa

SELECT COUNT(id) AS Tong FROM architect;
SELECT name AS Ho_ten FROM architect;

-- 02. thống kê số kiến trúc sư namm

SELECT COUNT(id) AS Tong_nam  FROM architect
WHERE sex = 1 ;

SELECT COUNT(id) AS Tong_nu  FROM architect
WHERE sex = 0 ;

-- 03. tìm ngày tham gia công trình với số này nhiều nhất của công nhân
SELECT MAX(total)AS max FROM work;

-- 04. tìm ngày tham gia công trình với số này ít nhất của công nhân
SELECT MIN(total)AS min FROM work;

-- 05. Tìm tổng số ngày tham gia công trình của tất cả công nhân
SELECT SUM(total) AS tong FROM work;
-- 06. timg tổng chi phí phải trả cho việc thiết kế công trình của kiến trúc sư có mã số là 1
SELECT SUM(benefit) AS tong FROM design 
WHERE architect_id = 1;

-- 07. Tìm giá trị trung bình
SELECT AVG(total) AS tong FROM work;

-- 08. hiển thị thông tin họ tên và tuổi của KT  : tuổi = năm hiện tại - năm sinh

SELECT name,(2018-birthday) as tuoi FROM architect;

-- 09. Tính thù lao của kiến trúc sư = benefit *1000;

SELECT architect_id , building_id, (benefit *1000) AS cost1 FROM design;