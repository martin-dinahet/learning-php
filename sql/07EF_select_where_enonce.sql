SELECT `name` FROM `professors` WHERE `id`=1;
SELECT `name` FROM `professors` ORDER BY `name` ASC LIMIT 3 ;
SELECT `name` FROM `professors` ORDER BY `id` DESC LIMIT 2 ;
SELECT `created_at`, `name` FROM `professors` WHERE YEAR(`created_at`) > 1996 AND YEAR(`created_at`) < 2005;
SELECT `name` FROM `professors` WHERE `name` LIKE = 'a%';
SELECT  `name`, `created_at` FROM `professors` WHERE  `name` LIKE 'a%' OR YEAR(`created_at`) > 2000;
SELECT `name` FROM `professors` WHERE `ref` IS NULL AND `status` = 1;
SELECT COUNT(*) FROM `professors` WHERE `status` = 0;
