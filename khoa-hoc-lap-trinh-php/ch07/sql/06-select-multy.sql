-- 01. Hiển thị tên công trình, tên chủ nhân và tên chủ thầu của công trình đó

SELECT b.name AS cong_trinh, h.name AS chu_nhan, c.name AS chu_thau
FROM building AS b, host AS h, contractor AS c
WHERE b.host_id = h.id
  AND b.contractor_id = c.id;

-- 02. Hiển thị tên công trình (building), tên kiến trúc sư (architect) và thù lao của kiến trúc sư ở mỗi công trình (design)

SELECT b.name AS cong_trinh, a.name AS kien_truc_su, (benefit * 1000) AS thu_lao
FROM building AS b, architect AS a, design AS d
WHERE b.id = d.building_id
  AND d.architect_id = a.id




