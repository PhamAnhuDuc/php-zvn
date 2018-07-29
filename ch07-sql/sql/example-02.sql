-- 07. hiển thị thông tin của kiến trúc sư le thanh tung
SELECT * FROM architect 
WHERE name="le thanh tung";

-- 08. Hiển thị tên, năm sinh của các công nhân có chuyên môn là hàn hoặc điện

SELECT name, birthday, skill FROM worker 
WHERE skill = "han" OR skill ="dien";

-- 09. Hiển thị tên, năm sinh của các công nhân có chuyên môn là hàn hoặc điện và năm sinh > 1948

SELECT name, birthday, skill FROM worker 
WHERE (skill = "han" OR skill ="dien") AND (birthday > 1948 );

-- 10. Hiển thị những công nhân vào nghề khi tuổi dưới 20 (lấy năm sinh + 20 > năm hiện tại)

SELECT * FROM worker
WHERE birthday + 20 > year;

-- 11. Hiển thị những công nhân có năm sinh 1945 1940 1948;
	-- C1.
SELECT * FROM worker
WHERE birthday = 1945 OR birthday = 1940 OR birthday = 1948;
	-- C2.
SELECT * FROM worker
WHERE birthday NOT IN (1940,1945,1948);

-- 12. Tìm những công trình có chi phí từ 200 -> 500
	-- C1
SELECT * FROM building 
WHERE cost >=200 AND cost <=500;
	-- C2
SELECT * FROM building 
WHERE cost BETWEEN 200 AND 500;

-- 13. Tìm kiếm những kiến trúc sư có họ là nguyen : % : đại diện cho 1 chuỗi kí tự , LIKE gần giống

SELECT * FROM architect 
WHERE name LIKE "nguyen%";   

-- 14. Tìm kiếm những kiến trúc sư có họ lót là anh

SELECT * FROM architect 
WHERE name LIKE "%anh%";   
-- 15. Tìm kiếm những kiến trúc sư có tên bắt đầu là th và có 3 kí tự : sau khi kết thúc th là 1 kí tự bất kì _

SELECT * FROM architect 
WHERE name LIKE "th_";  