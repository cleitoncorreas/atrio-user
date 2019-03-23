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

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.eventos_chaves
CREATE TABLE IF NOT EXISTS `eventos_chaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emissor` int(11) NOT NULL,
  `id_chave` int(11) NOT NULL,
  `id_status` enum('S','E') NOT NULL,
  `id_situacao` enum('A','F') NOT NULL,
  `data_hora_saida` datetime NOT NULL,
  `data_hora_entrada` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.eventos_correspondencias
CREATE TABLE IF NOT EXISTS `eventos_correspondencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emissor` int(11) NOT NULL DEFAULT '0',
  `id_codigo` int(11) NOT NULL DEFAULT '0',
  `id_destinatario` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.eventos_questionarios
CREATE TABLE IF NOT EXISTS `eventos_questionarios` (
  `id` int(11) DEFAULT NULL,
  `id_evento` int(11) DEFAULT NULL,
  `id_servico` int(11) DEFAULT NULL,
  `id_perguntas` int(11) DEFAULT NULL,
  `resposta` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.eventos_veiculos
CREATE TABLE IF NOT EXISTS `eventos_veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emissor` int(11) NOT NULL,
  `id_motorista` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `id_localidade` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `data_hora_saida` datetime NOT NULL,
  `data_hora_entrada` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.localidades
CREATE TABLE IF NOT EXISTS `localidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL,
  `sigla` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `numero` varchar(80) NOT NULL,
  `complemento` varchar(80) DEFAULT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.motoristas
CREATE TABLE IF NOT EXISTS `motoristas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_funcionario` int(11) NOT NULL DEFAULT '0',
  `matricula_empresa` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `cnh` varchar(11) NOT NULL,
  `validade` date NOT NULL,
  `id_situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.questionarios_perguntas
CREATE TABLE IF NOT EXISTS `questionarios_perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_questionario` int(11) NOT NULL DEFAULT '0',
  `pergunta` varchar(250) NOT NULL,
  `padrao` enum('Y','N') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_portcontrol.servicos_questionarios
CREATE TABLE IF NOT EXISTS `servicos_questionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_servico` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `situacao` enum('A','I') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
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

-- Exportação de dados foi desmarcado.
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
