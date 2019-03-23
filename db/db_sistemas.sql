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

-- Copiando estrutura para tabela db_sistemas.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_fetranspor` char(15) NOT NULL,
  `matricula_empresa` char(15) NOT NULL,
  `pis` char(12) NOT NULL,
  `nome` char(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `renda_mensal` double(9,2) NOT NULL DEFAULT '0.00',
  `valor_diario` double(9,2) NOT NULL DEFAULT '0.00',
  `codigo_cidade` int(2) DEFAULT '0',
  `codigo_rede` int(2) DEFAULT '0',
  `numero_cartao` char(13) DEFAULT NULL,
  `tipo_cartao` int(2) NOT NULL DEFAULT '0',
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `rg` char(15) DEFAULT NULL,
  `orgao_emissor` char(6) DEFAULT NULL,
  `ddd` char(3) DEFAULT NULL,
  `telefone` char(10) DEFAULT NULL,
  `email` char(60) DEFAULT NULL,
  `id_unidade` int(11) DEFAULT '0',
  `id_setor` int(11) DEFAULT '0',
  `id_situacao` char(2) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=829 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_sistemas.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_sistemas.sistemas
CREATE TABLE IF NOT EXISTS `sistemas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_sistema` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_sistemas.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_sistemas.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` char(50) NOT NULL DEFAULT '0',
  `usuario` char(50) NOT NULL DEFAULT '0',
  `senha` char(255) NOT NULL DEFAULT '0',
  `email` char(50) DEFAULT NULL,
  `foto` char(50) DEFAULT NULL,
  `primeiro_login` timestamp NULL DEFAULT NULL,
  `ultimo_login` timestamp NULL DEFAULT NULL,
  `departamento` int(11) DEFAULT '0',
  `funcao` char(50) DEFAULT NULL,
  `status` char(3) DEFAULT NULL,
  `situacao` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela db_sistemas.usuario_sistema
CREATE TABLE IF NOT EXISTS `usuario_sistema` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_sistema` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para view db_sistemas.view_autenticacao
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `view_autenticacao` (
	`id` INT(11) NOT NULL,
	`cpf` VARCHAR(6) NOT NULL COLLATE 'utf8_general_ci',
	`data_nascimento` DATE NULL,
	`remember_token` VARCHAR(100) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Copiando estrutura para view db_sistemas.view_autenticacao
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `view_autenticacao`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`%` SQL SECURITY DEFINER VIEW `view_autenticacao` AS SELECT id,substr(cpf,1,6) as cpf,data_nascimento,remember_token
from db_sistemas.funcionarios ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
