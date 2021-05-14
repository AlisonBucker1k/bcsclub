-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2021 às 13:37
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bcsclub`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `passwd`) VALUES
(1, 'AlisonBucker', '17f8365416be129cbc7701838a8e5349'),
(2, 'adminbsb', '39fda5895cf5395f45ae4882f98409e2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `la-icon` varchar(50) DEFAULT NULL,
  `bg-color` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 inativa 1 ativa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `title`, `icon`, `la-icon`, `bg-color`, `status`) VALUES
(3, 'Academias', 'excercise.jpg', 'las la-dumbbell', NULL, 1),
(4, 'Veículos', 'eco-car.png', 'las la-radiation', NULL, 1),
(5, 'Escritórios', 'company.png', 'la la-building-o', NULL, 1),
(6, 'Turismo', 'traveler.png', NULL, NULL, 1),
(7, 'Educação', 'education.png', 'las la-university', NULL, 1),
(8, 'Imóveis', 'home.png', NULL, NULL, 1),
(9, 'Moda', 'sarafan.png', NULL, NULL, 1),
(10, 'Decoração', 'pexels-daria-liudnaya-7354634.jpg', 'las la-pallet', NULL, 1),
(11, 'Eletrônicos', 'tv.png', 'las la-mobile', NULL, 1),
(12, 'Musica e Hobbie', 'musical-notes.png', NULL, NULL, 1),
(13, 'Esportes e Lazer', 'sport.png', NULL, NULL, 1),
(14, 'Saúde', 'health.png', NULL, NULL, 1),
(15, 'Beleza', 'pexels-breakingpic-3119.jpg', 'las la-grin-stars', NULL, 1),
(39, 'Lanchonete', '80c4ec1d32aa1bd80c7c4378e745afa9.png', NULL, NULL, 1),
(40, 'Utilidades', 'd4a6ee6621b79049d830b82db26a8673.png', NULL, NULL, 1),
(42, 'Ótica', 'fb91bb906a6903d933dc662dcbdad88b.png', NULL, NULL, 1),
(43, 'Vidraçaria', 'f0b0b35b2f15f93fb280ba65ee7bd5b2.png', NULL, NULL, 1),
(45, 'Manutenção Celular', 'e611701a59088e1fa671790e4abff8e6.png', NULL, NULL, 1),
(47, 'Variedades', '7f4f4c53b507dbcb2793395296113685.png', NULL, NULL, 1),
(48, 'Negócios', '324b2882e6533ddd15d98b23f22f99a7.png', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `nome_mae` varchar(500) NOT NULL,
  `cpf` varchar(150) NOT NULL,
  `rg` varchar(150) NOT NULL,
  `rua` varchar(500) NOT NULL,
  `bairro` varchar(500) NOT NULL,
  `complemento` varchar(500) DEFAULT NULL,
  `numero` varchar(500) NOT NULL,
  `cep` varchar(500) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `date_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `date_atualizacao` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `nome_mae`, `cpf`, `rg`, `rua`, `bairro`, `complemento`, `numero`, `cep`, `cidade`, `estado`, `telefone`, `email`, `senha`, `date_cadastro`, `date_atualizacao`, `status`) VALUES
