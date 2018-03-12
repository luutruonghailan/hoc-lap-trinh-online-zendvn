-- 01. INSERT

-- 01. 1 - Insert đầy đủ thông tin 

INSERT INTO contractor VALUES ('7', 'Nguyen Van An', 123456, 'Sai Gon');

-- 01. 2 - Insert không đầy đủ thông tin 

INSERT INTO contractor(name, address, phone) VALUES ('Nguyen Van An 2', 'Ho CHi MInh', 987654);


-- 01. 3 - Insert nhiều dòng

INSERT INTO contractor VALUES 
	(8, 'Nguyen Van B', 123456, 'Sai Gon'),
	(9, 'Nguyen Van C', 123456, 'Sai Gon 2');

-- 02. UPDATE

UPDATE contractor
SET phone = 123456789
WHERE id = 8;

UPDATE contractor
SET phone = '987654321'
WHERE address = 'Sai Gon';

-- 03. DELETE

DELETE FROM contractor;



