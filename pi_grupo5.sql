-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mydb
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_amigo`
--

DROP TABLE IF EXISTS `tb_amigo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_amigo` (
  `amigo_id` int(11) NOT NULL,
  `pessoa1` int(10) unsigned NOT NULL,
  `pessoa2` int(10) unsigned NOT NULL,
  PRIMARY KEY (`amigo_id`,`pessoa1`,`pessoa2`),
  KEY `fk_TB_Amigo_TB_Usuario1_idx` (`pessoa1`),
  KEY `fk_TB_Amigo_TB_Usuario2_idx` (`pessoa2`),
  CONSTRAINT `fk_TB_Amigo_TB_Usuario1` FOREIGN KEY (`pessoa1`) REFERENCES `tb_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TB_Amigo_TB_Usuario2` FOREIGN KEY (`pessoa2`) REFERENCES `tb_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_amigo`
--

LOCK TABLES `tb_amigo` WRITE;
/*!40000 ALTER TABLE `tb_amigo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_amigo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_campus`
--

DROP TABLE IF EXISTS `tb_campus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_campus` (
  `campus_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `pais` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`campus_id`),
  UNIQUE KEY `campus_id_UNIQUE` (`campus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_campus`
--

LOCK TABLES `tb_campus` WRITE;
/*!40000 ALTER TABLE `tb_campus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_campus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_curso` (
  `curso_id` int(10) unsigned NOT NULL,
  `nome_curso` varchar(255) DEFAULT NULL,
  `turno` varchar(255) DEFAULT NULL,
  `turma` int(11) DEFAULT NULL,
  `detalhe_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`curso_id`,`detalhe_id`),
  UNIQUE KEY `curso_id_UNIQUE` (`curso_id`),
  KEY `fk_TB_curso_TB_DetalhesUsuario1_idx` (`detalhe_id`),
  CONSTRAINT `fk_TB_curso_TB_DetalhesUsuario1` FOREIGN KEY (`detalhe_id`) REFERENCES `tb_detalhesusuario` (`detalhe_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_curso`
--

LOCK TABLES `tb_curso` WRITE;
/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_detalhesusuario`
--

DROP TABLE IF EXISTS `tb_detalhesusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_detalhesusuario` (
  `detalhe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `campus_id` int(11) NOT NULL,
  `formacao` varchar(255) DEFAULT NULL,
  `trabalho` varchar(255) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `sobre` blob,
  PRIMARY KEY (`detalhe_id`,`usuario_id`,`campus_id`),
  KEY `fk_TB_DetalhesUsuario_TB_Campus1_idx` (`campus_id`),
  KEY `fk_TB_DetalhesUsuario_TB_Usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_TB_DetalhesUsuario_TB_Campus1` FOREIGN KEY (`campus_id`) REFERENCES `tb_campus` (`campus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TB_DetalhesUsuario_TB_Usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_detalhesusuario`
--

LOCK TABLES `tb_detalhesusuario` WRITE;
/*!40000 ALTER TABLE `tb_detalhesusuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_detalhesusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_fotos`
--

DROP TABLE IF EXISTS `tb_fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_fotos` (
  `id_fotos` int(11) NOT NULL AUTO_INCREMENT,
  `fotos` blob,
  `foto_perfil` tinyint(1) DEFAULT NULL,
  `usuario_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_fotos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_fotos`
--

LOCK TABLES `tb_fotos` WRITE;
/*!40000 ALTER TABLE `tb_fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_grupos`
--

DROP TABLE IF EXISTS `tb_grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_grupos` (
  `grupo_id` int(11) NOT NULL,
  `nome_grupo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`grupo_id`),
  UNIQUE KEY `grupo_id_UNIQUE` (`grupo_id`),
  UNIQUE KEY `nome_grupo_UNIQUE` (`nome_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_grupos`
--

LOCK TABLES `tb_grupos` WRITE;
/*!40000 ALTER TABLE `tb_grupos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_gruposmembros`
--

DROP TABLE IF EXISTS `tb_gruposmembros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_gruposmembros` (
  `membros_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`membros_id`,`grupo_id`,`usuario_id`),
  UNIQUE KEY `grupos_membros_id_UNIQUE` (`membros_id`),
  KEY `fk_TB_GruposMembros_TB_Grupos1_idx` (`grupo_id`),
  KEY `fk_TB_GruposMembros_TB_Usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_TB_GruposMembros_TB_Grupos1` FOREIGN KEY (`grupo_id`) REFERENCES `tb_grupos` (`grupo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TB_GruposMembros_TB_Usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gruposmembros`
--

LOCK TABLES `tb_gruposmembros` WRITE;
/*!40000 ALTER TABLE `tb_gruposmembros` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_gruposmembros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_post`
--

DROP TABLE IF EXISTS `tb_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_post` (
  `post_id` int(11) NOT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `grupo_id` int(11) NOT NULL DEFAULT '0',
  `tipo_post` varchar(255) DEFAULT NULL,
  `post` blob,
  `caminho_imagem` varchar(255) DEFAULT NULL,
  `data_hora` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`usuario_id`,`grupo_id`),
  UNIQUE KEY `post_id_UNIQUE` (`post_id`),
  KEY `fk_TB_Post_TB_Usuario1_idx` (`usuario_id`),
  KEY `fk_TB_Post_TB_Grupos1_idx` (`grupo_id`),
  CONSTRAINT `fk_grupo` FOREIGN KEY (`grupo_id`) REFERENCES `tb_grupos` (`grupo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_post`
--

LOCK TABLES `tb_post` WRITE;
/*!40000 ALTER TABLE `tb_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `data_hora` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ativo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `id_usuario_UNIQUE` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (30,'lele','leilaferreira.bhte@gmail.com','$2y$10$EtF/UxJoPLvRHXJ/qdwYyu8OlDUUOFV7Sw4vt17eOfu5rUlnVCFte','2018-10-17 02:41:27',1),(31,'Leila','leila@mail.com','$2y$10$CvpChsPV/1xgO3N1hS6VeO7b6W.hsAGgHhpfJPVeAHDufEaVvMRJC','2018-10-17 02:42:01',1);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-17  0:28:47