-- 01. Hiển thị tên công trình, tên chủ nhân và tên chủ thầu của công trình đó
SELECT b.name AS CongTrinh , h.name AS ChuNhan, c.name AS ChuThau
FROM  building AS b, host AS h, contractor AS c -- doi ten -- thứ tự thực hiện của các mệnh đề lên from sẽ thực hiện trước
WHERE b.host_id = h.id  -- dieu kien ket noi
AND 	b.contractor_id = c.id ;

-- 02. Hiển thị tên công trình (building), tên kiến trúc sư (architect) và thù lao của kiến trúc sư ở mỗi công trình (design)

SELECT b.name AS CongTrinh , a.name AS KienTrucSu, (d.benefit * 1000) AS ThuLao
FROM building AS b , architect AS a , design AS d
WHERE b.id = d.building_id
AND d.architect_id = a.id



