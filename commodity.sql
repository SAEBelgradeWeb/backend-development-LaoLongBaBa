/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `commodity` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL COMMENT '描述',
  `price` int(10) DEFAULT NULL COMMENT '价格',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `commodity` (`id`, `name`, `img`, `describe`, `price`) VALUES
(1, 'T-Shirt', 'images/2.png', 'White T-Shirt', 10);
INSERT INTO `commodity` (`id`, `name`, `img`, `describe`, `price`) VALUES
(3, 'Jeans', 'images/5.png', 'Jeans', 12);
INSERT INTO `commodity` (`id`, `name`, `img`, `describe`, `price`) VALUES
(4, 'Sweatpants', 'images/6.png', 'Sweatpants', 10);
INSERT INTO `commodity` (`id`, `name`, `img`, `describe`, `price`) VALUES
(5, 'AMG-GT', 'images/1.png', 'AMG-GT Black-Servers', 300000),
(7, 'Air Purifier', 'images/7.png', 'XiaoMi Air Purifier 4', 150),
(8, 'Telephone', 'images/8.png', 'Old Telephone', 100),
(9, 'Shoes', 'images/9.png', 'Nike Sport Shoes', 200),
(10, 'Laptop', 'images/10.png', 'White Laptop', 1000),
(11, 'Electric Fan', 'images/11.jpg', 'Small Electric Fan', 50);
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;