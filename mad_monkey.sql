-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 17, 2021 at 07:44 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mad_monkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `relevance` int DEFAULT NULL,
  `year` year NOT NULL,
  `parental_rating` enum('livre','10','12','14','16','18') NOT NULL,
  `length` time NOT NULL,
  `description` text NOT NULL,
  `director` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `trailer` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `relevance`, `year`, `parental_rating`, `length`, `description`, `director`, `genre`, `trailer`) VALUES
(1, 'Rambo II - A missão', 100, 1985, '16', '01:50:00', 'Rambo é recrutado para ajudar a encontrar provas de que há prisioneiros de guerra no Vietnã, mas a missão acaba virando um resgate.', 'George P. Cosmatos', 'Ação', 'oZ0CUJK63BU'),
(2, 'It: A Coisa', 77, 2017, '16', '02:14:00', 'Em uma cidade onde as crianças desaparecem, um grupo de jovens precisa encarar seus maiores medos e enfrentar um palhaço assassino assustador e aparentemente invencível.', 'Andy Muschietti', 'Terror', 'FnCdOQsX5kc'),
(3, 'American Pie 3 - O casamento', 96, 2003, '14', '01:36:00', 'O tempo do colégio já passou, e Jim e Michelle vão se casar. Agora cabe a Stifler preparar a melhor despedida de solteiro de todos os tempos.', 'Jesse Dylan', 'Comédia', 'idEa4VrYSbw'),
(4, 'Raul, o Início, o Fim e o Meio', 80, 2012, '14', '02:08:00', 'A ascensão meteórica e a morte precoce de Raul Seixas são contadas em imagens raras de arquivo e entrevistas com familiares e amigos.', 'Walter Carvalho', 'Documentário', 'ItacS15TKjk'),
(5, 'Quatro irmãos', 55, 2005, '16', '01:49:00', 'Ao voltar para casa para o funeral de sua mãe adotiva, quatro irmãos descobrem que ela pode ter sido assassinada e começam a planejar a vingança.', 'John Singleton', 'Ação', 'YP6s4xoufzg'),
(6, 'Superbad – É Hoje', 68, 2007, '16', '01:53:00', 'Dois amigos tentam comprar bebida para se dar bem com as garotas em uma festa, mas acabam se envolvendo em várias aventuras malucas.', 'Greg Mottola', 'Comédia', '4eaZ_48ZYog'),
(7, 'Guerra Mundial Z', 50, 2013, '14', '01:56:00', 'Um ex-funcionário da ONU corre contra o tempo e desafia o destino, viajando ao redor do mundo tentando impedir que uma pandemia zumbi se espalhe.', 'Marc Forster', 'Terror', 'Md6Dvxdr0AQ'),
(8, 'A 5ª Onda', 85, 2016, '14', '01:52:00', 'Após quatro ondas de destruição terem transformado a Terra, uma jovem desesperada para encontrar seu irmão se junta a um estranho para se prepararem para a quinta onda.', 'J Blakeson', 'Ficção_Cientifica', 'kmxLybfGNC4'),
(9, 'Secret Life of Pets 2', 89, 2019, 'livre', '01:26:00', 'Da Universal Pictures and Illumination Entertainment, vem a aguardada sequência de \"Pets - A Vida Secreta dos Bichos\", a comédia de animação de sucesso sobre a vida que os animais de estimação levam depois que seus homólogos humanos deixam a casa todos os dias.', 'Chris Renaud', 'Cartoon', 'o3Bjx2yZxqw'),
(10, 'O Som do Silêncio', 59, 2020, '14', '02:00:00', 'O baterista e ex-viciado Ruben começa a perder a audição. Quando um médico lhe diz que seu estado vai piorar, ele pensa que sua vida e carreira acabaram. Sua namorada, Lou, o leva para um lar de reabilitação para surdos a fim de evitar uma recaída e ajudá-lo a se adaptar à nova vida. Depois de ser bem recebido e aceito como é, Ruben deve escolher entre seu novo normal ou a vida como conhecia.', 'Darius Marder', 'Drama', 'O7Zm7YtJ7W8'),
(11, 'Um Príncipe em Nova York 2', 99, 2021, '14', '01:48:00', 'Akeem e Semmi estão de volta! No exuberante e majestoso país de Zamunda, o recém-coroado Rei Akeem (Eddie Murphy) e seu fiel confidente Semmi (Arsenio Hall) embarcam em uma nova e hilária aventura que os faz cruzar o mundo desde sua grande nação africana até o bairro do Queens, em Nova York, onde tudo começou.', 'Craig Brewer', 'Comédia', 'sY8gUtyeAKE'),
(12, 'Além da Morte', 70, 2017, '14', '01:50:00', 'Para saber o que acontece após a morte, estudantes de medicina provocam paradas cardíacas temporárias em si mesmos. Mas o experimento tem consequências assustadoras.', 'Niels Arden Oplev', 'Ficção_Cientifica', 'VAQfGHI-i6M'),
(13, 'Aniquilação', 70, 2018, '16', '01:55:00', 'Depois que seu marido desaparece em uma missão secreta, a bióloga Lena embarca numa expedição a uma misteriosa região interditada pelo governo dos EUA.', 'Alex Garland', 'Ficção_Cientifica', '4VHhUYx8mQ4'),
(14, 'AnneFrank - Vidas Paralelas', 93, 2019, 'livre', '01:34:00', 'A vencedora do Oscar Helen Mirren conta a história de Anne Frank com base no diário da jovem no documentário que traz também a saga de cinco sobreviventes do Holocausto.', 'Sabina Fedeli', 'Documentário', 'TthBrHb7CZc'),
(15, 'Annabelle 2: A Criação do Mal', 87, 2017, '14', '01:49:00', 'Anos após a morte da filha, um artesão de bonecas e sua esposa decidem acolher crianças órfãs em sua casa. Mas uma força do mal logo começa a atormentar a vida de todos.', 'David F. Sandberg', 'Terror', 'pYdgJAaHSUY');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
CREATE TABLE IF NOT EXISTS `series` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `relevance` int NOT NULL,
  `year` year NOT NULL,
  `parental_rating` enum('livre','10','12','14','16','18') NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `director` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `season` int NOT NULL,
  `genre` varchar(50) NOT NULL,
  `trailer` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `name`, `relevance`, `year`, `parental_rating`, `description`, `director`, `season`, `genre`, `trailer`) VALUES
