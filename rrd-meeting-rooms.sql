-- $Id: sample-data.sql 798 2008-04-13 19:59:24Z jberanek $
--
-- Sample data - make some areas and rooms. (This used to be in tables.sql)
-- This is meant to go into an empty database only!

--
-- If you have decided to change the prefix of your tables from 'mrbs_'
-- to something else then you must edit each 'INSERT INTO' line below.
--

-- Generate some default areas
INSERT INTO mrbs_area ( area_name ) VALUES ('优胜');
INSERT INTO mrbs_area ( area_name ) VALUES ('科技园F18');
INSERT INTO mrbs_area ( area_name ) VALUES ('科技园F19');
INSERT INTO mrbs_area ( area_name ) VALUES ('科技园F21');

-- 优胜
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="优胜" limit 1),
	room_name = "画眉",
	description = "无投影",
	capacity = 40;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="优胜" limit 1),
	room_name = "查特安",
	description = "有投影",
	capacity = 10;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="优胜" limit 1),
	room_name = "鹿莎",
	description = "",
	capacity = 0;

-- 科技园F18
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F18" limit 1),
	room_name = "麦莎",
	description = "有投影",
	capacity = 16;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F18" limit 1),
	room_name = "龙王",
	description = "有投影",
	capacity = 14;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F18" limit 1),
	room_name = "彩蝶",
	description = "有投影",
	capacity = 7;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F18" limit 1),
	room_name = "云娜",
	description = "有投影",
	capacity = 5;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F18" limit 1),
	room_name = "珍珠",
	description = "有投影",
	capacity = 5;


-- 科技园F19
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F19" limit 1),
	room_name = "凤仙",
	description = "有投影",
	capacity = 20;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F19" limit 1),
	room_name = "伊布都",
	description = "有投影",
	capacity = 10;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F19" limit 1),
	room_name = "鸣蝉",
	description = "有投影",
	capacity = 8;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F19" limit 1),
	room_name = "苏特",
	description = "有投影",
	capacity = 6;


-- 科技园F21
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F21" limit 1),
	room_name = "碧利斯",
	description = "无投影",
	capacity = 0;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F21" limit 1),
	room_name = "桑美",
	description = "有投影",
	capacity = 0;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F21" limit 1),
	room_name = "象神",
	description = "有投影",
	capacity = 0;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F21" limit 1),
	room_name = "榴莲",
	description = "有投影",
	capacity = 0;
INSERT INTO mrbs_room SET 
	area_id = (SELECT mrbs_area.id from mrbs_area where mrbs_area.area_name="科技园F21" limit 1),
	room_name = "凯萨娜",
	description = "有投影",
	capacity = 0;
