/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - bio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bio` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bio`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `notes` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`role`,`username`,`name`,`email`,`password`,`org_password`,`address`,`phone`,`notes`,`profile_pic`,`status`,`create_at`,`updated_at`) values (1,'Admin',NULL,'vasudevareddy reddem','admin@gmail.com','e10adc3949ba59abbe56e057f20f883e','123456','kadapa','8500050944','testing  purpose','1529212466.jpg',1,'2018-06-17 09:05:14','2018-06-17 11:01:34'),(2,NULL,NULL,NULL,'vasu@gmail.com','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL);

/*Table structure for table `article_in_process_fee` */

DROP TABLE IF EXISTS `article_in_process_fee`;

CREATE TABLE `article_in_process_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `table` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `article_in_process_fee` */

insert  into `article_in_process_fee`(`id`,`journal_id`,`journal_cat_id`,`table`,`status`,`create_at`,`update_at`,`create_by`) values (1,13,22,'<p>test like  that</p>\r\n',1,'2018-06-23 21:23:24','2018-06-24 17:09:00',1),(2,11,21,'<p><strong>Frontiers in Astronomy and Space Science</strong>is an open access journal covering in aspects like cosmology, space robotics and planetary materials.This journal helps to provide a unique platform to collect and disseminate state-of-the-art scientific understanding on and related discipline of Astronomy and Space sciences studies.</p>\r\n\r\n<p>Manuscripts like original articles, review articles, case reports, short communications, Perspective, Book Reviews, Image articles etc. can be accepted.</p>\r\n\r\n<p><strong>Aim and Scope</strong></p>\r\n\r\n<p>The main objective of the journal is to maintain and develop science and related research at an international level for the subject. FASS mainly focuses on cosmology, space robotics and planetary materials and related studies.</p>\r\n\r\n<p><strong>Indexing & Abstracting</strong></p>\r\n\r\n<p>All published articles are assigned to Digital Object Identifier (DOI) - Crossref.</p>\r\n\r\n<p>All published articles of this journal are included in the indexing and abstracting coverage of:</p>\r\n\r\n<p> *Google Scholar</p>\r\n\r\n<p>*Genamics – JournalSeek</p>\r\n\r\n<p>*Academic Keys</p>\r\n\r\n<p>*ResearchBib - Academic Research Index</p>\r\n\r\n<p>*Free Medical Journals - Geneva Foundation for Medical Education and Research</p>\r\n\r\n<p>*International Innovative Journal Impact Factor (IIJIF)</p>\r\n\r\n<p>*Al-Azhar University</p>\r\n\r\n<p>*Open J-Gate</p>\r\n\r\n<p>* Directory of Journals indexing</p>\r\n\r\n<p> </p>\r\n\r\n<p>All published articles are permanently archived and available at Gavin Publishers website in HTML and PDF formats.</p>\r\n',1,'2018-06-26 21:31:41','2018-06-27 21:56:10',1),(3,14,20,'<h3><a href=\"https://www.gavinpublishers.com/journals/articleprocessfee/journal-of-urology-and-renal-diseases-ISSN-2575-7903#\"><strong>Article Submission Guidelines </strong></a></h3>\r\n\r\n<h2> </h2>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Manuscript Title</strong></p>\r\n\r\n<p>Manuscript title limit should not exceed 28 words. It should not contain abbreviations and the title should be a brief phrase which describes the contents present in the article.</p>\r\n\r\n<p><strong>Details of the Author</strong></p>\r\n\r\n<p>The details (full names and affiliations) of all the authors should be given in the manuscript. For corresponding author details (<strong>Live </strong>address with <strong>Telephone</strong>, <strong>Fax</strong> and <strong>E- mail </strong>address) should be provided in the manuscript.</p>\r\n\r\n<p><strong>Image Submission:</strong></p>\r\n\r\n<p>Images with high resolutions must be submitted by the author. Authors should take full responsibility for copyrighted images during submission and publication process.Clinical and Medical Imaging is an open access journal publishing research/original submissions, reviews, brief reports, case studies, rapid communications, letters to the editor etc. related to basic, experimental and clinical aspects of research.</p>\r\n\r\n<p><strong>Submission:</strong></p>\r\n\r\n<p>Submit your contribution through contact@gavinpublishers.org</p>\r\n\r\n<p><strong>Instructions to be followed:</strong></p>\r\n\r\n<ol>\r\n <li>A brief title describing, content of the image.</li>\r\n <li>Images must be submitted in TIFF, PDF or PPT.</li>\r\n <li>The description regarding the image must be limited (250 words).</li>\r\n <li>Images should be captured at the following minimum resolutions: halftones and colour (all colour must be RGB) 100-200 dpi; combination halftones 350 dpi; line art 500 dpi to match the journal criteria.</li>\r\n <li>Citations/References (URL) should be mentioned properly.</li>\r\n</ol>\r\n\r\n<p><strong>Presentation:</strong></p>\r\n\r\n<p>Presentation is a means of communication that helps a person to disclose his work under a broad spectrum of clinical and medical sciences. Presentations are of three types: Power Point Presentation, Flow Chart and Poster presentation.</p>\r\n\r\n<p><strong>Figures and Tables</strong></p>\r\n\r\n<p><strong>Figures:</strong></p>\r\n\r\n<p>Suggested formats for figures should be in bitmap formats (JPEG, GIF, TIFF, etc.). Please send us the Photoshop indexes, in case the pictures need any differential segments on distinctive layers.</p>\r\n\r\n<p><strong>Figure Legends:</strong></p>\r\n\r\n<p>Use numerical to designate figures (e.g., Figure 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Figure Quality:</strong></p>\r\n\r\n<p>During submissions, figures are supposed to be at sufficient quality, preferably as JPEGs.</p>\r\n\r\n<p><strong>Tables:</strong></p>\r\n\r\n<p>Tables can be included in the text, if not submitted as a separate file, oriented in portrait form (not landscape) and upright on the page, not sideways.</p>\r\n\r\n<p><strong>Table Legends:</strong></p>\r\n\r\n<p>Use numerical to designate tables (e.g., Table 1). Use justifiable description, if necessary.</p>\r\n\r\n<p><strong>Equations as Graphics:</strong></p>\r\n\r\n<p>If equations cannot be encoded in MathML, submit them in TIFF or EPS format as discrete files (i.e., a file containing only the data for one equation). Only when tables cannot be encoded as XML/SGML can they be submitted as graphics. If this method is used, it is critical that the font size in all equations and tables is consistent and legible throughout all submissions.</p>\r\n\r\n<ol>\r\n <li>Suggested Equation Extraction Method</li>\r\n</ol>\r\n\r\n<ol>\r\n <li>Table Specifications</li>\r\n</ol>\r\n\r\n<ol>\r\n <li>Equation Specifications</li>\r\n</ol>\r\n\r\n<p><strong>Supplementary Information:</strong></p>\r\n\r\n<p>Discrete items of the Supplementary Information (Materials & Methods, Figures, Tables, etc.,) referred to at an appropriate point in the main text of the chapter.</p>\r\n\r\n<p>Summary diagram/figure included as part of the Supplementary Information (optional).</p>\r\n\r\n<p>All Supplementary Information is supplied as a single PDF file, where possible. File size within the permitted limits for Supplementary Information. Images should be a maximum size of 640 x 480 pixels (9 x 6.8 inches at 72 pixels per inch).</p>\r\n\r\n<p><strong>Author Corrections:</strong></p>\r\n\r\n<p>Suggestions from the authors, before or after the publication process, are acceptable and ensure that the corrections are clearly legible.</p>\r\n\r\n<p><strong>Article Processing Fee</strong></p>\r\n\r\n<p>Gavin Publishers is an online international open access, peer reviewed journals publishing organization; we do not have funding/support from any Private Organizations/Government to run. To run our organization in an organized way, we charge manuscript processing fee from the authors to publish their manuscripts. We charge fee to maintain published manuscripts in online repositories. All our articles are published in most updated formats (HTML, PDF, etc.,)</p>\r\n\r\n<p>Article processing fee varies from Journal to Journal.</p>\r\n\r\n<p> </p>\r\n\r\n<table align=\"center\" border=\"2\" xss=removed>\r\n <tbody>\r\n  <tr>\r\n   <td colspan=\"2\" xss=removed><strong>Journal of Urology and Renal Diseases</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Article Type</td>\r\n   <td xss=removed>Publication Fee (USD)</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Research/Review/Video Article</td>\r\n   <td xss=removed>3560</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Case Report/Mini-Review</td>\r\n   <td xss=removed>1860</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Short Communication/Commentary/Letter to Editor/Opinion/Perspective/Book review</td>\r\n   <td xss=removed>960</td>\r\n  </tr>\r\n  <tr>\r\n   <td xss=removed>Image Article/Editorial</td>\r\n   <td xss=removed>360</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n\r\n<p> </p>\r\n\r\n<p>\\For any queries or negotiations regarding article processing fee, please contact us at: <strong>contact@gavinpublishers.org</strong></p>\r\n\r\n<p><strong>Manuscript Withdrawal Policy</strong></p>\r\n\r\n<p>Author may wish to withdraw his manuscript after submitting it to Gavin Publishers. To withdraw a manuscript we do not charge any fee, only if he/she withdraws it within a week.</p>\r\n\r\n<p>If an author withdraws manuscript after a week, then he/she will be asked to pay partial processing fee. Each and every manuscript submission costs us (Gavin Publishers) certain amount along with overhead cost during processing. Manuscripts peer review process is completed (which can often happen within a week), and it has been worked into a journal issue, we have incurred costs on our end that need to be reimbursed.</p>\r\n\r\n<p>We ask authors to pay 30% of the original article processing fee in case of withdrawal.</p>\r\n\r\n<p>For any queries or any discussions regarding manuscript withdrawal/article processing fee, please contact us at: <strong>contact@gavinpublishers.org</strong></p>\r\n\r\n<p> </p>\r\n',1,'2018-06-28 22:17:00','2018-06-28 22:17:00',1);

/*Table structure for table `article_procedures` */

DROP TABLE IF EXISTS `article_procedures`;

CREATE TABLE `article_procedures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `year_of_article` varchar(250) DEFAULT NULL,
  `procedures_category` varchar(250) DEFAULT NULL,
  `conference_title` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `doi_url` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_keyword` text,
  `seo_description` text,
  `abstract` text,
  `biography` text,
  `pdf_file` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `article_procedures` */

insert  into `article_procedures`(`id`,`journal_id`,`journal_cat_id`,`year_of_article`,`procedures_category`,`conference_title`,`title`,`author_name`,`doi_url`,`seo_url`,`seo_title`,`seo_keyword`,`seo_description`,`abstract`,`biography`,`pdf_file`,`image`,`status`,`create_at`,`update_at`,`create_by`) values (3,3,22,'2016','Speaker Abstract','vbx','bxcvbx','cvbxcvb','cxvbxcv','vbxvb','vbxcvb','vcbvcb','vbxcvb','<p>vbxvb</p>\r\n','<p>vbxvb</p>\r\n',NULL,NULL,1,'2018-06-24 11:41:40','2018-06-24 11:51:24',1),(4,5,20,'2016','Speaker Abstract','Conference Title','Title','Author Name','DOI Url','vbvb','xcvbxcvb','vbxcvb','vbxcvb','<p>bvxcvb</p>\r\n','<p>vcbxcbv</p>\r\n',NULL,NULL,1,'2018-06-24 17:16:36','2018-06-26 08:11:19',1);

/*Table structure for table `bibliotics_conference_flyers` */

DROP TABLE IF EXISTS `bibliotics_conference_flyers`;

CREATE TABLE `bibliotics_conference_flyers` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `bibliotics_conference_flyers` */

insert  into `bibliotics_conference_flyers`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (6,'ghdfghdgh','hdfghdfgh','1529223955.jpg','222.jpg',1,'2018-06-17 13:55:55',1,'2018-06-28 08:36:20'),(7,'ghdfghdgh','hdfghdfgh','1529224033.jpg','222.jpg',1,'2018-06-17 13:57:12',1,NULL);

/*Table structure for table `bibliotics_conference_images` */

DROP TABLE IF EXISTS `bibliotics_conference_images`;

CREATE TABLE `bibliotics_conference_images` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `bibliotics_conference_images` */

insert  into `bibliotics_conference_images`(`f_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (8,'ghdfghdgh','cvzxcvzxc','1529225120.jpg','222.jpg',0,'2018-06-17 14:15:19',1,'2018-06-26 07:54:57');

/*Table structure for table `bibliotics_flyers` */

DROP TABLE IF EXISTS `bibliotics_flyers`;

CREATE TABLE `bibliotics_flyers` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `title_color` varchar(250) DEFAULT NULL,
  `fly_image` varchar(250) DEFAULT NULL,
  `fly_org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `bibliotics_flyers` */

insert  into `bibliotics_flyers`(`f_id`,`journal_id`,`journal_cat_id`,`title`,`title_color`,`fly_image`,`fly_org_image`,`status`,`create_at`,`create_by`,`update_at`) values (5,13,20,'like that','ffff','1532760963.png','j1.png',1,'2018-06-17 13:26:31',1,'2018-07-28 12:26:02');

/*Table structure for table `bibliotics_journal_category` */

DROP TABLE IF EXISTS `bibliotics_journal_category`;

CREATE TABLE `bibliotics_journal_category` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `bibliotics_journal_category` */

insert  into `bibliotics_journal_category`(`c_id`,`category`,`seo_title`,`seo_url`,`seo_keyword`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (20,'Medical','Medical','Medical','Medical','Medical',1,'2018-06-22 22:51:30',NULL,1);

/*Table structure for table `conference_process` */

DROP TABLE IF EXISTS `conference_process`;

CREATE TABLE `conference_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `venu_place` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `conference_process` */

insert  into `conference_process`(`id`,`journal_id`,`journal_cat_id`,`title`,`url`,`venu_place`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'vbvbxvb','vbxvb','cxvbxcvb',1,'2018-06-23 22:15:43','2018-06-24 17:12:27',1),(3,11,21,'gfgfg','fgsfdg','kadapa',1,'2018-06-24 17:12:09','2018-06-26 08:10:13',1);

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`firstName`,`lastName`,`email`,`phone`,`message`,`create_at`) values (1,'fgfgdsf','gdfgsdf','gdfg@gmail.com','8500050944','dfgsdf','2018-06-14 23:18:41'),(2,'bb','cvbcvb','cvb@gmail.com','8500050944','ghsfghfg','2018-06-14 23:19:50'),(3,'fgsdfg','fgsdfg','cvb@gmail.com','65656345656','fgsdfg','2018-06-15 07:56:05'),(4,'hdfgshdghjGHGHFghfg','gfdgfdfgd','fghghg@gmail.com','8500050944','lithat','2018-06-17 10:22:42');

