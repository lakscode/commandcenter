-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 02:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `commandcenter`
--


-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
  `themeid` int(11) NOT NULL AUTO_INCREMENT,
  `body_background` varchar(8) NOT NULL,
  `themename` varchar(50) NOT NULL,
  `container_border_color` varchar(8) NOT NULL,
  `container_border_shadow_color` varchar(8) NOT NULL,
  `container_border_shadow_depth` varchar(8) NOT NULL,
  `container_border_radius` varchar(8) NOT NULL,
  `contentslide_background_color` varchar(8) NOT NULL,
  `contentslide_border_radius` varchar(8) NOT NULL,
  `contentslide_tweet_color` varchar(8) NOT NULL,
  `contentslide_tweet_size` varchar(8) NOT NULL,
  `contentslide_tweet_from_size` varchar(8) NOT NULL,
  `contentslide_tweet_from_color` varchar(8) NOT NULL,
  `contentslide_tweet_screenname_color` varchar(8) NOT NULL,
  `contentslide_tweet_screenname_size` varchar(8) NOT NULL,
  `contentslide_image_border` varchar(8) NOT NULL,
  `contentslide_image_border_color` varchar(8) NOT NULL,
  `contentslide_image_border_radius` varchar(5) NOT NULL,
  `contentslide_image_shadow` varchar(6) NOT NULL,
  `contentslide_image_shadow_highlight` varchar(8) NOT NULL,
  `image_background_color` varchar(8) NOT NULL,
  `image_border_color` varchar(8) NOT NULL,
  `image_border_radius` varchar(5) NOT NULL,
  `image_border_size` varchar(5) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  PRIMARY KEY (`themeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`themeid`, `body_background`, `themename`, `container_border_color`, `container_border_shadow_color`, `container_border_shadow_depth`, `container_border_radius`, `contentslide_background_color`, `contentslide_border_radius`, `contentslide_tweet_color`, `contentslide_tweet_size`, `contentslide_tweet_from_size`, `contentslide_tweet_from_color`, `contentslide_tweet_screenname_color`, `contentslide_tweet_screenname_size`, `contentslide_image_border`, `contentslide_image_border_color`, `contentslide_image_border_radius`, `contentslide_image_shadow`, `contentslide_image_shadow_highlight`, `image_background_color`, `image_border_color`, `image_border_radius`, `image_border_size`, `created_by`, `created_at`, `enabled`) VALUES
(1, 'FFF', 'default', 'F40000', 'FF6159', '5px', '15px', '719BAF', '15px', 'FFDEBF', '10pt', '10pt', '000', 'FFF', '10pt', '2px', 'FFF', '15px', '888888', 'F01D1D', 'DDDDDD', 'CCC', '15px', '2px', 1, '2016-04-27 15:15:00', 0),
(5, '000', 'Blue', '2E782C', '449C1F', '5px', '15px', 'B1A1FF', '15px', '0D1314', '10pt', '10pt', '4AFFE8', 'FF5EB3', '10pt', '2px', 'CCC', '15px', '888888', 'F01D1D', 'DDDDDD', 'CCCCCC', '15px', '2px', 1, '2016-05-02 14:47:01', 0),
(6, 'FFF', 'Green', '1B4F18', '478529', '5px', '15px', '2B7034', '15px', '6B0202', '10pt', '10pt', '000000', 'FFFFFF', '10pt', '2px', 'DDD', '15px', '888888', 'F01D1D', 'CCC', 'CCCCCC', '15px', '2px', 1, '2016-05-02 11:45:55', 0),
(7, '000', 'Violet', '6A5BB5', '8D7AFF', '5px', '15px', '9196AF', '15px', '59F8FF', '10pt', '10pt', '01008C', 'FFFFFF', '10pt', '2px', 'FFF', '15px', '888888', 'F01D1D', 'DDD', 'CCC', '15px', '2px', 1, '2016-05-02 08:15:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `twitter`
--

CREATE TABLE IF NOT EXISTS `twitter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_str` varchar(256) NOT NULL,
  `text` varchar(256) CHARACTER SET utf8 NOT NULL,
  `user_id_str` varchar(256) NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `user_screen_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `follower_count` int(11) NOT NULL,
  `friends_count` int(11) NOT NULL,
  `favourites_count` int(11) NOT NULL,
  `statuses_count` int(11) NOT NULL,
  `profile_image_url` varchar(256) NOT NULL,
  `retweet_count` int(11) NOT NULL,
  `favorite_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `hashtag` varchar(256) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(250) CHARACTER SET utf8 NOT NULL,
  `sentiment` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21679 ;

--
-- Dumping data for table `twitter`
--

INSERT INTO `twitter` (`id`, `id_str`, `text`, `user_id_str`, `user_name`, `user_screen_name`, `follower_count`, `friends_count`, `favourites_count`, `statuses_count`, `profile_image_url`, `retweet_count`, `favorite_count`, `created_at`, `approved`, `hashtag`, `keywords`, `sentiment`, `source`) VALUES
(21107, '727474639220285440', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/fVeHGv4Qve https://t.co/fAtIsxJsX8', '2481533473', 'dhinessh', 'bdhinessh', 156, 155, 48, 7156, 'http://pbs.twimg.com/profile_images/715951654206447616/6lgm6vYK_normal.jpg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21108, '727473969146810368', 'RT @CricketAus: With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4…', '4888584132', 'Mohsina Laskar', 'LaskarMohsina', 95, 167, 1323, 488, 'http://pbs.twimg.com/profile_images/725326785064357888/b1z2WXRU_normal.jpg', 5, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21109, '727473828859928576', 'RT @CricketNDTV: IPL: Kolkata Knight Riders'' Yusuf Pathan Defends Royal Challengers Bangalore Bowling https://t.co/WrlpbJK6Ae', '710407943376740352', 'Kaavya Aadarsh', 'AadarshKaavya', 18, 144, 105, 35, 'http://pbs.twimg.com/profile_images/714785313776869377/EuxO1AUJ_normal.jpg', 3, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21110, '727473754662686721', 'RT @CricketNDTV: IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/Y2PgGsDMMZ', '710407943376740352', 'Kaavya Aadarsh', 'AadarshKaavya', 18, 144, 105, 35, 'http://pbs.twimg.com/profile_images/714785313776869377/EuxO1AUJ_normal.jpg', 3, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21111, '727473555273818112', 'RT @CricketAus: With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4…', '4861599684', 'Kaptaan Kohli', 'KaptaanKohli', 1684, 41, 3, 52564, 'http://pbs.twimg.com/profile_images/695409383430234114/53CoPqSI_normal.jpg', 5, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21112, '727472463177613312', 'RT @cricbuzz: Gambhir is a great captain. He believes in, and backs his players under any situation: Yusuf Pathan - https://t.co/O0bl8dFxlr…', '705243924084838401', '01:05:2016', 'McSajith', 55, 155, 3072, 1276, 'http://pbs.twimg.com/profile_images/726655588604600320/9OGt39aa_normal.jpg', 31, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21113, '727471188289581056', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/fVeHGv4Qve https://t.co/yCWFjV9Hgy', '2481533473', 'dhinessh', 'bdhinessh', 156, 155, 48, 7156, 'http://pbs.twimg.com/profile_images/715951654206447616/6lgm6vYK_normal.jpg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21114, '727470182831165440', 'RT @FirstpostSports: #IPL2016 Who will win this match of the big-hitters - @RCBTweets or @KKRiders? https://t.co/TJPw1NCG4Q #RCBvKKR https:…', '1489283346', 'Amarnath reddy', 'amarnathPJ220', 3, 64, 1, 1, 'http://pbs.twimg.com/profile_images/708730264709541889/ROLBVOhs_normal.jpg', 9, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21115, '727469329193672704', 'RT @CricketNDTV: IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/Y2PgGsDMMZ', '714296733300162560', 'Binam', 'sthabinam', 38, 59, 2737, 364, 'http://pbs.twimg.com/profile_images/716995935381815297/9Gsxfdof_normal.jpg', 3, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21116, '727469197983408128', 'RT @CricketAus: With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4…', '109368820', 'Fly to Australia', 'fly_toaustralia', 1346, 1306, 157, 82986, 'http://pbs.twimg.com/profile_images/661554409/sydney_opera_house_normal.jpg', 5, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21117, '727468772093743105', 'RT @BBL: Good luck to @HurricanesBBL star George Bailey, who''s off to the #IPL: https://t.co/PzRXutkEyz https://t.co/UI6T2ZGaWd', '3068427049', 'Anza Palh', 'anza77521289', 61, 34, 1347, 453, 'http://pbs.twimg.com/profile_images/726675887178059776/GPiMbRfn_normal.jpg', 10, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21118, '727468720809857024', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/fVeHGv4Qve https://t.co/09fHW8E4d5', '2481533473', 'dhinessh', 'bdhinessh', 156, 155, 48, 7156, 'http://pbs.twimg.com/profile_images/715951654206447616/6lgm6vYK_normal.jpg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21119, '727468437472198656', 'RT @CricketAus: With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4…', '2541675212', 'Cricket News', 'cricketnews2015', 185, 184, 4871, 18925, 'http://pbs.twimg.com/profile_images/600167443785322497/Y4UBc3-K_normal.jpg', 5, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21120, '727468411614334976', 'RT @CricketAus: With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4…', '800065273', 'Cricket Tweetz', 'CricketTweetz', 1428, 191, 0, 70979, 'http://pbs.twimg.com/profile_images/2572544913/eyztr67huojmok5x4bzh_normal.png', 5, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21121, '727467984260726784', 'With the #IPL at the halfway point, we pick our Team of the Tournament so far https://t.co/G4fGBENaYm https://t.co/2IIxrxH4Dr', '17692554', 'cricket.com.au', 'CricketAus', 662134, 471, 2714, 78476, 'http://pbs.twimg.com/profile_images/597988132387102720/QzNZXhjX_normal.jpg', 5, 22, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21122, '727466408569769985', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab: Kolkata Knight Riders are ... https://t.co/rn03VrA7Qc', '4778305466', 'I Rock Cutely', 'cutestrocker', 550, 1088, 13, 32157, 'http://pbs.twimg.com/profile_images/696309048048660480/WB0S73KM_normal.jpg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21123, '727466406606856193', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/Y2PgGsDMMZ', '71487564', 'CricketNDTV', 'CricketNDTV', 217144, 10, 4, 88046, 'http://pbs.twimg.com/profile_images/566805159800344577/HSTYu5XU_normal.png', 3, 2, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21124, '727466404648116224', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab https://t.co/cHUsyI0XZw', '257961309', 'GurpreeT', 'garry4203', 427, 434, 31, 73656, 'http://pbs.twimg.com/profile_images/497145047033602048/cAdVdjso_normal.jpeg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21125, '727466403075248128', 'IPL: Kolkata Knight Riders Face Tough Challenge Against Resurgent Kings XI Punjab: Kolkata Knight Riders are ... https://t.co/yd1HjxbSYM', '2333378966', 'Kashi khan', 'bst_cricket', 1237, 0, 0, 16923, 'http://pbs.twimg.com/profile_images/432127939413417984/imjdj79b_normal.jpeg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21126, '727465446916644865', 'RT @CricketNDTV: IPL: Kolkata Knight Riders'' Yusuf Pathan Defends Royal Challengers Bangalore Bowling https://t.co/WrlpbJK6Ae', '1159066458', 'CRIC.SPORTS', 'sports5n', 124, 13, 1, 15580, 'http://pbs.twimg.com/profile_images/566379064307351553/KVzADAor_normal.jpeg', 3, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21127, '727463224321265665', 'RT @CricketAus: What do #IPL friendships mean for the Australia-England rivalry? Eoin Morgan has his say https://t.co/2J1ctharxa https://t.…', '738315938', 'Swetha Naik', 'Jordan_H_1234', 373, 2200, 2093, 2819, 'http://pbs.twimg.com/profile_images/628890232075612164/f-1HXaqv_normal.jpg', 10, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, ''),
(21128, '727462540112977920', 'IPL - Indian Premier League के तुरंत बाद ही Indian Cricket Team वनडे और टी-20 खेलने के लिए होगी ज़िम्बाब्वे... https://t.co/9Km1Ihu4LE', '113347795', 'Syed Hussain', 'syedhussain_', 242, 787, 4, 950, 'http://pbs.twimg.com/profile_images/593860963851325440/FB1zpWSx_normal.jpg', 0, 0, '2016-05-03 14:30:45', 0, 'IPL, Indian premier League', '', 0, '')
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