(6, 'Alison Vitor Bucker', 'Luciene Vitor de Barros', '173.318.257-80', '4109217', 'Rua Santa Luzia', 'São Francisco', 'Sobrado Azul', '195', '29175-224', 'Serra', 'ES', '(27) 9952-7697', 'originalalison@gmail.com', '17f8365416be129cbc7701838a8e5349', '2020-10-23 13:51:19', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinicas`
--

CREATE TABLE `clinicas` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `raz_soc` varchar(500) NOT NULL DEFAULT '0',
  `nome_fant` varchar(500) NOT NULL DEFAULT '0',
  `imagem` varchar(550) NOT NULL,
  `cnpj` varchar(500) NOT NULL DEFAULT '0',
  `nome_resp` varchar(500) NOT NULL DEFAULT '0',
  `cpf_resp` varchar(500) NOT NULL DEFAULT '0',
  `rua` varchar(500) NOT NULL DEFAULT '0',
  `bairro` varchar(500) NOT NULL DEFAULT '0',
  `numero` varchar(500) NOT NULL DEFAULT '0',
  `cidade` varchar(500) NOT NULL DEFAULT '0',
  `estado` varchar(500) NOT NULL DEFAULT '0',
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `cep` varchar(500) NOT NULL DEFAULT '0',
  `telefone` varchar(500) NOT NULL DEFAULT '0',
  `email` varchar(500) NOT NULL DEFAULT '0',
  `senha` varchar(35) NOT NULL DEFAULT '0',
  `date_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  `total_consultas` int(11) NOT NULL,
  `saldo` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clinicas`
--

INSERT INTO `clinicas` (`id`, `id_category`, `raz_soc`, `nome_fant`, `imagem`, `cnpj`, `nome_resp`, `cpf_resp`, `rua`, `bairro`, `numero`, `cidade`, `estado`, `latitude`, `longitude`, `cep`, `telefone`, `email`, `senha`, `date_cadastro`, `total_consultas`, `saldo`, `status`) VALUES
(1, 2, 'Bluelife', 'Bluelife Club', '4a150aa8762d857aeb43b71a78936f82', '28.336.045/0001-50', 'Alison Bucker', '553.637.566-57', 'fdzgfdgfg', '...fghdfgjh', '213', 'Serra', 'Espírito Santo', '-20.1292654', '-40.1801595', '29175-224', '(27) 8889-9765', 'originalalison@gmail.com', '17f8365416be129cbc7701838a8e5349', '2020-09-16 15:58:52', 0, 19, 1),
(3, 1, 'Coser Salvador', 'Coser Salvador', '', '15520,1265', '', '', '', '', '', '', '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-10-23 09:42:20', 0, 0, 0),
(4, 2, 'Coser Salvador', 'Coser Salvador', '', '54.564.654/6565-46', 'Alexandre Salvador', '002.710.087-17', 'Rua Santa Luzia', 'São Francisco', '195', 'Serra', 'ES', '-20.1188996', '-40.1849708', '29175-224', '(27) 9999-9999', 'tecnologia.2@cosersalvador.com', '6f8d5866969d9206054d7d99f6b41705', '2020-10-23 09:45:58', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinicas_categorias`
--

CREATE TABLE `clinicas_categorias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL DEFAULT 0,
  `procedimento` varchar(550) NOT NULL,
  `val_coust` decimal(10,2) NOT NULL DEFAULT 0.00,
  `val_sell` decimal(10,2) NOT NULL DEFAULT 0.00,
  `val_direct` decimal(10,2) NOT NULL,
  `data_add` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `id_clinica`, `procedimento`, `val_coust`, `val_sell`, `val_direct`, `data_add`, `status`) VALUES
(1, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 10:59:49', 0),
(2, 1, 'Arrancar Mandibula', '15.00', '20.00', '0.00', '2020-09-17 11:02:22', 0),
(3, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:02:35', 0),
(4, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:25:12', 0),
(5, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:33:09', 0),
(6, 1, 'Arrancar Siso', '10.00', '20.00', '0.00', '2020-09-17 11:33:47', 0),
(7, 1, 'Arrancar Mandibula', '15.00', '20.00', '0.00', '2020-09-17 11:34:18', 0),
(8, 1, 'Arrancar Cabeçaa', '10.00', '20.00', '90.00', '2020-09-17 11:34:59', 0),
(9, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:38:11', 0),
(10, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:38:31', 0),
(11, 1, 'Arrancar Dente', '10.00', '20.00', '0.00', '2020-09-17 11:38:42', 0),
(12, 1, 'Arrancar Mandibula', '9.50', '20.00', '1200.00', '2020-10-23 14:36:36', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas_marcadas`
--

CREATE TABLE `consultas_marcadas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL DEFAULT 0,
  `id_clinica` int(11) NOT NULL DEFAULT 0,
  `id_consulta` int(11) NOT NULL DEFAULT 0,
  `val_coust` float NOT NULL DEFAULT 0,
  `val_sell` float NOT NULL DEFAULT 0,
  `turno` varchar(50) NOT NULL DEFAULT '0',
  `data_marcado` datetime DEFAULT '0000-00-00 00:00:00',
  `data_pay` datetime DEFAULT NULL,
  `status_pay` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `status_marcado` int(1) DEFAULT 0,
  `payment_token` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consultas_marcadas`
--

INSERT INTO `consultas_marcadas` (`id`, `id_cliente`, `id_clinica`, `id_consulta`, `val_coust`, `val_sell`, `turno`, `data_marcado`, `data_pay`, `status_pay`, `payment_type`, `status_marcado`, `payment_token`) VALUES
(175, 6, 1, 12, 9.5, 20, 'Manhã', '2021-01-01 18:20:00', '2020-10-23 14:37:54', 1, 'boleto', 1, '28C7F3D0B6FD0BDA9DD97E07007BC3DB'),
(176, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(177, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(178, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(179, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(180, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(181, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(182, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(183, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(184, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(185, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(186, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(187, 6, 1, 12, 9.5, 20, 'Tarde', '2020-10-31 18:18:00', '2020-10-23 15:05:37', 1, 'cartao', 1, '97C18FA32B2068EBA176BE2E0B97C84A'),
(188, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(189, 6, 1, 12, 9.5, 20, 'Tarde', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(190, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, ''),
(191, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'cartao', 0, ''),
(192, 6, 1, 12, 9.5, 20, 'Manhã', '0000-00-00 00:00:00', NULL, NULL, 'boleto', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `status`) VALUES
(5, 'Shaunjer', 'no-replyTew@gmail.com', '85532824136', 'Hеllо!  bsbclub.com.br \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd аppеаl соmplеtеly lеgаlly? \r\nWе prеsеntаtiоn а nеw uniquе wаy оf sеnding аppеаl thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh businеss prоpоsаls аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh соntасt Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis lеttеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693', 0),
(6, 'Mike White\r\n', 'no-replyTew@gmail.com', '86722259891', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your %domain% website? \r\nHaving a high DA score, always helps \r\n \r\nGet your bsbclub.com.br to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nFYI: \r\nWe also give big discounts for multiple plans \r\n \r\n \r\nthank you \r\nMike White\r\n \r\nsupport@monkeydigital.co', 0),
(7, 'Terese', 'wright.terese@hotmail.com', '916-260-5927', 'Hi,\r\n\r\nWe\\\'re wondering if you\\\'ve ever considered taking the content from bsbclub.com.br and converting it into videos to promote on social media platforms such as Youtube?\r\n\r\nIt\\\'s another \\\'rod in the pond\\\' in terms of traffic generation, as so many people use Youtube.\r\n\r\nYou can read a bit more about the software here: https://www.vidnami.com/c/Donosa-vn-freetrial\r\n\r\nKind Regards,\r\nTerese', 0),
(8, 'James Fisher\r\n', 'no-reply@google.com', '82663573561', 'Gооd dаy! \r\nI have just checked bsbclub.com.br for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0),
(9, 'Peter Evans\r\n', 'no-replyDic@gmail.com', '88234834622', 'Gооd dаy! \r\n \r\nDo you have issues ranking your website locally? \r\n \r\nWith our Google Maps citations strategy, we are able to rank you in top 5 in the Google Local Search for specific keywords. \r\nThe more Citations you build with us, the more keywords you`ll start ranking for \r\n \r\nMore details here: \r\nhttps://speed-seo.net/product/google-maps-citations/ \r\n \r\nthank you \r\nSpeed SEO Digital \r\nsupport@speed-seo.net', 0),
(10, 'James Wainwright\r\n', 'no-reply@google.com', '83698279185', 'Hеllо! \r\nI have just checked bsbclub.com.br for the ranking keywords and seen that your SEO metrics could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0),
(11, 'gonzaloklcq', 'agente@whatsMarketing.es', '554734314288', 'Bom dia, apresentamos nossa plataforma de envio em massa de mensagens via WhatsApp, oferecemos estrategias emarketing via API do WhatsApp para negocios. Gostariamos de obter mais informacoes em uma reuniao ou via e-mail ou telefone. Espero sua resposta. \r\n \r\nVisite> www.whatsapemmassa.com', 0),
(12, 'Eric', 'ericjonesonline@outlook.com', '555-555-1212', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with bsbclub.com.br definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out bsbclub.com.br.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(13, 'Henryhanda', 'hasnain2009@hotmail.co.uk', '89030253170', 'Só um clique pode transformar um dólar em 1000 dólares. \r\nLink - http://1c-met.ru/bitrix/rk.php?id=2&event1=banner&event2=click&goto=https://hdredtube3.mobi/btsmart', 0),
(14, 'Mike Ramacey\r\n', 'no-replyTew@gmail.com', '86861412462', 'Greetings \r\n \r\nIf you want to get in front of  your competition then you must have a exceptional Domain Authority score for your website. Its just as simple as that. With our service your bsbclub.com.br DA score will get above 50 points in just 30 days. \r\n \r\nThis service is assured \r\n \r\nFor more advice, check our service here \r\nhttps://speed-seo.net/Get-Guaranteed-Domain-Authority-50/ \r\n \r\nNEW: ahrefs DR50+ possible now: \r\nhttps://speed-seo.net/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Ramacey\r\n \r\nSpeed SEO Agency \r\nsupport@speed-seo.net', 0),
(15, 'CarolVal', 'miraclesreport@gmail.com', '85515622847', 'Dropshipping business is a method of retail where the store owner never physically holds the products it sells.... You don’t need upfront investments to get the products that you sells.                            Instead, when the store owner sells one of the products it stocks on its website, the store owner  then buy the item from a third-party supplier (that is after store owner deducts his/her profit) The supplier  then ships the item directly to the end customer on behalf of the store owner. \r\nFor only $99.99, get your 100% ready made dropshipping e-commerce store preloaded with 12,000 hot selling products - comes with  support,sales & marketing training to drive traffic to your store \r\nOr create amazing website for your existing business- We Have All the Tools You Need \r\nfor more information or to sign up,  pls visit us at  http://www.NETSKIEL.COM', 0),
(16, 'Nicola Slamm', 'nicolaslamm1978@gmail.com', '83656531584', 'Get more Followers, Likes, Views to all your social media channels instantly. \r\n100% Safe, Real Human (No bots). \r\n \r\n250 Instagram followers @ $3.99: https://store.marketingchoice.com/buy-instagram-followers \r\n100 Facebook page followers @ $3.99: https://store.marketingchoice.com/facebook-page-followers \r\n100 LinkedIn followers @ $4.99: https://store.marketingchoice.com/linkedin-company-page-followers \r\n100 TikTok followers @ $3.99: https://store.marketingchoice.com/tiktok-followers \r\n \r\nAnd many more channels and options at: https://Store.MarketingChoice.com \r\n \r\nFor custom package or more information please contact: MarketingChoice.com@gmail.com', 0),
(17, 'Peter Sherlock\r\n', 'no-replyDic@gmail.com', '81874236319', 'Hi there \r\n \r\nCompetition not playing the game fair and square? \r\nNow you can fight back. \r\n \r\nNegative SEO, to make business collapse \r\nhttps://blackhat.to/ \r\n \r\nContact us for any queries: \r\nsupport@blackhat.to', 0),
(18, 'GILBERT317', 'RAV050@thefmail.com', '88166994246', 'Thank you!!1', 0),
(19, 'Mike Oldridge\r\n', 'no-reply@google.com', '81774846663', 'Greetings \r\n \r\nI have just checked  bsbclub.com.br for the ranking keywords and saw that your website could use a boost. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\nregards \r\nMike Oldridge\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0),
(20, 'Eric', 'ericjonesonline@outlook.com', '555-555-1212', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with bsbclub.com.br definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out bsbclub.com.br.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(21, 'Eric', 'ericjonesonline@outlook.com', '555-555-1212', 'Hello, my name’s Eric and I just ran across your website at bsbclub.com.br...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(22, 'Richard Wahl', 'maikereine.mmr@gmail.com', '86224558471', 'Olá, \r\nEspero que este e-mail encontre você bem. \r\nEsta é uma notícia muito importante e uma mensagem especial para você. \r\nEu sou o vencedor de 533 milhões, no Jackpot Mega Millions. Devido à pandemia atual, decidi me juntar a outros filantropistas mundiais para fazer o que está ao meu alcance para trazer alívio para algumas pessoas e sua comunidade local, globalmente, por meio de uma seleção aleatória de endereços da web por minha equipe. \r\nSeu site surgiu como um dos sortudos destinatários desta seleção e, com um coração de calorosa benevolência, desejo-lhe muitos parabéns. \r\nAqui está seu código de doação: RFECD00052020FP \r\nAo responder a este e-mail, certifique-se de informar seu código de doação para verificação por minha equipe. \r\nMais detalhes estão no meu canal no youtube. \r\nASSISTA-ME AQUI: https://www.youtube.com/watch?v=tne02ExNDrw \r\nContate o WhatsApp: +1 (332) 223-3673 \r\nentre em contato com a equipe financeira por e-mail apenas quando não tiver o WhatsApp: globalrelief.richardwahl.org@financier.com \r\nParabéns mais uma vez! \r\nAtenciosamente, \r\nRichard Wahl.', 0),
(23, 'Candice', 'candice@stardatagroup.com', 'NA', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\nIt has been a tough year all round and we decided to go out with a bang!\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time offer.\r\nYou can purchase it at www.StarDataGroup.com and view samples.\r\n\r\n- LinkedIn Database\r\n 43,535,433 LinkedIn Records\r\n\r\n- USA B2B Companies Database\r\n 28,147,835 Companies\r\n\r\n- Forex\r\n Forex South Africa 113,550 Forex Traders\r\n Forex Australia 135,696 Forex Traders\r\n Forex UK 779,674 Forex Traders\r\n\r\n- UK Companies Database\r\n 521,303 Companies\r\n\r\n- German Databases\r\n German Companies Database: 2,209,191 Companies\r\n German Executives Database: 985,048 Executives\r\n\r\n- Australian Companies Database\r\n 1,806,596 Companies\r\n\r\n- UAE Companies Database\r\n 950,652 Companies\r\n\r\n- Affiliate Marketers Database\r\n 494,909 records\r\n\r\n- South African Databases\r\n B2B Companies Database: 1,462,227 Companies\r\n Directors Database: 758,834 Directors\r\n Healthcare Database: 376,599 Medical Professionals\r\n Wholesalers Database: 106,932 Wholesalers\r\n Real Estate Agent Database: 257,980 Estate Agents\r\n Forex South Africa: 113,550 Forex Traders\r\n\r\nVisit www.stardatagroup.com or contact us with any queries.\r\n\r\nKind Regards,\r\nStarDataGroup.com', 0),
(24, 'contactvioibi', 'damsonxristinja1992@rambler.ru', '123456789', 'Dear Madame, Dear Sirs! \r\n \r\nWe will send Your messages via contact forms to the sites of firms via any domain zones of the world in any languages.  \r\n \r\nYour offer is sent to E-mail of business organization 100 percent will get to the incoming folder! \r\n \r\n2000 bases: \r\nhttps://xn----7sbb1bbndheurc1a.xn--p1ai/prajs-list/ \r\n \r\nTest: \r\ntwenty thousand messages on foreign zones to your electronic box - 20 dollars. \r\nWe need from You only email address, title and text of the letter. \r\n \r\nIn our price list there are more 800 databases for all domains of the world. \r\nCommon databases: \r\nAll Europe 44 countries 60726150 of domains - 1100$ \r\nAll European Union 28 countries 56752547 of domains- 1000$ \r\nAll Asia 48 countries 14662004 of domain names - 300$ \r\nAll Africa 50 countries 1594390 of domain names - 200$ \r\nAll North and Central America in 35 countries 7441637 of domain names - 300$ \r\nAll South America 14 countries 5826884 of domain names - 200$ \r\nNew sites from around the world registered 24-48 hours ago. (A cycle of 15 mailings during the month) - 500$ \r\nCompanies of RF 4025015 - 300$ \r\nUkraine 1114526 of domain names - 100$ \r\nAll Russian-speaking countries minus Russia are 14 countries and there are 1979217 of domain names - 200$ \r\nNew sites of the Russia, registered 24-48 hours ago (A cycle of 15 mailings during the month) - 250$ \r\n \r\nOur databases: \r\nWhois-service databases of domains for all countries of the world. \r\nYou can purchase our databases separately from newsletter\\\'s service at the request. \r\n \r\nP.S. \r\nPlease, do not respond to this offer from your email account, as it has been generated automatically and will not reach us! \r\nContact Feedback form =» https://xn----7sbb1bbndheurc1a.xn--p1ai/to-order/ \r\n \r\nPRICE LIST: \r\n \r\nTest mailing: $20 – 20000 contact forms websites \r\n \r\nAll Europe 44 countries there are 60726150 websites – $1100 \r\n \r\nAll EU 28 countries there are 56752547 websites – $1000 \r\n \r\nAll Asia 48 countries there are 14662004 websites – $500 \r\n \r\nAll Africa 50 countries there are 1594390 websites – $200 \r\n \r\nAll North and Central America is 35 countries there are 7441637 websites – $300 \r\n \r\nAll South America 14 countries there are 5826884 websites – $200 \r\n \r\nTop 1 Million World’s Best websites – $100 \r\n \r\nTop 16821856 the most visited websites in the world – $300 \r\n \r\nNew websites from around the world registered 24-48 hours ago. (A cycle of 15 mailings during the month) – 500$ \r\n \r\nBusinesses and organizations of the Russian Federation – there are 4025015 websites – $300 \r\n \r\nAll Russian-speaking countries minus Russia – there are 14 countries and 2440822 websites – $200 \r\n \r\nNew websites of the Russian Federation, registered 24-48 hours ago. (A cycle of 15 mailings during the month) – 250$ \r\n \r\n1499203 of hosting websites around the world (there are selections for all countries, are excluded from databases for mailings) – $150 \r\n \r\n295285 websites of public authorities of all countries of the world (selections for all countries, are excluded from databases for mailings) – $100 \r\n \r\n3516251 websites online stores Worldwide – $250 \r\n \r\nCMS mailings: \r\n \r\n3dCart 14689 websites - $50 \r\nAdobe CQ5 133567 websites - $80 \r\nAdvance 17589 websites - $50 \r\nAdVantShop.NET 2453 websites - $30 \r\nALMA 7095 websites - $30 \r\nAmetys 2389 websites - $30 \r\nAmiro 29587 websites - $30 \r\nAngora 20357 websites - $50 \r\nAVS 1369 websites - $30 \r\nBbPress 1487 websites - $30 \r\nBESTWEB 2699 websites - $30 \r\nBigCommerce 78257 websites - $50 \r\nBitrix 319687 websites - $80 \r\nBlogger 658267 websites - $80 \r\nBlogspot 279865 websites - $80 \r\nBuddyPress 51477 websites - $50 \r\nBurning Board 4659 websites - $30 \r\nCatalyst Web 11689 websites - $50 \r\nClassiPress 11796 websites - $50 \r\nCMSimple 11052 websites - $30 \r\nConcrete5 72100 websites - $50 \r\nContao 110897 websites - $80 \r\nCONTENIDO 5069 websites - $30 \r\nConvio 2268 websites - $30 \r\nCoppermine Photo 1296 websites - $30 \r\nCS Cart 11400 websites - $30 \r\nDatalife Engine	42587 websites - $50 \r\nDede 230589 websites - $100 \r\nDedeEIMS 96068 websites - $50 \r\nDIAFAN 4058 websites - $30 \r\nDiscuz 47962 websites - $50 \r\nDjango 71167 websites - $50 \r\nDokuWiki 9588 websites - $30 \r\nDotnetnuke 82964 websites - $50 \r\nDrupal 978298 websites - $100 \r\nEasyBlog 1165978 websites - $100 \r\nEPiServer 29876 websites - $50 \r\nExpressionEngine 1769823 websites - $150 \r\neZ Publish 5367 websites - $30 \r\nF- 9356 websites - $30 \r\nFireBoard 1567 websites - $30 \r\nGeneral Blogs 2067 websites - $30 \r\nGetSimple 23094 websites - $50 \r\nHost 6871 websites - $30 \r\nHostCMS	5042 websites - $30 \r\nHubSpot 31762 websites - $50 \r\ni- 9438 websites - $30 \r\nImage 1368 websites - $30 \r\nInSales 14149 websites - $50 \r\nInSales	 11081 websites - $30 \r\nInstantCMS 4136 websites - $30 \r\nInteractiveBBS 32367 websites - $50 \r\nInvision Power Board 2430 websites - $30 \r\nIPBoard 2266 websites - $30 \r\nIT 15189 websites - $50 \r\njforum 1056 websites - $30 \r\njobberBase 3387 websites - $30 \r\nJoomla K2 154367 websites - $80 \r\nJoomla	 1906994 websites - $200 \r\nKoobi 3722 websites - $30 \r\nLiferay	 5137 websites - $30 \r\nMade Simple 20567 websites - $50 \r\nMagento	 369447 websites - $80 \r\nMediaMaxScript 103896 websites - $80 \r\nMediaWiki 41468 websites - $50 \r\nMicrosoft SharePoint 13198 \r\nMODx	 64023 websites - $50 \r\nMoodle 8195 websites - $30 \r\nMovable Type 13096 websites - $50 \r\nMyBB 4367 websites - $30 \r\nmyUPB 3397 websites - $30 \r\nNetCat	 7294 websites - $30 \r\nNG 18356 websites - $50 \r\nNING 3687 websites - $30 \r\nNopCommerce 18600 websites - $30 \r\nOpen 5916 websites - $30 \r\nOpenCart 667000 websites - $80 \r\nOsclass 4652 websites - $30 \r\nosCommerce 68468 websites - $50 \r\nOUR- 3096 websites - $30 \r\nOXID eShop 12200 websites - $50 \r\nOxwall 6800 websites - $30 \r\nParallels Plesk Sitebuilder 174216 websites - $80 \r\nphp 14367 websites - $50 \r\nphp Link 2298 websites - $30 \r\nphpBB	 24400 websites - $30 \r\nPHP-Fusion 2596 websites - $30 \r\nPHPMelody 2365 websites - $30 \r\nPHP-Nuke 2489 websites - $30 \r\nPHPShop 2667 websites - $30 \r\nPHPWeb 29789 websites - $50 \r\nPHPWind 4032 websites - $30 \r\nPlone 84962 websites - $50 \r\nPowerEasy 1697 websites - $30 \r\nPrestashop 434100 websites - $80 \r\nQuestion2Answer 5598 websites - $30 \r\nR 296498 websites - $80 \r\nReadyScript 6487682 websites - $80 \r\nS.Builder 394367 websites - $80 \r\nShopify	 6093709 sites websites - $400 \r\nShoutbox 145564 websites - $80 \r\nSilverStripe 31721 websites - $50 \r\nSimpla 17429 websites - $50 \r\nSitecore 74861 websites - $50 \r\nSitefinity 4183 websites - $30 \r\nSMF 8111 websites - $30 \r\nSocialGO 54267 websites - $50 \r\nSPIP 28269 websites - $50 \r\nSquarespace 1098231 websites - $100 \r\nStoreLand 8257 websites - $30 \r\nSupeSite 12367 websites - $50 \r\nTextpattern 10900 websites - $30 \r\nTikiWiki 1446 websites - $30 \r\nTilda 47396 websites - $50 \r\nTumblr 302357 websites - $80 \r\nTYPO3 845009 websites - $80 \r\nUmbraco 146064 websites - $80 \r\nUMI.CMS	 13191 websites - $50 \r\nVamShop 1737 websites - $30 \r\nvBulletin 14460 websites - $30 \r\nVolusion 16006 websites - $50 \r\nWallpaperSiteScript 2811 websites - $30 \r\nWeebly 191753 websites - $80 \r\nWix 3379081 sites websites - $250 \r\nWooCommerce 4459525 websites - $310 \r\nWordpress 35354537 websites - $650 \r\nXenForo 21105 websites - $30 \r\nXOOPS 20467 websites - $50 \r\nXpressEngine 8565 websites - $30 \r\nZen Cart 26524 websites - $30 \r\n \r\nCountry: \r\n \r\n.ae 200462 websites UAE - $50 \r\n.ae 1820 websites International zone UAE:.com .net .biz .info .name .tel \r\n.ag 11931 websites Antigua and Barbuda - $50 \r\n.ai 33130 websites Anguilla - $50 \r\n.am 21995 websites Armenia - $50 \r\n.am 1684 websites International zone Armenia:.com .net .biz .info .name .tel \r\n.ar 782608 websites Argentina - $80 \r\n.ar 75496 websites International zone Argentina:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.ar.com 135 websites - $30 \r\n.at 1356722 websites Austria - $100 \r\n.at 181907 websites International zone Austria :.com .net .biz .info .name \r\n.au 2432174 websites Australia - $150 \r\n.au 461279 websites International zone Australia:.com .net .biz .info .name \r\n.az 17855 websites Azerbaijan - $50 \r\n.az 2036 websites International zone Azerbaijan:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.ba 15725 websites Bosnia and Herzegovina - $30 \r\n.ba 2291 websites international zone Bosnia and Herzegovina:.com.net.biz.info.org.name.tel.mobi.asia-$30 \r\n.be 1349658 websites Belgium - $100 \r\n.be 1056248 websites International zone Belgium:.com .net .biz .info .name \r\n.bg 54418 websites Bulgaria - $50 \r\n.bg 50685 websites International zone Bulgaria:.com .net .biz .info .name \r\n.bo 2602 websites Bolivia - $30 \r\n.bo 29415 websites International zone Bolivia:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.br 3205100 websites Brazil - $200 \r\n.br 1230078 websites International zone Brazil:.com .net .biz .info .name . \r\n.by 99148 websites Belarus - $50 \r\n.by 1574 websites International zone Belarus:.com .net .biz .info .name .tel \r\n.ca 2587463 websites Canada - $150 \r\n.ca 288395 websites International zone Canada:.com .net .biz .info .name \r\n.cc 436396 websites - $80 \r\n.cc 1920589 websites Cocos Keeling Islands- $150 \r\n.cf 2461460 websites Central African Republic - $150 \r\n.cg 526 websites Congo - $30 \r\n.ch 1629450 websites Switzerland - $100 \r\n.ch 205292 websites International zone Switzerland:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.ci 5794 websites Cote d\\\'Ivoire - $30 \r\n.ci 112 websites International zone Cote d\\\'Ivoire:.com .net .biz .info .name \r\n.cl 590401 websites Chile - $80 \r\n.cl 65996 websites International zone Chile:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.cm 29221 websites Cameroon- $50 \r\n.cn 23160610 websites China - $600 \r\n.cn 1372416 websites International zone China:.com .net .biz .info .name .tel .mobi .asia-$100 \r\n.co 1878923 websites Colombia - $100 \r\n.co 10854 websites International zone Colombia:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.cx 15753 websites Christmas Island - $50 \r\n.cy 11092 websites Cyprus - $50 \r\n.cy 744 websites International zone Cyprus:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.cz 1001208 websites Czech Republic - $100 \r\n.cz 193400 websites International zone Czech Republic:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.de 15078512 websites Germany - $350 \r\n.de 3894156 websites International zone Germany:.com .net .biz .info .name .tel .mobi .asia-$150 \r\n.dk 1319155 websites Denmark - $100 \r\n.dk 148164 websites International zone Denmark:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.dm 23318 websites Dominica - $50 \r\n.dn.ua 1835 websites - $30 \r\n.do 5255 websites Dominican Republic- $30 \r\n.dy.fi 1112 websites - $30 \r\n.dz 5382 websites Algeria - $30 \r\n.ec 11731 websites Ecuador - $50 \r\n.ec 2897 websites International zone Ecuador:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.ee 131791 websites Estonia- $50 \r\n.ee 10490 websites International zone Estonia:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.es 1509048 websites Spain - $100 \r\n.es 683845 websites International zone Spain:.com .net .biz .info .name .tel .eu 3046076 websites Europe - $150 \r\n.eu 633384 websites International zone Europe:.com .net .biz .info .name .fi 361111 websites Finland - $80 \r\n.fi 69631 websites International zone Finland:.com .net .biz .info .name .fr 2810983 websites France - $150 \r\n.fr 639546 websites International zone France:.com .net .biz .info .name .ge 24598 websites Georgia - $50 \r\n.ge 1676 websites International zone Georgia:.com .net .biz .info .name .tel .gf 996 websites French Guiana - $30 \r\n.gg 10528 websites Guernsey islands - $50 \r\n.gh 703 websites Ghana - $30 \r\n.gi 981 websites Gibraltar - $30 \r\n.gp 2044 websites Guadeloupe - $30 \r\n.gq 2027422 websites Equatorial Guinea - $100 \r\n.gr 327215 websites Greece - $80 \r\n.gr 57984 websites International zone Greece:.com .net .biz .info .name .tel .mobi .asia-$150 \r\n.gt 15351 websites Guatemala - $50 \r\n.hk 116093 websites Hong Kong - $50 \r\n.hm 335 websites Heard & McDonald islands - $30 \r\n.hn 4732 websites Honduras - $30 \r\n.hr 75736 websites Croatia - $50 \r\n.hr 16592 websites International zone Croatia:.com .net .biz .info .name .tel .mobi .asia \r\n.ht 1299 websites Haiti - $30 \r\n.hu 53940 websites International zone Hungary:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.ie 209620 websites Ireland - $50 \r\n.ie 49861 websites International zone Ireland:.com .net .biz .info .name .il 196266 websites Israel - $80 \r\n.il 38537 websites International zone Israel:.com .net .biz .info .name .tel .in 1157482 websites India - $100 \r\n.in 266179 websites International zone India:.com .net .biz .info .name .tel .io 496216 websites British Indian Ocean - $80 \r\n.iq 2401 websites Iraq - $30 \r\n.ir 574258 websites Iran - $80 \r\n.ir 15487 websites International zone Iran:.com .net .biz .info .name .tel .mobi .asia \r\n.it 2410105 websites Italy – $150 \r\n.it 954040 websites International zone Italy:.com.net.biz.info.org.name.tel.mobi.asia-$100 \r\n.je 3016 websites Ireland - $30 \r\n.jp 1825219 websites Japan - $150 \r\n.jp 4683252 websites International zone Japan:.com.net.biz.info.org.name.tel.mobi.asia-$200 \r\n.jp.net 5170 websites - $30 \r\n.ke 14677 websites Kenya - $50 \r\n.kg 10350 websites Kyrgyzstan - $30 \r\n.kg 664 websites International zone Kyrgyzstan:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.ki 79 websites Kiribati - $30 \r\n.kn 3211 websites Saint Kitts and Nevis - $30 \r\n.kr 272463 websites Korea- $80 \r\n.kw 484 websites Kuwait - $30 \r\n.ky 5783 websites Cayman Islands - $30 \r\n.kz 113180 websites Kazakhstan - $80 \r\n.kz 5876 websites International zone Kazakhstan:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.lc 1121 websites Saint Lucia - $30 \r\n.lk 32654 websites Sri Lanka - $30 \r\n.lt 137666 websites Lithuania- $50 \r\n.lt 27710 websites International zone Lithuania:.com .net .biz .info .name .tel .mobi .asia- $50 \r\n.lu 74322 websites Luxembourg - $50 \r\n.lu 4125 websites International zone Luxembourg:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.lv 86593 websites Latvia - $50 \r\n.lv 8887 websites International zone Latvia:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.ma 59103 websites Morocco - $50 \r\n.mc 3046 websites Monaco - $30 \r\n.md 16730 websites Moldova - $50 \r\n.md 1293 websites International zone Moldova:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.me 761596 websites Montenegro - $80 \r\n.me 86897 websites International zone Montenegro:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.mg 3715 websites Madagascar- $30 \r\n.mk 13266 websites Macedonia - $50 \r\n.ml 2158835 websites Mali - $100 \r\n.mn 17044 websites Mongolia - $50 \r\n.mq 1112 websites Martinique (French) - $30 \r\n.mr 776 websites Mauritania - $30 \r\n.ms 7265 websites Montserrat - $30 \r\n.mt 1402 websites Malta - $30 \r\n.mu 6475 websites Maurifius - $30 \r\n.mv 1996 websites Maldives - $30 \r\n.mw 8579 websites Malawi - $30 \r\n.mx 670901 websites Mexico- $80 \r\n.mx 174571 websites International zone Mexico:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.my 143039 websites Malaysia- $50 \r\n.na 1094 websites - $30 \r\n.nc 3497 websites New Coledonia (French) - $30 \r\n.nl 3925784 websites Netherlands - $200 \r\n.nl 1019697 websites International zone Netherlands:.com .net .biz .info .name .tel .mobi .asia-$100 \r\n.no 620882 websites Norway - $80 \r\n.no 74318 websites International zone Norway:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.nu 255161 websites Niue- $50 \r\n.nz 593127 websites New Zealand - $80 \r\n.om 1701 websites Oman - $30 \r\n.pe 83224 websites Peru - $50 \r\n.pe 59157 websites International zone Peru:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.pk 44464 websites Pakistan - $50 \r\n.pl 1795299 websites Poland - $100 \r\n.pl 327587 websites International zone Poland:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.pr 1358 websites Puerto Rico - $30 \r\n.pt 263136 websites Portugal - $80 \r\n.pt 17691 websites International zone Portugal:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.py 5593 websites Paraguay - $30 \r\n.py 653 websites International zone Paraguay:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.re 15089 websites Reunion (French) - $50 \r\n.ro 424401 websites Romania - $80 \r\n.ro 42046 websites International zone Romania:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.rs 85503 websites Serbia - $50 \r\n.ru 5025331 websites Russian - $250 \r\n.ru 514668 websites International zone Russian:.com .net .biz .info .name .tel .mobi .asia-$80 \r\n.rw 3806 websites Rwanda - $30 \r\n.sa 20421 websites Saudi Arabia- $50 \r\n.sa 5064 websites International zone Saudi Arabia:.com .net .biz .info .name .tel .mobi .asia - $30 \r\n.sc 4442 websites Seychelles- $30 \r\n.se 1491677 websites Sweden - $100 \r\n.se 293316 websites International zone Sweden:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.sg 150351 websites Republic Of Singapore - $50 \r\n.sh 7560 websites Saint Helena - $30 \r\n.si 103778 websites Slovenia- $50 \r\n.si 12879 websites International zone Slovenia:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.sk 414198 websites Slovakia- $80 \r\n.sk 31572 websites International zone Slovakia:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.sm 8897 websites San Marino - $30 \r\n.sn 344 websites International zone Senegal:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.sn 4465 websites Senegal - $30 \r\n.sr 580 websites Suriname - $30 \r\n.sv 8432 websites Salvador- $30 \r\n.sx 2901 websites Sint Maarten - $30 \r\n.sy 2972 websites Syria - $30 \r\n.sz 321 websites Swaziland - $30 \r\n.tc 16384 websites Turks and Caicos Islands- $50 \r\n.tf 19841 websites French Sauthern Territory - $50 \r\n.tg 1230 websites Togo - $30 \r\n.th 22368 websites Kingdom Of Thailand- $50 \r\n.tj 6874 websites Tajikistan- $30 \r\n.tj 34 websites International zone Tajikistan:.com .net .biz .info .name .tel .mobi .asia \r\n.tk 20085806 websites Tokelau - $500 \r\n.tl 2748 websites East Timor - $30 \r\n.tm 6395 websites Turkmenistan- $30 \r\n.tm 44 websites International zone Turkmenistan:.com .net .biz .info .name .tel .mobi .asia \r\n.tr 243347 websites Turkey - $80 \r\n.tr 138818 International zone Turkey:.com .net .biz .info .name .tel .mobi .asia -$50 \r\n.tt 1017 websites Trinidad & Tobago  - $30 \r\n.ua 553216 websites Ukraina - $80 \r\n.ua 147202 websites International zone Ukraine:.com .net .biz .info .name .tel .mobi .asia-$50 \r\n.ug 3806 websites Uganda - $30 \r\n.ug 720 websites International zone Uganda:.com .net .biz .info .name .tel .mobi.asia-$30 \r\n.uk 5975887 websites United Kingdom - $250 \r\n.uk 3304606 websites International zone United Kingdom:.com .net .biz .info .name .tel .mobi .asia-$150 \r\n.us 3139563 websites USA - $200 \r\n.us 578927 websites International zone USA:.com .net .biz .info .name .tel .mobi .asia-$80 \r\n.uy 15571 websites Uruguay - $50 \r\n.uy 31812 websites International zone Uruguay:.com .net .biz .info .name .tel .mobi .asia-$30 \r\n.uz 38357 websites Uzbekistan - $50 \r\n.uz  365 websites International zone Uzbekistan:.com .net .biz .info .name .tel .mobi .asia \r\n.vc 18641 websites Saint Vincent & Grenadines - $50 \r\n.ve 14015 websites Venezuela - $50 \r\n.ve 2898 websites International zone Venezuela:.com .net .biz .info .name .tel .mobi .asia - $30 \r\n.vg 8389 websites Virgin Islands (British) - $50 \r\n.vi 109 websites Virgin Islands (US) - $30 \r\n.vn 436005 websites Vietnam - $80 \r\n.vn 161855 websites International zone Vietnam:.com .net .biz .info .name .tel .mobi .asia - $50 \r\n.vu 1051 websites Vanuatu - $30 \r\n.wf 1133 websites Wallis & Futuna Islands - $30 \r\n.ws 99308 websites Samoa - $80 \r\n.ye 18 websites Yemen - $30 \r\n.yt 2004 websites Mayotte - $30 \r\n.za 1008308 websites South Africa - $100', 0),
(25, 'Mike Fulton\r\n', 'see-email-in-message@monkeydigital.co', '86887398491', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your bsbclub.com.br website? \r\nHaving a high DA score, always helps \r\n \r\nGet your bsbclub.com.br to have a 50+ points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Fulton\r\n \r\nsupport@monkeydigital.co', 0),
(26, 'Elisha', 'elisha.macdonnell87@hotmail.com', '(02) 6100 9626', 'Hi,\r\nI just want to share with you a great website which provide account for SEO, affiliate marketing, dropshipping, ecommerce at cheap price. Here it is: https://seotool.club/group-buy-service\r\nExample: \r\nAhrefs account for just $15.\r\nSemrush account for just $10.\r\nAdplexity account for just $25.\r\nAdspy account for just $20.\r\nJungleScout for just $15.\r\nSTM forum for just $15.\r\nAnd about more than 30+ internet marketing tools at Affordable Price.\r\nThis website is group buy service. You can visit this link https://seotool.club/group-buy-service to check it out\r\nThank!', 0),
(27, 'Verna', 'verna.mcmann@yahoo.com', '0325 5429423', 'Hi,\r\n\r\nWe\\\'re wondering if you\\\'ve considered taking the written content from bsbclub.com.br and converting it into videos to promote on Youtube? It\\\'s another method of generating traffic.\r\n\r\nThere\\\'s a 14 day free trial available to you at the following link: https://www.vidnami.com/c/Nicholas3-vn-freetrial\r\n\r\nRegards,\r\nVerna', 0),
(28, 'Eric', 'ericjonesonline@outlook.com', '555-555-1212', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with bsbclub.com.br definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out bsbclub.com.br.\r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://www.talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(29, 'Mike MacAdam\r\n', 'no-replyDic@gmail.com', '88463627537', 'Good Day \r\n \r\nI have just took a look on your SEO for  bsbclub.com.br for its Local SEO Trend and seen that your website could use an upgrade. \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart improving your local visibility with us, today! \r\n \r\nregards \r\nMike MacAdam\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', 0),
(30, 'Eric', 'ericjonesonline@outlook.com', '555-555-1212', 'Hello, my name’s Eric and I just ran across your website at bsbclub.com.br...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://www.talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(31, 'Kieran', 'kieran@sendbulkmails.com', 'NA', 'Use SendBulkMails.com to run email campaigns from your own private dashboard.\r\n\r\nCold emails are allowed and won\\\'t get you blocked :)\r\n\r\nStarter Package 50% off sale\r\n- 1Mil emails / mo @ $99 USD\r\n- Dedicated IP and Domain Included\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n- Quick and easy setup with extended support at no extra cost.\r\n- Cancel anytime!\r\n\r\nRegards,\r\nwww.SendBulkMails.com', 0),
(32, 'Ferne', 'ferne@stardatagroup.com', 'NA', 'It is with sad regret to inform you StarDataGroup.com is shutting down.\r\n\r\nFire sale till the 7th of Feb.\r\n\r\nAny group of databases listed below is $49 or $149 for all 16 databases in this one time offer.\r\nYou can purchase it at www.StarDataGroup.com and view samples.\r\n\r\n- LinkedIn Database\r\n 43,535,433 LinkedIn Records\r\n\r\n- USA B2B Companies Database\r\n 28,147,835 Companies\r\n\r\n- Forex\r\n Forex South Africa 113,550 Forex Traders\r\n Forex Australia 135,696 Forex Traders\r\n Forex UK 779,674 Forex Traders\r\n\r\n- UK Companies Database\r\n 521,303 Companies\r\n\r\n- German Databases\r\n German Companies Database: 2,209,191 Companies\r\n German Executives Database: 985,048 Executives\r\n\r\n- Australian Companies Database\r\n 1,806,596 Companies\r\n\r\n- UAE Companies Database\r\n 950,652 Companies\r\n\r\n- Affiliate Marketers Database\r\n 494,909 records\r\n\r\n- South African Databases\r\n B2B Companies Database: 1,462,227 Companies\r\n Directors Database: 758,834 Directors\r\n Healthcare Database: 376,599 Medical Professionals\r\n Wholesalers Database: 106,932 Wholesalers\r\n Real Estate Agent Database: 257,980 Estate Agents\r\n Forex South Africa: 113,550 Forex Traders\r\n\r\nVisit www.stardatagroup.com or contact us with any queries.\r\n\r\nKind Regards,\r\nStarDataGroup.com', 0),
(33, 'Javier Jomez', 'awardnotification2021@gmail.com', '81515749158', 'LA PRIMITIVA  LOTTERY AWARD, MADRID SPAIN \r\nYour Reference: No: FU/578629K \r\nCongratulations! Your E-mail address has won With winning lucky number No:3 26 31 35 46 49, The results for the Internet users were released. \r\nThis E-mail lottery was sponsored by International software organization, Your e-mail address was attached to the lucky number  that was how your E-mail won the lump sum amount. \r\nPlease contact your claims agent/legal office: Pedro Jose, to being your claims call:Tel:+34 672 520 003 and Fax:+34 91 272 50 79 \r\nEmail: Awardnotificatios1721@gmx.com,  Email: winingnotifications2021@gmail.com. \r\nYours Sincerely. \r\nDr. Don Javier Jomez \r\nReply To This Email: Awardnotificatios1721@gmx.com \r\nReply To This Email: winingnotifications2021@gmail.com \r\nPhone: +34 672 520 000 \r\nPresident  International Relations Department.', 0),
(34, 'Mike Crossman\r\n', 'no-reply@google.com', '85148936216', 'Good Day \r\n \r\nI have just verified your SEO on  bsbclub.com.br for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\nregards \r\nMike Crossman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0),
(35, 'Jennifer', 'bornthohoran1974@yahoo.com', '077 4522 0058', 'Hi,\r\n\r\nWe are wondering if you would be interested in our service, where we can provide you with a dofollow link from Amazon (DA 96) back to bsbclub.com.br?\r\n\r\nThe price is just $77 per link.\r\n\r\nIf you\\\'d be interested in learning more, please visit us at: http://www.backlinkfaq.xyz or email me back at: LindaJenniferse8@yahoo.com\r\n\r\nKind Regards,\r\nJennifer', 0),
(36, 'Niesha Salman Abdulaziz', 'nieshasalam0812@gmail.com', '84241618911', 'Assalamalekum, \r\n \r\nI apologies for sending this email like this but Its important you reply, \r\n \r\nMy name is Niesha Al Salman Abdulaziz, daughter of H.E. (Shaikh AL Abdul married to Prince Sa\\\'Id in Saudi Arabia. Am reaching you through this way because I might not get you by phone. \r\n \r\nAs a woman in Saudi Arabia, I am restricted in some ways as a woman. Even to do business is a problem and not easy for me, so I seek your assistance. \r\n \r\nThe money involved is very huge. As a foreigner it will be easy. \r\n \r\nI will like to keep this brief until I hear from you, you can reach me on  Nieshasalam0812@gmail.com or niesha@saudiroyalfamily.live \r\n \r\nHave a nice day, \r\nNiesha Salman Abdulaziz', 0);
INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `status`) VALUES
(37, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hi, Eric here with a quick thought about your website bsbclub.com.br...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(38, 'Shawnwah', 'ahmedkirillov5@gmail.com', '81694913273', '<a href=http://zrenieblog.ru/>Detail</a>:  <a href=http://zrenieblog.ru/>http://zrenieblog.ru/</a>  http://zrenieblog.ru/ <a href=\\\"http://zrenieblog.ru/\\\">http://zrenieblog.ru/</a> \r\n歷史 \r\n六七千年前的先民就開始釣魚。周文王曾和兒子們在靈沼釣魚取樂。戰國時范蠡也愛釣魚，常把所釣之魚供給越王勾踐食用。 二十世紀八十年代，中國大陸的各級釣魚協會成立，釣魚地點也從自然水域向養殖水域過度，所釣之魚則從粗養向細養過度。人數增多、水體污染及濫捕濫撈導致釣魚難度上升。釣魚協會開始與漁民和農民簽訂文件，使更多釣者能夠在養殖水域釣魚，達到了雙贏的目的。 二十世紀九十年代初，來自台灣的懸釣法走紅大陸，各地開始建造標準釣池。 二十世紀末，發達國家的釣者提倡回顧自然，引發新一輪野釣戰，而中國的釣者則更青睞精養魚池。<>] \r\n \r\n工具 \r\n \r\n一种钓鱼竿机械部分示意图 \r\n最基本的钓具包括：鱼竿、鱼线、鱼钩、沉坨（又名沉子）、浮标（又名鱼漂）、鱼饵。<>]:1其他辅助钓具包括：失手绳、钓箱、线轮、抄网、鱼篓、渔具盒、钓鱼服、钓鱼鞋等。<>]:1 \r\n \r\n钓竿一般由玻璃纖維或碳纖維轻而有力的竿状物质製成，钓竿和鱼饵用丝线联接。一般的鱼饵可以是蚯蚓、米饭、蝦子、菜叶、苍蝇、蛆等，现代有专门制作好（多数由自己配置的半成品）的粉製鱼饵出售。鱼饵挂在鱼鉤上，不同的對象鱼有不同的釣組配置。在周围水面撒一些誘餌通常会有較好的集魚效果。 \r\n \r\n钓具 \r\n鱼竿 \r\n主条目：鱼竿 \r\n钓鱼的鱼竿按照材质包括：传统竹竿、玻璃纤维竿、碳素竿，按照钓法包括：手竿、矶竿、海竿（又名甩竿），按照所钓鱼类包括：溪流小继竿、日鲫竿（又名河内竿）、鲤竿、矶中小物竿。<>]:6-8 \r\n \r\n鱼钩 \r\n主条目：鱼钩 \r\n鱼钩就是垂钓用的钩，主要分为：有倒钩、无倒钩、毛钩。<>]:14 \r\n \r\n鱼线 \r\n主条目：鱼线 \r\n鱼线就是垂钓时绑接鱼竿和鱼钩的线，历史上曾使用蚕丝（远古日本）、发丝（江户时期日本）、马尾（西欧）、二枚贝（地中海）、蛛网丝（夏威夷）、琼麻（东南亚）、尼龙钓线（美国）。<>]:25 \r\n \r\n鱼漂 \r\n主条目：鱼漂 \r\n鱼漂又名浮标，垂钓时栓在鱼线上的能漂浮的东西，主要用于搜集水底情报，查看鱼汛，观察鱼饵存留状态，以及水底水流起伏变化。<>]:36 \r\n \r\n鱼饵 \r\n主条目：鱼饵 \r\n鱼饵分为诱饵和钓饵，是一种用来吸引鱼群和垂钓时使用的物品，钓饵分为荤饵、素饵、拟饵、拉饵。<>]:170 \r\n \r\n沉子 \r\n主条目：沉子 \r\n沉子又名沉坨、铅锤，是一种调节鱼漂的工具。<>]:45 \r\n \r\n卷线器 \r\n主条目：卷线器 \r\n卷线器主要安装在海竿和矶竿上的一种卷线的工具。<>]:63 \r\n \r\n连结具 \r\n主条目：连结具 \r\n连结具是连结鱼线与钓竿、母线与子线的一种连结物，使用最广泛的是连结环。<>]:55 \r\n \r\n识鱼 \r\n鱼类的视力不如人类，距离、宽度均无法和人类的视力比较，鱼类对水色、绿色比较敏感，鱼类的嗅觉非常灵敏，鱼类的听觉也非常灵敏，钓鲤鱼时，不能在岸上大声谈笑、走动不停，鱼类的思考能力非常弱，鱼类应对周边环境随着气象、水温、水色、潮流、流速、水量的变化而变化，于是便出现了在同一个池塘、水库、湖泊，往日钓鱼收获大，今日少，上午收获大，下午少，晴天大，雨天少等情况。<>]:114-117淡水钓鱼，中国大陆经常垂钓的鱼类对象是本地鲫鱼、日本鲫、非洲鲫、鲤鱼、游鱼、罗非鱼、黄刺鱼（黄鸭叫）、黄尾、鳊鱼、青鱼、草鱼、鲢鱼、鳙鱼，台湾经常垂钓的鱼类对象是本地鲫鱼、日本鲫、吴郭鱼（罗非鱼）、溪哥仔和红猫（粗首马口鱲）、斗鱼、罗汉鱼、苦花、三角姑（河鮠）、竹蒿头（密鱼）。<>]:117 \r\n \r\n影响鱼类的6大因素主要是：季节变更、气温高低、水的涨落、风的大小、水的清浊、天气阴晴', 0),
(39, 'David Song', 'noreply@googlemail.com', '87838311455', 'Hello, \r\nOur Investors wishes to invest in your company by offering debt financing in any viable Project presented by your Management,Kindly send your Business Project Presentation Plan Asap. \r\n \r\ndavidsong2030@gmail.com \r\n \r\nRegards, \r\nMr.David Song', 0),
(40, 'Roy Layton', 'roy.l@remarketingteams.com', '83645896316', 'My firm has developed an airtight system to move web visitors into engaged clientele. See who has been on your site, learn why they aren’t sticking around, and close that gap. \r\n \r\nChoose http://www.remarketingteams.com/  to build your digital / website funnel and start converting more leads from your web assets. \r\n \r\nEvery prospective customer that touches your brand must be tracked, traced, and enrolled into a marketing funnel in order to ensure success. \r\n \r\nRemarketing Guys does just that. Feel free to email me personally at Roy@remarketingteams.com to start converting more website viewers into customers.', 0),
(41, 'Rosaura', 'rosaura@sendbulkmails.com', 'NA', 'Use SendBulkMails.com to run email campaigns from your own private dashboard.\r\n\r\nCold emails are allowed and won\\\'t get you blocked :)\r\n\r\n- 1Mil emails / mo @ $99 USD\r\n- Dedicated IP and Domain Included\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n- Quick and easy setup with extended support at no extra cost.\r\n- Cancel anytime!\r\n\r\nRegards,\r\nwww.SendBulkMails.com', 0),
(42, 'Madison', 'madison@buy-rapid-tests.com', 'NA', 'Get your own Covid-19 test results in 15 minutes on Buy-Rapid-Tests.com\r\n\r\nSimple 3 step process - anyone can do it.\r\n\r\nWe have FDA Authorized Covid-19 Rapid Test Kits - Most orders ship standard within 48 hours.\r\n\r\nOrder minimum is only - 1 Box \r\n\r\nEach Box includes:\r\n- 25 individual Covid-19 tests cassettes\r\n- 25 blood droppers\r\n- 1 bottle of buffer/testing solution\r\n\r\nBuy as many boxes as you would like.\r\n\r\nThese tests are perfect for your organization, business, restuarant or group.\r\n\r\nPrice is $36 per test (25 tests per box) and that includes shipping to any location for $50\r\n\r\nWe offer 10% wholesale price breaks for quantities of 5 boxes or more.\r\n\r\nRegards,\r\nBuy-Rapid-Tests.com', 0),
(43, 'Mike Dowman\r\n', 'see-email-in-message@monkeydigital.co', '84329919763', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your bsbclub.com.br website? \r\nHaving a high DA score, always helps \r\n \r\nGet your bsbclub.com.br to have DA between 40 and 50 points in Moz DA with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Dowman\r\n \r\nsupport@monkeydigital.co', 0),
(44, 'MR HO CHOI', 'andrewyoung4545@gmail.com', '88918866819', 'Greetings, I have been tasked with identifying, initiating and possibly developing a business partnership with you / your company. I checked recommendation sites, corporate social networking sites, interviewed a few list investors and made a list of potential partners that identified you and your business. I visited your website and saw your products. I have to say that I am very impressed with the quality of your products. Therefore, we would like your company to ship large quantities of your product to our country for commercial use. Please contact me for more information on our requirements / orders and shipping deadlines. Best regards. HO CHOI email ..... hchoi382@gmail.com', 0),
(45, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hello, my name’s Eric and I just ran across your website at bsbclub.com.br...\r\n\r\nI found it after a quick search, so your SEO’s working out…\r\n\r\nContent looks pretty good…\r\n\r\nOne thing’s missing though…\r\n\r\nA QUICK, EASY way to connect with you NOW.\r\n\r\nBecause studies show that a web lead like me will only hang out a few seconds – 7 out of 10 disappear almost instantly, Surf Surf Surf… then gone forever.\r\n\r\nI have the solution:\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to TALK with them - literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works and even give it a try… it could be huge for your business.\r\n\r\nPlus, now that you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation pronto… which is so powerful, because connecting with someone within the first 5 minutes is 100 times more effective than waiting 30 minutes or more later.\r\n\r\nThe new text messaging feature lets you follow up regularly with new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable.\r\n \r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business, potentially converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(46, 'WilliamDrurl', 'artofnegotiations@theonlinepublishers.com', '89461274765', 'LISTENEVERYHOW – How Negotiations Work, is an easy-to-read book and pragmatic approach to get the best results from a negotiation. It is adaptable in content and style – as a story book for leisure readers, life skills manual for entrepreneurs and professionals, or even as a business school handbook. \r\n \r\nThis book is written with clarity and easy eloquence of a man who knows what he is talking about, telling captivating stories in well sequenced chapters that all end with enticing nuggets. A rudiment skill in negotiation is listening and the major themes of this book are reflective of the insights that make the difference in negotiations. \r\n \r\nYou are one click away from having this excellent book for just $5.99 https://www.amazon.com/dp/B08W5DMQV3/ref=cm_sw_r_cp_awdb_t1_6E8T8CE1VW6P49PPQF8F_nodl', 0),
(47, 'Bobbie', 'bobbie@stardatagroup.com', 'NA', 'Do you need more clients? \r\n\r\nWe have amazing databases starting at $9.99 until the end of the Month!\r\n\r\nVisit us at StarDataGroup.com', 0),
(48, 'SendBulkMails.com', 'clarissa@sendbulkmails.com', 'NA', 'SendBulkMails.com allows you to reach out to clients via cold email marketing.\r\n\r\n- 1Mil emails starter package\r\n- Dedicated IP and Domain Included\r\n\r\n- Detailed statistical reports (delivery, bounce, clicks etc.)\r\n\r\n- Quick and easy setup with extended support at no extra cost.\r\n\r\n- Cancel anytime!\r\n\r\nSendBulkMails.com', 0),
(49, 'Mike Marshman\r\n', 'no-replyDic@gmail.com', '85521965193', 'Hi \r\n \r\nI have just took a look on your SEO for  bsbclub.com.br for the Local ranking keywords and seen that your website could use a boost. \r\n \r\nWe will enhance your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart improving your local visibility with us, today! \r\n \r\nregards \r\nMike Marshman\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', 0),
(50, 'James Lambert', 'lambertj283@gmail.com', '84817348383', 'Good day \r\n \r\nI`m seeking a reputable company/individual to partner with in a manner that would benefit both parties. The project is worth $24 Million so if interested, kindly contact me through this email jameslambert@lambert-james.com for clarification. \r\n \r\nI await your response. \r\n \r\nThanks, \r\n \r\nJames Lambert', 0),
(51, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hi, Eric here with a quick thought about your website bsbclub.com.br...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(52, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with bsbclub.com.br definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out bsbclub.com.br.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(53, 'Ray Kinlock', 'danialuciano8439@gmail.com', '', '', 0),
(54, 'Mike Waller\r\n', 'no-reply@google.com', '85747996896', 'Hello \r\n \r\nI have just analyzed  bsbclub.com.br for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\nregards \r\nMike Waller\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', 0),
(55, 'Moshe Fossum', 'EdwardoDepasquale@gmail.com', '', '', 0),
(56, 'Mario Gonzalez', 'mysolutions360@gmail.com', '88846566943', 'Hi, are you still in charge of bsbclub.com.br ? \r\n \r\nIf you take 30 sec to read this email, we could help you 2X-5X your business. \r\n \r\nMost SEO companies will ask you to pay upfront with no guarantee that your website will rank on Google. \r\n \r\nWe are different ... \r\n \r\nOur company specializes in Pay Per Performance SEO. Which means – \r\nWe get your business on the first page of Google before we get paid for our service. \r\n \r\nI know that’s a bold statement but we can back it up with 9 years of success in this industry. \r\n \r\nIf you’re interested in getting on the first page of Google, and only pay if you get there, \r\nlet me know when is a good time for a call. \r\n \r\nGet full details here or send us a message to mcmarketing360@hotmail.com: \r\nhttps://getmoreclientsfaster.com/performance-based-seo/', 0),
(57, 'Deena', 'deena@sesforyou.com', 'NA', 'Hi,\r\n \r\nI\\\'m always asked what is the quickest way to make money online, when you are just starting out? Well here\\\'s the definitive answer that question:\r\n \r\n==> https://sesforyou.com\r\n \r\nNew Book Reveals How I Built A 7-Figure Online Business Using Nothing But Ethical Email Marketing To Drive Revenue, Sales and Commissions...\r\n \r\n==> https://sesforyou.com\r\n \r\nRegards,\r\nSesForYou.com', 0),
(58, 'Richard Wahl', 'richardwahl1224@hotmail.com', '88278239323', 'Hello, \r\nHope this email finds you well. \r\nThis is very big news and a special message to you. \r\nI am the winner of 533-Million, in the Mega Millions Jackpot. Due to the current pandemic, I\\\'ve decided to join other world philanthropists to do what is within my capacity to bring relief to a few people and their local community, globally, through a random selection of web addresses by my team. \r\nYour website has surfaced as one of the lucky recipients of this selection and with a heart of warm benevolence, I wish you a big congratulations. \r\nHere is your donation code: RFECD00032020FP \r\nWhen replying to this email, please ensure you state your donation code for verification by my team. \r\nMore details are on my YouTube channel. \r\nWATCH ME HERE: https://www.youtube.com/watch?v=tne02ExNDrw \r\nContact WhatsApp: +1 (609) 293-4492 \r\ncontact the financial team via email only when you don’t have WhatsApp:  globalrelief.richardwahl072@financier.com \r\nCongratulations once again! \r\nKind regards, \r\nRichard Wahl.', 0),
(59, 'Chris', 'wo.rdpre.s.s2.00.21.9.88+rumblegu@gmail.com', '070 8313 4214', 'Hi There,\r\n\r\nAre you presently utilizing Wordpress/Woocommerce or maybe do you actually think to make use of it as time goes by ? We provide around 2500 premium plugins and also themes to download : https://shortva.xyz/uRoBC\r\n\r\nThank You,\r\n\r\nChris', 0),
(60, 'Hanna Brown', 'chitchatchannel01@gmail.com', '81725811329', 'The world after COVID19 is shaping up. Businesses that had virtual platforms performed best. The future will be more of the same. https://ChitChatChannel.com fills that gap by providing you with a Social Business Page— like Facebook, but which plugs into its own real-time ordering /shipping system, instantly creating an additional outlet for your business. It has other corporate features like its own \\\'zoom\\\' or CHAD for Agile Tech Development. \r\nSo, whatever your business: Restaurateur, Influencer, Retailer, Realtor, Educator, Tech-developer or what have you — you are right there, building your brand or team, and generating additional revenues or efficiencies through your new outlet – and partaking in the future digital economy. Sign up at https://chitchatchannel.com. Add me up on LinkedIn at: https://www.linkedin.com/in/hanna-brown-096a22b6', 0),
(61, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hi, Eric here with a quick thought about your website bsbclub.com.br...\r\n\r\nI’m on the internet a lot and I look at a lot of business websites.\r\n\r\nLike yours, many of them have great content. \r\n\r\nBut all too often, they come up short when it comes to engaging and connecting with anyone who visits.\r\n\r\nI get it – it’s hard.  Studies show 7 out of 10 people who land on a site, abandon it in moments without leaving even a trace.  You got the eyeball, but nothing else.\r\n\r\nHere’s a solution for you…\r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  You’ll know immediately they’re interested and you can call them directly to talk with them literally while they’re still on the web looking at your site.\r\n\r\nCLICK HERE https://talkwithwebvisitors.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be huge for your business – and because you’ve got that phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately… and contacting someone in that 5 minute window is 100 times more powerful than reaching out 30 minutes or more later.\r\n\r\nPlus, with text messaging you can follow up later with new offers, content links, even just follow up notes to keep the conversation going.\r\n\r\nEverything I’ve just described is extremely simple to implement, cost-effective, and profitable. \r\n \r\nCLICK HERE https://talkwithwebvisitors.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more eyeballs into leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE https://talkwithwebvisitors.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithwebvisitors.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(62, 'FloydMoime', 'qmlya@goposts.site', '82782645127', 'Free sex dating in your city, here <a href=https://bit.ly/2LtgS3Z>https://bit.ly/2LtgS3Z</a>', 0),
(63, 'Davidgot', 'sofiyasamylkin1987911be1@bk.ru', '87469891951', 'bsbclub.com.br gfgbfhtghrgfgfhtggyiyuiyhfbdfhdn', 0),
(64, 'Mike Gardner\r\n', 'see-email-in-message@monkeydigital.co', '81458343489', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your bsbclub.com.br website? \r\nHaving a high DA score, always helps \r\n \r\nGet your bsbclub.com.br to have a DA between 50 to 60 points in Moz with us today and rip the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nNEW: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nthank you \r\nMike Gardner\r\n \r\nsupport@monkeydigital.co \r\nMonkey Digital', 0),
(65, 'Cecila', 'cecila.eubanks@hotmail.com', '360-465-0807', 'Want more visitors for your website? Get thousands of keyword targeted visitors delivered directly to your site. Increase your profits super fast. We guarantee results in as little as 72 hours. To get info Check out: http://bit.ly/niche-targeted-website-traffic', 0),
(66, 'Eric', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Good day, \r\n\r\nMy name is Eric and unlike a lot of emails you might get, I wanted to instead provide you with a word of encouragement – Congratulations\r\n\r\nWhat for?  \r\n\r\nPart of my job is to check out websites and the work you’ve done with bsbclub.com.br definitely stands out. \r\n\r\nIt’s clear you took building a website seriously and made a real investment of time and resources into making it top quality.\r\n\r\nThere is, however, a catch… more accurately, a question…\r\n\r\nSo when someone like me happens to find your site – maybe at the top of the search results (nice job BTW) or just through a random link, how do you know? \r\n\r\nMore importantly, how do you make a connection with that person?\r\n\r\nStudies show that 7 out of 10 visitors don’t stick around – they’re there one second and then gone with the wind.\r\n\r\nHere’s a way to create INSTANT engagement that you may not have known about… \r\n\r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It lets you know INSTANTLY that they’re interested – so that you can talk to that lead while they’re literally checking out bsbclub.com.br.\r\n\r\nCLICK HERE http://talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nIt could be a game-changer for your business – and it gets even better… once you’ve captured their phone number, with our new SMS Text With Lead feature, you can automatically start a text (SMS) conversation – immediately (and there’s literally a 100X difference between contacting someone within 5 minutes versus 30 minutes.)\r\n\r\nPlus then, even if you don’t close a deal right away, you can connect later on with text messages for new offers, content links, even just follow up notes to build a relationship.\r\n\r\nEverything I’ve just described is simple, easy, and effective. \r\n\r\nCLICK HERE http://talkwithcustomer.com to discover what Talk With Web Visitor can do for your business.\r\n\r\nYou could be converting up to 100X more leads today!\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – and it even includes International Long Distance Calling. \r\nYou have customers waiting to talk with you right now… don’t keep them waiting. \r\nCLICK HERE http://talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\\\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=bsbclub.com.br\r\n', 0),
(67, 'Mike Blare\r\n', 'no-replyDic@gmail.com', '84434546315', 'Greetings \r\n \r\nI have just took a look on your SEO for  bsbclub.com.br for  the current Local search visibility and seen that your website could use an upgrade. \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nStart improving your local visibility with us, today! \r\n \r\nregards \r\nMike Blare\r\n \r\nSpeed SEO Digital Agency \r\nsupport@speed-seo.net', 0),
(68, 'Wendell', 'wendell@bestlocaldata.com', 'NA', 'Hello,\r\n\r\nBestLocalData.com has a special package you get any group of databases for $49 or $249 for all 16 databases and unlimited emails for a year(Domain, IP, Dashboard included).\r\n\r\nYou can purchase it on BestLocalData.com and see samples if you are interested.\r\n', 0),
(69, 'Ellis', 'ellis.lahr@gmail.com', '(11) 3465-7795', 'Your All In One Solution For Creating All The Content You\\\'ll Ever Need.\r\n\r\nProprietary AI Turns YouTube Videos Into Traffic Getting Articles At The Press Of A Button!\r\n\r\nWe’ve Been Getting Free Autopilot Traffic From Google Without SEO Experience For Over 2 Years By Converting Others YouTube Videos Into Articles…\r\n\r\nhttps://warriorplus.com/o2/a/gmvfs/0', 0),
(70, 'Alison Vitor Bucker', 'originalalison@gmail.com', '111111111', 'sdgdfg', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `extrato_clientes`
--

CREATE TABLE `extrato_clientes` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_proc` datetime NOT NULL,
  `valor` float NOT NULL,
  `type` int(11) NOT NULL,
  `descricao` varchar(550) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `extrato_clinicas`
--

CREATE TABLE `extrato_clinicas` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `data_proc` datetime NOT NULL,
  `valor` float NOT NULL,
  `type` int(11) NOT NULL,
  `descricao` varchar(550) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `extrato_clinicas`
--

INSERT INTO `extrato_clinicas` (`id`, `id_clinica`, `data_proc`, `valor`, `type`, `descricao`, `status`) VALUES
(15, 1, '2020-10-23 15:05:37', 9.5, 1, 'Alison Vitor Bucker Fez uma Consulta na sua clinica!', 1),
(14, 1, '2020-10-23 14:37:54', 9.5, 1, 'Alison Vitor Bucker Fez uma Consulta na sua clinica!', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `hashs`
--

CREATE TABLE `hashs` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `hash` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hashs`
--

INSERT INTO `hashs` (`id`, `id_cliente`, `hash`, `status`) VALUES
(2, 6, '165908', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hashs_clinicas`
--

CREATE TABLE `hashs_clinicas` (
  `id` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `hash` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `hashs_clinicas`
--

INSERT INTO `hashs_clinicas` (`id`, `id_clinica`, `hash`, `status`) VALUES
(9, 1, '573901', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `s_o` varchar(20) NOT NULL,
  `cidade` int(100) NOT NULL,
  `date_ini` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `leads`
--

INSERT INTO `leads` (`id`, `email`, `ip`, `s_o`, `cidade`, `date_ini`, `status`, `type`) VALUES
(24, 'sfg', '', '', 0, '2020-09-17 16:02:05', 1, 0),
(25, 'dianathamlima@gmail.com', '189.94.137.33', 'Linux', 0, '2020-09-25 11:35:02', 1, 1),
(26, 'ntmyvuwr@zeroe.ml', '134.17.35.17', 'Windows', 0, '2020-12-28 16:06:01', 0, 1),
(27, 'mnerrshr@laste.ml', '134.17.35.17', 'Windows', 0, '2020-12-29 08:27:42', 0, 1),
(28, 'fsiptiyy@supere.ml', '46.216.17.190', 'Windows', 0, '2020-12-29 13:21:42', 0, 1),
(29, 'oldman2022@mail.ru', '46.216.34.177', 'Windows', 0, '2021-01-25 09:03:32', 0, 1),
(30, 'adquiraseucartao@gmail.com', '::1', 'Windows', 0, '2021-04-26 00:27:34', 0, 1),
(31, 'originalalison@gmail.com', '::1', 'Windows', 0, '2021-04-26 01:04:37', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(300) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `discount` int(11) NOT NULL DEFAULT 0,
  `featured` int(1) NOT NULL DEFAULT 0,
  `link` varchar(550) NOT NULL DEFAULT '0',
  `email` varchar(550) NOT NULL DEFAULT '0',
  `telefone` varchar(550) NOT NULL DEFAULT '0',
  `map` varchar(550) NOT NULL DEFAULT '0',
  `estado` varchar(550) NOT NULL,
  `rua` varchar(550) NOT NULL,
  `localizacao` varchar(550) NOT NULL,
  `la-icon` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `id_admin`, `id_category`, `author`, `description`, `title`, `body`, `date_added`, `discount`, `featured`, `link`, `email`, `telefone`, `map`, `estado`, `rua`, `localizacao`, `la-icon`, `status`) VALUES
(51, 2, 7, 'Almir Kool', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', 'BCS Club', 'A Excellence Group, foi fundado pelo senhor Weberth Martins dos Santos, com o objetivo de criar oportunidades onde discentes e docentes pudessem ter acesso à um ensino de qualidade, através de cursos de formação continuada e espaço plural para a divulgação de pesquisas científicas. Seu impulsionamento nasceu do convívio com instituições de ensino, vendo de perto suas dificuldades em mecanismos que colaborassem com ferramentas de aprimoramento e aperfeiçoamento. Dessa forma para atender os desafios do mundo globalizado, nasceu a Excellence Group, uma instituição apta à preparar profissionais que imprimam em suas frentes de trabalho a marca da seriedade e da responsabilidade, criando um singular espaço de pensadores, com o desejo de contribuir para a construção de um novo processo de aprendizagem que mude a cultura de ensino em nosso país (Brasil) que padece por reformulações.\r\n\r\nNossa principal missão é oferece cursos de atualização e aperfeiçoamento na área de Educação, Serviço Social, Segurança, Educação, Psicologia e Saúde, promovendo ensino de qualidade, compromissado com a extensão dos saberes, com a produção e a disseminação de conhecimentos, visando formar profissionais comprometidos, com uma postura ética, contribuindo para a sua inserção no contexto social e de trabalho como agente transformador.', '2020-08-05 10:31:29', 10, 1, 'www.bcsclub.com', '', '27 99801-1100', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14966.086783723498!2d-40.3307894!3d-20.3200558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb67b2517d9003d3!2sEdif%C3%ADcio%20Jusmar!5e0!3m2!1spt-BR!2sbr!4v1619411889468!5m2!1spt-BR!2sbr', 'Espírito Santo', 'Av. Champs', 'Vila Velha', '', 1),
(52, 2, 7, 'Alison Bucker', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', 'BCS Medical', 'A AS Assessoria e Consultoria em Educação, nome fantasia X EDUCACIONAL., é uma empresa de consultoria e assessoria educacional especializada em:\r\n\r\nAssessoria para reconhecimento de diplomas estrangeiros de mestrado e doutorado no Brasil.\r\nAssessoria para revalidação de diplomas de graduação.\r\nAssessoria para revalidação de pós-graduação lato sensu.\r\nPré-análise técnica de dissertação ou tese para fins de reconhecimento.\r\nGestão educacional e construção de conteúdo.\r\nRegulação, expansão, reestruturação e redesenho de IES.\r\nGeração de caixa e apoio a mantenedores na aquisição, venda ou fusão de IES.\r\nPlataforma educacional e gerenciamento escolar.\r\nAmbiente virtual de aprendizagem.\r\nAssessoria no credenciamento de IES junto ao MEC.\r\nAssessoria no reconhecimento de cursos de graduação no Brasil.\r\n\r\nSe você busca por uma empresa que lhe ofereça a segurança na execução do serviço com o resultado competente, então lhe apresentamos a X EDUCACIONAL.\r\n', '2020-08-06 10:19:26', 0, 1, 'www.bcsmedical.com', '', '27 3029 1111', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14966.086783723498!2d-40.3307894!3d-20.3200558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb67b2517d9003d3!2sEdif%C3%ADcio%20Jusmar!5e0!3m2!1spt-BR!2sbr!4v1619411889468!5m2!1spt-BR!2sbr', 'Espírito Santo', 'Av. Bois', 'Vila Velha', '', 1),
(53, 2, 7, 'Ricardo ISolutions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the ', 'BCS Bank', 'A ACU – Absoulute Christian University é uma instituição de  religiosa, segundo o estabelecido na seção 1005.06 (1)(f), do estado da Flórida (USA), e amparada pelo regimento interno do código administrativo 6E-5.001. Por não estar sob a jurisdição ou competência da Comissão de Educação Independente, não é obrigada a obter licenciamento para exercer atividades de ensino, portanto autônoma em suas diretrizes pedagógicas e acadêmicas, atendendo ao seu regimento interno, na prática de ensino de qualidade e do incentivo à pesquisa em diversas áreas do conhecimento.\r\n\r\nReconhecida pela Comissão de Educação Independente da Flórida,oferece os mais variados cursos distribuídos em programas de extensão, mestrado e doutorado.\r\n\r\nEstes programas são reconhecidos em diversos países e estão beneficiando estudantes do mundo inteiro.\r\n\r\nA instituição mantém o compromisso de ofertar ensino de qualidade, na modalidade totalmente online, atendendo às necessidades do mercado, inovações tecnológicas educacionais, e vem se tornando uma excelência em sua área de atuação.\r\n\r\nSeu compromisso é promover o desenvolvimento social e espiritual, por meio do conhecimento, com valores éticos, senso de relevância, liberdade e democracia, aberta ao mundo para a aprendizagem, pesquisa e desenvolvimento permanente do talento humano, oferecendo uma grande contribuição não somente para seus discentes, como também para a sociedade.\r\n\r\nFocada em um público-alvo composto por adultos que não possuem disponibilidade de horário, a ACU – ABSOULUTE CHRISTIAN UNIVERSITY inovou ao apresentar ao seu público os programas doutrinários de pós-graduação stricto sensu internacional que, permitem a todos conciliar sua vida pessoal, familiar à seus estudos, agregando uma bagagem internacional enriquecedora ao seu aperfeiçoamento intelectual.\r\n\r\nOs resultados alcançados no âmbito acadêmicos são surpreendentes e podem ser verificados por meio de avaliações externas, que comprovam a confiabilidade institucional com elevados índices de produção intelectual e científica.', '2020-08-10 10:59:17', 0, 1, 'www.bcsbank.com', '', '+1 407 3092 2250', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14966.086783723498!2d-40.3307894!3d-20.3200558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb67b2517d9003d3!2sEdif%C3%ADcio%20Jusmar!5e0!3m2!1spt-BR!2sbr!4v1619411889468!5m2!1spt-BR!2sbr', 'Espírito Santo', 'R. Sete', 'Vila Velha', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_comments`
--

CREATE TABLE `posts_comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_images`
--

CREATE TABLE `posts_images` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `urlf` varchar(36) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts_images`
--

INSERT INTO `posts_images` (`id`, `id_post`, `urlf`) VALUES
(18, 43, '90df748232a6fb649273606a325317ad.jpg'),
(19, 43, '90df748232a6fb649273606a325317ad.jpg'),
(21, 45, '90df748232a6fb649273606a325317ad.jpg'),
(22, 45, '90df748232a6fb649273606a325317ad.jpg'),
(23, 45, '90df748232a6fb649273606a325317ad.jpg'),
(24, 34, '90df748232a6fb649273606a325317ad.jpg'),
(25, 46, '90df748232a6fb649273606a325317ad.jpg'),
(26, 47, '90df748232a6fb649273606a325317ad.jpg'),
(27, 47, '90df748232a6fb649273606a325317ad.jpg'),
(28, 48, '90df748232a6fb649273606a325317ad.jpg'),
(29, 49, '90df748232a6fb649273606a325317ad.jpg'),
(30, 50, '90df748232a6fb649273606a325317ad.jpg'),
(31, 51, '90df748232a6fb649273606a325317ad.jpg'),
(33, 51, '90df748232a6fb649273606a325317ad.jpg'),
(34, 51, '90df748232a6fb649273606a325317ad.jpg'),
(35, 51, '90df748232a6fb649273606a325317ad.jpg'),
(36, 51, '90df748232a6fb649273606a325317ad.jpg'),
(37, 51, '90df748232a6fb649273606a325317ad.jpg'),
(40, 55, '90df748232a6fb649273606a325317ad.jpg'),
(42, 53, '90df748232a6fb649273606a325317ad.jpg'),
(43, 52, '90df748232a6fb649273606a325317ad.jpg'),
(44, 56, '90df748232a6fb649273606a325317ad.jpg'),
(45, 57, '90df748232a6fb649273606a325317ad.jpg'),
(46, 54, '90df748232a6fb649273606a325317ad.jpg'),
(47, 58, '90df748232a6fb649273606a325317ad.jpg'),
(48, 59, '90df748232a6fb649273606a325317ad.jpg'),
(49, 60, '90df748232a6fb649273606a325317ad.jpg'),
(50, 61, '90df748232a6fb649273606a325317ad.jpg'),
(51, 62, '90df748232a6fb649273606a325317ad.jpg'),
(52, 63, '90df748232a6fb649273606a325317ad.jpg'),
(53, 64, '90df748232a6fb649273606a325317ad.jpg'),
(54, 65, '90df748232a6fb649273606a325317ad.jpg'),
(55, 66, '90df748232a6fb649273606a325317ad.jpg'),
(56, 67, '90df748232a6fb649273606a325317ad.jpg'),
(57, 68, '90df748232a6fb649273606a325317ad.jpg'),
(58, 69, '90df748232a6fb649273606a325317ad.jpg'),
(59, 70, '90df748232a6fb649273606a325317ad.jpg'),
(60, 71, '90df748232a6fb649273606a325317ad.jpg'),
(61, 72, '90df748232a6fb649273606a325317ad.jpg'),
(62, 73, '90df748232a6fb649273606a325317ad.jpg'),
(63, 74, '90df748232a6fb649273606a325317ad.jpg'),
(64, 75, '90df748232a6fb649273606a325317ad.jpg'),
(68, 77, '90df748232a6fb649273606a325317ad.jpg'),
(69, 76, '90df748232a6fb649273606a325317ad.jpg'),
(70, 78, '90df748232a6fb649273606a325317ad.jpg'),
(71, 79, '90df748232a6fb649273606a325317ad.jpg'),
(72, 80, '90df748232a6fb649273606a325317ad.jpg'),
(74, 81, '90df748232a6fb649273606a325317ad.jpg'),
(75, 82, '90df748232a6fb649273606a325317ad.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clinicas`
--
ALTER TABLE `clinicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clinicas_categorias`
--
ALTER TABLE `clinicas_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consultas_marcadas`
--
ALTER TABLE `consultas_marcadas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `extrato_clientes`
--
ALTER TABLE `extrato_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `extrato_clinicas`
--
ALTER TABLE `extrato_clinicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hashs`
--
ALTER TABLE `hashs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hashs_clinicas`
--
ALTER TABLE `hashs_clinicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_comments`
--
ALTER TABLE `posts_comments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_images`
--
ALTER TABLE `posts_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `clinicas`
--
ALTER TABLE `clinicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clinicas_categorias`
--
ALTER TABLE `clinicas_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `consultas_marcadas`
--
ALTER TABLE `consultas_marcadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de tabela `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de tabela `extrato_clientes`
--
ALTER TABLE `extrato_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `extrato_clinicas`
--
ALTER TABLE `extrato_clinicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `hashs`
--
ALTER TABLE `hashs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `hashs_clinicas`
--
ALTER TABLE `hashs_clinicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `posts_comments`
--
ALTER TABLE `posts_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `posts_images`
--
ALTER TABLE `posts_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
