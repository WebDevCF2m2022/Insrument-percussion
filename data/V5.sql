-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : ven. 14 avr. 2023 à 10:38
-- Version du serveur : 10.10.2-MariaDB
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_instrument`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) NOT NULL,
  `description_categorie` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`, `description_categorie`) VALUES
(1, 'Membranophone', 'Les instruments de musique membranophones sont des instruments de percussion qui produisent du son en faisant vibrer une membrane tendue sur un cadre ou un fût. Cette membrane peut être en peau animale, en matière synthétique ou en métal, et est souvent fixée à l\'aide de cordes ou de cerclages. Les instruments membranophones sont très répandus dans le monde entier et existent dans une grande variété de formes et de tailles. Parmi les exemples les plus courants d\'instruments membranophones, on peut citer la batterie, qui comprend une grosse caisse, une caisse claire et des toms, ainsi que les congas, les bongos, les timbales, les djembés, les tambours japonais Taiko, les tambours africains talking drums et les tambours indiens tabla. Les instruments membranophones peuvent être joués à la main, à l\'aide de baguettes, de mailloches ou de balais, selon le style de musique et l\'effet recherché. Les instruments membranophones sont utilisés dans de nombreux genres musicaux différents, de la musique classique à la musique populaire en passant par le jazz, le rock et le folk. Ils peuvent produire une grande variété de sons, allant du son grave et profond d\'une grosse caisse à la résonance cristalline d\'un djembé. Les instruments membranophones peuvent être utilisés pour marquer le rythme, créer des mélodies ou des accompagnements, ou pour ajouter de la texture et de l\'intensité à une pièce musicale.\r\n'),
(2, 'Idiophone', 'Les instruments de musique idiophones sont des instruments dont le corps tout entier vibre pour produire le son, sans l\'aide d\'une membrane ou de cordes comme les instruments à percussion ou les instruments à corde. Cela signifie que le corps de l\'instrument est la source sonore elle-même. Les idiophones peuvent être constitués d\'un seul matériau, comme le triangle en métal ou la cloche, ou d\'un ensemble de matériaux, comme les maracas, qui sont des coques remplies de billes ou de graines. Les idiophones peuvent également être fabriqués à partir de matériaux naturels tels que des fruits, des coquillages ou des os, ou à partir de matériaux modernes tels que le métal, le plastique et le verre. Les idiophones peuvent être trouvés dans toutes les cultures à travers le monde et sont souvent utilisés dans les musiques traditionnelles et populaires, ainsi que dans la musique classique contemporaine. Ils apportent une grande variété de couleurs et de textures sonores à l\'orchestre et sont souvent utilisés pour ajouter des accents rythmiques et des effets percussifs dans de nombreux styles de musique.\r\n'),
(3, 'Electrophone', 'Les instruments de musique électroniques, ou électrophones, sont des instruments qui produisent du son grâce à l\'électricité. Ils diffèrent des instruments acoustiques en cela qu\'ils ne nécessitent pas de caisse de résonance ou de corps pour amplifier le son. Ils sont généralement équipés de haut-parleurs ou d\'écouteurs pour diffuser le son produit. Les instruments électroniques comprennent une grande variété d\'instruments tels que les synthétiseurs, les boîtes à rythmes, les samplers, les claviers électroniques, les guitares électroniques, les basses électroniques, les batteries électroniques et les instruments de musique électronique modulaire. L\'utilisation d\'instruments électroniques a ouvert de nouveaux horizons en matière de création musicale en permettant aux musiciens de produire des sons innovants et complexes. Les instruments électroniques sont également très populaires en musique électronique, dance, techno, hip-hop et dans d\'autres genres de musique moderne qui incorporent des éléments électroniques dans leur production musicale.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(500) NOT NULL,
  `instruments_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_instruments1_idx` (`instruments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `img_url`, `instruments_id`) VALUES
(1, 'img/gong.jpg', 1),
(2, 'img/synthe.jpg\r\n', 2),
(3, 'img/Tumbak.jpg\r\n', 3),
(4, 'img/tom.jpg\r\n', 4),
(5, 'img/piano-electric.jpg\r\n', 5),
(6, 'img/lithophone.jpg\r\n', 6),
(7, 'img/hang1.jpg\r\n', 7),
(8, 'img/theremine.jpg\r\n', 9),
(9, 'img/timbales.jpp\r\n', 8),
(10, 'img/bongos-1661115_1920.png\r\n', 10),
(11, 'img/xylophone-4684373_1920.png\r\n', 11),
(12, 'img/tourne-disque.png\r\n\r\n\r\n', 12);

-- --------------------------------------------------------

--
-- Structure de la table `instruments`
--

DROP TABLE IF EXISTS `instruments`;
CREATE TABLE IF NOT EXISTS `instruments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `son` varchar(255) DEFAULT NULL,
  `categorie_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_instruments_categorie1_idx` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `instruments`
--

INSERT INTO `instruments` (`id`, `nom`, `resume`, `url`, `description`, `son`, `categorie_id`) VALUES
(1, 'Le gong', 'Le gong est un instrument de percussion d\\\'origine asiatique fabriqué à partir d\\\'un alliage de bronze. Le processus de fabrication varie selon la région et le type de gong. Il est utilisé dans divers genres musicaux tels que la musique traditionnelle asiatique, le jazz, la musique électronique et le heavy metal. Il a été joué par de nombreux artistes talentueux à travers l\\\'histoire de la musique.', 'https://fr.wikipedia.org/wiki/Gong_(instrument)', 'Le gong est un instrument de percussion originaire d\'Asie de l\'Est, fabriqué à partir d\'un alliage de bronze. Les premiers gongs ont probablement été fabriqués en Chine il y a plus de 4000 ans, mais leur origine exacte est incertaine. Le processus de fabrication du gong varie selon le type de gong et la région d\'Asie où il est produit. Après la coulée de l\'alliage en un moule en forme de gong, le métal est travaillé pour obtenir la forme et l\'épaisseur voulues. Les bords du gong sont souvent martelés à la main pour améliorer leur résonance et leur sonorité. Le gong est utilisé dans de nombreux genres musicaux, notamment dans les musiques traditionnelles asiatiques, les musiques bouddhistes et taoïstes, le jazz, l\'ambient, la musique électronique et le heavy metal. Des artistes tels que Pierre Favre, Don Cherry et Bill Bruford ont utilisé le gong dans leur travail de percussionniste, tandis que des groupes de heavy metal comme Tool et System of a Down ont incorporé le gong dans leurs performances scéniques. En somme, le gong est un instrument polyvalent qui a trouvé sa place dans une variété de styles musicaux et a été joué par de nombreux artistes talentueux tout au long de l\'histoire de la musique.\r\n', 'audio/gong.mp3', 2),
(2, 'Le synthétiseur', 'Le synthétiseur est un instrument de musique électronique qui a révolutionné la musique  Il permet de produire une grande variété de sons, imitant des instruments acoustiques, des voix humaines, des bruits de la nature, ou encore des sons abstraits et expérimentaux. ', 'https://fr.wikipedia.org/wiki/Synth%C3%A9tiseur', 'Le synthétiseur est un instrument électronique capable de produire une grande variété de sons en utilisant différentes techniques de synthèse sonore. Il a révolutionné la musique depuis son invention dans les années 1960, permettant aux musiciens et producteurs d\'explorer de nouveaux sons et de créer des compositions originales avec des textures sonores complexes. Les synthétiseurs modernes peuvent produire des sons électroniques, imiter des instruments acoustiques, des voix humaines, des bruits de la nature, ou encore des sons abstraits et expérimentaux. Ils ont également trouvé leur place dans de nombreux genres musicaux, allant de la musique électronique à la pop, en passant par le rock, le jazz et même la musique classique. L\'origine du synthétiseur remonte aux années 1960, où les premiers prototypes ont été développés par des pionniers de la musique électronique tels que Robert Moog, Don Buchla et Alan Pearlman. Ces instruments ont été créés pour répondre au besoin de créer de nouveaux sons qui ne pouvaient pas être produits avec des instruments acoustiques traditionnels. Le principe de base du synthétiseur est de générer des signaux électriques, puis de les manipuler pour produire des sons. La plupart des synthétiseurs utilisent des oscillateurs pour générer des signaux sonores de base, qui peuvent ensuite être modifiés en utilisant des filtres, des enveloppes, des modulateurs et d\'autres effets. Les synthétiseurs modernes sont souvent numériques, utilisant des algorithmes mathématiques pour produire des sons complexes. La fabrication d\'un synthétiseur implique souvent l\'assemblage de nombreux composants électroniques, tels que des circuits intégrés, des transistors, des condensateurs et des résistances. Les circuits doivent être conçus pour fonctionner ensemble de manière cohérente, ce qui peut être un défi pour les ingénieurs en électronique. Les claviers des synthétiseurs sont souvent équipés de touches sensibles à la pression, ce qui permet aux musiciens de jouer avec une grande expressivité. Certains synthétiseurs sont également équipés de contrôleurs supplémentaires, tels que des boutons, des faders et des pads, qui permettent aux musiciens de modifier les sons en temps réel. Au fil des années, les synthétiseurs ont évolué pour devenir des instruments de musique puissants et polyvalents, capables de produire une grande variété de sons. Ils sont devenus un outil essentiel pour les musiciens et les producteurs de musique, et ont laissé une empreinte indélébile sur l\'histoire de la musique électronique. Il existe de nombreux artistes célèbres qui ont utilisé des synthétiseurs dans leurs compositions et leurs performances, tels que Daft Punk et Vangelis. Les synthétiseurs ont joué un rôle important dans le développement de la musique électronique et continuent d\'être utilisés par des artistes du monde entier.\r\n', 'audio/Synthe.mp3', 3),
(3, 'Le Tumdak', 'Le Tumdak est un instrument de musique traditionnel de l\'Himalaya en Asie, fabriqué à partir d\'une grande corne de yak sculptée en une forme conique et ornée de motifs colorés et de gravures représentant des symboles et des images sacrées.', 'https://en.wikipedia.org/wiki/Tumdak%27', 'Le Tumdak est un instrument de musique traditionnel de l\'Himalaya, utilisé pour les cérémonies, fêtes religieuses et la musique folklorique. Il est fabriqué à partir d\'une grande corne de yak sculptée en forme conique, ornée de motifs colorés et gravures symboliques. Le son profond et puissant évoque la nature sauvage de la région. L\'origine exacte de l\'instrument est incertaine, mais il est considéré comme traditionnel au Népal et au Tibet depuis des siècles. La fabrication du Tumdak est complexe, nécessitant une grande expertise et une attention aux détails. Les cornes de yak sont d\'abord séchées, nettoyées, puis chauffées pour faciliter la sculpture. Le sculpteur travaille la corne pour créer le corps principal, le fond est percé pour le son et des trous pour les doigts. L\'instrument est ensuite poli pour obtenir une finition lisse et brillante. Des dessins représentant des animaux, des divinités locales, des symboles religieux et des scènes de la vie quotidienne sont souvent ajoutés avec des couleurs vives et contrastées. Le Tumdak est un symbole de la culture et de la tradition de l\'Himalaya, et est apprécié dans le monde entier pour sa beauté et son timbre sonore unique. Bien que rarement utilisé par des artistes occidentaux ou mondialement célèbres, on peut trouver des musiciens locaux talentueux qui jouent du Tumdak dans des festivals de musique ou des enregistrements régionaux.\r\n', NULL, 1),
(4, 'Le Tom', 'Le tom est un petit tambour utilisé dans les premières batteries de jazz. Il est muni de deux peaux et permet l\'accordage grâce à des vis et des cercles en métal ou en bois. Hal Blaine, né en 1929, est un batteur qui a joué sur plus de 35 000 chansons, notamment dans les années 60 et 70, et est considéré comme un pionnier de la batterie rock.\r\n\r\n', 'https://fr.wikipedia.org/wiki/Tom_(musique)', 'Le tom est un petit tambour d\'environ 8 à 18 pouces de diamètre, sans timbre (contrairement au tambour militaire et à la caisse claire), et généralement muni d\'un fût plus profond que les caisses (mais sans dépasser leur diamètre, contrairement au surdo, repinique brésilien ou dunun africain). Dans les toutes premières batteries de jazz au début du XXe siècle, il s\'agissait de petits tambours chinois avec une peau clouée et des fûts arrondis comme des tonneaux, et il n\'y en avait en général qu\'un seul (importé de Chine), voire aucun. Le fût du tom est percé sur ses pourtours inférieur et supérieur d\'une série de trous que traversent des vis orientées vers l\'extérieur. Sur celles-ci viennent se fixer des coquilles dans lesquelles d\'autres vis, à tête carrée, vont venir s\'insérer à angle droit. La peau de frappe est posée sur la face supérieure du fût et la peau de résonance sur la face postérieure. Elles reposent sur les chanfreins (ou bords) du fût. Sur les peaux, on place deux cercles d\'acier inoxydable, de cuivre ou encore de bois. Leur diamètre est légèrement supérieur à celui des peaux et est pourvu d\'un nombre de perforations équivalent à celles du fût. Les vis les traversent et s\'insèrent dans les coquilles, rendant alors possible l\'accordage du tom. Il est nécessaire d\'utiliser une clé spécifique pour serrer ou desserrer les vis d\'accordage. L\'immense majorité des fabricants utilise le même format de vis. Cependant, le fabricant allemand Sonor a, pendant plusieurs décennies, choisi d\'utiliser un format de vis particulier, ce qui peut poser problème en cas de perte. Depuis le début des années 2000, leurs nouveaux modèles sont livrés équipés de vis standard.\r\n', '\r\n', 1),
(5, 'Le piano électrique', 'Le premier piano électrique a été créé en 1931 par C. Bechstein, mais c\'est Harold Rhodes qui a révolutionné le genre pendant la Seconde Guerre mondiale avec son \"Army Air Corps Piano\". Il a ensuite fondé la Rhodes Piano Corporation, qui a été rachetée par Leo Fender en 1969. D\'autres modèles électriques comme le Wurlitzer Electric Piano, le modèle de la série CP de Yamaha, le Clavinet, le Pianet et le Cembalet de Hohner ont également été proposés dans les années 60. L\'industrie musicale a progressivement abandonné les modèles électromécaniques pour des claviers plus modernes et stables à base de synthétiseurs dans les années 80, mais certains artistes préfèrent toujours les pianos électriques pour leur son unique.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Piano_%C3%A9lectrique', 'Les pianos électriques ont une histoire fascinante qui remonte à presque un siècle. En 1931, C. Bechstein Pianofortefabrik AG Berlin a construit le premier piano électrique équipé de micros électromagnétiques, le Neo-Bechstein (en). Cependant, c\'est Harold Burroughs Rhodes, pendant la Seconde Guerre mondiale, qui a créé l\'instrument qui a révolutionné le genre. Construit à partir de pièces d\'un bombardier américain, son prototype de piano électrique, achevé en 1942, a été nommé Army Air Corps Piano. C\'était le début de la Rhodes Piano Corporation, qui a été rachetée par Leo Fender en 1969. Aujourd\'hui, le Fender Rhodes est un nom familier dans l\'industrie de la musique. Il y avait également d\'autres modèles de pianos électriques qui sont apparus au fil des ans, tels que le Wurlitzer Electric Piano et le modèle de la série CP de Yamaha. Hohner a proposé ses modèles de Clavinet, Pianet et Cembalet (en) dans les années 1960. Bien que les progrès de l\'électronique aient permis l\'émergence de claviers plus modernes et stables en matière d\'accordage, basés sur des synthétiseurs, de nombreux artistes continuent d\'utiliser des pianos électriques aujourd\'hui, préférant la difficulté de l\'accordage et de la maintenance à la perfection du son électronique. En fin de compte, l\'histoire des pianos électriques est un témoignage de l\'ingéniosité et de l\'innovation humaines, ainsi que de la passion des musiciens pour les instruments qui ont une histoire et une âme. Que vous soyez un pianiste professionnel ou un amateur, un piano électrique peut être une option fascinante et créative pour votre prochain enregistrement ou votre prochaine performance en direct.\r\n', 'audio/piano_electric.mp3', 3),
(6, 'Le Lithophone', 'Le lithophone (composé du préfixe litho-, du grec ancien λίθος, lithos, « pierre », et du suffixe -phone, du grec ancien φωνή, phônê, « son ») est un instrument de musique datant de la Préhistoire, rencontré en Chine notamment. Il s\'agit d\'un instrument de percussion de type idiophone formé d\'un ensemble de pierres sonores, soit posé à terre soit suspendu par divers moyens, qui est frappé au moyen de baguettes en bois ou d\'autres pierres\',\r\n\r\n\r\n\r\n\r\n \' \', \'', 'https://fr.wikipedia.org/wiki/Lithophone', 'Le lithophone est un instrument de musique datant de la Préhistoire, qui tire son nom de la fusion de deux termes grecs : litho-, qui signifie « pierre », et -phone, qui signifie « son ». Il s\'agit d\'un instrument de percussion de type idiophone qui a été utilisé dans de nombreuses cultures à travers le monde, notamment en Chine. Le lithophone est composé d\'un ensemble de pierres sonores, qui peuvent être posées à terre ou suspendues par divers moyens. Ces pierres sont frappées au moyen de baguettes en bois ou d\'autres pierres, produisant ainsi une grande variété de sons. Les pierres utilisées pour fabriquer un lithophone sont généralement choisies pour leur densité et leur dureté, ce qui leur permet de produire des sons clairs et distincts. Bien que le lithophone soit un instrument très ancien, il continue d\'être utilisé aujourd\'hui dans des performances musicales et des enregistrements. Il est souvent utilisé dans la musique traditionnelle chinoise, où il est considéré comme un instrument sacré. Le lithophone est également utilisé dans des genres musicaux modernes, tels que la musique expérimentale et la musique électronique, où il est souvent amplifié pour créer des effets sonores uniques et fascinants. En somme, le lithophone est un instrument de musique fascinant qui a une longue histoire et une grande variété d\'utilisations. Avec ses pierres sonores uniques et ses possibilités sonores infinies, il continue d\'inspirer les musiciens et les amateurs de musique du monde entier.\r\n', '', 2),
(7, 'Le Hang', 'Le hang est un instrument de musique acoustique suisse, inventé en 2000 par Felix Rohner et Sabina Schärer. Il est composé de deux demi-coquilles métalliques jointes ensemble et produit des sons mélodieux. Le nom \"Hang\" est une marque déposée et seuls quelques artisans au monde savent comment le fabriquer. Bien qu\'on puisse trouver des handpans d\'autres fabricants sur le marché, leur prix reste élevé. Malgré cela, des artistes de rue à Barcelone et des musiciens célèbres comme Golshifteh Farahani et Tash Sultana en jouent régulièrement.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Hang', 'Le hang (prononciation allemande : [haŋ]1 ; pluriel : hanghang2) est un instrument de musique acoustique de la famille des idiophones inventé par Felix Rohner et Sabina Schärer à Berne en Suisse en 2000. Il faudra quelques années aux deux inventeurs suisses pour le parfaire. Le hang est composé de deux demi coquilles métalliques jointes ensemble. La partie haute de l\'instrument s\'appelle le « ding », elle est constituée d\'une note fondamentale et de sept ou huit notes l\'entourant. La partie basse, « gu » est une surface lisse dotée d\'un trou en son centre. Dans l’idée de préserver la rareté et le côté mystérieux de l’instrument, Rohner et Schäre ont fondé PANArt, qui produit seulement quelques centaines de Hangs chaque année. Le nom “Hang” est désormais une marque déposée qui ne peut s’appliquer qu’aux instruments fabriqués par PANArt et on compte peu d’artisans sachant faire un handpan à travers le monde. On peut donc attendre jusqu’à plusieurs années avant de pouvoir poser ses doigts sur l’acier d’un handpan et tous ceux qui veulent se procurer le précieux objet doivent écrire une lettre manuscrite à PANArt pour en faire la demande. Même si on peut trouver des handpans partout dans le monde, car d’autres fabricants ont investi le marché, un bon handpan peut facilement coûter jusqu’à 2500 €. Fabriquer un handpan, quelle que soit la marque, reste très difficile et très onéreux comparé à d’autres instruments. Mais ce n’est pas ce qui a empêché les artistes de rue de s’en emparer, notamment à Barcelone, où le handpan est plus utilisé par les musiciens de rue à cause de sa capacité à résonner dans les halls et les tunnels. Certains acteurs et musiciens célèbres en jouent, comme on peut le voir avec Golshifteh Farahani dans cet très bel extrait du film My Sweet PepperLand, ou encore avec la chanteuse australienne Tash Sultana qui nous disait dans une interview partir avec en tournée.\r\n', NULL, 2),
(8, 'Les Timbales', 'Les timbales sont un instrument de percussion constitué de deux ou plusieurs tambours disposés côte à côte et joués avec des baguettes. Elles produisent un son puissant et distinctif qui a été utilisé dans de nombreux genres musicaux, de la musique classique à la musique populaire. Les timbales sont couramment utilisées dans les orchestres et les ensembles de jazz, et sont souvent jouées en solo pour des effets dramatiques. Elles ont une longue histoire et ont évolué au fil des siècles, avec différentes tailles, matériaux et techniques de jeu. Les timbales sont un élément essentiel de la musique orchestrale et un ajout populaire à tout groupe de percussions.\r\n\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Timbales_(musique_classique)', 'Les timbales sont des instruments à percussion constitués d\'un fût en cuivre couvert d\'une peau. L\'instrumentiste en joue en frappant la peau avec des baguettes spéciales. Le joueur de timbales est appelé un timbalier. La principale caractéristique des timbales est la possibilité de les accorder afin d\'obtenir des hauteurs précises. À l\'aide d\'une pédale ou de clefs, la tension de la peau peut être augmentée ou diminuée, influençant le son produit. Chaque timbale est d\'un diamètre différent afin d\'obtenir un plus large registre : le timbalier peut ainsi changer de note rapidement en jouant d\'une timbale à l\'autre, et préparer les futures notes en réglant les pédales. Initialement conçues comme des tambours militaires (utilisées notamment dans les armées turques), les timbales sont devenues un instrument de base de l\'orchestre classique au xviie siècle. Elles sont très utilisées dans tous les types de formations dont les orchestres, les fanfares ou même les groupes de rock. La particularité de ces instruments est de fournir une note de hauteur déterminée, ce qui est assez rare pour les instruments de percussion à membrane. Les pédales permettent en effet de tendre ou de détendre la peau, ce qui modifie la hauteur du son. Cependant durant la période baroque la pédale n\'existait pas: on utilisait alors des clefs pour tendre ou détendre la peau selon même principe. Par ailleurs les membranes, contrairement aux cordes ou colonnes d\'air, ne présentent pas de fréquence de résonance suivant une série harmonique. L\'origine de cette faculté d\'accordage vient du fait que le premier mode de vibration (fondamental) est finalement très vite amorti (par entraînement de l\'air autour de la membrane) et rayonne peu. Les modes faisant intervenir les diamètres nodaux rayonnent beaucoup plus efficacement et sont, pour les premiers d\'entre eux, proches d\'une série harmonique. Le couplage avec la cavité a pour effet de décaler certains modes de la membrane, rendant ces fréquences encore plus proches d\'une série harmonique. Les quatre ou cinq premiers modes sont alors « accordés ». L\'étymologie de ce mot vient de l\'arabe d\'Espagne tạbál lui-même issue de l’arabe طبل, tabl (« tambour »)1,2. Grâce aux différentes baguettes, on obtient une riche variété de timbres et d\'intensités sonores. La plupart des baguettes sont en bois (on en trouve également en bambou ou en aluminium) tandis que leur extrémité est recouverte de feutre, de flanelle, de bois, de liège, d\'éponge, ou d\'autres matériaux. La tête des baguettes peut également être de différentes tailles. Le timbalier peut aussi assourdir le son des timbales en plaçant un morceau de tissu sur la peau. Lorsqu\'on désire obtenir une note courte, on peut arrêter la vibration de la membrane tendue avec la main, en étouffant la timbale. Pour jouer une note longue, en revanche, le timbalier utilise de petits coups très rapprochés de sorte qu\'ils ne paraissent pas discontinus (roulement ou trémolo). La partition de timbales est écrite en clef de fa. Pour régler la note de sa timbale, le timbalier modifie la position de la pédale qui est indiquée par une aiguille, laquelle est placée dans un petit cadran avec des repères pour chaque note écrite en lettres, selon le système anglo-saxon. Ainsi, le timbalier peut utiliser ce cadran pendant le réglage pour visualiser la note de sa timbale.\r\n', 'audio/Timbales.mp3', 1),
(9, 'Le Thérémine', 'Le Thérémine est un instrument de musique électronique inventé dans les années 1920 par le physicien russe Léon Theremin. Il est joué sans toucher l\'instrument, en utilisant les mouvements des mains pour contrôler les champs électromagnétiques autour de deux antennes. Le joueur crée ainsi une gamme de sons aigus et graves en déplaçant les mains dans l\'air entre les antennes. Le Thérémine a été utilisé dans de nombreux genres musicaux, du classique à l\'électronique, et est souvent associé à une ambiance de science-fiction. C\'est un instrument rare et fascinant qui continue d\'inspirer les musiciens et les inventeurs aujourd\'hui.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Th%C3%A9r%C3%A9mine', 'Le thérémine est unique parmi les instruments électroniques, l\'interprète ne touche pas l\'instrument lorsqu\'il joue. L\'installation est relativement simple et consiste en deux antennes reliées à une boîte en bois munie de deux boutons : un pour la hauteur et un pour l\'amplitude ou le volume. Le concept de la performance est également relativement simple : l’\'interprète règle la hauteur et le volume en rapprochant ou en éloignant sa main des antennes. Les deux antennes du thérémine se connectent à des circuits oscillants à radiofréquence. Un oscillateur a une fréquence fixe, tandis que l\'autre a une fréquence variable. En interjetant le champ électromagnétique de son propre coprs, l\'interprète perturbe les oscillations du thérémine. Le thérémine mesure la différence entre les oscillateurs à fréquence fixe et variable et la traduit en un signal audio. Le thérémine a trouvé une place de choix dans les musiques de films, la musique classique contemporaine et les groupes de rock.  Bernard Herrmann n\'a pas été le premier compositeur à faire appel aux pouvoirs mystérieux du thérémine pour susciter des réponses désincarnées dans les musiques de films. Le grand compositeur hongrois Miklos Rózsa a incorporé le thérémine dans ses répliques pour le film d\'Alfred Hitchcock de 1945, Spellbound. Apparemment, Hitchcock a donné deux conseils à Rózsa, dont l\'un était de trouver \"un nouveau son pour la paranoïa qui constitue le sujet du film\". Ce nouveau son est apparu sous la forme du thérémine. Le timbre bizarre du thérémine a toujours attiré les artistes. Les White Stripes ont incorporé le son enveloppant du thérémine dans leur chanson \"Little People\", tirée de leur album éponyme de 1999. Jean-Michel Jarre l’utilise entre autre pour ses Champs Magnétiques. Il est même utilisé pour le célèbre générique de la série Star Treck.\r\n', NULL, 3),
(10, 'Le Bongo', 'Le bongo est un instrument de percussion constitué de deux tambours de taille différente, souvent joué en musique afro-cubaine. Ils sont tenus entre les genoux ou sur un support et sont joués avec les mains ou des baguettes.\r\n', 'https://fr.wikipedia.org/wiki/Bongo', 'Le bongo est un instrument de percussion afro-cubain composé de deux petits tambours reliés, appelés macho et hembra, de tailles différentes. Le macho est plus petit et aigu, tandis que le hembra est plus grand et grave. Les bongos sont traditionnellement fabriqués en bois, en peau d\'animal (généralement du chèvre) et en métal, et sont souvent ornés de motifs colorés. Ils sont tenus entre les genouxdu joueur ou placés sur un support, et sont joués en frappant les peaux tendues avec les doigts ou la paume de la main. Les bongos ont une large gamme de sons et peuvent être utilisés pour créer des rythmes variés. Ils sont couramment utilisés dans la musique latine, mais peuvent également être trouvés dans des genres musicaux tels que le jazz, le rock et le funk. Les bongos sont un instrument polyvalent et populaire dans le monde entier.\r\n', 'audio/Bongos.mp3', 1),
(11, 'Le xylophone', 'Le xylophone est un instrument de percussion en bois composé de lames de différentes tailles et épaisseurs, accordées pour produire des notes de différentes hauteurs. Il est jouéen frappant les lames avec des maillets pour produire des motifs mélodiques rapides et cristallins, et est utilisé dans une variété de genres musicaux.\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Xylophone', 'Le xylophone est un instrument de musique à percussion d\'origine africaine, composé d\'unesérie de lames en bois de différentes tailles et épaisseurs, disposées de manière horizontale sur une structure en forme de caisse de résonance. Les lames sont accordées de manière à produire des notes de différentes hauteurs, et sont généralement fabriquées à partir de bois dur comme l\'acajou, le padouk ou le rosewood.Le xylophone est joué en frappant les lames avec des maillets ou des baguettes, généralement en caoutchouc ou en bois, pour produire des sons nets et cristallins. Les maillets sont tenus dans chaque main du joueur et frappent les lames avec une technique de balancement rapide pour produire des motifs mélodiques rapides et complexes.La caisse de résonance du xylophone peut être fabriquée à partir de différents matériaux, tels que le bois, le métal ou la fibre de verre, et sert à amplifier le son des lames. Certains xylophones peuvent également être équipés d\'une pédale de sourdine pour modifier le timbre des notes. Le xylophone est utilisé dans une variété de genres musicaux, notamment la musique traditionnelle africaine, la musique classique, le jazz, la musique de film et la musique contemporaine. Il est souvent utilisé dans les ensembles de musique du monde, les orchestres symphoniques, les ensembles de percussions et les groupes de jazz.\r\n', 'audio/Xylophone.mp3', 2),
(12, 'Platine tourne-disque', 'La platine tourne-disques est un instrument électronique utilisé pour lire les disques vinyles. Elle fonctionne en faisant tourner le disque à une vitesse constante pendant qu\'une aiguille lit les sillons sur le disque, produisant ainsi un son analogique. La platine tourne-disques est un outil populaire pour les audiophiles et les amateurs de musique vintage.\r\n\r\n\r\n', 'https://fr.wikipedia.org/wiki/Platine_tourne-disques', 'Une platine tourne-disques est un dispositif électronique composé d\'un plateau rotatif sur lequel un disque vinyle est placé et maintenu en place par une pince ou un couvercle. Le plateau est entraîné par un moteur et une courroie, ou directement par un moteur, pour faire tourner le disque à une vitesse constante de 33⅓, 45 ou 78 tours par minute. Lorsque le disque tourne, une aiguille, également appelée un stylet, est placée sur la surface du disque pour suivre les sillons et ainsi lire la musique en produisant un son analogique. Les vibrations de l\'aiguille sont ensuite transmises à une cellule de lecture, qui les convertit en un signal électrique que l\'amplificateur audio peut amplifier pour produire le son. Les platines tourne-disques modernes peuvent inclure des fonctionnalités telles que la lecture USB pour la numérisation des enregistrements, des bras de lecture ajustables et des cartouches de lecture interchangeables pour une personnalisation sonore optimale.\r\n', 'audio/Vinyl.mp3', 3);

-- --------------------------------------------------------

--
-- Structure de la table `musiciens`
--

DROP TABLE IF EXISTS `musiciens`;
CREATE TABLE IF NOT EXISTS `musiciens` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_musicien` varchar(255) NOT NULL,
  `prenom_musicien` varchar(255) NOT NULL,
  `lien_musicien` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `musiciens`
--

INSERT INTO `musiciens` (`id`, `nom_musicien`, `prenom_musicien`, `lien_musicien`) VALUES
(1, 'Wakerman\r\n', 'Rick', 'https://fr.wikipedia.org/wiki/Rick_Wakeman'),
(2, 'Daft', 'Punk', 'https://fr.wikipedia.org/wiki/Daft_Punk'),
(3, 'Gabriel', 'Peter\r\n', 'https://fr.wikipedia.org/wiki/Peter_Gabriel'),
(4, 'Tash\r\n', 'Sultana', 'https://fr.wikipedia.org/wiki/Tash_Sultana'),
(5, 'Gomez\r\n', 'Miguel', 'https://fr.wikipedia.org/wiki/Miguel_Gomez_(musicien)'),
(6, 'Norvo\r\n', 'Red', 'https://fr.wikipedia.org/wiki/Red_Norvo'),
(7, 'Master\r\n', 'Mike', 'https://fr.wikipedia.org/wiki/Mix_Master_Mike');

-- --------------------------------------------------------

--
-- Structure de la table `musiciens_has_instruments`
--

DROP TABLE IF EXISTS `musiciens_has_instruments`;
CREATE TABLE IF NOT EXISTS `musiciens_has_instruments` (
  `musiciens_id` int(10) UNSIGNED NOT NULL,
  `instruments_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`musiciens_id`,`instruments_id`),
  KEY `fk_musiciens_has_instruments_instruments1_idx` (`instruments_id`),
  KEY `fk_musiciens_has_instruments_musiciens1_idx` (`musiciens_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `musiciens_has_instruments`
--

INSERT INTO `musiciens_has_instruments` (`musiciens_id`, `instruments_id`) VALUES
(1, 2),
(2, 2),
(3, 8);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `motdepasse` varchar(250) NOT NULL,
  `identite` varchar(100) NOT NULL,
  `lemail` varchar(150) NOT NULL,
  `uniqueID` varchar(250) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users_has_instruments`
--

DROP TABLE IF EXISTS `users_has_instruments`;
CREATE TABLE IF NOT EXISTS `users_has_instruments` (
  `users_idusers` int(10) UNSIGNED NOT NULL,
  `instruments_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`users_idusers`,`instruments_id`),
  KEY `fk_users_has_instruments_instruments1_idx` (`instruments_id`),
  KEY `fk_users_has_instruments_users1_idx` (`users_idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_instruments1` FOREIGN KEY (`instruments_id`) REFERENCES `instruments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `instruments`
--
ALTER TABLE `instruments`
  ADD CONSTRAINT `fk_instruments_categorie1` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Contraintes pour la table `musiciens_has_instruments`
--
ALTER TABLE `musiciens_has_instruments`
  ADD CONSTRAINT `fk_musiciens_has_instruments_instruments1` FOREIGN KEY (`instruments_id`) REFERENCES `instruments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_musiciens_has_instruments_musiciens1` FOREIGN KEY (`musiciens_id`) REFERENCES `musiciens` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users_has_instruments`
--
ALTER TABLE `users_has_instruments`
  ADD CONSTRAINT `fk_users_has_instruments_instruments1` FOREIGN KEY (`instruments_id`) REFERENCES `instruments` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_instruments_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
