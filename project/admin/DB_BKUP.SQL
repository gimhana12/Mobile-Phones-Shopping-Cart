

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
)  ;

INSERT INTO `admins` (`id`, `email`, `name`, `image`, `pass`) VALUES
('XtuldMqezj0plwa2wh8s',	'admin@gmail.com',	'admin',	'tnLAXc27iKNRSYPYZ4CK.desktop-1600x900 (1).jpg',	'30531c2885ce61b385dc81d2a375f6bef80607d5'),
('BaqMU8koMOYwnwF3nph0',	'test@gmail.com',	'test',	'BYyw8HkJ1Ba4ct5qS2eQ.desktop-1600x900 (1).jpg',	'30531c2885ce61b385dc81d2a375f6bef80607d5'),
('oKE5CiaydYW3ovq31A0E',	'testadmin@gmail.com',	'test',	'qH6ReHWUtk4SIHrmI4LY.desktop-1600x900 (1).jpg',	'30531c2885ce61b385dc81d2a375f6bef80607d5');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
)  ;

INSERT INTO `products` (`id`, `name`, `price`, `country`, `image`, `description`) VALUES
('dbDJbVuUIPxVlyOd9lfj',	'iphone',	'4000',	'usa',	'HPptDJrGUhaAq7cHIDAN.desktop-1600x900.jpg',	'good'),
('uYp0u0lfiEPnyQSSVoN2',	'samsung',	'4000',	'canada',	'g96OsNaihdmrsFIXHinz.green.jpg',	'good');
