-- --------------------------------------------------------
-- Servidor:                     10.2.224.16
-- Versão do servidor:           10.1.30-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela db_portcontrol.chaves
CREATE TABLE IF NOT EXISTS `chaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `situacao` enum('A','I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.chaves: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `chaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `chaves` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.eventos_chaves
CREATE TABLE IF NOT EXISTS `eventos_chaves` (
  `id` int(11) NOT NULL,
  `id_eventos` int(11) NOT NULL,
  `chave` int(11) NOT NULL,
  `id_emissor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.eventos_chaves: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos_chaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_chaves` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.eventos_correspondecias
CREATE TABLE IF NOT EXISTS `eventos_correspondecias` (
  `id` int(11) NOT NULL,
  `id_eventos` int(11) NOT NULL,
  `código` int(11) NOT NULL,
  `remetente` varchar(100) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.eventos_correspondecias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos_correspondecias` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_correspondecias` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.eventos_veiculos
CREATE TABLE IF NOT EXISTS `eventos_veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emissor` int(11) NOT NULL,
  `id_servico` enum('0','1','2') NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `id_localidade` int(11) NOT NULL,
  `id_status` enum('S','E') NOT NULL,
  `id_situacao` enum('A','F') NOT NULL,
  `data_hora_saida` datetime NOT NULL,
  `data_hora_entrada` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.eventos_veiculos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos_veiculos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos_veiculos` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.localidades
CREATE TABLE IF NOT EXISTS `localidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL DEFAULT '0',
  `descricao` varchar(100) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cidades` varchar(70) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.localidades: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `localidades` DISABLE KEYS */;
INSERT INTO `localidades` (`id`, `foto`, `descricao`, `endereco`, `cidades`, `telefone`) VALUES
	(1, 'cejpn.jpg', 'Centro Educacional José de Paiva Netto', 'Av. Dom Helder Câmara, 3059 - Del Castilho', 'Rio de Janeiro', '(21) 3297-7100');
/*!40000 ALTER TABLE `localidades` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.motoristas
CREATE TABLE IF NOT EXISTS `motoristas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL DEFAULT '0',
  `matricula_empresa` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `cnh` varchar(11) NOT NULL,
  `validade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.motoristas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `motoristas` DISABLE KEYS */;
INSERT INTO `motoristas` (`id`, `id_funcionario`, `matricula_empresa`, `foto`, `cnh`, `validade`) VALUES
	(1, 697, '0437000698', '0437000698.jpg', '12345678900', '2020-11-23'),
	(2, 719, '0432800306', '0432800306.jpg', '11022557901', '2022-06-14'),
	(3, 651, '0437000844', '0437000844.jpg', '3232', '2019-03-13'),
	(4, 681, '0437000804', '0437000804.jpg', '333', '2019-03-13'),
	(5, 735, '0432800342', '0432800342.jpg', '5222', '2019-03-13'),
	(6, 721, '0432800263', '0432800263.jpg', '3333', '2019-03-13');
/*!40000 ALTER TABLE `motoristas` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.teste
CREATE TABLE IF NOT EXISTS `teste` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Motorista` varchar(255) NOT NULL,
  `Carro` varchar(255) NOT NULL,
  `Local` varchar(255) NOT NULL,
  `Data` date NOT NULL,
  `Motivo` varchar(512) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.teste: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `teste` DISABLE KEYS */;
INSERT INTO `teste` (`ID`, `Motorista`, `Carro`, `Local`, `Data`, `Motivo`) VALUES
	(1, 'MILTON PAULO', 'Volkswagen Space - KTX-9258', 'Centro Educacional José de Paiva Netto', '2019-03-11', 'fazer alguma coisa'),
	(2, 'GILMAR FERREIRA MENDES', 'Volkswagen Space - KTX-9258', 'Centro Educacional José de Paiva Netto', '1970-01-01', 'ddddd'),
	(3, 'MILTON PAULO', 'Volkswagen Space - KTX-9258', 'Centro Educacional José de Paiva Netto', '1970-01-01', '2222\r\n'),
	(4, 'MILTON PAULO', 'Volkswagen Space - KTX-9258', 'Centro Educacional José de Paiva Netto', '2019-02-22', 'vfff');
/*!40000 ALTER TABLE `teste` ENABLE KEYS */;

-- Copiando estrutura para tabela db_portcontrol.veiculos
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `kilometragem` varchar(50) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `local` varchar(100) NOT NULL,
  `ano_fabricacao` int(4) NOT NULL,
  `ano_modelo` int(4) NOT NULL,
  `chassi` varchar(50) NOT NULL,
  `renavam` varchar(50) NOT NULL,
  `numero_motor` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `tipo_combustivel` enum('A','G','F','D') NOT NULL,
  `especie` varchar(50) NOT NULL,
  `tipo_veiculo` enum('C','M') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_portcontrol.veiculos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
INSERT INTO `veiculos` (`id`, `marca`, `modelo`, `foto`, `kilometragem`, `placa`, `local`, `ano_fabricacao`, `ano_modelo`, `chassi`, `renavam`, `numero_motor`, `cor`, `tipo_combustivel`, `especie`, `tipo_veiculo`) VALUES
	(1, 'Volkswagen', 'Space', 'spacefox.png', '23 Km', 'KTX-9258', 'Regional', 1953, 2012, '22', '5165456', '555', 'Preto', 'G', 'sla', 'C');
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;

-- Copiando estrutura para view db_portcontrol.viewinfusers
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `viewinfusers` (
	`id` INT(11) NOT NULL,
	`nome` CHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`usuario` CHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`email` CHAR(50) NULL COLLATE 'utf8_general_ci',
	`cpf` CHAR(11) NOT NULL COLLATE 'utf8_general_ci',
	`data_nascimento` DATE NULL,
	`telefone` CHAR(10) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view db_portcontrol.viewmotoristas
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `viewmotoristas` (
	`id` INT(11) NOT NULL,
	`nome` CHAR(100) NOT NULL COLLATE 'utf8_general_ci',
	`matricula_empresa` VARCHAR(15) NOT NULL COLLATE 'utf8_general_ci',
	`cpf` CHAR(11) NOT NULL COLLATE 'utf8_general_ci',
	`data_nascimento` DATE NULL,
	`telefone` CHAR(10) NULL COLLATE 'utf8_general_ci',
	`foto` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`cnh` VARCHAR(11) NOT NULL COLLATE 'utf8_general_ci',
	`validade` DATE NOT NULL
) ENGINE=MyISAM;

-- Copiando estrutura para view db_portcontrol.viewinfusers
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `viewinfusers`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `viewinfusers` AS SELECT db_sistemas.usuarios.id,db_sistemas.usuarios.nome, db_sistemas.usuarios.usuario, db_sistemas.usuarios.email, db_sistemas.funcionarios.cpf, db_sistemas.funcionarios.data_nascimento, db_sistemas.funcionarios.telefone
FROM db_sistemas.usuarios
INNER JOIN db_sistemas.funcionarios ON (db_sistemas.funcionarios.nome = db_sistemas.usuarios.nome) ;

-- Copiando estrutura para view db_portcontrol.viewmotoristas
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `viewmotoristas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `viewmotoristas` AS SELECT db_portcontrol.motoristas.id, db_sistemas.funcionarios.nome, db_portcontrol.motoristas.matricula_empresa, db_sistemas.funcionarios.cpf, db_sistemas.funcionarios.data_nascimento, db_sistemas.funcionarios.telefone, db_portcontrol.motoristas.foto, db_portcontrol.motoristas.cnh, db_portcontrol.motoristas.validade
FROM db_portcontrol.motoristas
INNER JOIN db_sistemas.funcionarios ON db_portcontrol.motoristas.matricula_empresa = db_sistemas.funcionarios.matricula_empresa ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
