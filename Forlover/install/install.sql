SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";</explode>
SET time_zone = "+00:00";</explode>
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;</explode>
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;</explode>
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;</explode>
/*!40101 SET NAMES utf8mb4 */;</explode>
CREATE TABLE IF NOT EXISTS `sillyli_config` (
  `id` int(10) NOT NULL,
  `k` text NOT NULL,
  `v` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;</explode>
INSERT INTO `sillyli_config` (`id`, `k`, `v`) VALUES
(1, 'admin_user', 'admin'),
(2, 'admin_pwd', '123456'),
(3, 'title', 'SillyLi表白墙'),
(4, 'keywords', '表白墙,告白墙,SillyLi'),
(5, 'description', 'SillyLi表白墙系统告白墙系统'),
(6, 'footer', ''),
(7, 'ad', ''),
(8, 'qq', '201308'),
(9, '163music', ''),
(10, 'beian', ''),
(11, 'time', 'sillylistuptimePOIJ7892BXS');</explode>
CREATE TABLE IF NOT EXISTS `sillyli_lovemsg` (
  `id` int(10) NOT NULL,
  `qq` text NOT NULL,
  `realname` text NOT NULL,
  `towho` text NOT NULL,
  `msg` text NOT NULL,
  `time` text NOT NULL,
  `zan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;</explode>
INSERT INTO `sillyli_lovemsg` (`id`, `qq`, `realname`, `towho`, `msg`, `time`, `zan`) VALUES
(1, '201308', 'SillyLi', 'EveryOne', '欢迎大家使用SillyLi表白墙程序，在此你可以匿名，也可以展示自己的QQ头像昵称进行表白让你喜欢的人注意到你！祝所有小伙伴们幸福美满！', 'sillylistuptimePOIJ7892BXS', '9'),
(2, '', '匿名', 'Ta', '或许还不够勇敢?没关系来用匿名写出你心中的那段话吧！没人会知道你是谁。', 'sillylistuptimePOIJ7892BXS', '9');</explode>
CREATE TABLE IF NOT EXISTS `sillyli_reply` (
  `id` int(10) NOT NULL,
  `gid` text NOT NULL,
  `qq` text NOT NULL,
  `nname` text NOT NULL,
  `reply` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>
ALTER TABLE `sillyli_config`
  ADD PRIMARY KEY (`id`);</explode>
ALTER TABLE `sillyli_lovemsg`
  ADD PRIMARY KEY (`id`);</explode>
ALTER TABLE `sillyli_reply`
  ADD PRIMARY KEY (`id`);</explode>
ALTER TABLE `sillyli_config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;</explode>
ALTER TABLE `sillyli_lovemsg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;</explode>
ALTER TABLE `sillyli_reply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;</explode>
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;</explode>
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;</explode>
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;</explode>