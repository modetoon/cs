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
  `CalendarID` int(11) DEFAULT '0',
  `SliderID` int(11) DEFAULT '0',
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.content: ~31 rows (approximately)
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` (`ContentID`, `MenuID`, `TemplateID`, `ProductID`, `CalendarID`, `SliderID`, `ContentNameEN`, `ContentNameTH`, `PageTitleEN`, `PageTitleTH`, `PageHeadlineEN`, `PageHeadlineTH`, `ContentEN`, `ContentTH`, `MetaKeywordEN`, `MetaKeywordTH`, `MetaDescriptionEN`, `MetaDescriptionTH`, `Slug`, `Url`, `ShowLeftMenu`, `Status`, `CreatedDate`, `CreatedBy`, `UpdatedDate`, `UpdatedBy`) VALUES
	(1, 1, 1, NULL, 0, 0, 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', '<p>The Crop Protection business offers a broad portfolio of products to farmers with a focus on rice, vegetables and fruit corps. Tiller<sup>®</sup>,Ricestar<sup>®</sup> and Whip<sup>®</sup> are leading herbicides for control of grasses and other weeds in rice. Whereas Ronstar<sup>®</sup> is leading herbicide for control weeds in DDSR (Dry Direct Seed Rice). Solutions for vegetables and fruit corps via new innovative of the fungicide Luna<sup>®</sup> Sensation and include rice fungicide Luna<sup>®</sup>Experience and Antracol <sup>®</sup> and the insecticides Provado<sup>®</sup>and Folitec<sup>®</sup>.</p><div class="spacer"> </div><p>Bayer CropScience is committed to consistently introduce new and innovative solutions for farmers in Thailand and to support them with technical expertise. BELT<sup>®</sup> Expert is a new generation insecticide for the control of leaf folder and stem borer that has recently will be launching into the market. At the same time, Alion<sup>®</sup> is new herbicide product for long lasting (3-6 months) control weeds in oil palm and para rubber. The Bayer Much More Rice (BMMR) project has been launched by Antracol <sup>®</sup> 2 times and Luna<sup>®</sup> Experience 2 times and successfully introduced for controlling fungus diseases in rice and included Alanto<sup>®</sup> for control thrips and BELT<sup>®</sup> Expert for leaf folder and stem borer in rice. Meanwhile, Basta<sup>®</sup> has been successfully introduced for rid grassy weed and broad leaves weed in fruit and rice bund and use for against weedy rice – an increasing problem in Thai rice farming.</p>', '<ol><li>Business Operations</li><li>Business Operations&nbsp;</li><li>Business Operations</li></ol>', 'Business Operations', 'Business Operations', 'Business Operations', 'Business Operations', 'business-operations', 'content/business-operations', 1, 1, '2016-08-01 21:15:23', 'admin', '2016-08-01 21:15:27', 'admin'),
	(3, 5, 1, 0, 0, 0, 'Crop Protections', 'ไบเออร์ ครอปซายน์', 'Crop Protections', 'ไบเออร์ ครอปซายน์', 'Crop Protections', 'ไบเออร์ ครอปซายน์', '<p>The Crop Protection business offers a broad portfolio of products to farmers with a focus on rice, vegetables and fruit corps. Tiller®,Ricestar® and Whip® are leading herbicides for control of grasses and other weeds in rice. Whereas Ronstar® is leading herbicide for control weeds in DDSR (Dry Direct Seed Rice). Solutions for vegetables and fruit corps via new innovative of the fungicide Luna® Sensation and include rice fungicide Luna®Experience and Antracol ® and the insecticides Provado®and&nbsp; Folitec®.</p><p>Bayer CropScience is committed to consistently introduce new and innovative solutions for farmers in Thailand and to support them with technical expertise.&nbsp; BELT® Expert is a new generation insecticide for the control of leaf folder and stem borer that has recently will be launching into the market. At the same time, Alion® is new herbicide product for long lasting (3-6 months) control weeds in oil palm and para rubber. The Bayer Much More Rice (BMMR) project has been launched by&nbsp; Antracol ® 2 times and Luna®Experience 2 times and successfully introduced for controlling fungus diseases in rice and included Alanto® for control thrips and BELT® Expert for leaf folder and stem borer in rice. Meanwhile, Basta® has been successfully introduced for rid grassy weed and broad leaves weed in fruit and rice bund and use for against weedy rice – an increasing problem in Thai rice farming.</p>', '<p>ไบเออร์ ครอปซายน์ กลุ่มธุรกิจผลิตภัณฑ์อารักขาพืช<br />ไบเออร์ ครอปซายน์ เป็นหนึ่งในบริษัทชั้นนำระดับโลกด้านนวัตกรรมเพื่อการอารักขาพืช เมล็ดพันธุ์ และการควบคุมแมลงที่ไม่เกี่ยวกับการเกษตร นอกจากนี้ ไบเออร์ ครอปซายน์ยังเป็นผู้ผลิตเมล็ดพันธุ์ที่มีคุณค่าสูง ผลิตภัณฑ์อารักขาพืชที่ใช้วิธีทางเคมีและชีวภาพ และให้บริการสนับสนุนอย่างกว้างขวางเพื่อการเกษตรสมัยใหม่ที่ยั่งยืน</p><p>กลุ่มธุรกิจอารักขาพืช เป็นกลุ่มธุรกิจที่นำเสนอผลิตภัณฑ์แก่เกษตรกรที่ครอบคลุมการใช้ อย่างกว้างขวาง โดยเฉพาะอย่างยิ่งผลิตภัณฑ์ที่ใช้ในนาข้าว สวนผักและสวนผลไม้ ผลิตภัณฑ์ที่ได้รับความนิยมอย่างแพร่หลาย ได้แก่ ทิลเลอร์® ไรซ์สตาร์® และวิป® ซึ่งใช้กำจัดวัชพืชจำพวกหญ้าและวัชพืชอื่นๆ ในนาข้าว ขณะที่รอนสตาร์® เป็นผลิตภัณฑ์กำจัดวัชพืชชั้นนำในการควบคุมวัชพืชในการปลูกข้าวโดยวิธีหว่านข้าวแห้ง นอกจากนี้ยังมีผลิตภัณฑ์ใหม่ล่าสุดสำหรับกำจัดโรคราในนาข้าว ได้แก่ ลูน่า® เอ็กซ์พีเรียนซ์ และผลิตภัณฑ์สำหรับกำจัดโรคราในผักและไม้ผล ซึ่งได้แก่ ลูน่า® เซนท์เซชั่น และ แอนทราโคล®&nbsp; และผลิตภัณฑ์กำจัดแมลง เพลี้ยไฟ เช่น โปรวาโด® และโฟลิเทค®</p><p>ไบเออร์ ครอปซายน์ มุ่งมั่นที่จะพัฒนาและนำเสนอผลิตภัณฑ์ใหม่ๆ และช่วยให้คำแนะนำเรื่อง วิธีการใช้ที่ถูกต้อง เบลท์® เอ็กซ์เพิร์ท เป็นผลิตภัณฑ์ใหม่ของไบเออร์ ครอปซายน์ ในการกำจัดหนอนห่อใบข้าวและหนอนกอ นอกจากนี้ยังมี เอไลออน®&nbsp; นวัตกรรมใหม่ในการคุมหญ้าวัชพืชในสวนปาล์มน้ำมัน และยางพารา ได้ยาวนาน 3-6 เดือน และจากการเปิดตัวของ โครงการ ไบเออร์ ข้าวมากมาย โดยใช้ แอนทราโคล® 2 ครั้ง และ ลูน่า® เอ็กซ์พีเรียนซ์ 2 ครั้ง รวมถึงการใช้ อะแลนโต® กำจัดเพลี้ยไฟข้าว และ เบลท์® เอ็กซ์เพิร์ท กำจัดหนอนห่อใบข้าวและหนอนกอ ก็ได้รับการตอบรับเป็นอย่างดีจากเกษตรกรชาวนา ส่วน บาสต้า® เอ็กซ์ เป็นผลิตภัณฑ์เพื่อใช้กำจัดหญ้าทั้งใบแคบและใบกว้าง หญ้าหัวคันนา ที่เป็นอันตรายน้อยต่อพืชประธาน และ ใช้ลูบข้าววัชพืช ( ข้าวดีด) ที่กำลังเป็นปัญหาสำคัญสำหรับนาข้าวในประเทศไทย</p>', 'Crop Protections', 'ไบเออร์ ครอปซายน์', 'Crop Protections', 'ไบเออร์ ครอปซายน์ กลุ่มธุรกิจผลิตภัณฑ์อารักขาพืช', 'crop-protections', 'content/crop-protections', 1, 1, NULL, NULL, NULL, NULL),
	(4, 6, 1, NULL, 0, 0, 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', '<p>Our seeds are adapted to local soil and climatic conditions and give high yields. When breeding new varieties, we also take into account consumer requirements, such as the flavor of vegetables. Whether their work focuses on rice, vegetables, cotton or oilseed rape / canola, our research centers worldwide always have the same goals: to protect harvests from diseases, insect pests and encroaching weeds and to improve plant health, thus increasing yields and improving crop quality. We have expanded our research activities to include two new core crops – wheat and soybeans. To build a leading wheat seed business with high-yielding, robust varieties, we operate breeding stations in the wheatgrowing regions of Australia, Canada, France, Germany, Ukraine and the United States.</p>', '<p>Our seeds are adapted to local soil and climatic conditions and give high yields. When breeding new varieties, we also take into account consumer requirements, such as the flavor of vegetables. Whether their work focuses on rice, vegetables, cotton or oilseed rape / canola, our research centers worldwide always have the same goals: to protect harvests from diseases, insect pests and encroaching weeds and to improve plant health, thus increasing yields and improving crop quality. We have expanded our research activities to include two new core crops – wheat and soybeans. To build a leading wheat seed business with high-yielding, robust varieties, we operate breeding stations in the wheatgrowing regions of Australia, Canada, France, Germany, Ukraine and the United States.</p>', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'seeds1', 'content/seeds1', 1, 1, NULL, NULL, NULL, NULL),
	(5, 7, 1, NULL, 0, 0, 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', '<p>Our Environmental Science unit offers professional users and private consumers pest and weed control products for use on golf courses, roads and railways, in forestry and in private gardens, for example. Furthermore, Environmental Science supports public health and adherence to hygiene standards through its modern range of pest control products. One focus here is on the control of insects that transmit tropical or subtropical diseases such as malaria, dengue fever and Chagas disease.</p>', '<p>Our Environmental Science unit offers professional users and private consumers pest and weed control products for use on golf courses, roads and railways, in forestry and in private gardens, for example. Furthermore, Environmental Science supports public health and adherence to hygiene standards through its modern range of pest control products. One focus here is on the control of insects that transmit tropical or subtropical diseases such as malaria, dengue fever and Chagas disease.</p>', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'Environmental Science', 'environmental-science', 'content/environmental-science', 1, 1, NULL, NULL, NULL, NULL),
	(7, 2, 2, 0, 0, 2, 'Products', 'Products', 'Products', 'Products', 'Products', 'Products', '', '', 'Products', 'Products', 'Products', 'Products', 'products', 'product_list/products', 1, 1, NULL, NULL, NULL, NULL),
	(8, 8, 2, 0, 0, 2, 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', '<p>(Sample Text) Crop Science, a division of Bayer, plant fungicides provide outstanding control of a broad spectrum of crop diseases, leading to healthier plants and higher yields. Our products offer a wide variety of fungicidal benefits, with multiple modes of action that protect crops from leaf surface to plant core. New formulations make our fungicides easier to handle, require lower use rates and provide tankmix compatibility with a wide range of crop protection products.</p>', '<p>(Sample Text) Crop Science, a division of Bayer, plant fungicides provide outstanding control of a broad spectrum of crop diseases, leading to healthier plants and higher yields. Our products offer a wide variety of fungicidal benefits, with multiple modes of action that protect crops from leaf surface to plant core. New formulations make our fungicides easier to handle, require lower use rates and provide tankmix compatibility with a wide range of crop protection products.</p>', 'Fungicides', 'Fungicides', 'Fungicides', 'Fungicides', 'fungicides', 'product_list/fungicides', 1, 1, NULL, NULL, NULL, NULL),
	(9, 9, 2, 0, 0, 2, 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Herbicides', 'Herbicides', 'Herbicides', 'Herbicides', 'herbicides', 'product_list/herbicides', 1, 1, NULL, NULL, NULL, NULL),
	(10, 10, 2, 0, 0, 2, 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'Insecticides', 'Insecticides', 'Insecticides', 'Insecticides', 'insecticides', 'product_list/insecticides', 1, 1, NULL, NULL, NULL, NULL),
	(11, 11, 2, 0, 0, 2, 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'Seeds', '', '', 'Seeds', 'Seeds', 'Seeds', 'Seeds', 'seeds2', 'product_list/seeds2', 1, 1, NULL, NULL, NULL, NULL),
	(12, 12, 1, NULL, 0, 0, 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'Compendium', '<ul><li>Compendium Compendium</li><li>Compendium Compendium&nbsp;</li><li>Compendium Compendium</li></ul>', '<ul><li>Compendium Compendium</li><li>Compendium Compendium&nbsp;</li><li>Compendium Compendium</li></ul><p> </p>', 'Compendium', 'Compendium', 'Compendium', 'Compendium', 'compendium', 'content/compendium', 1, 1, NULL, NULL, NULL, NULL),
	(13, 15, 3, 7, 0, 0, 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', '', '', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'Luna Experience', 'luna-experience', 'product_detail/luna-experience', 1, 1, NULL, NULL, NULL, NULL),
	(14, 16, 3, 8, 0, 0, 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', '', '', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'Luna Sensation', 'luna-sensation', 'product_detail/luna-sensation', 1, 1, NULL, NULL, NULL, NULL),
	(15, 17, 3, 9, 0, 0, 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'Antracol', '', '', 'Antracol', 'Antracol', 'Antracol', 'Antracol', 'antracol', 'product_detail/antracol', 1, 1, NULL, NULL, NULL, NULL),
	(16, 18, 2, NULL, 0, 0, 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', '', '', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'Nativo 75 WG', 'nativo-75-wg', 'product_list/nativo-75-wg', 1, 1, NULL, NULL, NULL, NULL),
	(17, 19, 2, NULL, 0, 0, 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'Profiler', '', '', 'Profiler', 'Profiler', 'Profiler', 'Profiler', 'profiler', 'product_list/profiler', 1, 1, NULL, NULL, NULL, NULL),
	(18, 20, 2, NULL, 0, 0, 'Flint', 'Flint', 'Flint', 'Flint', 'Flint', 'Flint', '', '', 'Flint', 'Flint', 'Flint', 'Flint', 'flint', 'product_list/flint', 1, 1, NULL, NULL, NULL, NULL),
	(19, 21, 2, NULL, 0, 0, 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', '', '', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'Folicur 250 EW', 'folicur-250-ew', 'product_list/folicur-250-ew', 1, 1, NULL, NULL, NULL, NULL),
	(20, 22, 2, NULL, 0, 0, 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', '', '', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'Folicur 430 SC', 'folicur-430-sc', 'product_list/folicur-430-sc', 1, 1, NULL, NULL, NULL, NULL),
	(21, 23, 2, 0, 0, 0, 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', '', '', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'Invento 66.8 WP', 'invento-66-8-wp', 'product_list/invento-66-8-wp', 1, 1, NULL, NULL, NULL, NULL),
	(22, 24, 2, 0, 0, 0, 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', '', '', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'Aliette 80 WG', 'aliette-80-wg', 'product_list/aliette-80-wg', 1, 1, NULL, NULL, NULL, NULL),
	(23, 25, 2, 0, 0, 0, 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', '', '', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'Ethrel 48 PGR', 'ethrel-48-pgr', 'product_list/ethrel-48-pgr', 1, 1, NULL, NULL, NULL, NULL),
	(24, 26, 2, NULL, 0, 0, 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', '', '', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'Ethrel 10 LS', 'ethrel-10-ls', 'product_list/ethrel-10-ls', 1, 1, NULL, NULL, NULL, NULL),
	(25, 3, 4, 0, 0, 0, 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', '<p>(Sample Text) Crop Science, a division of Bayer, plant fungicides provide outstanding control of a broad spectrum of crop diseases, leading to healthier plants and higher yields. Our products offer a wide variety of fungicidal benefits, with multiple modes of action that protect crops from leaf surface to plant core. New formulations make our fungicides easier to handle, require lower use rates and provide tankmix compatibility with a wide range of crop protection products.</p>', '<p>(Sample Text) Crop Science, a division of Bayer, plant fungicides provide outstanding control of a broad spectrum of crop diseases, leading to healthier plants and higher yields. Our products offer a wide variety of fungicidal benefits, with multiple modes of action that protect crops from leaf surface to plant core. New formulations make our fungicides easier to handle, require lower use rates and provide tankmix compatibility with a wide range of crop protection products.</p>', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'Crop Calendar', 'crop-calendar', 'cropcalendar_list/crop-calendar', 1, 1, NULL, NULL, NULL, NULL),
	(26, 53, 5, 0, 1, 0, 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', 'Rice (Dry Direct Seeded Rice)', '<ul><li>Rice (Dry Direct Seeded Rice)</li><li>Rice (Dry Direct Seeded Rice)&nbsp;</li><li>Rice (Dry Direct Seeded Rice)</li></ul><p> </p>', '<ul><li>Rice (Dry Direct Seeded Rice)</li><li>Rice (Dry Direct Seeded Rice)&nbsp;</li><li>Rice (Dry Direct Seeded Rice)</li></ul>', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'Rice (Dry Direct Seeded Rice) ', 'dry-direct-seeded-rice', 'cropcalendar_detail/dry-direct-seeded-rice', 1, 1, NULL, NULL, NULL, NULL),
	(27, 54, 5, NULL, 2, 0, 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', '<ol><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li></ol>', '<ol><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li><li>Rice (Pre-germinated Direct Seeded Rice)</li></ol>', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'Rice (Pre-germinated Direct Seeded Rice)', 'pre-germinated-direct-seeded-rice', 'cropcalendar_detail/pre-germinated-direct-seeded-rice', 1, 1, NULL, NULL, NULL, NULL),
	(28, 55, 1, NULL, 0, 0, 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', '<p>Bulb Crop</p>', '<p>Bulb Crop</p>', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'Bulb Crop', 'bulb-crop', 'cropcalendar_detail/bulb-crop', 1, 1, NULL, NULL, NULL, NULL),
	(29, 4, 1, NULL, 0, 0, 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Production & Research', 'Production & Research', 'Production & Research', 'Production & Research', 'production-research', 'content/production-research', 1, 1, NULL, NULL, NULL, NULL),
	(30, 13, 1, 0, 0, 0, 'Crop Science Bangpoo production Site', 'ศูนย์การผลิตนิคมอุตสาหกรรมบางปู', 'Crop Science Bangpoo production Site', 'ศูนย์การผลิตนิคมอุตสาหกรรมบางปู', 'Crop Science Bangpoo production Site', 'ศูนย์การผลิตนิคมอุตสาหกรรมบางปู', '<p>Bayer Thai production site in Bangpoo Industrial Estate:</p><p>The Chemical formulation site commenced the operation in the Bangpoo Industrial Estate, Samutprakarn province in 1982. The state-of-the-art facility has been developed and expanded to service increasing market demands and the growth of Bayer\'s business in the region.</p><p>With an annual production capacity of 9 ,000 tons, the site houses various formulation lines and filling lines for crop protection, environmental science, and animal health products. The products are formulated and packaged in solid and liquid forms to serve both domestic and oversea markets.</p><p><br />The site was awarded the first ever Good Manufacturing Practice (GMP) certification for household and environmental science production by the Food and Drug Administration (FDA) of Thailand in 1999. The ISO 14001 certification to verify the site\'s high standard of environmental management system was achieved in 2001. In addition, it also achieved the OHSAS 18001 certification in 2006 and ISO/IEC 17025 in 2015.</p><p>With a strong commitment to environmental protection occupational plant safety and product stewardship, the site is operated under "Responsible Care Initiative."</p>', '<p>ศูนย์การผลิตนิคมอุตสาหกรรมบางปู</p><p>ข้อมูลทั่วไป</p><p>ศูนย์การผลิตเคมีภัณฑ์ของบริษัท ไบเออร์ไทย จำกัด ซึ่งตั้งอยู่ในนิคมอุตสาหกรรมบางปู จังหวัดสมุทรปราการ ได้เริ่มทำการผลิตมาตั้งแต่ปี พ.ศ.2525 และได้รับการพัฒนาและขยายเพื่อตอบสนองความต้องการของลูกค้าและเพื่อรองรับการเติบโตทางธุรกิจของไบเออร์ในภูมิภาคเอเชีย-แปซิฟิก</p><p>ศูนย์การผลิตที่นิคมอุตสาหกรรมบางปูมีกำลังการผลิต 9,000 ตันต่อปี โดยประกอบไปด้วยสายการผลิตของผลิตภัณฑ์ อารักขาพืช ผลิตภัณฑ์ด้านวิทยาการเพื่อสิ่งแวดล้อม และผลิตภัณฑ์สำหรับสัตว์ โดยผลิตภัณฑ์ต่างๆ นี้ได้รับการผสมและบรรจุในรูปของเหลวและชนิดผงสำหรับจำหน่ายในประเทศและต่างประเทศ</p><p>ศูนย์การผลิตแห่งนี้ ได้รับประกาศนียบัตรรับรอง "หลักเกณฑ์วิธีการที่ดีในการผลิต" จากสำนักงานคณะกรรมการอาหารและยา (อ.ย.) เป็นแห่งแรกของประเทศไทยในปี พ.ศ. 2542 สำหรับการผลิตผลิตภัณฑ์ที่ใช้ในครัวเรือนและผลิตภัณฑ์ด้านวิทยาการเพื่อสิ่งแวดล้อม นอกจากนี้ ยังได้รับการรับรองมาตรฐานการจัดการคุณภาพและสิ่งแวดล้อม ISO 14001 ในปี พ.ศ. 2544 รวมถึงการได้รับการรับรองการจัดการด้านอาชีวอนามัยและความปลอดภัย OHSAS 18001 ในปี พ.ศ. 2549</p>', 'Crop Science Bangpoo production Site', 'ศูนย์การผลิตนิคมอุตสาหกรรมบางปู', 'Crop Science Bangpoo production Site', 'ศูนย์การผลิตนิคมอุตสาหกรรมบางปู', 'crop-science-bangpoo-production-site', 'content/crop-science-bangpoo-production-site', 1, 1, NULL, NULL, NULL, NULL),
	(31, 35, 3, 10, 0, 0, 'RonStar', 'RonStar', 'RonStar', 'RonStar', 'RonStar', 'RonStar', '', '', 'RonStar', 'RonStar', 'RonStar', 'RonStar', 'ronstar', 'product_detail/ronstar', 1, 1, NULL, NULL, NULL, NULL),
	(33, 36, 3, 11, 0, 0, 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', '', '', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'บาสต้า® เอ็กซ์ (Basta® X)', 'basta-x', 'product_detail/basta-x', 1, 1, NULL, NULL, NULL, NULL),
	(34, 45, 3, 12, 0, 0, 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert)', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', '', '', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'belt-expert', 'product_detail/belt-expert', 1, 1, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;


-- Dumping structure for table cropscience.crop_calendar
CREATE TABLE IF NOT EXISTS `crop_calendar` (
  `CalendarID` int(11) NOT NULL AUTO_INCREMENT,
  `CalendarName` varchar(255) NOT NULL,
  `TextLeft` varchar(255) NOT NULL,
  `TextRight` varchar(255) NOT NULL,
  `HeaderImage` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Position` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CalendarID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.crop_calendar: ~2 rows (approximately)
