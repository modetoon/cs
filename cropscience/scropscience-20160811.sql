-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for cropscience
CREATE DATABASE IF NOT EXISTS `cropscience` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cropscience`;


-- Dumping structure for table cropscience.content
CREATE TABLE IF NOT EXISTS `content` (
  `ContentID` int(11) NOT NULL AUTO_INCREMENT,
  `MenuID` int(11) DEFAULT NULL,
  `TemplateID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT '0',
  `ContentNameEN` varchar(255) DEFAULT NULL,
  `ContentNameTH` varchar(255) DEFAULT NULL,
  `PageTitleEN` varchar(255) DEFAULT NULL,
  `PageTitleTH` varchar(255) DEFAULT NULL,
  `PageHeadlineEN` varchar(255) DEFAULT NULL,
  `PageHeadlineTH` varchar(255) DEFAULT NULL,
  `ContentEN` text,
  `ContentTH` text,
  `MetaKeywordEN` text,
  `MetaKeywordTH` text,
  `MetaDescriptionEN` text,
  `MetaDescriptionTH` text,
  `Slug` varchar(255) DEFAULT NULL,
  `Url` varchar(255) DEFAULT NULL,
  `ShowLeftMenu` int(1) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `CreatedBy` varchar(50) DEFAULT NULL,
  `UpdatedDate` datetime DEFAULT NULL,
  `UpdatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ContentID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.content: ~28 rows (approximately)
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` (`ContentID`, `MenuID`, `TemplateID`, `ProductID`, `ContentNameEN`, `ContentNameTH`, `PageTitleEN`, `PageTitleTH`, `PageHeadlineEN`, `PageHeadlineTH`, `ContentEN`, `ContentTH`, `MetaKeywordEN`, `MetaKeywordTH`, `MetaDescriptionEN`, `MetaDescriptionTH`, `Slug`, `Url`, `ShowLeftMenu`, `Status`, `CreatedDate`, `CreatedBy`, `UpdatedDate`, `UpdatedBy`) VALUES
	(1, 1, 1, NULL, 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', '<p>The Crop Protection business offers a broad portfolio of products to farmers with a focus on rice, vegetables and fruit corps. Tiller<sup>®</sup>,Ricestar<sup>®</sup> and Whip<sup>®</sup> are leading herbicides for control of grasses and other weeds in rice. Whereas Ronstar<sup>®</sup> is leading herbicide for control weeds in DDSR (Dry Direct Seed Rice). Solutions for vegetables and fruit corps via new innovative of the fungicide Luna<sup>®</sup> Sensation and include rice fungicide Luna<sup>®</sup>Experience and Antracol <sup>®</sup> and the insecticides Provado<sup>®</sup>and Folitec<sup>®</sup>.</p><div class="spacer"> </div><p>Bayer CropScience is committed to consistently introduce new and innovative solutions for farmers in Thailand and to support them with technical expertise. BELT<sup>®</sup> Expert is a new generation insecticide for the control of leaf folder and stem borer that has recently will be launching into the market. At the same time, Alion<sup>®</sup> is new herbicide product for long lasting (3-6 months) control weeds in oil palm and para rubber. The Bayer Much More Rice (BMMR) project has been launched by Antracol <sup>®</sup> 2 times and Luna<sup>®</sup> Experience 2 times and successfully introduced for controlling fungus diseases in rice and included Alanto<sup>®</sup> for control thrips and BELT<sup>®</sup> Expert for leaf folder and stem borer in rice. Meanwhile, Basta<sup>®</sup> has been successfully introduced for rid grassy weed and broad leaves weed in fruit and rice bund and use for against weedy rice – an increasing problem in Thai rice farming.</p>', '<ol><li>Business Operations</li><li>Business Operations&nbsp;</li><li>Business Operations</li></ol>', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'business-operations', 'content/business-operations', 1, 1, '2016-08-01 21:15:23', 'admin', '2016-08-01 21:15:27', 'admin'),
	(3, 5, 1, NULL, 'Crop Protections', 'Crop Protections', 'Crop Protections', 'Crop Protections', 'Crop Protections', 'Crop Protections', '<p>Crop protection products should act selectively in the smallest possible amounts and then quickly decompose into neutral substances. Modern insecticides control insect pests while sparing pollinators and other beneficial insects. Herbicides selectively suppress weeds without harming the crop. And many fungicides serve to make plants more resistant to microscopic pathogens. In their search for new active ingredients, our researchers are increasingly guided by nature’s strategies. Bayer is adding a growing number of biological crop protection products to its extensive range alongside sophisticated chemicals.</p>', '<p>Crop protection products should act selectively in the smallest possible amounts and then quickly decompose into neutral substances. Modern insecticides control insect pests while sparing pollinators and other beneficial insects. Herbicides selectively suppress weeds without harming the crop. And many fungicides serve to make plants more resistant to microscopic pathogens. In their search for new active ingredients, our researchers are increasingly guided by nature’s strategies. Bayer is adding a growing number of biological crop protection products to its extensive range alongside sophisticated chemicals.</p>', 'Crop Protections', 'Crop Protections', 'Crop Protections', 'Crop Protections', 'crop-protections', 'content/crop-protections', 1, 1, NULL, NULL, NULL, NULL),
	(4, 6, 1, NULL, 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', '<p>Our seeds are adapted to local soil and climatic conditions and give high yields. When breeding new varieties, we also take into account consumer requirements, such as the flavor of vegetables. Whether their work focuses on rice, vegetables, cotton or oilseed rape / canola, our research centers worldwide always have the same goals: to protect harvests from diseases, insect pests and encroaching weeds and to improve plant health, thus increasing yields and improving crop quality. We have expanded our research activities to include two new core crops – wheat and soybeans. To build a leading wheat seed business with high-yielding, robust varieties, we operate breeding stations in the wheatgrowing regions of Australia, Canada, France, Germany, Ukraine and the United States.</p>', '<p>Our seeds are adapted to local soil and climatic conditions and give high yields. When breeding new varieties, we also take into account consumer requirements, such as the flavor of vegetables. Whether their work focuses on rice, vegetables, cotton or oilseed rape / canola, our research centers worldwide always have the same goals: to protect harvests from diseases, insect pests and encroaching weeds and to improve plant health, thus increasing yields and improving crop quality. We have expanded our research activities to include two new core crops – wheat and soybeans. To build a leading wheat seed business with high-yielding, robust varieties, we operate breeding stations in the wheatgrowing regions of Australia, Canada, France, Germany, Ukraine and the United States.</p>', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'seeds', 'content/seeds', 1, 1, NULL, NULL, NULL, NULL),
	(5, 7, 1, NULL, 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', '<p>Our Environmental Science unit offers professional users and private consumers pest and weed control products for use on golf courses, roads and railways, in forestry and in private gardens, for example. Furthermore, Environmental Science supports public health and adherence to hygiene standards through its modern range of pest control products. One focus here is on the control of insects that transmit tropical or subtropical diseases such as malaria, dengue fever and Chagas disease.</p>', '<p>Our Environmental Science unit offers professional users and private consumers pest and weed control products for use on golf courses, roads and railways, in forestry and in private gardens, for example. Furthermore, Environmental Science supports public health and adherence to hygiene standards through its modern range of pest control products. One focus here is on the control of insects that transmit tropical or subtropical diseases such as malaria, dengue fever and Chagas disease.</p>', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'environmental-science', 'content/environmental-science', 1, 1, NULL, NULL, NULL, NULL),
	(7, 2, 2, NULL, 'Products', 'Products', 'Products', 'Products', 'Products', 'Products', '', '', 'Products', 'Products', 'Products', 'Products', 'products', 'product_list/products', 1, 1, NULL, NULL, NULL, NULL),
	(8, 8, 2, NULL, 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', '', '', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'fungicides', 'product_list/fungicides', 1, 1, NULL, NULL, NULL, NULL),
	(9, 9, 2, NULL, 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', '', '', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'herbicides', 'product_list/herbicides', 1, 1, NULL, NULL, NULL, NULL),
	(10, 10, 2, NULL, 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', '', '', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'insecticides', 'product_list/insecticides', 1, 1, NULL, NULL, NULL, NULL),
	(11, 11, 2, NULL, 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', '', '', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'seeds', 'product_list/seeds', 1, 1, NULL, NULL, NULL, NULL),
	(12, 12, 1, NULL, 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'Compendium', '<ul><li>Compendium Compendium</li><li>Compendium Compendium&nbsp;</li><li>Compendium Compendium</li></ul>', '<ul><li>Compendium Compendium</li><li>Compendium Compendium&nbsp;</li><li>Compendium Compendium</li></ul><p> </p>', 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'compendium', 'content/compendium', 1, 1, NULL, NULL, NULL, NULL),
	(13, 15, 3, 7, 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', '', '', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'luna-experience', 'product_detail/luna-experience', 1, 1, NULL, NULL, NULL, NULL),
	(14, 16, 3, 8, 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', '', '', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'luna-sensation', 'product_detail/luna-sensation', 1, 1, NULL, NULL, NULL, NULL),
	(15, 17, 2, NULL, 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'Antracol', '', '', 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'antracol', 'product_list/antracol', 1, 1, NULL, NULL, NULL, NULL),
	(16, 18, 2, NULL, 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', '', '', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'nativo-75-wg', 'product_list/nativo-75-wg', 1, 1, NULL, NULL, NULL, NULL),
	(17, 19, 2, NULL, 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'Profiler', '', '', 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'profiler', 'product_list/profiler', 1, 1, NULL, NULL, NULL, NULL),
	(18, 20, 2, NULL, 'Flint', 'Flint', 'Flint', 'Flint', 'Flint', 'Flint', '', '', 'Flint', 'Flint', 'Flint', 'Flint', 'flint', 'product_list/flint', 1, 1, NULL, NULL, NULL, NULL),
	(19, 21, 2, NULL, 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', '', '', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'folicur-250-ew', 'product_list/folicur-250-ew', 1, 1, NULL, NULL, NULL, NULL),
	(20, 22, 2, NULL, 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', '', '', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'folicur-430-sc', 'product_list/folicur-430-sc', 1, 1, NULL, NULL, NULL, NULL),
	(21, 23, 2, NULL, 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', '', '', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'invento 66-8-wp', 'product_list/invento 66-8-wp', 1, 1, NULL, NULL, NULL, NULL),
	(22, 24, 2, NULL, 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', '', '', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'aliette 80-wg', 'product_list/aliette 80-wg', 1, 1, NULL, NULL, NULL, NULL),
	(23, 25, 2, NULL, 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', '', '', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'ethrel 48-pgr', 'product_list/ethrel 48-pgr', 1, 1, NULL, NULL, NULL, NULL),
	(24, 26, 2, NULL, 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', '', '', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'ethrel-10-ls', 'product_list/ethrel-10-ls', 1, 1, NULL, NULL, NULL, NULL),
	(25, 3, 1, NULL, 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', '<ul><li>Crop Calendar</li><li>Crop Calendar</li><li>Crop Calendar</li></ul>', '<ul><li>Crop Calendar</li><li>Crop Calendar</li><li>Crop Calendar</li></ul>', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'crop-calendar', 'content/crop-calendar', 1, 1, NULL, NULL, NULL, NULL),
	(26, 53, 1, NULL, 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', '<ul><li>Rice (Dry Direct Seeded Rice)</li><li>Rice (Dry Direct Seeded Rice)&nbsp;</li><li>Rice (Dry Direct Seeded Rice)</li></ul><p> </p>', '<ul><li>Rice (Dry Direct Seeded Rice)</li><li>Rice (Dry Direct Seeded Rice)&nbsp;</li><li>Rice (Dry Direct Seeded Rice)</li></ul>', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'dry-direct-seeded-rice', 'content/dry-direct-seeded-rice', 1, 1, NULL, NULL, NULL, NULL),
	(27, 54, 1, NULL, 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', '<ol><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li></ol>', '<ol><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li></ol>', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'pre-germinated-direct-seeded-rice', 'content/pre-germinated-direct-seeded-rice', 1, 1, NULL, NULL, NULL, NULL),
	(28, 55, 1, NULL, 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', '<p>Bulb Crop</p>', '<p>Bulb Crop</p>', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'bulb-crop', 'content/bulb-crop', 1, 1, NULL, NULL, NULL, NULL),
	(29, 4, 1, NULL, 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'production-research', 'content/production-research', 1, 1, NULL, NULL, NULL, NULL),
	(30, 13, 1, NULL, 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', '<ol><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li></ol>', '<ol><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li><li>Crop Science Bangpoo production Site</li></ol>', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'Crop Science Bangpoo production Site', 'crop-science-bangpoo-production-site', 'content/crop-science-bangpoo-production-site', 1, 1, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;


-- Dumping structure for table cropscience.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `MenuID` int(11) NOT NULL AUTO_INCREMENT,
  `Parent` int(11) NOT NULL DEFAULT '0',
  `Level` int(11) NOT NULL DEFAULT '0',
  `MenuNameEN` varchar(255) NOT NULL,
  `MenuNameTH` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `ImageCaption` text NOT NULL,
  `Position` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MenuID`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.menu: ~54 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`MenuID`, `Parent`, `Level`, `MenuNameEN`, `MenuNameTH`, `Image`, `ImageCaption`, `Position`, `Status`) VALUES
	(1, 0, 1, 'Business Operations', 'Business Operations', 'image_ar2015_284.jpg', 'The activities of Bayer Thai are concentrated in three business subgroups: Bayer HealthCare (BHC), Bayer CropScience (BCS). Moreover, Bayer Thai also take care of an agency business representing third parties.', 1, 1),
	(2, 0, 1, 'Products', 'Products', 'produkte_v1_300x176.jpg', 'Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture.', 2, 1),
	(3, 0, 1, 'Crop Calendar', 'Crop Calendar', 'quality_check_in_the_field-300x200.jpg', 'Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture. ', 3, 1),
	(4, 0, 1, 'Production & Research', 'Production & Research', 'leaves_under_microscope-300x200.jpg', 'Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture. ', 4, 1),
	(5, 1, 2, 'Crop Protections', 'Crop Protections', '', '', 1, 1),
	(6, 1, 2, 'Seeds', 'Seeds', '', '', 2, 1),
	(7, 1, 2, 'Environmental Science', 'Environmental Science', '', '', 3, 1),
	(8, 2, 2, 'Fungicides', 'Fungicides', '', '', 1, 1),
	(9, 2, 2, 'Herbicides', 'Herbicides', '', '', 2, 1),
	(10, 2, 2, 'Insecticides', 'Insecticides', '', '', 3, 1),
	(11, 2, 2, 'Seeds', 'Seeds', '', '', 4, 1),
	(12, 2, 2, 'Compendium', 'Compendium', '', '', 5, 1),
	(13, 4, 2, 'Crop Science Bangpoo production site', 'Crop Science Bangpoo production site', '', '', 1, 1),
	(14, 4, 2, 'Research Center', 'Research Center', '', '', 2, 1),
	(15, 8, 3, 'Luna Experience', 'Luna Experience', '', '', 1, 1),
	(16, 8, 3, 'Luna Sensation', 'Luna Sensation', '', '', 2, 1),
	(17, 8, 3, 'Antracol', 'Antracol', '', '', 3, 1),
	(18, 8, 3, 'Nativo 75 WG', 'Nativo 75 WG', '', '', 4, 1),
	(19, 8, 3, 'Profiler', 'Profiler', '', '', 5, 1),
	(20, 8, 3, 'Flint', 'Flint', '', '', 6, 1),
	(21, 8, 3, 'Folicur 250 EW', 'Folicur 250 EW', '', '', 7, 1),
	(22, 8, 3, 'Folicur 430 SC', 'Folicur 430 SC', '', '', 8, 1),
	(23, 8, 3, 'Invento 66.8 WP', 'Invento 66.8 WP', '', '', 9, 1),
	(24, 8, 3, 'Aliette 80 WG', 'Aliette 80 WG', '', '', 10, 1),
	(25, 8, 3, 'Ethrel 48 PGR', 'Ethrel 48 PGR', '', '', 11, 1),
	(26, 8, 3, 'Ethrel 10 LS', 'Ethrel 10 LS', '', '', 12, 1),
	(35, 9, 3, 'Ronstar', 'Ronstar', '', '', 1, 1),
	(36, 9, 3, 'Basta X', 'Basta X', '', '', 2, 1),
	(37, 9, 3, 'Tiller', 'Tiller', '', '', 3, 1),
	(38, 9, 3, 'Ricestar', 'Ricestar', '', '', 4, 1),
	(40, 9, 3, 'Whip 7.5', 'Whip 7.5', '', '', 5, 1),
	(41, 9, 3, 'Sunrice', 'Sunrice', '', '', 6, 1),
	(42, 9, 3, 'Sencor', 'Sencor', '', '', 7, 1),
	(43, 9, 3, 'Balance flexx', 'Balance flexx', '', '', 8, 1),
	(44, 9, 3, 'Alion', 'Alion', '', '', 9, 1),
	(45, 10, 3, 'Belt Expert', 'Belt Expert', '', '', 1, 1),
	(46, 10, 3, 'Alanto', 'Alanto', '', '', 2, 1),
	(47, 10, 3, 'Curbix', 'Curbix', '', '', 3, 1),
	(48, 10, 3, 'Provado', 'Provado', '', '', 4, 1),
	(49, 10, 3, 'Decis', 'Decis', '', '', 5, 1),
	(50, 10, 3, 'Politec 025 EC', 'Politec 025 EC', '', '', 6, 1),
	(51, 10, 3, 'Oberon', 'Oberon', '', '', 7, 1),
	(52, 11, 3, 'Gaucho 70 WS', 'Gaucho 70 WS', '', '', 1, 1),
	(53, 3, 2, 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', '', '', 1, 1),
	(54, 3, 2, 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', '', '', 2, 1),
	(55, 3, 2, 'Bulb Crop', 'Bulb Crop', '', '', 3, 1),
	(56, 3, 2, 'Chili', 'Chili', '', '', 4, 1),
	(57, 3, 2, 'Asparagus', 'Asparagus', '', '', 5, 1),
	(58, 3, 2, 'Watermelon', 'Watermelon', '', '', 6, 1),
	(59, 3, 2, 'Tomato', 'Tomato', '', '', 7, 1),
	(60, 3, 2, 'Orange', 'Orange', '', '', 8, 1),
	(61, 3, 2, 'Cabbage', 'Cabbage', '', '', 9, 1),
	(62, 3, 2, 'Cucumber', 'Cucumber', '', '', 10, 1),
	(63, 3, 2, 'Roselle', 'Roselle', '', '', 11, 1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;


-- Dumping structure for table cropscience.product
CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryID` int(11) NOT NULL DEFAULT '0',
  `TradeName` varchar(255) NOT NULL,
  `CommonName` varchar(255) NOT NULL,
  `Formula` varchar(255) NOT NULL,
  `Detail` text NOT NULL,
  `Contain` varchar(255) NOT NULL,
  `Suggestion` text NOT NULL,
  `Warning` text NOT NULL,
  `DangerousNo` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `BrandImage` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.product: ~4 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`ProductID`, `CategoryID`, `TradeName`, `CommonName`, `Formula`, `Detail`, `Contain`, `Suggestion`, `Warning`, `DangerousNo`, `Image`, `BrandImage`, `Status`) VALUES
	(1, 0, 'โฟลิเคอร์® 430 เอสซี (Folicur® 430 SC)', 'ทีบูโคนาโซล (tebuconazole)', '43% W/V SC', '<ul><li>สูตรครีมเข้มข้น ละลายน้ำได้ดี ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ดูดซึมเข้าสู่ส่วนต่างๆ ของพืชได้อย่างรวดเร็ว</li><li>เพื่อยับยั้งขบวนการสร้างผนังเซลล์ของเชื้อราสาเหตุ</li><li>ป้องกันกำจัดโรคเมล็ดด่างในข้าว มีระยะปลอดฝนสั้น</li></ul>', '100, 250 ซีซี', 'ป้องกันกำจัดโรคเมล็ดด่างในข้าว มีระยะปลอดฝนสั้น', '', '', '', '', 1),
	(2, 0, 'อินเวนโต® 66.8 ดับบลิวพี (Invento® 66.8 WP)', 'ไอโพรวาลิคาร์บ + โพรพิเนบ (iprovalicarb + propineb)', '5.5% + 61.3% WP', '<ul>\r\n<li>เนื้อสารละเอียด นุ่ม ฟู ละลายน้ำได้ดี ไม่อุดตันหัวฉีด</li>\r\n<li>ออกฤทธิ์สัมผัส และดูดซึมอย่างรวดเร็ว เพื่อยับยั้งกระบวนการงอก และการเจริญเติบโตของเส้นใยเชื้อรา</li>\r\n<li>เป็นสารป้องกัน-กำจัดโรคใบไหม้ของมันฝรั่ง</li>\r\n<li>ปลอดภัยต่อพืชปลูก ในทุกระยะการเจริญเติบโต แม้ในระยะดอกบาน</li>\r\n</ul>', '1,000 กรัม', 'test', '', '', '', '', 1),
	(7, 0, 'ลูน่า® เอ็กซ์พีเรียนซ์ (Luna® Experience)', 'ฟลูโอไพแรม + ทีบูโคนาโซล (fluopyram + tebuconazole)', '20% + 20% W/V SC', '<ul><li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ แบบดูดซึม และแทรกซึม เพื่อขัดขวางการหายใจ และยับยั้งการสร้าง</li><li>ผนังเซลล์ของเชื้อราสาเหตุ</li><li>เป็นสารกลุ่มใหม่ใช้ป้องกันกำจัดโรคเมล็ดด่างในนาข้าว</li><li>ทำให้ต้นข้าวแข็งแรง ใบเขียวสวย เต็มรวงดี</li><li>มีระยะปลอดฝนสั้น เพียง 2 - 3 ชั่วโมง</li><li>ด้วยการฉีดพ่นเพียง 2 ครั้งต่อฤดู ช่วยทำให้ได้ผลผลิตเพิ่มมากกว่า 10%</li></ul>', '500 ซีซี', '                  <table class="table kborder">\r\n                    <thead>\r\n                      <tr>\r\n                        <th width="100">พืช</th>\r\n                        <th width="120">ประโยชน์</th>\r\n                        <th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th>\r\n                        <th>วิธีใช้</th>\r\n                      </tr>\r\n                    </thead>                  \r\n                 \r\n                    <tbody>\r\n                      <tr>\r\n                        <td><strong>ข้าว</strong></td>\r\n                        <td>ใช้ป้องกัน-กำจัดโรคเมล็ดด่าง</td>\r\n                        <td>- 25 ซีซี (50 ซีซีต่อไร่)</td>\r\n                        <td>\r\n                          <ul>\r\n                            <li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li>\r\n                            <li>ออกฤทธิ์แบบดูดซึม และแทรกซึม เพื่อขัดขวางการหายใจ และยับยั้งการสร้างผนังเซลล์ของเชื้อราสาเหตุ</li>\r\n                            <li>เป็นสารกลุ่มใหม่ ใช้ป้องกัน-กำจัดโรคเมล็ดด่างในนาข้าว</li>\r\n                            <li>ทำให้ต้นข้าวแข็งแรง, ใบเขียวสวย , เต็มรวงดี</li>\r\n                            <li>มีระยะปลอดฝนสั้น เพียง 2 - 3 ชั่วโมง</li>\r\n                            <li>ด้วยการฉีดพ่นเพียง 2 ครั้งต่อฤดู ช่วยทำให้ได้ผลผลิตเพิ่มมากกว่า 10%</li>\r\n                          </ul>                          \r\n                        </td>\r\n                      </tr>                                                                                                             \r\n                    </tbody>\r\n                  </table>                            \r\n', '', '', 'Luna-Experience-500-ml1.png', 'Luna-Experience-BT6.jpg', 1),
	(8, 0, 'ลูน่า® เซ้นท์เซชั่น (Luna® Sensation)', 'ฟลูโอไพแรม + ไตรฟลอกซีสโตรบิน (fluopyram + trifloxystrobin)', '25% + 25% W/V SC', '<ul><li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ดูดซึม และเมโซสเต็มมิค (ขจรขจาย แทรกซึม และดูดซึมเข้าสู่เนื้อเยื่อ</li><li>พืชได้อย่างรวดเร็ว) เพื่อขัดขวาง และยับยั้งการหายใจของเชื้อราสาเหตุ</li><li>เป็นสารกลุ่มใหม่ใช้ป้องกันกำจัดโรคใบจุดสีม่วงในหอมหัวใหญ่</li><li>ช่วยทำให้ผลผลิตเพิ่ม คุณภาพดี</li><li>มีระยะปลอดฝนสั้นพียง 2 – 3 ชั่วโมง</li><li>ยืดชีวิต คุ้มครองผลผลิต หลังเก็บเกี่ยวได้ยาวนาน</li></ul>', '100, 500 ซีซี', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>หอมหัวใหญ่</strong></td><td>ใช้ป้องกัน-กำจัดโรคใบจุดสีม่วง</td><td>10 ซีซี</td><td><ul><li>เริ่มพ่นครั้งแรกเมื่อ พบการระบาดของโรคและพ่นซ้ำ ทุก 5 วัน</li><li>ห้ามเก็บเกี่ยวหอมหัวใหญ่อย่างน้อย 14 วัน หลังจากพ่นครั้งสุดท้าย</li></ul></td></tr></tbody></table>', '', '', 'Luna-Sensation_100.png', 'Luna-Sensation_BT6.jpg', 1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;


-- Dumping structure for table cropscience.product_category
CREATE TABLE IF NOT EXISTS `product_category` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `Parent` int(11) NOT NULL DEFAULT '0',
  `Level` int(11) NOT NULL DEFAULT '0',
  `CategoryNameEN` varchar(255) NOT NULL,
  `CategoryNameTH` varchar(255) NOT NULL,
  `Position` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.product_category: ~5 rows (approximately)
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` (`CategoryID`, `Parent`, `Level`, `CategoryNameEN`, `CategoryNameTH`, `Position`, `Status`) VALUES
	(1, 0, 1, 'Fungicides', 'Fungicides', 1, 1),
	(2, 0, 1, 'Herbicides', 'Herbicides', 2, 1),
	(3, 0, 1, 'Insecticides', 'Insecticides', 3, 1),
	(4, 0, 1, 'SeedGrowth', 'SeedGrowth', 4, 1),
	(30, 2, 2, 'Ronstar', 'Ronstar', 1, 1);
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;


-- Dumping structure for table cropscience.template
CREATE TABLE IF NOT EXISTS `template` (
  `TemplateID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateName` varchar(255) NOT NULL DEFAULT '0',
  `ViewName` varchar(255) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TemplateID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.template: ~3 rows (approximately)
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` (`TemplateID`, `TemplateName`, `ViewName`, `Status`) VALUES
	(1, 'Standard Content', 'content', 1),
	(2, 'Product List', 'product_list', 1),
	(3, 'Product Detail', 'product_detail', 1);
/*!40000 ALTER TABLE `template` ENABLE KEYS */;


-- Dumping structure for table cropscience.user
CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserType` char(50) DEFAULT '0',
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `FullName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`UserID`, `UserType`, `UserName`, `Password`, `FullName`, `Email`, `CreatedDate`, `Status`) VALUES
	(1, 'admin', 'admin', 'admin', 'Admin', 'natthaphol@gmail.com', '2016-07-30 17:06:37', NULL),
	(4, 'admin', 'kate', 'kate123', 'Katenapa', 'kate@gmail.com', NULL, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
