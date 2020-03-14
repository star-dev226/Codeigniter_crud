DROP TABLE IF EXISTS `userslab4`;

CREATE TABLE `userslab4` (
  `compid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `accesslevel` varchar(255) NOT NULL,
  PRIMARY KEY (`compid`)
);

insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (1,'mem1','mem1','member');
insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (2,'mem2','mem2','member');
insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (3,'edit1','edit1','editor');
insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (4,'edit2','edit2','editor');
insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (5,'admin1','admin1','admin');
insert  into `userslab4`(`compid`,`username`,`password`,`accesslevel`) values (6,'admin2','admin2','admin');