/*!40000 ALTER TABLE `crop_calendar` DISABLE KEYS */;
INSERT INTO `crop_calendar` (`CalendarID`, `CalendarName`, `TextLeft`, `TextRight`, `HeaderImage`, `Image`, `Position`, `Status`) VALUES
	(1, 'Rice (Dry Direct Seeded Rice)', 'ระยะการเจริญเติบโต ผลิตภัณฑ์ที่แนะนำ', 'อัตราการใช้ต่อน้ำ 20 ลิตร', 'Head1.jpg', 'Rice.jpg', 1, 1),
	(2, 'Rice (Pre-germinated Direct Seeded Rice)', 'xxx', 'cccc', 'Head1.jpg', 'Rice.jpg', 2, 1);
/*!40000 ALTER TABLE `crop_calendar` ENABLE KEYS */;


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
  `Benefit` text NOT NULL,
  `DangerousNo` text NOT NULL,
  `Remark` text NOT NULL,
  `Image` varchar(255) NOT NULL,
  `BrandImage` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.product: ~8 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`ProductID`, `CategoryID`, `TradeName`, `CommonName`, `Formula`, `Detail`, `Contain`, `Suggestion`, `Warning`, `Benefit`, `DangerousNo`, `Remark`, `Image`, `BrandImage`, `Status`) VALUES
	(1, 0, 'โฟลิเคอร์® 430 เอสซี (Folicur® 430 SC)', 'ทีบูโคนาโซล (tebuconazole)', '43% W/V SC', '<ul><li>สูตรครีมเข้มข้น ละลายน้ำได้ดี ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ดูดซึมเข้าสู่ส่วนต่างๆ ของพืชได้อย่างรวดเร็ว</li><li>เพื่อยับยั้งขบวนการสร้างผนังเซลล์ของเชื้อราสาเหตุ</li><li>ป้องกันกำจัดโรคเมล็ดด่างในข้าว มีระยะปลอดฝนสั้น</li></ul>', '100, 250 ซีซี', '', '', '', '', '', '', '', 1),
	(2, 0, 'อินเวนโต® 66.8 ดับบลิวพี (Invento® 66.8 WP)', 'ไอโพรวาลิคาร์บ + โพรพิเนบ (iprovalicarb + propineb)', '5.5% + 61.3% WP', '<ul>\r\n<li>เนื้อสารละเอียด นุ่ม ฟู ละลายน้ำได้ดี ไม่อุดตันหัวฉีด</li>\r\n<li>ออกฤทธิ์สัมผัส และดูดซึมอย่างรวดเร็ว เพื่อยับยั้งกระบวนการงอก และการเจริญเติบโตของเส้นใยเชื้อรา</li>\r\n<li>เป็นสารป้องกัน-กำจัดโรคใบไหม้ของมันฝรั่ง</li>\r\n<li>ปลอดภัยต่อพืชปลูก ในทุกระยะการเจริญเติบโต แม้ในระยะดอกบาน</li>\r\n</ul>', '1,000 กรัม', '', '', '', '', '', '', '', 1),
	(7, 0, 'ลูน่า® เอ็กซ์พีเรียนซ์ (Luna® Experience)', 'ฟลูโอไพแรม + ทีบูโคนาโซล (fluopyram + tebuconazole)', '20% + 20% W/V SC', '<ul><li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ แบบดูดซึม และแทรกซึม เพื่อขัดขวางการหายใจ และยับยั้งการสร้าง</li><li>ผนังเซลล์ของเชื้อราสาเหตุ</li><li>เป็นสารกลุ่มใหม่ใช้ป้องกันกำจัดโรคเมล็ดด่างในนาข้าว</li><li>ทำให้ต้นข้าวแข็งแรง ใบเขียวสวย เต็มรวงดี</li><li>มีระยะปลอดฝนสั้น เพียง 2 - 3 ชั่วโมง</li><li>ด้วยการฉีดพ่นเพียง 2 ครั้งต่อฤดู ช่วยทำให้ได้ผลผลิตเพิ่มมากกว่า 10%</li></ul>', '500 ซีซี', '', '', '<table class="table kborder"><thead><tr><th width="100">พืช</th><th width="120">ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>ข้าว</strong></td><td>ใช้ป้องกัน-กำจัดโรคเมล็ดด่าง</td><td>- 25 ซีซี (50 ซีซีต่อไร่)</td><td><ul><li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์แบบดูดซึม และแทรกซึม เพื่อขัดขวางการหายใจ และยับยั้งการสร้างผนังเซลล์ของเชื้อราสาเหตุ</li><li>เป็นสารกลุ่มใหม่ ใช้ป้องกัน-กำจัดโรคเมล็ดด่างในนาข้าว</li><li>ทำให้ต้นข้าวแข็งแรง, ใบเขียวสวย , เต็มรวงดี</li><li>มีระยะปลอดฝนสั้น เพียง 2 - 3 ชั่วโมง</li><li>ด้วยการฉีดพ่นเพียง 2 ครั้งต่อฤดู ช่วยทำให้ได้ผลผลิตเพิ่มมากกว่า 10%</li></ul></td></tr></tbody></table>', '', '', 'Luna-Experience-500-ml1.png', 'Luna-Experience-BT6.jpg', 1),
	(8, 0, 'ลูน่า® เซ้นท์เซชั่น (Luna® Sensation)', 'ฟลูโอไพแรม + ไตรฟลอกซีสโตรบิน (fluopyram + trifloxystrobin)', '25% + 25% W/V SC', '<ul><li>สูตรครีม สีขาวนวล ใช้สะดวก ละลายน้ำง่าย ไม่อุดตันหัวฉีด</li><li>ออกฤทธิ์ดูดซึม และเมโซสเต็มมิค (ขจรขจาย แทรกซึม และดูดซึมเข้าสู่เนื้อเยื่อ</li><li>พืชได้อย่างรวดเร็ว) เพื่อขัดขวาง และยับยั้งการหายใจของเชื้อราสาเหตุ</li><li>เป็นสารกลุ่มใหม่ใช้ป้องกันกำจัดโรคใบจุดสีม่วงในหอมหัวใหญ่</li><li>ช่วยทำให้ผลผลิตเพิ่ม คุณภาพดี</li><li>มีระยะปลอดฝนสั้นพียง 2 – 3 ชั่วโมง</li><li>ยืดชีวิต คุ้มครองผลผลิต หลังเก็บเกี่ยวได้ยาวนาน</li></ul>', '100, 500 ซีซี', '', '', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>หอมหัวใหญ่</strong></td><td>ใช้ป้องกัน-กำจัดโรคใบจุดสีม่วง</td><td>10 ซีซี</td><td><ul><li>เริ่มพ่นครั้งแรกเมื่อ พบการระบาดของโรคและพ่นซ้ำ ทุก 5 วัน</li><li>ห้ามเก็บเกี่ยวหอมหัวใหญ่อย่างน้อย 14 วัน หลังจากพ่นครั้งสุดท้าย</li></ul></td></tr></tbody></table>', '', '', 'Luna-Sensation_100.png', 'Luna-Sensation_BT6.jpg', 1),
	(9, 0, 'แอนทราโคล® (Antracol®)', 'โพรพิเนบ (propineb)', '70% WP', '<ul><li>เนื้อสารละเอียด นุ่ม ฟู ละลายน้ำได้ดี ไม่อุดตันหัวฉีด</li><li>การเคลือบติดที่ผิวใบพืชดี เป็นเกราะป้องกันการเข้าทำลายของเชื้อราพืช</li><li>ทนทานต่อการชะล้างของฝน</li><li>เป็นสารป้องกันโรคใบจุดสีน้ำตาลในข้าว และเชื้อรา โรคพืชได้หลายชนิด</li><li>มีคุณภาพสูง ไม่ก่อให้เกิดการดื้อยา</li><li>มีธาตุสังกะสีเป็นส่วนประกอบถึง 15%</li><li>เมื่อฉีดพ่นสม่ำเสมอ จะสามารถป้องกันไม่ให้พืชขาดธาตุสังกะสี</li><li>ปลอดภัยต่อพืช ในทุกระยะการเจริญเติบโต แม้ในระยะดอกบาน</li></ul>', '500 กรัม, 1,000 กรัม และ 25 กิโลกรัม', '', '', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>คะน้า</strong></td><td>ใช้ป้องกันโรคราน้ำค้าง</td><td>50 กรัม</td><td><ul><li>พ่นให้ทั่วเมื่อพบการระบาด และพ่นซ้ำทุก 5 วัน</li><li>ต้องเว้นระยะเวลาก่อนเก็บเกี่ยวอย่างน้อย 7 วัน หลังจากใช้ครั้งสุดท้าย</li></ul></td></tr><tr><td><strong>ข้าว</strong></td><td>ใช้ป้องกันโรค ใบจุดสีน้ำตาล</td><td>50 กรัม (100 กรัมต่อไร่)</td><td><ul><li>พ่น 2 ครั้งต่อฤดู โดยเริ่มพ่นครั้งแรก เมื่อข้าวอายุ 30 วันหรือระยะข้าวแตกกอ และครั้งที่ 2 เมื่อข้าวอายุ 45 วันหรือระยะข้าวก่อนแต่งตัว</li><li>ต้องเว้นระยะเวลาก่อนเก็บเกี่ยวข้าว อย่างน้อย 7 วัน หลังจากใช้ครั้งสุดท้าย</li></ul></td></tr><tr><td><strong>พริก</strong></td><td>ใช้ป้องกันโรค แอนแทรคโนส</td><td>50 กรัม</td><td><ul><li>พ่นให้ทั่วเมื่อพบการระบาด และพ่นซ้ำทุก 5 วัน</li><li>ต้องเว้นระยะเวลาก่อนเก็บเกี่ยวพริก อย่างน้อย 7 วัน หลังจากใช้ครั้งสุดท้าย</li></ul></td></tr><tr><td><strong>หน่อไม้ฝรั่ง</strong></td><td>ใช้ป้องกันโรคใบเทียมร่วง</td><td>60 กรัม</td><td><ul><li>พ่นเมื่อพบโรค 5-7 วันต่อครั้ง</li></ul></td></tr><tr><td><strong>กระเจี๊ยบเขียว</strong></td><td>ใช้ป้องกันโรคใบจุด</td><td>60 กรัม</td><td><ul><li>พ่นเมื่อพบโรค 5-7 วันต่อครั้ง</li></ul></td></tr><tr><td><strong>ข้าวโพด</strong></td><td>ใช้ป้องกันโรคใบไหม้</td><td>30 กรัม</td><td><ul><li>พ่นทุก 7-10 วัน</li></ul></td></tr><tr><td><strong>ถั่วเหลือง</strong></td><td>ใช้ป้องกันโรคราน้ำค้าง</td><td>30 กรัม</td><td><ul><li>พ่นทุก 7 วัน ในระยะดอก และติดฝักประมาณ 2 ครั้ง</li></ul></td></tr><tr><td><strong>หอมหัวใหญ่ กระเทียม</strong></td><td>ใช้ป้องกันโรคใบจุดสีม่วง</td><td>60 กรัม</td><td><ul><li>พ่นทุก 5 วันเมื่อพบการระบาด</li></ul></td></tr><tr><td><strong>หอมหัวใหญ่</strong></td><td>ใช้ป้องกันโรคแอนแทรคโนส</td><td>60 กรัม</td><td><ul><li>พ่นทุก 5 วันเมื่อพบการระบาด</li></ul></td></tr><tr><td><strong>มะม่วง</strong></td><td>ใช้ป้องกันโรคแอนแทรคโนส</td><td>30 กรัม</td><td><ul><li>พ่นทุก 7 วัน ในระยะดอกและติดผล</li></ul></td></tr><tr><td><strong>แตง</strong></td><td>ใช้ป้องกันโรคราแป้ง</td><td>40 กรัม</td><td><ul><li>พ่นทุก 7 วันเมื่อพบการระบาด</li></ul></td></tr><tr><td><strong>แคนตาลูป</strong></td><td>ใช้ป้องกันโรคใบแห้ง</td><td>60 กรัม</td><td><ul><li>พ่นทุก 6 วันเมื่อพบการระบาด</li></ul></td></tr><tr><td><strong>องุ่น</strong></td><td>ใช้ป้องกันโรคราน้ำค้าง</td><td>20-40 กรัม</td><td><ul><li>พ่นทุก 4 วันเมื่อพบการระบาดของโรค</li></ul></td></tr><tr><td><strong>มันฝรั่ง มะเขือเทศ</strong></td><td>ใช้ป้องกันโรคใบไหม้</td><td>60-80 กรัม</td><td><ul><li>พ่นทุก 5 วันเมื่อพบการระบาด</li></ul></td></tr></tbody></table>', 'ทะเบียนวัตถุอันตรายเลขที่: 2998/2548', '', 'Antracol_500_g.png', 'Antracol_BT2.jpg', 1),
	(10, 0, 'รอนสตาร์® (Ronstar®)', 'ออกซาไดอะซอน (oxadiazon)', '25% W/V EC', '<ul><li>พ่นได้ทันทีหลังหว่านข้าว โดยไม่ต้องรอฝน</li><li>คุมได้ทั้งวัชพืชใบแคบ ใบกว้าง และกกต่างๆ</li><li>ปลอดภัยต่อข้าว</li><li>ใช้สะดวก ประหยัดเวลา และแรงงาน</li></ul>', '1,000 ซีซี', 'ใช้ก่อนวัชพืชงอก (pre-emergence) ในนาหว่านข้าวแห้งและคะน้า', 'ระวัง ความเป็นพิษของสารต่อพืชอื่นๆ ที่ปลูกร่วม ปลูกใกล้เคียงหรือปลูกตามหลัง', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>ข้าว</strong></td><td>ใช้คุมวัชพืชประเภทใบแคบ เช่น หญ้าดอกขาว หญ้านกสีชมพู หญ้าตีนนก และหญ้าแดง วัชพืชประเภทใบกว้าง เช่น หญ้ากาบหอย หญ้าพันงูแดง เซ่งใบมน ถั่วผี ผักโขม บานไม่รู้โรยป่า ผักปอดนา และเทียนนา และวัชพืชประเภทกก เช่น แห้วหมู กกตุ้มหู หญ้านิ้วหนู และกกทราย</td><td>320 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรืออัตรา 80 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1 งาน</td><td><ul><li>พ่นได้ทันทีหลังหว่านข้าว</li></ul></td></tr><tr><td><strong>คะน้า</strong></td><td>ใช้คุมวัชพืชประเภทใบแคบ เช่น หญ้านกสีชมพู หญ้าดอกขาว และหญ้าตีนติด วัชพืชประเภทใบกว้าง เช่น ผักเบี้ยหิน และผักโขม</td><td>300-400 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรืออัตรา 75-100 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1 งาน</td><td><ul><li>ก่อนหว่านคะน้า 5 วัน</li></ul></td></tr><tr><td><strong>หอมหัวใหญ่ หอมแดง กระเทียม</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>480-640 ซีซีต่อไร่</td><td><ul><li>พ่นก่อนหรือหลังย้ายกล้าหรือหลังปลูกทันที</li></ul></td></tr><tr><td><strong>มะเขือเทศ, พริก</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>480-640 ซีซีต่อไร่</td><td><ul><li>พ่นก่อนย้ายปลูก 1 วัน</li></ul></td></tr><tr><td><strong>ผักกาดเขียวปลี</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>480-640 ซีซีต่อไร่</td><td><ul><li>พ่นก่อนปลูก 2 วัน</li></ul></td></tr><tr><td><strong>ผักกระหล่ำปลี</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>480-640 ซีซีต่อไร่</td><td><ul><li>พ่นก่อนย้ายปลูก 2 วัน</li></ul></td></tr><tr><td><strong>ถั่วเขียว ถั่วเหลือง</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>320-640 ซีซีต่อไร่</td><td><ul><li>พ่นคลุมดินทันทีหลังปลูก</li></ul></td></tr><tr><td><strong>ยาสูบ</strong></td><td>ใช้คุมหญ้านกสีชมพู หญ้าแดง หญ้าข้าวนก หญ้าตีนนก หญ้าปากควาย หญ้าตีนกา หญ้าดอกขาว หญ้าตีนติด หญ้าโขย่ง ประเภทใบกว้างเช่น ผักปอดนา แพงพวยน้ำ ขาเขียด ผักเบี้ยใหญ่ ผักเบี้ยหิน ผักโขม สาบแร้งสาบกา บานไม่รู้โรยป่า ประเภทกก เช่น กกขนาก กกทราย และประเภทเฟิร์น เช่น ผักแว่น</td><td>480 ซีซีต่อไร่</td><td><ul><li>พ่นก่อนย้ายกล้าปลูก 7 วัน</li></ul></td></tr></tbody></table>', 'ทะเบียนวัตถุอันตรายเลขที่ : 59/2551', '', 'ronstar-1lt1.png', 'Ronstar-BT3.jpg', 1),
	(11, 0, 'บาสต้า® เอ็กซ์ (Basta® X)', 'กลูโฟซิเนต-แอมโมเนียม (glufosinate-ammonium)', '15% W/V SL', '<ul><li>สารกำจัดวัชพืชหลังงอกแบบไม่เลือกทำลาย ใช้กำจัดวัชพืชทั้งใบแคบ และใบกว้าง</li><li>กำจัดวัชพืชได้ทั้งสัมผัส และแทรกซึม</li><li>กำจัดวัชพืชปราบยาก เช่น หญ้าเขมร ผักปราบและหญ้ากัญชา</li><li>ระยะปลอดฝนสั้นเพียง 2-3 ชั่วโมง เท่านั้น</li><li>มีความปลอดภัยสูงต่อพืชประธาน ไม่ดูดซึมเข้าทางราก</li></ul>', '1 และ 5 ลิตร', 'ใช้หลังวัชพืชงอก (post emergence)', 'ระวัง ความเป็นพิษของสารต่อพืชอื่นๆ ที่ปลูกร่วม ปลูกใกล้เคียงหรือปลูกตามหลัง เป็นผลิตภัณฑ์ที่ก่อให้เกิดอาการระคายเคืองต่อตา\r\n', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>กาแฟ โกโก้ มะพร้าว ชา มะคาเดเมีย มะม่วงหิมพานต์ หม่อน</strong></td><td>ใช้กำจัดหญ้าตีนนก หญ้าลูกเห็บ หญ้ารังนก หญ้าตีนกา หญ้าตีนติด หญ้าปากควาย หญ้านกสีชมพู หญ้าขจรจบ หญ้ามาเลเซีย หญ้าข้อ หญ้าขน หญ้าแพรก หญ้าคา ขี้ไก่ย่าน หญ้าเขมร ไมยราบเลื้อย ผักปราบ ผักยางสาบเสือ และประเภทกก เช่น แห้วหมู</td><td>วัชพืชทั่วไป ใช้อัตรา 800-1,600 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรือใช้ อัตรา 200-400 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1 งาน วัชพืชข้ามปี ใช้อัตรา 1,600-3,200 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรือใช้อัตรา 400-800 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1งาน</td><td><ul><li>เป็นสารกำจัดวัชพืช มีฤทธิ์กึ่งดูดซึมประเภทไม่เลือกทำลายใช้หลังวัชพืชงอก สารออกฤทธิ์ทำลายวัชพืชส่วนที่อยู่เหนือดิน และบางส่วนจะเคลื่อนย้ายไปทำลายส่วนของวัชพืชที่อยู่ใต้ดิน</li></ul></td></tr><tr><td><strong>ถั่วเหลือง แตงโม มันฝรั่ง มะเขือเทศ</strong></td><td>ใช้กำจัดหญ้าตีนนก หญ้าลูกเห็บ หญ้ารังนก หญ้าตีนกา หญ้าตีนติด หญ้าปากควาย หญ้านกสีชมพู หญ้าขจรจบ หญ้ามาเลเซีย หญ้าข้อ หญ้าขน หญ้าแพรก หญ้าคา ขี้ไก่ย่าน หญ้าเขมร ไมยราบเลื้อย ผักปราบ ผักยางสาบเสือ และประเภทกก เช่น แห้วหมู</td><td>วัชพืชทั่วไป ใช้อัตรา 800-1,600 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรือใช้ อัตรา 200-400 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1 งาน วัชพืชข้ามปี ใช้อัตรา 1,600-3,200 ซีซี ผสมน้ำ 60-80 ลิตร พ่นบนพื้นที่ 1 ไร่ หรือใช้อัตรา 400-800 ซีซี ผสมน้ำ 15-20 ลิตร พ่นบนพื้นที่ 1งาน</td><td><ul><li>ใช้กำจัดวัชพืชก่อนการเตรียมดินปลูกพืช</li></ul></td></tr></tbody></table>', 'ทะเบียนวัตถุอันตรายเลขที่: 1273/2550', 'ห้ามพ่นด้วยเครื่องพ่นอัดแรงสูง ใช้หัวพ่นสำหรับพ่นสารกำจัดวัชพืชโดยเฉพาะ ระวังละอองสัมผัสพืชปลูก', 'Basta-X_copy.png', 'Basta-X_BT.png', 1),
	(12, 0, 'เบลท์® เอ็กซ์เพิร์ท (Belt® Expert) ', 'ฟลูเบนไดอะไมด์ + ไทอะโคลพริด (flubendiamide + thiacloprid)	', '24% + 24% W/V SC	', '<ul><li>กำจัดได้ทั้งหนอนม้วนใบ และหนอนกอ</li><li>ออกฤทธิ์เร็ว และคุมนาน</li><li>สามารถออกฤทธิ์ ทั้งสัมผัส และดูดซึม</li><li>ระยะปลอดฝนสั้น (2 ชม.)</li><li>ฉีดพ่นได้ทุกระยะของข้าว (พ่นระยะออกรวงได้)</li></ul>', '100 ซีซี', '', '', '<table class="table kborder"><thead><tr><th>พืช</th><th>ประโยชน์</th><th>อัตราการใช้ ต่อน้ำ 20 ลิตร</th><th>วิธีใช้</th></tr></thead><tbody><tr><td><strong>ข้าว</strong></td><td>ใช้ป้องกันกำจัดหนอนห่อใบข้าว</td><td><ul><li>4 ซีซี (8 ซีซีต่อไร่) เมื่อข้าวอายุไม่เกิน 40 วัน</li><li>4 ซีซี (12 ซีซีต่อไร่) เมื่อข้าวอายุเกิน 40 วัน</li></ul></td><td><ul><li>พ่นให้ทั่วเมื่อพบการระบาดของหนอนห่อใบข้าว</li></ul></td></tr><tr><td><strong>ข้าว</strong></td><td>ใช้ป้องกันกำจัดหนอนกอข้าว</td><td>10 ซีซี (20 ซีซีต่อไร่)</td><td><ul><li>พ่นให้ทั่วเมื่อพบการระบาดของหนอนกอข้าว</li></ul></td></tr></tbody></table>', '', '', 'Belt-100-cc-new.jpg', 'Belt-Expert-BT.jpg', 1);
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


-- Dumping structure for table cropscience.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `SliderID` int(11) NOT NULL AUTO_INCREMENT,
  `SliderTopLine` varchar(255) DEFAULT NULL,
  `SliderHeadLine` varchar(255) DEFAULT NULL,
  `SliderDetail` text,
  `SliderLink` varchar(255) DEFAULT NULL,
  `SliderImage` varchar(255) DEFAULT NULL,
  `ShowHome` int(1) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  PRIMARY KEY (`SliderID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.slider: ~2 rows (approximately)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`SliderID`, `SliderTopLine`, `SliderHeadLine`, `SliderDetail`, `SliderLink`, `SliderImage`, `ShowHome`, `Status`) VALUES
	(1, 'Crop Science', 'Crop Protection and Seeds', 'Crop protection products should act selectively in the smallest possible amounts and then quickly decompose into neutral substances', 'product_list/products', 'buehne_cs_995.jpg', 1, 1),
	(2, 'CropScience', 'Products', 'Bayer’s broad product portfolio includes many world-famous brands which have shaped the iconic Bayer brand', 'product_list/products', 'stage800x253_nachhaltigkeit.jpg', 1, 1);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;


-- Dumping structure for table cropscience.template
CREATE TABLE IF NOT EXISTS `template` (
  `TemplateID` int(11) NOT NULL AUTO_INCREMENT,
  `TemplateName` varchar(255) NOT NULL DEFAULT '0',
  `ViewName` varchar(255) NOT NULL DEFAULT '0',
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`TemplateID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- Dumping data for table cropscience.template: ~5 rows (approximately)
/*!40000 ALTER TABLE `template` DISABLE KEYS */;
INSERT INTO `template` (`TemplateID`, `TemplateName`, `ViewName`, `Status`) VALUES
	(1, 'Standard Content', 'content', 1),
	(2, 'Product List', 'product_list', 1),
	(3, 'Product Detail', 'product_detail', 1),
	(4, 'Crop Calendar List', 'cropcalendar_list', 1),
	(5, 'Crop Calendar Detail', 'cropcalendar_detail', 1);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table cropscience.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`UserID`, `UserType`, `UserName`, `Password`, `FullName`, `Email`, `CreatedDate`, `Status`) VALUES
	(1, 'admin', 'admin', 'admin', 'Admin', 'natthaphol@gmail.com', '2016-07-30 17:06:37', NULL),
	(4, 'admin', 'kate', 'kate123', 'Katenapa', 'kate@gmail.com', NULL, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
