-- MySQL dump 10.15  Distrib 10.0.30-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sTimeTable
-- ------------------------------------------------------
-- Server version	10.0.30-MariaDB-1~jessie

/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE = @@TIME_ZONE */;
/*!40103 SET TIME_ZONE = '+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0 */;
/*!40101 SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES = @@SQL_NOTES, SQL_NOTES = 0 */;

--
-- Dumping data for table `bugs`
--

LOCK TABLES `bugs` WRITE;
/*!40000 ALTER TABLE `bugs`
  DISABLE KEYS */;
INSERT INTO `bugs` VALUES
  (1, 2, 'close', 'Vue examen', 'Les \"CONTROLE CONTINU\" n’apparaissent pas.', '2017-03-25 12:30:25',
   '2017-03-25 12:30:58'), (2, 2, 'close', 'Format heure et date anglais',
                            'Modifier le format de la date et de l\'heure pour l\'avoir en français + date qui se chevauchent en vue semaine.',
                            '2017-03-25 12:30:32', '2017-03-25 12:41:37'), (3, 2, 'close', 'Couleur + Préférence reset',
                                                                            'Les couleurs et les préférences se réinitialisent quand on redémarre l\'appli.',
                                                                            '2017-03-25 12:30:38',
                                                                            '2017-03-25 12:32:22'),
  (4, 1, 'close', 'Ajouter un enseignant',
   'Le bouton valider n\'est pas accessible quand on est sur \"Infos Supplémentaire\"', '2017-03-25 12:30:44',
   '2017-03-25 12:33:40'), (5, 2, 'close', 'Export PDF pour > Android 6.0',
                            'Pas d\'export si l\'autorisation storage n\'est pas acceptée, et aucun message d\'erreur.',
                            '2017-03-25 12:30:51', '2017-04-18 07:43:12'),
  (6, 5, 'close', 'Cours Magistraux', 'Les cours magistraux n\'apparaissent pas', '2017-03-26 22:39:52',
   '2017-03-27 16:53:11'), (7, 5, 'confirmed', 'Notifications de synchronisation',
                            'Les notifications affichent le même message (les mêmes cours) à chaque fois',
                            '2017-03-28 15:11:56', '2017-03-28 19:27:46'),
  (8, 6, 'close', 'Téléchargement des nouvelles versions',
   'Bonjour\r\n\r\nComment faisons nous pour télécharger les dernières mises à jour de l\'application ?\r\n\r\nCordialement\r\nSablayrolles Louis',
   '2017-04-03 14:26:21', '2017-04-03 14:47:36');
/*!40000 ALTER TABLE `bugs`
  ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments`
  DISABLE KEYS */;
INSERT INTO `comments` (id, user_id, bug_id, content, created_at, updated_at)
VALUES (1, 2, 5, 'acceptée*', '2017-03-26 11:58:58', '2017-03-26 11:58:58'), (2, 2, 6,
                                                                              'Peux-tu nous donner les informations que tu as rempli lors du premier démarrage de l\'appli ?\r\nDiplôme/Mention/Promo/Groupe de TD/Groupe de TP',
                                                                              '2017-03-27 08:24:01',
                                                                              '2017-03-27 08:24:01'), (3, 2, 6,
                                                                                                       'J\'ai trouvé le problème, nous ne savions pas qu\'il existait plusieurs groupes de CM, nous pensions qu\'il n\'y avait que \"CMA\", nous allons corrigé ça pour les prochaines versions.',
                                                                                                       '2017-03-27 16:51:20',
                                                                                                       '2017-03-27 16:51:20'),
  (4, 1, 8,
   'Bonjour.\r\nPour l\'instant les mises à jour n\'ont pas encore été publiées.\r\nLes prochaines versions seront disponibles sur ce site et vous serez informés par mail de leur sortie.',
   '2017-04-03 14:47:27', '2017-04-18 00:21:42'), (5, 2, 7,
                                                   'Le problème survient lorsque deux cours identiques (Anglais dans la plupart des des cas) sont placés au même horaire. Nous allons modifier notre comparateur pour éviter le problème de notification.',
                                                   '2017-04-06 08:51:08', '2017-04-06 08:51:08');
/*!40000 ALTER TABLE `comments`
  ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations`
  DISABLE KEYS */;
INSERT INTO `migrations`
VALUES (35, '2014_10_12_000000_create_users_table', 1), (36, '2014_10_12_100000_create_password_resets_table', 1),
  (37, '2017_03_21_230255_create_bugs_table', 1), (38, '2017_03_21_230301_create_comments_table', 1);
/*!40000 ALTER TABLE `migrations`
  ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets`
  DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets`
  ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users`
  DISABLE KEYS */;
INSERT INTO `users` VALUES (1, 'Oliver Merlin [Team Pluto]', 'merlin.olivier71@gmail.com',
                            '$2y$10$22xycpP/gww3eNfFB0QbBup6lpU1uQzPZSJjNWfZy1uqd31UOxH/6', 1, 0,
                            'LLUbVsINAI0V9wlAPIw8T9O6HfGoFUE669lTkcc0YrIr4pteIkQeCZHjciPK', '2017-03-24 13:01:24',
                            '2017-03-24 13:01:24'), (2, 'Julien Cordeau [Team Pluto]', 'julien-cg@hotmail.fr',
                                                     '$2y$10$DU4Zn2ZlG7zxi4lPj8Z1c.uutg5navDkGHmJyKUM.7R9XBYZNTFtC', 1,
                                                     0, 'KJcL2UaGQEEdFQfGMYI5UN4MYF5UMRwZajAgMQGYYkhj3y9ifAL6mRlTK0jg',
                                                     '2017-03-24 13:45:40', '2017-03-24 13:46:03'),
  (3, 'Thibault Nougues  [Team Pluto]', 'thibault.nougues@hotmail.fr',
   '$2y$10$8fnhtqIq4QKSUTusiuK2iOXTkJaJXCerZWQm7epiDQFHAIbDQZSgW', 1, 0,
   '6O83FnqtQkG4l8XldSzqDzYgYw9rDRjMfuupbpQ7G546eUqndJjEw0xkfQRX', '2017-03-26 16:10:13', '2017-03-26 17:24:23'),
  (4, 'Morgane', 'boisgontier.tlse3@gmail.com', '$2y$10$jbFa4/sLsMd7eQYwIRUruug8dfggq.QNMxfuw5DD/MHo905yYKwn6', 0, 0,
   NULL, '2017-03-26 17:22:56', '2017-03-26 17:22:56'),
  (5, 'Quentin', 'begue.quentin@gmail.com', '$2y$10$H36ZfUXAkddGu5h/pANdiuQM19koC7oNQGtaTwBtr.h/Jq2gRGp7C', 0, 0,
   'ZkdZoVyBvYr2NJXr7b4hZH3bapOFaUxjkjdVnEHFiSzwkd6mXmadlENjswoh', '2017-03-26 22:35:37', '2017-03-26 22:35:37'),
  (6, 'SABLAYROLLES Louis', 'louis.sablayrolles@gmail.com',
   '$2y$10$icOq36PXvruGP13wH5iq8OyVoHZusj2UJPd3nLAUbC/20TcGT4j3m', 0, 0,
   'xjlXpSURBfE04Yzw5snwq6L0uYGoxpdT9BRWqimD24ow2Lc4wZK33iqQ49mD', '2017-04-03 14:23:28', '2017-04-03 14:23:45');
/*!40000 ALTER TABLE `users`
  ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE = @OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE = @OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES = @OLD_SQL_NOTES */;

-- Dump completed on 2017-04-18 21:36:55
