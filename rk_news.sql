-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 08:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rk_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(21, 'Business'),
(22, 'Education'),
(19, 'Entertainment'),
(20, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`) VALUES
(1, 'riyaz', 'rrmundiya@gmail.com', 'hiiii'),
(2, 'riyaz', 'sdfsfs@gmail.com', 'cool'),
(3, 'riyaz', 'sdfsfs@gmail.com', 'cool');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

CREATE TABLE `feedback_form` (
  `id` int(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`id`, `username`, `feedback`) VALUES
(1, 'client', 'nice page'),
(2, 'client', 'nice page');

-- --------------------------------------------------------

--
-- Table structure for table `livenews`
--

CREATE TABLE `livenews` (
  `id` int(255) NOT NULL,
  `news_name` varchar(255) NOT NULL,
  `youtube_code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livenews`
--

INSERT INTO `livenews` (`id`, `news_name`, `youtube_code`) VALUES
(1, 'India-Tv', 'W7aDbE3Apqk'),
(4, 'TEZ', '0EOWfp4y0jc'),
(3, 'NBC', 'UdhmPlLav6s'),
(5, 'Aaj Tak', 'IupK-KpnSe4'),
(6, 'sandesh', 'K1LPU8UQUfg'),
(7, 'KTV', '5MLRXQmtYHg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news` varchar(10000) NOT NULL,
  `news_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `subcat_name`, `news_title`, `news`, `news_img`) VALUES
(29, 'Filmstar', 'Ankita Lokhande ', 'Recently Ankita Lokhande slammed a fan who shared a video of Sushant Singh Rajputâ€™s dead body on social media. Replying to the post, she wrote, â€œWhatâ€™s wrong with u .stop posting such videos they are very disturbing for all of us .its a request to remove this video rite now .. we know u love him but this isnâ€™t the way to show ur support or love to him remove this video rite now !!â€', '78379556.jpg'),
(30, 'Filmstar', 'Deepika Padukone', 'Deepika Padukone, Shraddha Kapoor and Sara Ali Khan were questioned for hours on Saturday by the Narcotics Control Bureau, however no link has emerged between them and drug peddlers. An NCB official had told Mumbai Mirror, â€œWhen we asked Padukone about her chats with her manager Karishma Prakash, she denied having been involved in consumption of drugs, and said that she was referring to cigarettes. Khan, too, refused having consumed contraband. When we enquired Kapoor about her CBD Oil (cannabidiol) WhatsApp chat, she said it was for external use. Legally, preparations made from extract or tincture of Indian hemp, except those which are only for external use, are covered as per the provisions of the NDPS Act."\r\n', '78376566.jpg'),
(32, 'TV', 'Aamir Ali', 'For the first time, Ali spoke to a leading daily, confirming that there is, indeed, trouble in paradise. He said, â€œAll will be good.â€ A source close to the couple told another leading tabloid, â€œYes, itâ€™s true. They have a 3-4-month-old daughter. Itâ€™s a surrogate baby. Sanjeeda has moved out with the baby to her motherâ€™s place. Aamir continues to reside in the Lokhandwala flat where they had stayed all along after marriage.â€ \r\n\r\n\r\nImage Credit: Instagram, aamirali\r\nThe source further added, â€œDifferences started cropping up between them some time ago, but they were trying their best to not let it hamper their relationship. Matters escalated a few days after Sanjeeda returned from a shoot in London in October last year, and she left for her parental home. Though they continued to be in touch for some time after that, they stopped talking to each other over a month ago. Since the differences are a result of minor issues, we are hoping that they will reconcile.â€\r\n\r\n\r\nImage Credit: Instagram, aamirali\r\nWhen Aamir was contacted by the media post this, he simply said, â€œAll is ok.â€ \r\n\r\nTheir love story \r\nSpeaking about his love story with Sanjeeda a few years ago, Aamir had said: "Love is not something that happens overnight. True romance can only bloom over time.â€ \r\n\r\nAamir had always had a phobia of commitment, while Sanjeeda was the opposite. "Sanjeeda always wanted to marry me, but I was s*** scared about marriage. I was happy with the way our relationship was going. The mere thought of marriage gave me sleepless nights though my mom used to poke me almost every day to get married to Sanjeeda. And after being together for a very long time ek din mera woh darr finally chala gaya, and it was that day when I surprised her by proposing to her on my knees. Earlier we used to discuss marriage, but very rarely. So she was completely surprised,â€ he revealed. \r\n\r\n\r\nImage Credit: Instagram, aamirali\r\nAnother news portal recently reported that a friend of the duo informed:  "The couple seems to have mutually decided to separate. They have decided to live and let live. While Sanjeedaâ€™s work has been a good excuse to be apart and gauge the situation, the couple apparently has been facing some personal issues as well. Only time will tell if this arrangement is permanent or not."   \r\n\r\n\r\nImage Credit: Instagram, aamirali\r\nWell, we hope Aamir and Sanjeeda sort of their differences as soon as possible! Hereâ€™s wishing them all the strength through this trying phase. \r\n\r\nLead Image Credit: Instagram, aamirali and BCCL\r\n\r\n\r\n\r\n\r\nTracy Ann\r\nTracy Ann\r\nFollow\r\nEntertainment\r\nEntertainment\r\nFollow\r\nThe Conversation\r\nStart a conversation, not a fire. Post with kindness.\r\nStart a conversation...\r\nPost\r\nSpotlight\r\nMX Player\r\nPARTNER\r\nBadshah Strikes A Chord With Aspiring Influencers Through His Latest Track â€˜Kar TakaTak, Bann TakaTakâ€™\r\nRelated Stories\r\nTerence Slammed Online For Being â€˜Inappropriateâ€™ With Nora; Hereâ€™s What He Has To Say \r\nTV\r\nTerence Slammed Online For Being â€˜Inappropriateâ€™ With Nora; Hereâ€™s What He Has To Say\r\n5 Upcoming Indian Thriller Web-Series That Will Make 2020 Bearable\r\nTV\r\n5 Upcoming Indian Thriller Web-Series That Will Make 2020 Bearable\r\nA Sneak Peak Into TV Celeb Couplesâ€™ Lavish Homes Thatâ€™ll Make Yâ€™all Feel Terribly Gareeb\r\nTV\r\nA Sneak Peak Into TV Celeb Couplesâ€™ Lavish Homes Thatâ€™ll Make Yâ€™all Feel Terribly Gareeb\r\nâ€˜Balika Vadhuâ€™ Director & Other Actors-Turned-Vegetable Vendors During The Covid Crisis\r\nTV\r\nâ€˜Balika Vadhuâ€™ Director & Other Actors-Turned-Vegetable Vendors During The Covid Crisis\r\nArts & Culture\r\n8 Adorable Moments Of Babies With Dogs To Help End The Week On A Sweet Note\r\nARTS & CULTURE\r\n8 Adorable Moments Of Babies With Dogs To Help End The Week On A Sweet Note\r\n Filmmakers, Win This 50-Hour Filmmaking Challenge & Get A PVR Release, MTV Showcase \r\nARTS & CULTURE\r\nFilmmakers, Win This 50-Hour Filmmaking Challenge & Get A PVR Release, MTV Showcase\r\n', '52001345_296294867721111_7483138286237792018_n.jpg'),
(33, 'Movie', 'Khuda Haafiz', 'The basic story of Khuda Haafiz will remind you of the Hollywood film, Taken. In fact, the film would have probably worked much better if it was an official remake of the Liam Neeson starrer.\r\n\r\nFrom the moment Sameer lands in Noman, you want him to unleash his inner warrior and fight the goons in style.\r\n\r\nSo you wait and wait in anticipation. But it never happens!\r\n\r\nWhile Vidyut tries his best to carry the film on his able shoulders, he mostly fails because of the cliched story and bad execution.\r\n\r\nShivaleeka looks gorgeous onscreen but thatâ€™s it. Her role isnâ€™t meaty enough and she hardly has any screen time.\r\n\r\nThe actor that stands out in the film is Annu Kapoor. His dialogue delivery is the best amongst all the actors.\r\n\r\nWe also get to see Aahana Kumra and Shiv Panditt in supporting roles and they do their parts well. But their Arabic accent is funny.\r\n\r\nOverall, Khuda Haafiz isnâ€™t engaging enough.\r\n\r\nThe movie lacks in the action department big time and because of that, Vidyut doesnâ€™t shine.\r\n\r\nBarring Annu Kapoor, everyone delivers a forgettable performance.\r\n\r\nStill, the cinematography is stunning. Visually, the movie looks appealing and some of the scenes have been shot brilliantly.\r\n\r\nUzbekistan is indeed a beautiful country and while Khuda Haafiz couldnâ€™t impress me, the country is definitely on my travel list now. ', 'Vidyut-Jammwals-Khuda-Hafiz-Gets-Massive-Support-Ahead-of-Release-1024x1024.jpg'),
(34, 'Movie', 'Aarya', 'The grace with which Sushmita Sen gently, yet firmly, reprimands her 13-year-old daughter to draw a boundary when it comes to addressing the newest member in the family on whom she has a teenage crush, makes one realise that the actress has been severely under-utilised in the industry.\r\n\r\nSushmita pretty much nails it in this Ram Madhvani (Neerja) Web series, which has Sandeep Modi and Vinod Rawat as additional directors.\r\n', '25aarya1.jpg'),
(35, 'Share Bazar', 'Stock', 'Nearly 20 smallcap stocks more than double wealth in Q2, Nifty up over 10%.The Indian market was on a roll in the September quarter as benchmark indices recorded gains of about 10 percent each, but there was plenty of action in the small & midcap space.', 'money-2696234_1280-1-770x432.png'),
(36, 'Book', 'Book', 'A page with too many pictures may hinder reading ability in children: Study\r\nA busy page with too many pictures may hinder your understanding of the text. The findings of a new study suggest that an overly busy page with extraneous images can draw the readerâ€™s attention away from the text, resulting in a lower understanding of content.', '_0237b4da-06e9-11eb-adc0-f7cc04e39ce3.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `city`, `country`, `dob`, `gender`) VALUES
(1, 'riyaz', '123456', 'riyaz', 'mundiya', 'rrmundiya@gmail.com', 'jetpur', 'India', '2020-09-11', 'male'),
(2, 'riyaz mundiya', '123456', 'riyaz', 'mundiya', 'rrmundiya@gmail.com', 'jetpur', 'India', '2020-09-02', 'male'),
(3, 'boy', '123456', 'cool', 'boy', 'rrmundiya@gmail.com', 'jetpur', 'India', '2020-09-03', 'male'),
(4, 'cool', 'coo;', 'cool', 'boy', 'coolboy@gmail.com', 'jetpur', 'india', '2000-02-27', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `s_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `subcat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`s_id`, `cat_name`, `subcat_name`) VALUES
(45, 'Business', 'Share Bazar'),
(46, 'Education', 'Book'),
(47, 'Entertainment', 'Movie'),
(48, 'Entertainment', 'Filmstar'),
(49, 'Entertainment', 'Song'),
(50, 'Entertainment', 'TV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_form`
--
ALTER TABLE `feedback_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livenews`
--
ALTER TABLE `livenews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`),
  ADD KEY `subcat_name` (`subcat_name`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `cat_name` (`cat_name`),
  ADD KEY `subcat_name` (`subcat_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback_form`
--
ALTER TABLE `feedback_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `livenews`
--
ALTER TABLE `livenews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`subcat_name`) REFERENCES `subcategory` (`subcat_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cat_name`) REFERENCES `category` (`cat_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
