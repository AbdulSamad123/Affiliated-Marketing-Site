-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2022 at 08:20 PM
-- Server version: 5.5.45
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indus`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(23, 'Web Hosting/Servers'),
(24, 'Men Clothes'),
(25, 'Women Clothes'),
(26, 'Home Linen'),
(27, 'Toy Figures & Playsets'),
(28, 'Fitness & Diet'),
(29, 'Craft');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `message`) VALUES
(6, 'Adamcrach', '84582826237', 'adam789bright@gmail.com', 'Looking for likes or followers for Facebook or Instagram \r\nWe can help you. Please visit https://1000-likes.com/ to place your order.'),
(7, 'MarvinGor', '88363897229', 'crouse.debra@yahoo.com', 'Only on our website are 100% real private photos added by our users from all over the world! \r\nThat is why the database of amateur photographs is updated on the site every day. \r\nhttps://ecuadortenisclub.com/3xaw7 \r\nWe declare with confidence that our free private photo with girls is in the highest demand. \r\nhttps://slimex365.com/3zvq7'),
(8, 'RichardVor', '82479884724', 'cvalin124@yahoo.com', 'Erotic photos, naked girls, intimate photos. \r\nhttp://gongpo.moum.kr/8wTn \r\nIn any of the sections of our site you will find seductive and sexy erotic photos that will give you a lot of pleasant pleasures. \r\nhttp://xsle.net/3z69u'),
(9, 'Henrypek', 'fredcat333@aol.com', 'aoficina3d@iol.pt', 'Financial independence is what everyone needs. \r\nLink - http://1gr.cz/log/redir.aspx?r=pb_0_16&url=https%3A%2F%2Fprofit-strategy.life%2F%3Fu%3Dbdlkd0x%26o%3Dx7t8nng'),
(10, 'Peter Allford\r\n', '85363563317', 'no-replyadace@gmail.com', 'Hi \r\n \r\nDo your rivals not playing the game fair and square? \r\nNow you can fight back. \r\n \r\nNegative SEO, to make SEO Trend go down \r\nhttps://blackhat.to/ \r\n \r\nContact us for any queries: \r\nsupport@blackhat.to'),
(11, 'Louvenia Nuyts', '(02) 9362 2294', 'nuyts.louvenia@msn.com', 'Hi there\r\n\r\nIf you ever need Negative SEO to de-rank any site, you can hire us here\r\nhttps://www.speed-seo.net/product/negative-seo-service/\r\n\r\n'),
(12, 'Damian Larkin', '033671 32 26', 'damian.larkin91@yahoo.com', 'Get the entire LinkedIn Now. \r\n\r\nhttps://cutt.ly/EntireLinkedIn'),
(13, 'Anita Champion', '079 5028 1237', 'anita.champion@gmail.com', 'Buy 100k Visitors on induscoupon.com. Boost your ranking in google and search engines.\r\n\r\nYour website, a product, you name it!\r\n\r\nOffer is Valid till 4 February 2022.\r\n\r\nhttps://marketingguru.sell.app/product/100k-visitors'),
(14, 'CandiceSew', '86532348673', 'iraivanisevi@gmail.com', 'Ecstasy - https://2track.info/mjmp'),
(15, 'Suzette Wheller', '06-29972777', 'suzette.wheller@gmail.com', '\r\nIf you ever need more social audience for induscoupon.com, we can run Facebook Traffic campaigns with this service: https://www.seo-treff.de/product/country-targeted-traffic/'),
(16, 'Derrick Martel', '04.68.11.41.55', 'derrick.martel@gmail.com', 'Send 200k marketing / cold emails daily @ $99.\r\n\r\nClean IP\r\nWarmed Up\r\nDomain Included\r\nSmtp only\r\n\r\nhttps://cutt.ly/MailServers\r\n\r\nSupport: https://t.me/SmtpServers'),
(17, 'ElizaSew', '87372187431', 'repk91@gmail.com', 'Ecstasy - https://2track.info/mjmp'),
(18, 'AnnetteSew', '87514489326', 'dcjulien1@gmail.com', 'Ecstasy - https://2track.info/TYiS'),
(19, 'BrendaSew', '85874718684', 'karina.pl1@gmail.com', 'Your dream - https://2track.info/aeJA'),
(20, 'Lexi Kline', '8339814300', 'lexi@adawebcomp.org', 'Is your website ADA compliant? Besides the legal aspect, having a compliant website will bring more traffic.\r\n\r\nCheck out the advantages here and see if your site is compliant -> https://adawebcomp.org\r\n\r\nBest Regards\r\nLexi\r\n\r\n\r\nIf you prefer not to receive these commercial messages you can opt-out here -> https://adawebcomp.org/opt-out/');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `exp_date` date NOT NULL,
  `discription` varchar(600) NOT NULL,
  `link` varchar(300) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `store` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `checkbox` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `date`, `exp_date`, `discription`, `link`, `coupon_code`, `store`, `category`, `checkbox`) VALUES
(2, '2022-02-21', '2022-12-31', 'Sideshow Coupon: Extra $40 Off (Executus Reaper Oglavaeil Legendary Scale™)', 'https://www.sideshow.com/?sscid=21k6_lkdw0', 'EXECOG', '37', '27', 0),
(3, '2022-02-21', '2022-12-31', '20% off Pop In a Box Coupon: Extra 20% Off $20+ (Any Order + Free Shipping)', 'https://www.popinabox.us/?affil=awin&utm_content=Knoji&utm_term=Discount+Code&utm_source=AWin-177945&utm_medium=affiliate&utm_campaign=AffiliateWin&awc=6745_1645453936_3996064a5312bcfc59cef496580492e8', 'BENITO-RO', '38', '27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `exp_date` date NOT NULL,
  `discription` varchar(600) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image` varchar(30) NOT NULL,
  `deal_code` varchar(20) NOT NULL,
  `store` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `date`, `exp_date`, `discription`, `link`, `image`, `deal_code`, `store`, `category`) VALUES
