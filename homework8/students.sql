-- pdo_sample.students definition

CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `age` integer (12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;