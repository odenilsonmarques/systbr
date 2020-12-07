-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para db_systbr
CREATE DATABASE IF NOT EXISTS `db_systbr` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_systbr`;

-- Copiando estrutura para tabela db_systbr.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `anexo` varchar(200) DEFAULT NULL,
  `localizacao` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=UTF8MB4;


CREATE TABLE users(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (100) NOT NULL, 
email VARCHAR (200) NOT NULL,
password VARCHAR (100) NOT NULL,
remember_token VARCHAR (100) NULL
);

CREATE TABLE comentarios(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
cometario VARCHAR (200)
);


SELECT *FROM users;
ALTER TABLE users AUTO_INCREMENT = 1;
DESC users;

SELECT *FROM registros;
ALTER TABLE registros AUTO_INCREMENT = 1; 
DESC registros;

SELECT *FROM comentarios;
ALTER TABLE comentarios AUTO_INCREMENT = 1; 
DESC comentarios;




-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
