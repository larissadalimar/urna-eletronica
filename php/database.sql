DROP DATABASE IF EXISTS `urna`;

CREATE DATABASE `urna` ;

USE `urna`;


DROP TABLE IF EXISTS `candidatos`;

CREATE TABLE `candidatos` (
  `id` int NOT NULL PRIMARY KEY,
  `votos` int DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `cargo_pretendido` int DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `partido` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
);


/*LOCK TABLES `candidatos` WRITE;*/

INSERT INTO `candidatos` VALUES (2,3,51222,0,'Christianne Varao','PEN','cv1.jpg'),
(3,0,55555,0,'Homero do Ze Filho','PSL','cv2.jpg'),
(4,0,43333,0,'Dandor','PV','cv3.jpg'),
(5,1,15123,0,'Filho','MDB','cv4.jpg'),
(6,0,27222,0,'Joel Varao','PSDC','cv5.jpg'),
(7,0,45000,0,'Professor Clebson Almeida','PSDB','cv6.jpg'),
(8,1,12,1,'Chiquinho do Adbon','PDT','cp3.jpg'),
(9,0,15,1,'Malrinete Gralhada','MDB','cp2.jpg'),
(10,0,45,1,'Dr. Francisco','PSC','cp1.jpg'),
(11,0,54,1,'Ze Lopes','PPL','cp4.jpg'),
(12,0,65,1,'Lindomar Pescador','PC do B','cp5.jpg');

/*UNLOCK TABLES;*/