(1, '2022-02-23', '2022-12-30', 'Key Nutrients Coupon: Extra 15% Off Store-Wide', 'https://keynutrients.com/products/electrolyte-recovery-plus?variant=41129829105832', 'image_2022-02-23_182948.png', 'KEY15PCT', '52', '28'),
(2, '2022-02-23', '2022-12-30', '20% off With These VERIFIED Artifact Discount Codes Active in February 2022', 'https://artifactbags.com', 'Artifact.jpg', 'AWESOMEPOSTER', '51', '29');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Muhammad Ali', 'testing123@test.com', 'indus123');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `exp_date` date NOT NULL,
  `discription` varchar(600) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `store` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `website` varchar(250) NOT NULL,
  `content` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `logo`, `name`, `website`, `content`) VALUES
(30, 'Walmart.jpg', 'Walmart', 'https://www.walmart.com', 'Walmart ranks as the topmost store for buying daily needs like groceries, household stuff, economically priced clothing, gift articles and lots more. Walmart also has its own credit card that allows you to buy expensive goods on installments.'),
(31, 'Hallmark.jpg', 'Hallmark', 'https://www.hallmark.com', 'Greeting cards, gift items, home décor and lots of unique products are available at Hallmark.com. They also offer daily and seasonal discounts on their stuff. Established in 1910, Hallmark is the largest manufacturer and retailer of greeting cards and gift items in the US. The company runs an eponymous TV channel that is telecast worldwide.'),
(32, 'USPS.jpg', 'USPS.Com', 'https://store.usps.com/store/results/shipping-supplies/_/N-7d0v8v', 'United States Postal Service runs one of the topmost shopping websites in the US. The USPS Store sells postage stamps, postal stationery and gift items. You can also buy special postage stamps and stationery that reflect various themes and celebrations.'),
(33, 'Discovery Store.jpg', 'Discovery Store', 'https://store.discovery.com', 'Discovery Channel operates a top online stores in the US. They sell mugs, toys, T-shirts and other clothing items, movies and videos, books and lots of other stuff on their store. You can also buy stuff branded with Animal Planet, The Learning Channel (TLC), Investigation Discovery and The Science Channel from their online shopping site.'),
(34, 'Barnes & Nobel.jpg', 'Barnes & Nobel', 'https://www.barnesandnoble.com', 'Barnes & Noble is the world’s largest online retailer of books of all types. It ranks as a Fortune 500 company. Barnes & Noble sells almost every kind of book. The company was established in 1853 and now has significant online sales.'),
(35, 'AT&T.jpg', 'AT&T', 'https://www.att.com', 'Talking of mobile communications, AT&T, the second biggest mobile network in USA also has an online store. They offer mobile phones and tablets to suit all budgets. AT&T Store also has mobile phone casings, screen protectors and other accessories for all types of smartphones and feature phones.'),
(36, 'USA Gundam Store.jpg', 'USAGundamStores', 'https://www.usagundamstore.com', 'USA Gundam Store (usagundamstore.com) is a well-known toy figures & playset store which competes against brands like Sideshow, Pop In a Box and CLARK Toys. USA Gundam Store has offered 30 USA Gundam Store promo codes over the past 12 months, making them one of the more active retailers when it comes to offering promo codes on its website. Read the full USA Gundam Store review.'),
(37, 'SideShow.jpg', 'SIDE SHOW', 'https://www.sideshow.com', 'A modern day renaissance studio, specializing in licensed and original creations.'),
(38, 'POP in a Box.jpg', 'POP IN A BOX ', 'https://www.popinabox.us', 'ABC'),
(39, 'Ring Concierge.jpg', 'Ring Concierge', 'https://ringconcierge.com', 'The stress-free way to shop for her dream engagement ring. Elegant designs featuring diamonds under 2 carats.'),
(40, 'marimekko.jpg', 'Marimekko', 'https://www.marimekko.com/us_en/', 'If the last seventy years has taught us anything, it’s that positive change doesn’t happen by chance but by inspiring others and leading by example.'),
(41, 'Gibsonlook.jpg', 'Gibsonlook', 'https://gibsonlook.com', 'The brand gets its name from my grandmother who led an all-girls jazz band by the name of Gibson’s Navigators in the 1920’s'),
(42, 'PAPA MURPHYS.jpg', 'PAPA MURPHY', 'https://www.papamurphys.com', 'PIZZA'),
(43, 'BOLDKING.jpg', 'BOLDKING', 'https://www.boldking.com/nl/nl-nl', 'Een flexibel scheermes dat elk haartje aankan. Volgt jouw lichaam als een masseuse. Perfect om alles te scheren.'),
(44, 'Stan Ray.jpg', 'Stan Ray', 'https://www.stanray.com/', 'Founded in Texas in 1972, Stan Ray make clothes that are designed for wear and movement, with minimum fuss and maximum practicality, for rough work or lateral living.  Stan Ray products are durable, all-purpose, honest.'),
(45, 'Titan Fitness.jpg', 'Titan Fitness', 'https://www.titan.fitness', 'Fitness is Life '),
(46, 'Grow Organic.jpg', 'Grow Organic', 'https://www.groworganic.com', 'The Online Home Peacefull Velly'),
(47, 'Gymshark.jpg', 'Gym Shark', 'https://www.gymshark.com', 'The Gymshark community is devoted to unlocking potential through conditioning and the things we do today to prepare for tomorrow. When it comes to performing at your max, there should be no obstacles – least of all your workout clothes. So everything about the gym clothes and accessories we design for you has your progress and the best results in mind. We want you to have the most comfortable gym hoodies, the most supportive seamless leggings and the most innovatively designed workout shirts that are made to move when it matters most.'),
(48, 'Skill Share.jpg', 'Skill Share', 'https://www.skillshare.com', 'Explore new skills, deepen existing passions, and get lost in creativity. What you find just might surprise and inspire you'),
(49, 'Lens Craft.jpg', 'Lens Crafters', 'https://www.lenscrafters.com', 'Everything we do at LensCrafters is centered around sight. Because it’s a key sense. Because it connects you to your environment and the people in it. Because it means independence. Because reading. Because smiles. Because sunsets. Because Sight.'),
(50, 'Star Market.jpg', 'Star Market', 'https://starmarket.com', 'Amazing your thought '),
(51, 'Artifact.jpg', 'Artifact', 'https://artifactbags.com', 'ARTIFACT started in 2010 in my basement with a commercial sewing machine purchased on Craigslist. I had recently been laid off as a Product Manager for a startup during The Great Recession and eventually succumbed to a placeholder job doing Customer Support at PayPal. With esoteric degrees in Anthropology and Sociology, a short-lived music career, zero interest in grad school, and an abysmal job market, I realized if I did not take the reins regarding my career path, I would be helping people reset their passwords for a very long time!'),
(52, 'Key Nutrients.jpg', 'Key Nutrients', 'https://keynutrients.com', 'Key Nutrients is a veteran-owned and family operated natural supplement company based in Scottsdale, Arizona. With a commitment to helping people live healthier, happier lives, we focus on providing key nutrients that are natural, effective, affordable and high quality.'),
(53, 'Meow Wolf.jpg', 'Meow Wolf', 'https://meowwolf.com', 'Amazing your Thought '),
(54, 'Denny.jpg', 'Dennys', 'https://www.dennys.com', 'ABC'),
(55, 'Lu Malnatis.jpg', 'Lou Malnatis', 'https://loumalnatis.knoji.com/promo-codes/', 'ABC'),
(56, 'Go Ape.jpg', 'goape', 'https://goape.co.uk/', 'Great for all children but especially younger ones as this activity is available to anyone over 1m tall.'),
(57, 'Orttu.jpg', 'orttu', 'https://orttu.com/', 'we no longer have to live by the rules that other people set. How we live, who we love, and how we dress, that’s up to each of us. But we know it isn’t easy. Finding who we are deep inside and creating the life we dream of is a journey that demands we act boldly, bravely, and with love. That journey is O.R.T.T.U. And it means Open Road To The Universe. It stands for open-mindedness, adventure, aspiration, going the extra mile, and finding the beauty in life, no matter where we might be.'),
(58, 'Jimdo.jpg', 'Jimdo', 'https://www.jimdo.com/', 'Get inspired by the website and store examples our customers have already built with Jimdo.'),
(59, 'American.jpg', 'americanleatherco', 'https://www.americanleatherco.com/', 'American Leather Co. creates handbags and accessories built to stand the test of time. Using only the highest quality American-sourced leather, each piece is designed with practicality in mind to be casual, comfortable and soft. These lived in leather essentials are hand crafted for wherever you wander.'),
(60, 'mikoh.jpg', 'Mikoh', 'https://shop.mikoh.com/', 'MIKOH WAS BORN FROM THE IDEA THAT THE THE GIRLS AND WOMEN WHO WEAR OUR PIECES WILL GROW AND EVOLVE ALONGSIDE THE BRAND. THROUGH EVERY STAGE OF LIFE, MIKOH HAS A MINDFUL APPROACH OF DESIGNING PIECES FOR ALL AGES.'),
(61, 'myzone.jpg', 'myzone', 'https://www.myzone.org/', 'Abc'),
(62, 'at3tactical.jpg', 'at3tactical', 'https://www.at3tactical.com/', 'Abc'),
(64, 'quietoncom.jpg', 'quietoncom', 'https://quieton.com/', 'Wake up refreshed after a good night’s sleep in silence'),
(65, 'dripworkscom.jpg', 'dripworkscom', 'https://www.dripworks.com/', 'Browse our extensive selection of yard and garden tools, fertilizers and accessories to help your garden grow.'),
(66, 'jostenscom.jpg', 'jostenscom', 'https://jostens.knoji.com/promo-codes/', 'abc'),
(67, 'apple.jpg', 'Apple', 'https://www.apple.com', 'King of Market'),
(68, 'sonycom.jpg', 'Sony', 'https://www.sony.com/en/', 'Type'),
(69, 'simplisafe.jpg', 'Simple Safe', 'https://simplisafe.com', 'Type'),
(70, 'labseriescom.jpg', 'labseries', 'https://www.labseries.com', 'Type');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
