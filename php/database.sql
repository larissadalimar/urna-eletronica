DROP DATABASE IF EXISTS `urna`;

CREATE DATABASE `urna` ;

USE `urna`;


DROP TABLE IF EXISTS `candidatos`;

CREATE TABLE `candidatos` (
  `id` int NOT NULL PRIMARY KEY,
  `votos` int DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `partido` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
);


INSERT INTO `candidatos` VALUES (2,3,51222,'Vereador','Christianne Varao','PEN','cv1.jpg'),
(3,0,55555,'Vereador','Homero do Ze Filho','PSL','cv2.jpg'),
(4,0,43333,'Vereador','Dandor','PV','cv3.jpg'),
(5,1,15123,'Vereador','Filho','MDB','cv4.jpg'),
(6,0,27222,'Vereador','Joel Varao','PSDC','cv5.jpg'),
(7,0,45000,'Vereador','Professor Clebson Almeida','PSDB','cv6.jpg'),
(8,1,12,'Prefeito','Chiquinho do Adbon','PDT','cp3.jpg'),
(9,0,15,'Prefeito','Malrinete Gralhada','MDB','cp2.jpg'),
(10,0,45,'Prefeito','Dr. Francisco','PSC','cp1.jpg'),
(11,0,54,'Prefeito','Ze Lopes','PPL','cp4.jpg'),
(12,0,65,'Prefeito','Lindomar Pescador','PC do B','cp5.jpg');

