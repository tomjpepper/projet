-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 16 Novembre 2014 à 13:07
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet1`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL DEFAULT '',
  `mot_de_passe` varchar(32) NOT NULL DEFAULT '',
  `civilite` varchar(32) NOT NULL DEFAULT '',
  `nom` varchar(64) NOT NULL DEFAULT '',
  `prenom` varchar(64) NOT NULL DEFAULT '',
  `adresse` varchar(255) NOT NULL DEFAULT '',
  `code_postal` int(5) NOT NULL DEFAULT '0',
  `ville` varchar(64) NOT NULL DEFAULT '',
  `pays` varchar(32) NOT NULL DEFAULT '',
  `telephone` int(10) NOT NULL DEFAULT '0',
  `img_client` varchar(64) NOT NULL DEFAULT './images/default_logo_user.png',
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `email`, `mot_de_passe`, `civilite`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `pays`, `telephone`, `img_client`) VALUES
(108, 'tom.pepper@hotmail.fr', 'fdeec3e59701940230d519d6f1803c8d', 'mr', 'Pepper', 'Tom', 'La berteliere ', 79450, 'Adilly', 'France', 640254578, './images/default_logo_user.png'),
(109, 'saralouisemichel@hotmail.fr', '5e7970b83d343f765ed8f7ee042cdc78', 'mme', 'michel', 'sara', 'la grande motte', 79450, 'saint aubin le cloud', 'france', 754868778, './images/default_logo_user.png');

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE IF NOT EXISTS `personnages` (
  `id_personnage` int(2) NOT NULL,
  `Nom` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `img_personnage` varchar(128) NOT NULL,
  PRIMARY KEY (`id_personnage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personnages`
--

INSERT INTO `personnages` (`id_personnage`, `Nom`, `description`, `img_personnage`) VALUES
(1, 'Sheldon Lee Cooper', 'C’est l''ami et colocataire de Leonard. Il possède un QI de 187, ce qui le place parmi les personnes les plus intelligentes de la planète (il est d''ailleurs communément nommé Un des plus grands cerveaux du XXIe siècle . Il est ainsi entré à l''université à l''âge de 11 ans et a obtenu son doctorat à seize ans (il en a d''ailleurs obtenu un deuxième depuis lors). Il semble souffrir du syndrome d''Asperger, qui se manifesterait notamment par des obsessions majoritairement en rapport avec l''ordre et le rangement, ou par le fait qu''il doive s''asseoir à la même place sur le canapé de l''appartement (« my spot » littéralement, mon endroit). Cependant, les scénaristes affirment qu''il ne souffre pas de ce syndrome. Il n''a que de vagues notions sur la manière de communiquer avec un autre être humain. Il ne comprend pas pourquoi, par exemple, une conversation débute généralement par « Bonjour, comment ça va ? » et interprète d''ailleurs la question dans le sens « Comment je dois me sentir, maintenant ? » au premier degré en proposant des réponses : « Fatigué ? Affamé ? ». Il cherche pourtant à comprendre le fonctionnement des rapports humains, mais il essaie selon les méthodes du physicien théoricien qu''il est, à savoir de manière rigoureuse et quasi-mathématique. En outre, il pense que les « conventions sociales » sont inutiles et inintéressantes. Il est en concurrence permanente avec Leslie Winkle, collègue de travail qui le méprise et contre qui il a beaucoup de mal à se défendre. Concurrence remplacée dans la quatrième et cinquième saisons par Barry Kripke, collègue de Leonard et Sheldon, cordialement détesté par ce dernier.', './image/9.jpg'),
(2, 'Leonard Leakey Hofstadter', 'Personnage central de la série, Leonard a un caractère plus équilibré et sociable que celui de ses amis. Il se dit intolérant au lactose car quand il en consomme, il a des gaz. Il est doté d''un QI de 173.\r\n\r\nIl est le premier à établir le contact avec Penny et l''inclut petit à petit dans son cercle d''amis, jusqu''alors plutôt isolé et allergique à la nouveauté. Dès le premier épisode, il exprime son espoir de parvenir à sortir avec Penny : « Nos enfants seront beaux et intelligents » (espoir immédiatement refroidi par Sheldon qui ajoute : « ainsi qu''imaginaires »).\r\n\r\nIl fait également du violoncelle depuis son enfance (« Mes parents ont dû penser que de m''appeler Leonard et m''avoir fait sauter des classes ne m''avait pas rapporté assez de raclées »).\r\n\r\nSon père est anthropologue. Sa mère est docteur en neurosciences et considère Leonard comme étant le moins intelligent de la famille bien qu''il ait un doctorat de physique expérimentale.', './image/8.jpg'),
(3, 'Penny', 'Penny est le diminutif de Penelope. La nouvelle voisine de Leonard et Sheldon est une Américaine moyenne, originaire de Omaha (saison 1, épisode 1). Elle travaille comme serveuse dans la chaîne de restauration The Cheesecake Factory et désire devenir actrice. Elle a déménagé après sa séparation avec son ex-petit ami de quatre ans, Kurt. Elle devient de plus en plus proche de ses voisins au fur et à mesure des épisodes. Bien qu''elle sache que Leonard et Sheldon sont des geeks, elle va les aider à mieux comprendre le comportement social des autres gens, qui échappe à Sheldon.\r\n\r\nSi au début de la série elle apparait comme le modèle type de la « blonde écervelée », son personnage prend vite de l''importance. Spontanée, sans complexe et dénuée de tout diplôme et connaissances supérieures, elle incarne exactement l''opposé de ce qu''est le groupe de geeks.', './image/7.jpg'),
(4, 'Howard Joel Wolowitz', 'Wolowitz est ingénieur au département de physique appliquée de Caltech. Juif et vivant encore chez sa mère (jusqu''à la sixième saison), il est obsédé par les femmes et le sexe. Abandonné par son père et étouffé par une mère possessive, à presque 30 ans, il n''a toujours pas réglé son complexe d''Œdipe. Très optimiste, il pense être un excellent séducteur et est toujours à la recherche de nouvelles techniques de drague (souvent discutables). Il connaît, ou du moins prétend connaître, sept langues : l''anglais, le français, le mandarin, le russe, l''arabe, le persan et le klingon. Il va régulièrement chez Leonard et Sheldon, le plus souvent accompagné de Rajesh. Il est également allergique aux cacahuètes, lesquelles ont pour effet de le faire enfler. Contrairement à ses amis, il ne possède pas de doctorat mais un master de génie du MIT. Il se fait d''ailleurs régulièrement dénigrer à ce propos par Sheldon et son supérieur le Dr Gablehauser, ce dernier répondant à sa tentative pour se défendre « I''ve got a masters degree (j''ai [tout de même] un master) ! Who doesn''t? (Qui n''en a pas ?) ». Il est pourtant souvent le seul à pouvoir coordonner leurs activités ou à pouvoir trouver des solutions pratiques : diagrammes, conceptions de robots… Il travaille la plupart du temps pour la NASA, et tente d''ailleurs de s''en servir pour draguer.\r\n\r\nSon style vestimentaire plus qu''excentrique est néanmoins toujours riche en surprise. En témoignent les nombreuses boucles de ses ceintures toujours plus farfelues les unes que les autres (Batman, Pac Man, Manette Nes…).', './image/6.jpg'),
(5, 'Rajesh « Raj » Ramayan Koothrappali', 'Sa principale caractéristique est son incapacité à s''adresser à une femme ou de parler en présence de femmes autrement qu''en chuchotant à l''oreille de ses amis, sauf lorsqu''il a bu de l''alcool (ou croit en avoir bu) ou lorsqu''il est sous l''influence de puissants neuroleptiques qui lui confèrent alors une attitude de séducteur charismatique et accrocheur. Son père est gynécologue, ce qui lui assure un train de vie plutôt confortable, alors que Raj essaye souvent de se faire passer pour un enfant sorti de la misère. Ses parents sont d''ailleurs assez intrusifs dans sa vie, en voulant le forcer à rencontrer des filles de leurs relations. Raj est d''origine indienne. Il semble ne pas apprécier son pays d''origine (il fera tout pour ne pas y retourner), et en supporte mal la cuisine. Il est la plupart du temps avec Howard, et a une relation parfois ambiguë avec lui, à la limite de la relation de couple, ce que la mère de Leonard n''hésitera pas à souligner. Il serait selon l''épisode 3 de la troisième saison synesthète, associant son odorat à sa vue.\r\n\r\n    À partir du dernier épisode de la sixième saison, il arrive à communiquer avec les femmes sans boire d''alcool (notamment avec Penny) sans s''en rendre compte. Lorsqu''il le réalise, il n''arrête plus la communication avec les femmes. ', './image/5.jpg'),
(6, 'Bernadette Maryann Rostenkowski', 'Bernadette est une serveuse au Cheesecake Factory, c''est le moyen pour elle de payer des études supérieures en microbiologie. Elle est une des collègues de Penny. Elle est allée dans une école catholique et ne peut pas mentir à cause de son enseignement. Elle est la petite amie d''Howard. Il l''a connue grâce à Penny. Au début, elle et Howard ne s''entendent pas car ils semblent n''avoir rien en commun. Quand ils découvrent qu''ils ont tous les deux une mère autoritaire, ils ressentent une alchimie entre eux. Par la suite, Howard réalise que Bernadette présente une réelle opportunité de développer une relation durable et de manière impulsive, il propose à Bernadette de l''épouser. Bien que Bernadette rejette son offre, ils restent en couple pendant un certain temps. Plus tard, Howard chante une chanson sincère pour elle au Cheesecake Factory, que Penny trouve assez gênante mais que Bernadette trouve romantique. Finalement, Bernadette décide de rompre après qu''elle a découvert que Howard, via son personnage du jeu World of Warcraft a des relations sexuelles avec un autre personnage en ligne. Plus tard, Bernadette et Howard se réconcilient et reprennent leur relation. Dans l''épisode La Métamorphose de la colocation Bernadette obtient son doctorat. Cela rend jaloux Howard, après une dispute, elle lui achète une montre Rolex, qu''il interprète comme un signe qu''elle gagne plus que lui. Howard et Bernadette sont mariés depuis le dernier épisode de la cinquième saison.\r\n\r\nElle dispose d''un sens moral très personnel, riant aisément à des évènements catastrophiques ou parlant ouvertement des libertés que prend son laboratoire pharmaceutique avec la santé publique sans en esquisser la moindre gène. Elle est également dotée d''un sens de la compétition féroce, au point d''effrayer quiconque lui servant de partenaire lors d''un jeu.', './image/10.jpg'),
(7, 'Amy Farrah Fowler', 'Amy est une neurobiologiste. Rajesh et Howard l''ont rencontrée sur un site de rencontre en ligne après avoir secrètement créé un compte sous le nom de Sheldon. Sheldon et Amy ont de nombreux traits communs. Une fois qu''elle a rencontré Sheldon, elle devient, comme le dit Sheldon, une fille qui est son amie mais pas sa « petite amie ». Ils ont brièvement mis fin à leur amitié à la suite d''une dispute concernant l''importance comparée de la physique théorique et de la neurobiologie. Ils ne communiquent initialement que via message texte et occasionnellement via webcam. En plus d''être amie avec Sheldon, Amy tente également de lier une amitié avec Penny et Bernadette (elle considère rapidement Penny comme sa meilleure amie) mais les met souvent mal à l''aise par sa désinvolture en discutant ouvertement de sujets comme l''anatomie ou l''hygiène féminines.\r\n\r\nDans Le Facteur bienfaisant, il est révélé qu''elle est techniquement fiancée à un prince saoudien, qui est la source d''une grande partie du financement de son laboratoire.\r\n\r\nElle devient par la suite la petite amie officielle de Sheldon et mettent en place un « contrat relationnel » avec la signature de chacun. Amy trouve ce procédé très romantique. Initialement présentée comme un « clone féminin » de Sheldon, elle devient plus sociale au contact de Bernadette et de Penny. Elle montre quelques velléités à « consommer » sa relation avec Sheldon, au grand désespoir de celui-ci', './image/11.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
