CREATE DATABASE IF NOT EXISTS leofel
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE leofel;

SET foreign_key_checks = 0;

CREATE TABLE IF NOT EXISTS `materials`
(
    `id`           int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name`         char(255)    NOT NULL UNIQUE KEY,
    `description`  text(5000)   NOT NULL,
    `image_path_1` char(255)      DEFAULT NULL,
    `image_path_2` char(255)      DEFAULT NULL,
    `image_path_3` char(255)      DEFAULT NULL,
    `image_path_4` char(255)      DEFAULT NULL,
    `image_path_5` char(255)      DEFAULT NULL,
    `matter`       char(255)      DEFAULT NULL,
    `grain`        char(255)      DEFAULT NULL,
    `packing`      char(255)      DEFAULT NULL,
    `price`        char(255)      DEFAULT NULL,
    `sef_url`      char(255)      DEFAULT NULL

);

CREATE TABLE IF NOT EXISTS `machines`
(
    `id`                     int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title`                  char(255)    NOT NULL UNIQUE KEY,
    `description`            text(5000)   NOT NULL,
    `image_path_1`           char(255)    DEFAULT NULL,
    `image_path_2`           char(255)    DEFAULT NULL,
    `image_path_3`           char(255)    DEFAULT NULL,
    `image_path_4`           char(255)    DEFAULT NULL,
    `image_path_5`           char(255)    DEFAULT NULL,
    `passport_url`           char(255)    DEFAULT NULL,
    `conditions_url`         char(255)    DEFAULT NULL,
    `manual_url`             char(255)    DEFAULT NULL,
    `name`                   char(255)    DEFAULT NULL,
    `model`                  char(255)    DEFAULT NULL,
    `number`                 char(255)    DEFAULT NULL,
    `production_date`        char(255)    DEFAULT NULL,
    `durability`             char(255)    DEFAULT NULL,
    `manufacturer`           char(255)    DEFAULT NULL,
    `address`                char(255)    DEFAULT NULL,
    `diameter`               char(255)    DEFAULT NULL,
    `spills_number`          char(255)    DEFAULT NULL,
    `spills_rotation`        char(255)    DEFAULT NULL,
    `lead_speed`             char(255)    DEFAULT NULL,
    `spills_driver_power`    char(255)    DEFAULT NULL,
    `lead_driver_power`      char(255)    DEFAULT NULL,
    `source_power`           char(255)    DEFAULT NULL,
    `frequency`              char(255)    DEFAULT NULL,
    `engine_type`            char(255)    DEFAULT NULL,
    `total_capacity`         char(255)    DEFAULT NULL,
    `length`                 char(255)    DEFAULT NULL,
    `width`                  char(255)    DEFAULT NULL,
    `height`                 char(255)    DEFAULT NULL,
    `accuracy_deflection`    char(255)    DEFAULT NULL,
    `accuracy_form`          char(255)    DEFAULT NULL,
    `surface_undulation`     char(255)    DEFAULT NULL,
    `undulation_finish`      char(255)    DEFAULT NULL,
    `undulation_superfinish` char(255)    DEFAULT NULL,
    `sef_url`                char(255)    DEFAULT NULL
);