(1, 'Breaking Bad', 100, 2008, '18', 'Um professor de química do ensino médio começa a vender drogas para sustentar sua família.', 'Vince Gilligan', 5, 'Drama', '0-th7DhHP64'),
(2, 'Demon Slayer: Kimetsu no Yaiba', 77, 2019, '16', 'Demônios massacraram sua família e amaldiçoaram sua irmã. Agora Tanjiro inicia sua jornada para encontrar a cura e se vingar.', 'Haruo Sotozaki', 1, 'Cartoon', 'VQGCKyvzIM4'),
(3, 'Rick and Morty', 82, 2019, '16', 'O brilhante cientista beberrão Rick sequestra Morty, seu neto aborrescente, para viver loucuras em outros mundos e dimensões alternativas.', 'J. Michael Mendel', 4, 'Cartoon', '_JqTvuVoI1A'),
(4, 'The Walking Dead', 85, 2019, '16', 'Zumbis dominam o mundo dos vivos, e os sobreviventes unem forças para manter viva a raça humana.', 'Frank Darabont', 10, 'Drama', 'sfAc2U20uyg'),
(5, 'INVENCÍVEL', 55, 2021, '18', 'Quando Mark Grayson herda superpoderes ao completar 17 anos, ele se une a seu pai como um dos maiores heróis da Terra. Todos os seus sonhos se tornam realidade - até que um evento chocante muda tudo.', 'Robert Kirkman', 1, 'Cartoon', '-bfAVpuko5o'),
(6, 'Peppa Pig', 94, 2015, 'livre', 'Peppa é uma porquinha adorável e sapeca que vive com seu irmãozinho George, a Mamãe Pig e o Papai Pig. Peppa adora se fantasiar, brincar e pular nas poças de lama. As aventuras de Peppa sempre terminam com muita alegria e fortes gargalhadas.', 'Neville Astley Mark Baker', 9, 'Cartoon', 'EmLaHD2bNfw'),
(7, 'The Man in the High Castle', 57, 2019, '16', 'Na decisiva e última temporada, os EUA vão testemunhar a rebelião nos litorais, enquanto Juliana e Wyatt se unem em uma emergente revolta Negra, liderada por Bell Mallory. Takeshi Kido será forçado a lidar com os fantasmas do passado. As vidas de John e Helen Smith mudarão para sempre após Smith entrar no portal Die Nebenwelt e viajar pelo caminho ainda não tomado.', 'Frank Spotnitz', 4, 'Ação', 'sIT2JD4BJ9M'),
(8, 'The Office', 92, 2013, '12', 'Na nona temporada da série, Andy Bernard, o vendedor em formação e ex-aluno da Cornell cujos infinitos e únicos talentos musicais mantêm o escritório entretido, é o novo gerente da Dunder Mifflin Scranton.', 'Randall Einhorn', 9, 'Comédia', 'NsvNvGtqkR4'),
(9, 'Sweet Tooth', 92, 2021, '14', 'Em uma perigosa aventura em um mundo pós-apocalíptico, um adorável menino-cervo sai em busca de um novo começo na companhia de um protetor rabugento.', 'Jeff Lemire', 1, 'Ficção_Cientifica', '9zG9RuJb3QU'),
(10, 'Ash vs. Evil Dead', 72, 2018, '18', 'Trinta anos depois, o caçador de demônios Ash Williams está de volta para enfrentar uma nova praga Deadite. Ele pode ter perdido a mão, mas não o seu toque.', 'Ivan Raimi', 3, 'Terror', '-Yq3jeOmxSk'),
(11, 'Secrets of Great British Castles', 57, 2016, '12', 'Viaje no tempo com o historiador Dan Jones e explore o apogeu das mais famosas construções britânicas e o dia a dia de seus ilustres moradores.', 'Dan Jones', 2, 'Documentário', 'Q0Q7TAudR6Q'),
(12, 'A Guerra dos Samurais', 67, 2021, '16', 'Reconstituições e comentários de especialistas dão vida à história conturbada e às lutas por poder no Japão feudal do século 16.', 'Stephen Scott', 1, 'Documentário', 'AIE_CYv4fEQ'),
(13, 'StartUp', 60, 2018, '16', 'Para lavar dinheiro roubado, eles financiam uma criptomoeda e acabam envolvidos com um agente do FBI corrupto e uma gangue de Miami.', 'Ben Ketai', 3, 'Drama', 'yCf_MpXAXK8'),
(14, 'Vikings', 95, 2019, '16', 'Esta série dramática acompanha a vida do viking Ragnar Lothbrok em sua jornada para ampliar o domínio nórdico e desafiar um líder incompetente e sem visão.', 'Michael Hirst', 6, 'Ação', 'BA3v1RSssXE'),
(15, 'Community', 85, 2015, '12', 'Quando seu diploma falso é descoberto, o advogado Jeff Winger volta à faculdade e forma um grupo de estudos muito peculiar.', 'Dan Harmon', 6, 'Comédia', 'g5P0qYRGH7w');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_users`
--

DROP TABLE IF EXISTS `temporary_users`;
CREATE TABLE IF NOT EXISTS `temporary_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(64) NOT NULL,
  `confirmation_token` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plan` enum('1','2','3') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cpf` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cnpj` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `card_holder` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `card_number` varchar(19) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `card_expiration_date` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `card_security_code` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `card_type` enum('credit','debit') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `plan`, `cpf`, `cnpj`, `card_holder`, `birth_date`, `card_number`, `card_expiration_date`, `card_security_code`, `card_type`, `active`) VALUES
(216, 'pedro', 'pedrohmoreira87@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', '1', '11111111111', '', '', '0000-00-00', '', '', '', 'credit', 1),
(217, 'Bruno', 'brunobergamini12345@gmail.com', '8d23cf6c86e834a7aa6eded54c26ce2bb2e74903538c61bdd5d2197997ab2f72', '1', '', NULL, '', '0000-00-00', '0123456789123456780', '12/24', '6599', 'credit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_has_movies`
--

DROP TABLE IF EXISTS `users_has_movies`;
CREATE TABLE IF NOT EXISTS `users_has_movies` (
  `user_id` int NOT NULL,
  `movies_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_has_series`
--

DROP TABLE IF EXISTS `users_has_series`;
CREATE TABLE IF NOT EXISTS `users_has_series` (
  `user_id` int NOT NULL,
  `series_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
