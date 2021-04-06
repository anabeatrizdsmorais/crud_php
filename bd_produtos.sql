-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela produto.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `qtd` int(11) NOT NULL,
  `valor_unitario` double NOT NULL DEFAULT 0,
  `data_validade` varchar(11) DEFAULT '',
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela produto.produtos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id_produto`, `nome`, `marca`, `qtd`, `valor_unitario`, `data_validade`) VALUES
	(0, 'Monitor LG 20 polegadas', 'LG', 9, 368, ''),
	(1, 'Mouse Dell', 'Dell', 8, 55, ''),
	(3, 'Notebook 8GB 1TB 512GB SSD', 'LENOVO', 3, 3300, ''),
	(8, 'Pen Drive 120GB', 'DELL', 5, 115, ''),
	(9, 'Pen Drive 64GB', 'DELL', 8, 55, ''),
	(12, 'Monitor 23 polegadas Samsung HD', 'Samsung', 18, 560, ''),
	(13, 'Capinha de Celular J8', '-', 7, 10, ''),
	(14, 'HD 1TB', 'SEAGATE', 6, 899, '');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
