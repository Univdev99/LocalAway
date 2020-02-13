/*
Navicat MySQL Data Transfer

Source Server         : localaway
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : localaway

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-02-10 17:37:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '1', 'Women’s Clothes', null, null);
INSERT INTO `answers` VALUES ('2', '1', 'Men’s Clothes', null, null);
INSERT INTO `answers` VALUES ('3', '1', 'Kids\' Clothes', null, null);
INSERT INTO `answers` VALUES ('4', '1', 'Second-Hand Clothes', null, null);
INSERT INTO `answers` VALUES ('5', '1', '\r\nSustainable Brands', null, null);
INSERT INTO `answers` VALUES ('6', '1', 'Sales-Items/Outlet', null, null);
INSERT INTO `answers` VALUES ('7', '1', 'Accessories( Sunglasses, Jewelry, Bags, Hats, Scarves...)', null, null);
INSERT INTO `answers` VALUES ('8', '1', 'Event-specific', null, null);
INSERT INTO `answers` VALUES ('9', '2', 'Business', null, null);
INSERT INTO `answers` VALUES ('10', '2', 'Casual', null, null);
INSERT INTO `answers` VALUES ('11', '2', 'Chic/Elegant', null, null);
INSERT INTO `answers` VALUES ('12', '2', 'Sophisticated', null, null);
INSERT INTO `answers` VALUES ('13', '2', 'Vintage', null, null);
INSERT INTO `answers` VALUES ('14', '2', 'Sportive', null, null);
INSERT INTO `answers` VALUES ('15', '2', 'Bohemian', null, null);
INSERT INTO `answers` VALUES ('16', '2', 'Rocker', null, null);
INSERT INTO `answers` VALUES ('17', '2', 'Maternity', null, null);
INSERT INTO `answers` VALUES ('18', '2', 'Event-specific', null, null);
INSERT INTO `answers` VALUES ('19', '2', 'Other', null, null);
INSERT INTO `answers` VALUES ('20', '3', 'XS / US Size 0-4 / EU Size 30-34', null, null);
INSERT INTO `answers` VALUES ('21', '3', 'S / US Size 6-8 / EU Size 36-38', null, null);
INSERT INTO `answers` VALUES ('22', '3', 'M / US Size 10-12 / EU Size 40-32', null, null);
INSERT INTO `answers` VALUES ('23', '3', 'L / US Size 14-16 / EU Size 44-46', null, null);
INSERT INTO `answers` VALUES ('24', '3', '\r\nXL / US Size 18-20 / EU Size 48-50', null, null);
INSERT INTO `answers` VALUES ('25', '3', '\r\nXXL / US Size 22-24 / EU Size 52-54', null, null);
INSERT INTO `answers` VALUES ('26', '3', 'XXXL / US Size 26- 28 / EU Size 56-58', null, null);
INSERT INTO `answers` VALUES ('27', '4', '< 5', null, null);
INSERT INTO `answers` VALUES ('28', '4', '5 - 10', null, null);
INSERT INTO `answers` VALUES ('29', '4', '10 - 20', null, null);
INSERT INTO `answers` VALUES ('30', '4', '> 20', null, null);
INSERT INTO `answers` VALUES ('31', '5', 'No', null, null);
INSERT INTO `answers` VALUES ('32', '5', '\r\nBoutique’s webpage', null, null);
INSERT INTO `answers` VALUES ('33', '5', '\r\nInstagram', null, null);
INSERT INTO `answers` VALUES ('34', '5', 'Facebook', null, null);
INSERT INTO `answers` VALUES ('35', '5', 'Partner shop', null, null);
INSERT INTO `answers` VALUES ('36', '5', 'Other', null, null);
INSERT INTO `answers` VALUES ('37', '6', 'Shopify', null, null);
INSERT INTO `answers` VALUES ('38', '6', 'Magento', null, null);
INSERT INTO `answers` VALUES ('39', '6', 'Other', null, null);
INSERT INTO `answers` VALUES ('40', '7', '1', null, null);
INSERT INTO `answers` VALUES ('41', '7', '2', null, null);
INSERT INTO `answers` VALUES ('42', '7', '3', null, null);
INSERT INTO `answers` VALUES ('43', '7', '4', null, null);
INSERT INTO `answers` VALUES ('44', '7', '5', null, null);
INSERT INTO `answers` VALUES ('45', '7', '>5', null, null);
INSERT INTO `answers` VALUES ('46', '7', '>10', null, null);
INSERT INTO `answers` VALUES ('47', '7', '>20', null, null);
INSERT INTO `answers` VALUES ('48', '8', 'We are also stylists', null, null);
INSERT INTO `answers` VALUES ('49', '8', 'We work with/ have separate stylist', null, null);
INSERT INTO `answers` VALUES ('50', '9', '< 10%', null, null);
INSERT INTO `answers` VALUES ('51', '9', '10-30%', null, null);
INSERT INTO `answers` VALUES ('52', '9', '30-60%', null, null);
INSERT INTO `answers` VALUES ('53', '9', '60-80%', null, null);
INSERT INTO `answers` VALUES ('54', '9', '80-90%', null, null);
INSERT INTO `answers` VALUES ('55', '9', '90-100%', null, null);
INSERT INTO `answers` VALUES ('56', '10', '< 50%', null, null);
INSERT INTO `answers` VALUES ('57', '10', '> 50%', null, null);
INSERT INTO `answers` VALUES ('58', '10', '> 75%', null, null);
INSERT INTO `answers` VALUES ('59', '11', 'Google', null, null);
INSERT INTO `answers` VALUES ('60', '11', 'Facebook', null, null);
INSERT INTO `answers` VALUES ('61', '11', 'Instagram', null, null);
INSERT INTO `answers` VALUES ('62', '11', 'Offline (Flyers, Newspaper, Magazines, Events,...)', null, null);
INSERT INTO `answers` VALUES ('63', '12', 'Low income level', null, null);
INSERT INTO `answers` VALUES ('64', '12', 'Medium income level', null, null);
INSERT INTO `answers` VALUES ('65', '12', 'High income level', null, null);
INSERT INTO `answers` VALUES ('66', '12', 'Age below 30', null, null);
INSERT INTO `answers` VALUES ('67', '12', '\r\nAge between 30 and 50', null, null);
INSERT INTO `answers` VALUES ('68', '12', 'Age 50+', null, null);
INSERT INTO `answers` VALUES ('69', '12', '\r\nLocal customers', null, null);
INSERT INTO `answers` VALUES ('70', '12', 'International customers', null, null);
INSERT INTO `answers` VALUES ('71', '12', 'Likely to travel', null, null);
INSERT INTO `answers` VALUES ('72', '13', 'Send transparent .png files', null, null);
INSERT INTO `answers` VALUES ('73', '13', 'Send photographs', null, null);
INSERT INTO `answers` VALUES ('74', '13', 'I would like to request a professional photographer', null, null);
INSERT INTO `answers` VALUES ('75', '14', 'E-Mail', null, null);
INSERT INTO `answers` VALUES ('76', '14', 'Text Message', null, null);
INSERT INTO `answers` VALUES ('77', '14', 'Other', null, null);
INSERT INTO `answers` VALUES ('78', '15', 'No', null, null);
INSERT INTO `answers` VALUES ('79', '15', 'Yes, Paper', null, null);
INSERT INTO `answers` VALUES ('80', '15', 'Yes, Excel', null, null);
INSERT INTO `answers` VALUES ('81', '15', 'Yes, I use a software system', null, null);
INSERT INTO `answers` VALUES ('82', '16', 'No', null, null);
INSERT INTO `answers` VALUES ('83', '16', 'Yes, international shipping', null, null);
INSERT INTO `answers` VALUES ('84', '16', 'Yes, but inland shipping only', null, null);
INSERT INTO `answers` VALUES ('85', '16', 'Yes, but only by courier (parcel pick-up service)', null, null);
INSERT INTO `answers` VALUES ('86', '17', 'Cash', null, null);
INSERT INTO `answers` VALUES ('87', '17', 'Credit Card', null, null);
INSERT INTO `answers` VALUES ('88', '17', 'Debit', null, null);
INSERT INTO `answers` VALUES ('89', '17', 'Paypal', null, null);
INSERT INTO `answers` VALUES ('90', '18', 'No', null, null);
INSERT INTO `answers` VALUES ('91', '18', 'Yes', null, null);
INSERT INTO `answers` VALUES ('92', '18', 'Yes, but not for sales items', null, null);
INSERT INTO `answers` VALUES ('93', '19', 'Financial return on rented clothes to customers', null, null);
INSERT INTO `answers` VALUES ('94', '19', 'Financial return on style-consulting for customers', null, null);
INSERT INTO `answers` VALUES ('95', '19', 'Increased sales to international customers', null, null);
INSERT INTO `answers` VALUES ('96', '19', 'Increased visibility and prominence of your boutique/brand', null, null);
INSERT INTO `answers` VALUES ('97', '19', 'Customer data (aggregated)', null, null);
INSERT INTO `answers` VALUES ('98', '19', 'Other', null, null);
INSERT INTO `answers` VALUES ('99', '20', '', null, null);
INSERT INTO `answers` VALUES ('100', '21', '', null, null);
INSERT INTO `answers` VALUES ('101', '22', '', null, null);

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('input','multiple','single') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('1', 'What kind of fashion are you selling?', 'multiple', null, null);
INSERT INTO `questions` VALUES ('2', 'What kind of style does your boutique offer?', 'single', null, null);
INSERT INTO `questions` VALUES ('3', 'What sizes do you sell?', 'multiple', null, null);
INSERT INTO `questions` VALUES ('4', 'How many fashion items would you like to add to your L/A portfolio?', 'single', null, null);
INSERT INTO `questions` VALUES ('5', 'Do you have an online shop, and if so, on what platform(s)?', 'multiple', null, null);
INSERT INTO `questions` VALUES ('6', 'What technology you are using for your online shop?', 'single', null, null);
INSERT INTO `questions` VALUES ('7', 'How many people are employed by your boutique?', 'single', null, null);
INSERT INTO `questions` VALUES ('8', 'How do you style your customers?', 'single', null, null);
INSERT INTO `questions` VALUES ('9', 'What percentage of revenue comes from online business?', 'single', null, null);
INSERT INTO `questions` VALUES ('10', 'What percentage of customers are locals/”friends”/referring (vs. 1-time customers (from abroad)?', 'single', null, null);
INSERT INTO `questions` VALUES ('11', 'How do you advertise your brand?', 'single', null, null);
INSERT INTO `questions` VALUES ('12', 'What are your target customers?', 'multiple', null, null);
INSERT INTO `questions` VALUES ('13', 'How would you like to deliver illustrations of your fashion pieces\r\n(for the upload to our fashion portfolio)?', 'single', null, null);
INSERT INTO `questions` VALUES ('14', ' How would you like to get notified in case of a sold item?', 'single', null, null);
INSERT INTO `questions` VALUES ('15', 'Do you use an Inventory Management System (IMS)?', 'single', null, null);
INSERT INTO `questions` VALUES ('16', ' Is the shipping of clothes a logistic possibility for you?', 'single', null, null);
INSERT INTO `questions` VALUES ('17', ' What payment services do you accept?', 'single', null, null);
INSERT INTO `questions` VALUES ('18', ' Do you accept returns (from LocalAway buyers)?', 'single', null, null);
INSERT INTO `questions` VALUES ('19', ' What kind of return do you expect from renting out clothes?', 'multiple', null, null);
INSERT INTO `questions` VALUES ('20', 'What is a good phone number to reach you in the future?', 'input', null, null);
INSERT INTO `questions` VALUES ('21', ' What is your postal address?', 'input', null, null);
INSERT INTO `questions` VALUES ('22', ' Is there anything else you would like to add?', 'input', null, null);
