
CREATE TABLE `User`(
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `first_name` VARCHAR(255) NULL,
    `last_name` VARCHAR(255) NULL,
    `email`VARCHAR(255)NULL,
    `password` VARCHAR(255) NULL
);

CREATE TABLE `Post`(
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `text` TEXT NULL,
    `date` DATETIME NOT NULL,
    `postTitle` VARCHAR(255) NULL,
    `user_id` INT UNSIGNED NOT NULL
);
ALTER TABLE
    `Post` ADD CONSTRAINT `post_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `User`(`id`);