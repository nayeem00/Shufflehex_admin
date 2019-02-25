-- 17-Nov-2018 --

ALTER TABLE `categories` ADD `shortcode` VARCHAR(255) NOT NULL AFTER `category`, ADD `is_deleted` TINYINT NOT NULL AFTER `shortcode`