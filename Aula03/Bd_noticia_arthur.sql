-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.13-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema bd_noticias
--

CREATE DATABASE IF NOT EXISTS bd_noticias;
USE bd_noticias;

--
-- Temporary table structure for view `viewd`
--
DROP TABLE IF EXISTS `viewd`;
DROP VIEW IF EXISTS `viewd`;
CREATE TABLE `viewd` (
  `id_contato` int(11),
  `tipo_contato` varchar(45),
  `assunto_contato` varchar(45),
  `mensagem_contato` varchar(45),
  `usuario_id_usuario` int(11),
  `resposta_contato` text
);

--
-- Definition of table `acesso`
--

DROP TABLE IF EXISTS `acesso`;
CREATE TABLE `acesso` (
  `id_login` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `email_user` varchar(45) DEFAULT NULL,
  `password_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acesso`
--

/*!40000 ALTER TABLE `acesso` DISABLE KEYS */;
INSERT INTO `acesso` (`id_login`,`id_user`,`email_user`,`password_user`) VALUES 
 (1,1,'arthurabreu00@gmail.com','hoje2010'),
 (2,2,'root','root');
/*!40000 ALTER TABLE `acesso` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `data_nascimento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `tipo_contato` varchar(45) DEFAULT NULL,
  `assunto_contato` varchar(45) DEFAULT NULL,
  `mensagem_contato` varchar(45) DEFAULT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  `resposta_contato` text,
  PRIMARY KEY (`id_contato`),
  KEY `fk_contato_usuario1_idx` (`usuario_id_usuario`),
  CONSTRAINT `fk_contato_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contato`
--

/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;


--
-- Definition of table `informacoes`
--

DROP TABLE IF EXISTS `informacoes`;
CREATE TABLE `informacoes` (
  `id_info` int(11) NOT NULL,
  `titulo_info` varchar(45) DEFAULT NULL,
  `text_info` text,
  `id_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_info`),
  KEY `id_menu_idx` (`id_menu`),
  CONSTRAINT `id_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informacoes`
--

/*!40000 ALTER TABLE `informacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `informacoes` ENABLE KEYS */;


--
-- Definition of table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(45) DEFAULT NULL,
  `index_menu` varchar(45) DEFAULT NULL,
  `perfil_id_perfil` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`),
  KEY `fk_Menu_perfil1_idx` (`perfil_id_perfil`),
  CONSTRAINT `fk_Menu_perfil1` FOREIGN KEY (`perfil_id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id_menu`,`nm_menu`,`index_menu`,`perfil_id_perfil`) VALUES 
 (1,'1','1',1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


--
-- Definition of table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_noticia` varchar(45) DEFAULT NULL,
  `conteudo_noticia` text,
  `usuario_id_usuario` int(11) NOT NULL,
  `perfil_id_perfil` int(11) NOT NULL,
  `imagem_noticia` text,
  `data_noticia` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `fk_Noticia_usuario_idx` (`usuario_id_usuario`),
  KEY `fk_Noticia_perfil1_idx` (`perfil_id_perfil`),
  CONSTRAINT `fk_Noticia_perfil1` FOREIGN KEY (`perfil_id_perfil`) REFERENCES `perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Noticia_usuario` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noticia`
--

/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` (`id_noticia`,`titulo_noticia`,`conteudo_noticia`,`usuario_id_usuario`,`perfil_id_perfil`,`imagem_noticia`,`data_noticia`,`id_menu`) VALUES 
 (1,'Lorem ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate. Maecenas nisi massa, imperdiet at viverra sed, gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.',1,1,'','0000-00-00 00:00:00',1),
 (2,'Lorem ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate. Maecenas nisi massa, imperdiet at viverra sed, gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.',1,1,'','0000-00-00 00:00:00',1),
 (3,'A morte da bezerra','A hist¢ria mais aceit vel para explicar a origem da expressÆo ‚ proveniente das tradi‡äes hebraicas, onde os bezerros eram sacrificados para Deus como forma de reden‡Æo de pecados.\n\nConta-se que certa vez um rei resolveu sacrificar uma bezerra e que seu filho menor, que tinha grande carinho pelo animal, op“s-se. Independentemente disso, a bezerra foi oferecida aos c‚us e afirma-se que o garoto passou o resto de sua vida pensando na morte da bezerra.\n\nAssim, estar ?pensando na morte da bezerra? significa estar distante, pensativo, alheio a tudo.gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.',1,1,'','0000-00-00 00:00:00',1),
 (4,'Faixa amarela','Eu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nE vou mandar pendurar\nNa entrada da favela Vou dar-lhe um gato angor \nUm cÆo e uma cadela\nUma cortina gren  para enfeitar a janela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nE para o nosso pap  vai ter bife da panela\nSalada de petit-pois, jil¢, chuchu e \"bringela\"\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nVou fazer dela rainha do desfile da portela\nEu vou ser filho do rei, e ela minha cinderela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nEu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nE para gente se casar vou construir a capela\nDentro dum lindo jardim com flores, lago e pinguela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nMas se ela vacilar, vou dar um castigo nela\nVou lhe dar uma banda de frente\nQuebrar cinco dentes e quatro costelas\nVou pegar a tal faixa amarela\nGravada com o nome dela\nE mandar incendiar\nNa entrada da favela\nVou pegar a tal faixa amarela\nGravada com o nome dela\nE mandar incendiar\nNa entrada da favela\nVou comprar uma cana bem forte\nPara esquentar sua goela\nE fazer uma tira-gosto\nCom galinha … cabidela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nEu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nE vou mandar pendurar\nNa entrada da favela',1,1,'','0000-00-00 00:00:00',1),
 (5,'Lorem ipsum','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet risus ligula. Mauris pretium magna nec porttitor vulputate. Maecenas nisi massa, imperdiet at viverra sed, gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.',1,1,'','0000-00-00 00:00:00',1),
 (6,'A morte da bezerra','A hist¢ria mais aceit vel para explicar a origem da expressÆo ‚ proveniente das tradi‡äes hebraicas, onde os bezerros eram sacrificados para Deus como forma de reden‡Æo de pecados.\n\nConta-se que certa vez um rei resolveu sacrificar uma bezerra e que seu filho menor, que tinha grande carinho pelo animal, op“s-se. Independentemente disso, a bezerra foi oferecida aos c‚us e afirma-se que o garoto passou o resto de sua vida pensando na morte da bezerra.\n\nAssim, estar ?pensando na morte da bezerra? significa estar distante, pensativo, alheio a tudo.gravida id quam. Vestibulum diam est, efficitur in libero ut, maximus dictum tellus. In a leo dolor. Nam nec dictum magna. Donec interdum dolor vel nulla placerat, at tincidunt orci viverra. Curabitur vel lacus enim. Morbi iaculis ipsum et mi pretium ultricies. Duis ut metus quis sapien dictum euismod. Vestibulum leo odio, porttitor eget ultricies eu, dignissim id tortor.',1,1,'','0000-00-00 00:00:00',1),
 (7,'Faixa amarela','Eu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nE vou mandar pendurar\nNa entrada da favela Vou dar-lhe um gato angor \nUm cÆo e uma cadela\nUma cortina gren  para enfeitar a janela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nE para o nosso pap  vai ter bife da panela\nSalada de petit-pois, jil¢, chuchu e \"bringela\"\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nVou fazer dela rainha do desfile da portela\nEu vou ser filho do rei, e ela minha cinderela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nEu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nE para gente se casar vou construir a capela\nDentro dum lindo jardim com flores, lago e pinguela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nMas se ela vacilar, vou dar um castigo nela\nVou lhe dar uma banda de frente\nQuebrar cinco dentes e quatro costelas\nVou pegar a tal faixa amarela\nGravada com o nome dela\nE mandar incendiar\nNa entrada da favela\nVou pegar a tal faixa amarela\nGravada com o nome dela\nE mandar incendiar\nNa entrada da favela\nVou comprar uma cana bem forte\nPara esquentar sua goela\nE fazer uma tira-gosto\nCom galinha … cabidela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nSem falar na tal faixa amarela\nBordada com o nome dela\nQue eu vou mandar pendurar\nNa entrada da favela\nEu quero presentear\nA minha linda donzela\nNÆo ‚ prata nem ‚ ouro\n uma coisa bem singela\nVou comprar uma faixa amarela\nBordada com o nome dela\nE vou mandar pendurar\nNa entrada da favela',1,1,'','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;


--
-- Definition of table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome_perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfil`
--

/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` (`id_perfil`,`nome_perfil`) VALUES 
 (1,'Administrador'),
 (2,'Leitor');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;


--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_usuario` varchar(45) DEFAULT NULL,
  `sobrenome_usuario` varchar(45) DEFAULT NULL,
  `email_usuario` varchar(45) DEFAULT NULL,
  `senha_usuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`,`nm_usuario`,`sobrenome_usuario`,`email_usuario`,`senha_usuario`) VALUES 
 (1,'Arthur','Tavares','arthurabreu00@gmail.com','hoje2010'),
 (2,'Mauricio','Fernandes','mail@mail.com','root');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;


--
-- Definition of procedure `ProcedureA`
--

DROP PROCEDURE IF EXISTS `ProcedureA`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedureA`(out num int)
BEGIN
SELECT count(id_usuario) FROM usuario ;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `ProcedureB`
--

DROP PROCEDURE IF EXISTS `ProcedureB`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedureB`(in limite INT)
BEGIN
SELECT * FROM noticia LIMIT limite;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `ProcedureC`
--

DROP PROCEDURE IF EXISTS `ProcedureC`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedureC`(in mult int)
BEGIN
SELECT mult*10;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of view `viewd`
--

DROP TABLE IF EXISTS `viewd`;
DROP VIEW IF EXISTS `viewd`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewd` AS select `contato`.`id_contato` AS `id_contato`,`contato`.`tipo_contato` AS `tipo_contato`,`contato`.`assunto_contato` AS `assunto_contato`,`contato`.`mensagem_contato` AS `mensagem_contato`,`contato`.`usuario_id_usuario` AS `usuario_id_usuario`,`contato`.`resposta_contato` AS `resposta_contato` from `contato`;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
