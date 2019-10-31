-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Jun-2019 às 01:00
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_aplicacao1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `ID_CONSULTA` bigint(20) NOT NULL AUTO_INCREMENT,
  `DT_CONSULTA` datetime NOT NULL,
  `CONFIRMA_CONSULTA` tinyint(4) NOT NULL,
  `ESCOLHEU_CONSULTA` tinyint(4) NOT NULL,
  `MEDICO_CONSULTA` varchar(30) NOT NULL,
  `TIPO_CONSULTA` varchar(30) NOT NULL,
  `PACI_NUM_SUS` varchar(15) DEFAULT NULL,
  `ID_POSTO` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_CONSULTA`),
  UNIQUE KEY `DT_CONSULTA` (`DT_CONSULTA`) USING BTREE,
  KEY `FK_ID_POSTO` (`ID_POSTO`),
  KEY `PACI_NUM_SUS` (`PACI_NUM_SUS`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`ID_CONSULTA`, `DT_CONSULTA`, `CONFIRMA_CONSULTA`, `ESCOLHEU_CONSULTA`, `MEDICO_CONSULTA`, `TIPO_CONSULTA`, `PACI_NUM_SUS`, `ID_POSTO`) VALUES
(1, '0000-00-00 00:00:00', 0, 0, 'JOSEFINO', 'CLINICO GERAL', NULL, 10),
(5, '2014-10-25 20:58:00', 0, 0, 'JOsefino', 'ClÃ­nico Geral', NULL, 10),
(6, '2014-10-20 10:50:00', 0, 0, 'JOsefino', 'ClÃ­nico Geral', NULL, 10),
(7, '2014-02-10 10:50:00', 0, 1, 'JOsefino', 'ClÃ­nico Geral', '101988', 10),
(8, '2019-05-31 14:29:00', 0, 0, 'aLEX', 'DENTISTA', NULL, 10),
(9, '2019-06-06 20:20:00', 1, 1, 'lucas', 'Clinico Geral', '101988', 10),
(10, '2019-07-20 14:50:00', 0, 0, 'JOSEFINO', 'Clinico Geral', '101988', 10),
(11, '2121-10-10 10:01:00', 1, 1, 'lucas', 'Clinico Geral', '145454', 20),
(13, '2019-08-08 04:09:01', 0, 0, 'LUCAS', 'DENTISTA', '145454', 10),
(17, '2020-05-07 13:00:00', 1, 1, 'Profissional', 'Odontologia', '98828', 20),
(18, '2019-06-04 08:00:00', 0, 0, 'Profissional', 'Odontologia', NULL, 20),
(19, '2019-06-04 09:00:00', 0, 0, 'Profissional', 'Odontologia', NULL, 20),
(20, '2019-06-04 10:00:00', 0, 0, 'Profissional', 'Odontologia', NULL, 20),
(21, '2019-06-04 08:30:00', 0, 0, 'Roberta', 'Pediatra', NULL, 20),
(22, '2019-06-04 09:30:00', 0, 0, 'Roberta', 'Pediatra', NULL, 20),
(23, '2019-06-04 10:30:00', 0, 0, 'Roberta', 'Pediatra', NULL, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `encaixe`
--

DROP TABLE IF EXISTS `encaixe`;
CREATE TABLE IF NOT EXISTS `encaixe` (
  `ID_ENCAIXE` bigint(20) NOT NULL AUTO_INCREMENT,
  `DT_ENCAIXE` datetime NOT NULL,
  `MEDICO_ENCAIXE` varchar(30) NOT NULL,
  `TIPO_ENCAIXE` varchar(30) NOT NULL,
  `ID_POSTO` bigint(20) NOT NULL,
  `PACI_NUM_SUS` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_ENCAIXE`),
  UNIQUE KEY `DT_ENCAIXE` (`DT_ENCAIXE`),
  KEY `FK1_ID_POSTO` (`ID_POSTO`),
  KEY `FK_PACI_NUM_SUS` (`PACI_NUM_SUS`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `encaixe`
--

INSERT INTO `encaixe` (`ID_ENCAIXE`, `DT_ENCAIXE`, `MEDICO_ENCAIXE`, `TIPO_ENCAIXE`, `ID_POSTO`, `PACI_NUM_SUS`) VALUES
(1, '2014-12-10 20:50:00', 'JOsefino', 'Ginecologista', 10, '101988'),
(3, '0000-00-00 00:00:00', 'JOsefino', 'Ginecologista', 10, NULL),
(4, '3025-03-10 10:40:00', 'JOSEFINO', 'Clinico Geral', 20, '98828');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `PACI_NUM_SUS` varchar(15) NOT NULL,
  `PACI_RG` varchar(15) NOT NULL,
  `PACI_CPF` varchar(15) NOT NULL,
  `PACI_SENHA` varchar(20) NOT NULL,
  `PACI_NOME` varchar(15) NOT NULL,
  `PACI_SOBRENOME` varchar(30) NOT NULL,
  `PACI_SEXO` char(1) NOT NULL,
  `PACI_DT_NASC` date NOT NULL,
  `PACI_RUA` varchar(100) NOT NULL,
  `PACI_BAIRRO` varchar(100) NOT NULL,
  `PACI_CIDADE` varchar(30) NOT NULL,
  `PACI_ESTADO` varchar(20) NOT NULL,
  `PACI_NUM` varchar(5) NOT NULL,
  `PACI_CEP` varchar(15) NOT NULL,
  `PACI_TEL` varchar(15) NOT NULL,
  `PACI_TEL2` varchar(15) NOT NULL,
  `PACI_EMAIL` varchar(20) NOT NULL,
  PRIMARY KEY (`PACI_NUM_SUS`),
  UNIQUE KEY `PACI_RG` (`PACI_RG`),
  UNIQUE KEY `PACI_CPF` (`PACI_CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`PACI_NUM_SUS`, `PACI_RG`, `PACI_CPF`, `PACI_SENHA`, `PACI_NOME`, `PACI_SOBRENOME`, `PACI_SEXO`, `PACI_DT_NASC`, `PACI_RUA`, `PACI_BAIRRO`, `PACI_CIDADE`, `PACI_ESTADO`, `PACI_NUM`, `PACI_CEP`, `PACI_TEL`, `PACI_TEL2`, `PACI_EMAIL`) VALUES
('101988', '101988', '101988', '101988', 'wenderson', 'farias', 'M', '0000-00-00', 'Rua do Programador', 'JosÃ© Ometto 1', 'araras', 'sp', '123', '13066133', '45678147', '89782468', 'wenderson@email.com'),
('145454', '528330469', '44492755861', '98828', 'Ramon', 'Ramos', 'M', '1999-01-09', 'Rua do Programador', 'JosÃ© Ometto 1', '123', '123', '123', '13066133', '45678147', '89782468', 'wenderson@email.com'),
('98828', '98828', '98828', '98828', 'Renato', 'Francisco', 'M', '1999-05-07', 'Rua do Programador PHP', 'JosÃ© Ometto 404', 'Araras', 'SP', '123', '13066133', '40028922', '22982004', 'teste@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posto_saude`
--

DROP TABLE IF EXISTS `posto_saude`;
CREATE TABLE IF NOT EXISTS `posto_saude` (
  `ID_POSTO` bigint(20) NOT NULL,
  `NOME_POSTO` varchar(100) NOT NULL,
  `RUA_POSTO` varchar(80) NOT NULL,
  `BAIRRO_POSTO` varchar(50) NOT NULL,
  `NUMERO_POSTO` varchar(5) NOT NULL,
  `CEP_POSTO` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_POSTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posto_saude`
--

INSERT INTO `posto_saude` (`ID_POSTO`, `NOME_POSTO`, `RUA_POSTO`, `BAIRRO_POSTO`, `NUMERO_POSTO`, `CEP_POSTO`) VALUES
(10, 'POSTO DE SAUDE JOSE FIORI', 'RUA 10', 'FATIMA', '120', '13605151'),
(20, 'Posto de Saude UNIARARAS', 'rua do universitario', 'universitario', '10253', '13601256');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recepcionista`
--

DROP TABLE IF EXISTS `recepcionista`;
CREATE TABLE IF NOT EXISTS `recepcionista` (
  `ID_RECEPCIONISTA` bigint(20) NOT NULL,
  `NOME_RECEPCIONISTA` varchar(20) NOT NULL,
  `SENHA_RECEPCIONISTA` varchar(20) NOT NULL,
  `ID_POSTO` bigint(20) NOT NULL,
  PRIMARY KEY (`ID_RECEPCIONISTA`),
  KEY `ID_POSTO` (`ID_POSTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recepcionista`
--

INSERT INTO `recepcionista` (`ID_RECEPCIONISTA`, `NOME_RECEPCIONISTA`, `SENHA_RECEPCIONISTA`, `ID_POSTO`) VALUES
(1998, 'Igor', '1998', 20),
(101988, 'MARIA CLAUDIA', '101988', 10);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `FK_ID_POSTO` FOREIGN KEY (`ID_POSTO`) REFERENCES `posto_saude` (`ID_POSTO`),
  ADD CONSTRAINT `PACI_NUM_SUS` FOREIGN KEY (`PACI_NUM_SUS`) REFERENCES `paciente` (`PACI_NUM_SUS`);

--
-- Limitadores para a tabela `encaixe`
--
ALTER TABLE `encaixe`
  ADD CONSTRAINT `FK1_ID_POSTO` FOREIGN KEY (`ID_POSTO`) REFERENCES `posto_saude` (`ID_POSTO`),
  ADD CONSTRAINT `FK_PACI_NUM_SUS` FOREIGN KEY (`PACI_NUM_SUS`) REFERENCES `paciente` (`PACI_NUM_SUS`);

--
-- Limitadores para a tabela `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD CONSTRAINT `ID_POSTO` FOREIGN KEY (`ID_POSTO`) REFERENCES `posto_saude` (`ID_POSTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