/*Table structure for table `faqs` */

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `faqs` */

insert  into `faqs`(`id`,`question`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (10,'gdfg','dfgdfgdf','1','2018-06-26 08:21:25',NULL,1);

/*Table structure for table `guidelines` */

DROP TABLE IF EXISTS `guidelines`;

CREATE TABLE `guidelines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keyword` varchar(250) DEFAULT NULL,
  `seo_description` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `guidelines` */

insert  into `guidelines`(`id`,`pagename`,`title`,`description`,`seo_title`,`seo_url`,`seo_keyword`,`seo_description`,`status`,`create_at`,`update_at`,`create_by`) values (5,'reddy','gdg','<p>gfd</p>\r\n','fgdgf','df','dfdgf','dfd','1','2018-06-21 08:58:58','2018-06-21 09:08:05',1),(6,'fbghfhf','vasu','<p>gf</p>\r\n','ghfg','fghffg','fg','fgfgf','1','2018-06-21 08:59:14','2018-06-21 09:07:51',1),(8,'Page Name vasu','Title','<p>xcxc</p>\r\n','cvzxcv','cxvzxcv','cvzxc','cvzxcvzxcv','1','2018-06-22 20:33:17','2018-06-26 08:24:37',1);

/*Table structure for table `home_banners` */

DROP TABLE IF EXISTS `home_banners`;

CREATE TABLE `home_banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `home_banners` */

insert  into `home_banners`(`b_id`,`title`,`image`,`org_image`,`status`,`create_at`,`update_at`,`create_by`) values (7,'Clinics of Otorhinolaryngology ','1532760662.jpg','homeban3.jpg',1,'2018-06-28 21:30:41','2018-07-28 12:21:02',1),(8,' Brain Research and Cognitive Neuroscience','1532760640.jpg','homeban1.jpg',1,'2018-06-28 21:31:37','2018-07-28 12:20:39',1),(9,' Cancer Clinical Research Reports | ISSN: 2577-8854','1532760654.jpg','homeban2.jpg',1,'2018-06-28 21:32:08','2018-07-28 12:20:54',1);

/*Table structure for table `home_scroll` */

DROP TABLE IF EXISTS `home_scroll`;

CREATE TABLE `home_scroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scroll_content` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_scroll` */

insert  into `home_scroll`(`id`,`scroll_content`,`status`,`create_at`,`update_at`,`create_by`) values (1,'Do research. Feed your talent. Research not only wins the war on cliche, it\'s the key to victory over fear and it\'s cousin, depression.\r\n? Robert McKee\r\n\r\n',1,'2018-06-26 07:19:53','2018-06-28 21:36:04',1);

/*Table structure for table `issue_wise_article_list` */

DROP TABLE IF EXISTS `issue_wise_article_list`;

CREATE TABLE `issue_wise_article_list` (
  `issue_a_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_a_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`issue_a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

/*Data for the table `issue_wise_article_list` */

insert  into `issue_wise_article_list`(`issue_a_id`,`i_a_id`,`article_id`,`status`,`create_at`,`create_by`) values (82,8,6,1,'2018-06-25 20:47:34',1),(83,8,7,1,'2018-06-25 20:47:34',1),(84,8,8,1,'2018-06-25 20:47:34',1),(85,8,9,1,'2018-06-25 20:47:34',1),(86,9,13,1,'2018-06-28 22:15:12',1),(87,10,10,1,'2018-07-06 08:02:45',1),(88,10,11,1,'2018-07-06 08:02:45',1);

/*Table structure for table `issues` */

DROP TABLE IF EXISTS `issues`;

CREATE TABLE `issues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `journal_cat_id` varchar(250) DEFAULT NULL,
  `journal_id` varchar(250) DEFAULT NULL,
  `year` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `issues` */

insert  into `issues`(`id`,`number`,`image`,`journal_cat_id`,`journal_id`,`year`,`status`,`create_at`,`update_at`,`create_by`) values (8,'1','1529939854.jpg','21','11','2013',1,'2018-06-25 20:47:34','2018-06-26 08:13:07',1),(9,'1','1530204312.jpg','20','14','2018',1,'2018-06-28 22:15:12',NULL,1),(10,'2','1530844365.jpg','21','11','2013',1,'2018-07-06 08:02:45',NULL,1);

/*Table structure for table `journal_article_in_press` */

DROP TABLE IF EXISTS `journal_article_in_press`;

CREATE TABLE `journal_article_in_press` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` varchar(25) DEFAULT NULL,
  `year_of_article` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `article_type` varchar(250) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_keyword` text,
  `seo_description` text,
  `research_article` text,
  `abstract` text,
  `introduction` text,
  `references` text,
  `figures` text,
  `suggested_citation` text,
  `tables` text,
  `pdf_file` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `video_article` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `journal_article_in_press` */

insert  into `journal_article_in_press`(`a_id`,`journal_id`,`journal_cat_id`,`year_of_article`,`title`,`author_name`,`article_type`,`url`,`seo_title`,`seo_keyword`,`seo_description`,`research_article`,`abstract`,`introduction`,`references`,`figures`,`suggested_citation`,`tables`,`pdf_file`,`image`,`video`,`video_article`,`status`,`create_at`,`update_at`,`create_by`) values (14,12,'20','2017','Cancer Clinical Research Reports ','vasudevareddy','editor','Cancer Clinical Research Reports ','Cancer Clinical Research Reports ','Cancer Clinical Research Reports ','Cancer Clinical Research Reports ','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','<p>Cancer Clinical Research Reports</p>\r\n','1532759347.pdf','1532759347.png','',0,1,'2018-07-28 11:59:06',NULL,1);

/*Table structure for table `journal_banners` */

DROP TABLE IF EXISTS `journal_banners`;

CREATE TABLE `journal_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `baneer_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `journal_banners` */

insert  into `journal_banners`(`id`,`journal_id`,`baneer_image`,`title`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (10,13,'1532760793.jpg','Brain Research and Cognitive Neuroscience','Brain Research and Cognitive Neuroscience',1,'2018-07-28 12:23:13','2018-07-28 12:23:13',1);

/*Table structure for table `journal_editors` */

DROP TABLE IF EXISTS `journal_editors`;

CREATE TABLE `journal_editors` (
  `j_e_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `position` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `priority` varchar(250) DEFAULT NULL,
  `biography` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `journal_editors` */

insert  into `journal_editors`(`j_e_id`,`journal_id`,`journal_cat_id`,`image`,`name`,`email`,`phone`,`designation`,`position`,`country`,`university`,`priority`,`biography`,`status`,`create_at`,`update_at`,`create_by`) values (2,12,22,'1529334192.jpg','vasudevareddy reddem','cvb@gmail.com','8500050944','des','Editor in cheif','Aruba','bxcvbxcvb','1','testing',1,'2018-06-18 20:33:11','2018-06-24 16:52:09',1),(3,12,22,'1529336187.jpg','bxcvbxcvb','vcbxcvb@gmail.com','8500050944','des','Editorial board member','Australia','cvzxcv','1','fgfgdfg',1,'2018-06-18 20:38:50','2018-06-24 16:51:46',1),(4,11,21,'1529838815.jpg','vaasudevareddy','vaasudevareddy@gmail.com','8500050944','Designation','Editor in cheif','United States','us','1','biography',1,'2018-06-24 16:43:34','2018-06-25 20:57:21',1),(5,11,21,'1530112368.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Editor in cheif','Iceland','University','1','vbxvbxcvbxcvb',1,'2018-06-27 20:42:48','2018-06-27 20:42:48',1),(6,11,21,'1530112397.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Editor in cheif','Bahrain','University','3','cvcvzxcv',1,'2018-06-27 20:43:17','2018-06-27 20:43:17',1),(7,11,21,'1530112449.jpg','bayapu reddy','bayapu@gmail.com','8500050944','designation','Editorial board member','Andorra','University','5','Images with high resolutions must be submitted by the author. Authors should take full responsibility for copyrighted images during submission and publication process.Clinical and Medical Imaging is an open access journal publishing research/original submissions, reviews, brief reports, case studies, rapid communications, letters to the editor etc. related to basic, experimental and clinical aspects of research.',1,'2018-06-27 20:44:08','2018-06-27 21:20:33',1),(8,14,20,'1530202990.jpg','prudhvi raj','prudhviraj@gmail.com','8500050944','designation','Editor in cheif','United States','University','1','Clinical Oncology Research Journal (CORJ) welcomes distinguished team of cancer researchers, scholars, scientists, medical/surgical/clinical practioners who have hardcore motivation for this ongoing oncology research to generate forum at a global stage and express, exchanges their updates for its reader as the single most credible, authoritative resource for disseminating significant clinical oncology',1,'2018-06-28 21:53:10','2018-06-28 21:53:10',1),(9,14,20,'1530203974.jpg','vasudevareddy reddem','admin@gmail.com','8500050944','designation','Executive editor','Bangladesh','University','5','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:09:34','2018-06-28 22:09:34',1),(10,14,20,'1530204007.jpg','name','test@gmail.com','8500050944','designation','Editor in cheif','Bahrain','University','5','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:10:06','2018-06-28 22:10:06',1),(11,14,20,'1530204035.jpg','bayapu reddy','bayapu@gmail.com','65656345656','designation','Executive editor','Bangladesh','University','2','So, keeping this as strategy the journal maintains rapid publication of high quality results in cancer research through original Research articles, Short research communication, Reviews, Mini reviews, Image articles, Case studies,  Hypothesis, Method and protocol, New instruments and regimens, Letter to the editor by electronic format of publications.',1,'2018-06-28 22:10:35','2018-06-28 22:10:35',1),(12,14,20,'','vcvxcv','vasu@gmail.com','8500050944','designation','Editor in cheif','Austria','University','2','cvcv   vbvbxbxvb',1,'2018-07-04 20:21:00','2018-07-04 20:21:00',1);

/*Table structure for table `journals` */

DROP TABLE IF EXISTS `journals`;

CREATE TABLE `journals` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) DEFAULT NULL,
  `baneer_image` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `seo_title` varchar(250) DEFAULT NULL,
  `seo_url` varchar(250) DEFAULT NULL,
  `seo_keywords` varchar(250) DEFAULT NULL,
  `seo_description` text,
  `key_words` text,
  `description` text,
  `prices` text,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `journals` */

insert  into `journals`(`j_id`,`category`,`baneer_image`,`title`,`subject`,`alt_tags`,`seo_title`,`seo_url`,`seo_keywords`,`seo_description`,`key_words`,`description`,`prices`,`status`,`create_at`,`update_at`,`create_by`) values (13,20,'1532710340.png',' Brain Research and Cognitive Neuroscience',' Brain Research and Cognitive Neuroscience',' Brain Research and Cognitive Neuroscience',' Brain Research and Cognitive Neuroscience',' Brain Research and Cognitive Neuroscience',' Brain Research and Cognitive Neuroscience','Brain Research and Cognitive Neuroscience\r\n','<div class=\"col-sm-9\">\r\n<p style=\"text-align:justify\">Brain Research and Cognitive Neuroscience publishes wide range of versatile research in nervous system structure, function, neurocognitive development, cognitive brain development and neurocognitive processing. Contributions address on current hot topics ranging from, but are not limited to cellular and molecular studies through systems neuroscience, cognition and disease, functional neuroimaging, electrophysiology, NIRS and transcranial magnetic stimulation from international community of neuroscientists. Brain Research and Cognitive Neuroscience is a peer-reviewed, open access journal focusing on research into Brain and cognitive neuroscience related researches, identification of therapeutic objectives and the optimal use of preventative measures and advanced treatment to achieve improved and technically improved outcomes.</p>\r\n\r\n<p style=\"text-align:justify\">Brain Research and Cognitive Neuroscience is an online-only publication published by Bibliotics Journals. All submitted manuscripts are subject to initial appraisal by the Editor, if found suitable for publication, to peer review by independent, anonymous expert referees. All peer review is single blind and submission is online via <a href=\"http://www.bibliotics.org/brain-and-nervous-system-current-research/submit-manuscript.php\">http://www.bibliotics.org/brain-and-nervous-system-current-research/submit-manuscript.php</a></p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n','<div class=\"col-sm-12\">\r\n<h3>Aims and Scope</h3>\r\n\r\n<p style=\"text-align:justify\">Brain Research and Cognitive Neuroscience journal gives the assembly for the authors to make their existence on Recent and advanced technological researches in its field and also it cover specific topics includes Brain anatomy, functional and biochemical changes in developmental and pathological conditions.</p>\r\n\r\n<p style=\"text-align:justify\">It also focus on Brain imaging techniques and methodologies, neurorestoratology, Clinical studies on geriatric, pediatric, hereditary and traumatic nervous system disorders are of particular interest, as are neurorestorative techniques.</p>\r\n\r\n<p style=\"text-align:justify\">The main aim of Brain research and Cognitive Neurosience journal is to encourages the authors to make commitments who are concerned with the study and treatment of disorders of the nervous system and cognitive neuroscience which helps in Delivers advanced and best research on Brain disorders and its related diseases.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n','<p>Brain Research and Cognitive Neuroscience</p>',1,'2018-06-24 16:26:07','2018-07-27 22:22:20',1),(14,20,'1532710312.png',' Biomedical Research & Public Health',' Biomedical Research & Public Health',' Biomedical Research & Public Health',' Biomedical Research & Public Health','clinical-Oncology- Research -journal ',' Biomedical Research & Public Health','Biomedical Research & Public Health\r\n','<h3>About Journal</h3>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-sm-9\">\r\n<p>Biomedical Research and public Health is a multidisciplinary journal in the field of Biomedical Research and Public health which gives the forum for the Authors to publish their innovated ideas, basic research, clinical Research and Translational research, across the domains of Biomedical Research and Public health and developments with a particular focus on the translation of science into action.</p>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n','<div class=\"bg-color-sky-light\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-9\">\r\n<div class=\"blog-grid-content\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-12\">\r\n<h3>Aims and Scope</h3>\r\n\r\n<p>Biomedical Research and public Health leading to the discovery of treatment, prevention and diagnosis of diseases that causes illness and death, also it is a vast field of science which includes life, physical and social sciences.</p>\r\n\r\n<p>It serves to provide models of clinical care, transfer research advances and evidence-based practices into practical applications for biomedical Research and Public Health; and increase knowledge about this field.</p>\r\n\r\n<p>It also focus on novel research contribution to scientific knowledge in the field of Biomedical Engineering, Bioengineering Application, Bioscience research, social medicine, epidemiology, health services research, ethics and law, health economics, social sciences, and environmental health, etc..</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"container content\">\r\n<div class=\"row\">\r\n<hr /></div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n','<p>test</p>',1,'2018-06-28 21:43:38','2018-07-28 12:22:18',1);

/*Table structure for table `media_partners` */

DROP TABLE IF EXISTS `media_partners`;

CREATE TABLE `media_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `media_partners` */

insert  into `media_partners`(`id`,`title`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (4,'vasu','1529678018.jpg','nhfg hgh fgsfgsf',1,'2018-06-26 08:14:19','2018-06-22 20:02:57',1);

/*Table structure for table `menuscript_list` */

DROP TABLE IF EXISTS `menuscript_list`;

CREATE TABLE `menuscript_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `lastName` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `menuscript_title` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `message` varchar(250) DEFAULT NULL,
  `article_type` varchar(250) DEFAULT NULL,
  `journel` varchar(250) DEFAULT NULL,
  `abstract` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `menuscript_list` */

insert  into `menuscript_list`(`id`,`title`,`firstName`,`lastName`,`university`,`country`,`email`,`phone`,`menuscript_title`,`address`,`message`,`article_type`,`journel`,`abstract`,`image`,`create_at`) values (1,'MR','reddem','vasudevareddy','jntua','Algeria','test@gmail.com','8500050944','cvcv','cvxcvxcvxcv ','cxvzxcvxzcv',NULL,'Journal of Gastroenterology and Digestive Disorders (JGDD)','test',NULL,'2018-06-14 23:22:23'),(2,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that',NULL,'Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:07:09'),(3,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that',NULL,'Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:09:21'),(4,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that',NULL,'Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:10:41'),(5,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that',NULL,'Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:11:24'),(6,'MR','vasudevareddy','htrtytry','University','India','vasu@gmail.com','8500050944','menu ttile','hyd','i like  that',NULL,'Annals of Medical & Surgical Case Reports(AMSC)','dgfg','','2018-06-16 14:11:49');

/*Table structure for table `news_article` */

DROP TABLE IF EXISTS `news_article`;

CREATE TABLE `news_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `news_article` */

insert  into `news_article`(`id`,`title`,`description`,`link`,`status`,`create_at`,`update_at`,`create_by`) values (6,'dfgfgsfg','vasudevareddy','link',1,'2018-06-26 08:15:22','2018-06-22 20:26:44',1),(7,'title','sdfgsdf','gsdfgsdfg',1,'2018-06-26 08:15:30','2018-06-22 20:29:12',1);

/*Table structure for table `newsletters` */

DROP TABLE IF EXISTS `newsletters`;

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `newsletters` */

insert  into `newsletters`(`id`,`name`,`email`,`status`,`create_at`,`update_at`) values (1,'vasudevareddy reddem','vasu@gmail.com',1,'2018-06-22 23:15:03','2018-06-26 08:26:44'),(2,'ghghd','ghdgfhf@gmail.com',0,'2018-06-22 23:15:56','2018-06-22 23:30:56'),(3,'vasudevareddy reddem','cvbbnvbn@gmail.com',1,'2018-06-28 22:54:06','2018-06-28 22:54:06');

/*Table structure for table `published_gallery` */

DROP TABLE IF EXISTS `published_gallery`;

CREATE TABLE `published_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(250) DEFAULT NULL,
  `alt_tags` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `published_gallery` */

insert  into `published_gallery`(`id`,`image`,`alt_tags`,`status`,`create_at`,`update_at`,`create_by`) values (2,'1529603448.jpg','testing',1,'2018-06-26 08:16:34','2018-06-21 23:20:47',1);

/*Table structure for table `reviewerboard` */

DROP TABLE IF EXISTS `reviewerboard`;

CREATE TABLE `reviewerboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  `journal` varchar(45) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `university` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `reviewer_board` text,
  `designation` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `craete_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `reviewerboard` */

insert  into `reviewerboard`(`id`,`category`,`journal`,`name`,`university`,`country`,`reviewer_board`,`designation`,`image`,`status`,`craete_at`,`update_at`,`create_by`) values (2,'20','14','vasudeva','vasu','Armenia','fgsdfgsdf',NULL,NULL,1,'2018-06-29 08:10:03','0000-00-00 00:00:00',1),(3,'20','14','name','us','Afghanistan','tetsing  hhdghdghdfgh',NULL,NULL,1,'2018-06-29 08:11:32','2018-06-24 17:21:54',1),(4,'20','5','vasudevareddy reddem','University','Australia','fkjkgjkgjghj',NULL,NULL,1,'2018-06-29 07:56:20','2018-06-29 07:56:20',1),(5,'20','14','gsfg','fgsdfg','Armenia','fgsfgsdf',NULL,'1530240586.jpg',1,'2018-06-29 08:19:45','2018-06-29 08:18:30',1),(6,'20','14','vbxcvb','vcbxvcb','Armenia','vbxvbxcv',NULL,'1530240604.jpg',1,'2018-06-29 08:20:04','2018-06-29 08:20:04',1);

/*Table structure for table `special_issue` */

DROP TABLE IF EXISTS `special_issue`;

CREATE TABLE `special_issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_id` int(11) DEFAULT NULL,
  `journal_cat_id` int(11) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `details` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `special_issue` */

insert  into `special_issue`(`id`,`journal_id`,`journal_cat_id`,`title`,`details`,`status`,`create_at`,`update_at`,`create_by`) values (10,14,20,'tyty','<p><img src=\"data:image/png;base64,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\" data-filename=\"download11.png\" style=\"width: 128px;\">tyrtyrt</p>',1,'2018-07-06 15:00:16','2018-07-06 15:00:16',1);

/*Table structure for table `testimonial` */

DROP TABLE IF EXISTS `testimonial`;

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `professional` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `testimonial` */

insert  into `testimonial`(`id`,`name`,`professional`,`image`,`description`,`status`,`create_at`,`update_at`,`create_by`) values (2,'vasudevareddy reddem','profinal','1529423720.jpg','gdfgsfgdsf',1,'2018-06-19 21:25:19','2018-06-26 08:19:15',1),(3,'vasudevareddy reddem','profinal','1529424434.jpg','gdfgsfgdsf',1,'2018-06-19 21:35:03','0000-00-00 00:00:00',1);

/*Table structure for table `updates` */

DROP TABLE IF EXISTS `updates`;

CREATE TABLE `updates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) DEFAULT NULL,
  `updates` text,
  `status` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `updates` */

insert  into `updates`(`id`,`title`,`updates`,`status`,`create_at`,`update_at`,`create_by`) values (2,'this  vasu ','reddem',1,'2018-06-27 08:05:52','2018-06-26 08:20:14',1),(3,'like that psoot','vasu',1,'2018-06-19 22:28:10',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
