DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sex` varchar(20) NOT NULL DEFAULT '男',
  `academy` varchar(400) NOT NULL DEFAULT '前端与移动开发学院',
  `introduce` varchar(1000) NOT NULL DEFAULT '暂无',
  `createTime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES ('1', '鹏鹏', '男', '前端与移动开发学院', '单纯', '2019-05-12 22:39:40');
INSERT INTO `user` VALUES ('2', '守望大表哥1', '男', '前端与移动开发', '中规中矩', '2019-05-12 22:39:45');
INSERT INTO `user` VALUES ('3', '守望大表哥2', '男', '前端与移动开发', '老老实实', '2019-05-12 22:39:45');
INSERT INTO `user` VALUES ('4', '守望大表哥3', '男', '前端与移动开发', '老铁', '2019-05-12 22:39:45');
INSERT INTO `user` VALUES ('5', '守望大表哥4', '男', '前端与移动开发', '嘿嘿嘿', '2019-05-12 22:39:45');
INSERT INTO `user` VALUES ('6', '守望大表哥5', '男', '前端与移动开发', '规规矩矩', '2019-05-12 22:39:45');
