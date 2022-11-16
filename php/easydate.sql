SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE usuarios (
    'usuarios character varying(100) PRIMARY KEY AUTO_INCREMENT',
    'login character varying(200) NOT NULL',
    'senha character varying(120) NOT NULL',
  ) 
  ENGINE=InnoDB DEFAULT CHARSET=utf8;