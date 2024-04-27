-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 07:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanonest`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `answer_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`, `picture`) VALUES
(1, 'Apple', 'Apple Inc. is an American multinational corporation and technology company headquartered in Cupertino, California, in Silicon Valley. It designs, develops, and sells consumer electronics, computer software, and online services.', 'https://pbs.twimg.com/profile_images/1717013664954499072/2dcJ0Unw_400x400.png'),
(2, 'Sony', 'Sony Electronics is a leading provider of audio/video electronics and information technology products for the consumer and professional markets. Operations include research and development, engineering, sales, marketing, distribution, and customer service.\r\n\r\nSony Electronics is a leading provider of audio/video electronics and information technology products for the consumer and professional markets. Operations include research and development, engineering, sales, marketing, distribution, and customer service.', 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Sony_logo.svg'),
(3, 'Samsung', 'Samsung is a global leader in technology, opening new possibilities for people everywhere. Through relentless innovation and discovery, they are transforming the worlds of TVs, smartphones, wearable devices, tablets, digital appliances, network systems, medical devices, semiconductors, and LED solutions.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/2560px-Samsung_Logo.svg.png'),
(4, 'Bose', 'Bose Corporation is an American manufacturing company that predominantly sells audio equipment. The company was established by Amar Bose in 1964 and is based in Framingham, Massachusetts.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Bose_logo.svg/2560px-Bose_logo.svg.png'),
(5, 'Meta', 'Meta Platforms, Inc. operates as a social technology company. The Company builds applications and technologies that help people connect, find communities, and grow businesses. Meta Platform is also involved in advertisements, augmented, and virtual reality.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Meta_Platforms_Inc._logo.svg/1280px-Meta_Platforms_Inc._logo.svg.png'),
(6, 'Xiaomi', 'Xiaomi Corporation, commonly known as Xiaomi and registered as Xiaomi Inc., is a Chinese designer and manufacturer of consumer electronics and related software, home appliances, automobiles and household hardware. It is the second-largest manufacturer of smartphones in the world, behind Samsung, most of which run on the MIUI (now HyperOS) operating system, which is based on the Android operating system. The company is ranked 338th and is the youngest company on the Fortune Global 500.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Xiaomi_logo_%282021-%29.svg/512px-Xiaomi_logo_%282021-%29.svg.png'),
(7, 'Motorola', 'Motorola, Inc. was an American multinational telecommunications company based in Schaumburg, Illinois. It was founded in 1928 as Galvin Manufacturing Corporation by brothers Paul and Joseph Galvin. The company changed its name to Motorola in 1947. After having lost $4.3 billion from 2007 to 2009, Motorola was split into two independent public companies, Motorola Mobility and Motorola Solutions, on January 4, 2011. The reorganization was structured with Motorola Solutions legally succeeding Motorola, Inc., and Motorola Mobility being spun off.', 'https://www.91-cdn.com/hub/wp-content/uploads/2023/05/Motorola-Edge-40-1-1024x576.jpg?tr=q-100'),
(8, 'Realme', 'Realme (stylized in all lowercase or as гealme; Chinese: 真我; pinyin: Zhēn wǒ) is a Chinese consumer electronics manufacturer based in Shenzhen, Guangdong. It was founded by Li Bingzhong (known as Sky Li) on May 4, 2018, who was a former vice president of Oppo. Starting originally as a sub-brand of Oppo, Realme eventually ventured as its own brand. Realme then became the fastest-growing 5G smartphone brand in Q3 2021.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Realme_logo_SVG.svg/220px-Realme_logo_SVG.svg.png'),
(9, 'Oraimo', 'On a normal day of May 2013, we, a group of people who believe in the spirit of exploring, created oraimo. \r\nFrom the very beginning, we wanted to do SOMETHING DIFFERENT, something that can change people\'s life so that they can explore the wonderful world. \r\nTo change the world, we decided to start with SMART accessories, and to KEEP EXPLORING.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIkKlQ8FY2iyhRzGOx9BR13B0hDAY89G6NxDeyqUl9ig&s'),
(10, 'Mibro', 'Mibro, a global smartwatch brand of Zhenshi Information Technology Company, is dedicated to leveraging technology to create a smart sports lifestyle while ...', 'https://d61s2hjse0ytn.cloudfront.net/brands/Mibro.webp');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'phone'),
(2, 'Smart Watches'),
(3, 'Smart Tv'),
(4, 'Headphones'),
(5, 'Wireless Speakers'),
(6, 'Charger & cables'),
(7, 'Network Components'),
(8, 'Powerbanks'),
(9, 'Wireless Earphones & Tws'),
(10, 'Wired earphones');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `que` text DEFAULT NULL,
  `ans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `p_id`, `que`, `ans`) VALUES
(1, 10, 'Q1: How does the range extender amplify the wireless signal?', 'A1: The range extender is a relay between your main router and devices connecting to the extended network. It receives the wireless signal from your router, amplifies it, and rebroadcasts the boosted signal.'),
(2, 7, 'Does Redmi Watch 2 Lite have a full touchscreen display?', 'Answer: Yes, Redmi Watch 2 Lite features a full touch screen 1.55-inch TFT display.');

-- --------------------------------------------------------

--
-- Table structure for table `past_order`
--

CREATE TABLE `past_order` (
  `u_id` int(11) NOT NULL,
  `past_order` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payslip`
--

CREATE TABLE `payslip` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `order_track` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `u_id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`u_id`, `phone`) VALUES
(1, '1111111111'),
(2, '2222222222');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `p_id` int(11) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`p_id`, `picture`) VALUES
(4, 'https://www.mobiledokan.co/wp-content/uploads/2019/02/Apple-iPhone-5.jpg'),
(5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9DIujrFio7TaE_ZQv_1K0eNZN1y0lErozyHrhPrwMEA&s'),
(6, 'https://static2.realme.net/images/realme-note50/specs/blue.jpg'),
(7, 'https://api.motionview.com.bd/storage/images/products/profile/167706677364.Redmi-Watch-2-Lite-Smart-Watch.webp'),
(7, 'https://dvf83rt16ac4w.cloudfront.net/upload/product/20230209_1675919227_799204.jpeg'),
(7, 'https://portal.motionview.com.bd/ck_upload/redmi_watch_2_lite_1672466080.jpg'),
(8, 'https://api.motionview.com.bd/storage/images/products/profile/164629092126.Realme%20Buds%202%20Wired%20%20Earphones%20(RMA155).webp'),
(9, 'https://api.motionview.com.bd/storage/images/products/profile/167004903728.Realme-3-in-1-Charging-Cable.webp'),
(10, 'https://api.motionview.com.bd/storage/images/products/gallery_image/171229178686.Xiaomi%20WiFi%20Range%20Extender%20N300%203.webp'),
(11, 'https://i02.appmifile.com/771_operator_sg/02/01/2024/ee49deace2f9b8f4fc6db8375ea49121.png?f=webp'),
(12, 'https://i02.appmifile.com/750_operator_sg/26/01/2024/e88f843412bdb7d8fa04ab933b259d47.png?f=webp');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `new_price` decimal(10,2) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `warranty` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `added_date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `old_price`, `new_price`, `color`, `warranty`, `description`, `added_date`, `quantity`, `cat_id`, `brand_id`) VALUES
(4, 'iphone 5', 10000.00, 12000.00, 'red', '2 years', '....', '2024-04-10', 1, 1, 1),
(5, 'iphone 12', 80000.00, 120000.00, 'blue', '2 years', '....', '2024-04-11', 1, 1, 1),
(6, 'Realme Note 50', 11999.00, 10999.00, 'Blue', '1 year', 'The Realme Note 50 4/64 is a budget-friendly smartphone that packs quite a punch. This device, launched in early 2024, offers a compelling combination of features. It comes with a 6.74-inch HD+ display with a 90Hz refresh rate, ensuring smooth visuals and vibrant colors. Its slim profile, measuring just 7.99mm, makes it comfortable to hold. The phone’s glittering design, inspired by the hues of the sky, adds a touch of style.\r\n\r\nUnder the hood, the Note 50 houses an octa-core Unisoc Tiger T612 processor, providing decent performance for everyday tasks. It comes with 4 GB of RAM and 64 GB or 128 GB of internal storage, expandable via a dedicated microSD card slot. \r\n\r\nThe 13 MP AI primary camera captures detailed shots, while an additional monochrome lens enhances depth. On the front, a 5 MP selfie camera ensures clear and crisp self-portraits. Powered by a massive 5000 mAh battery, the Note 50 keeps you connected all day long. With 10W fast charging, you’ll be back up and running swiftly.', '2024-04-26', 20, 1, 8),
(7, 'Redmi Watch 2 Lite Smart Watch', 6299.00, 5999.00, 'Black', '1 Year', 'Technical Specification of Redmi Watch 2 Lite Smart Watch\r\n \r\nDisplay: 1.55 inches\r\nResolution: 320*360\r\nScreen Type: TFT\r\nColor: Black\r\nMaterial: TPU\r\nStrap Material: Silicone\r\nWaterproof rating: 5 ATM\r\nBluetooth connection:  BT5.0\r\nSystem support: Android 6.0 or above and iOS 10.0 or above\r\nSensors: Optical heart rate sensor, accelerometer, gyroscope, electronic compass\r\nGPS/GLONASS/Galileo/BeiDou\r\nCharging Port: Magnetic charging\r\nBattery: 262mAh', '2024-04-26', 20, 2, 6),
(8, 'Realme Buds 2 Wired Earphones ', 800.00, 750.00, 'Black & Yellow', '6 Months', 'Type Of Headphone : Wired\r\nRemote Buttons : 3 Button Remote (Answer/Hang Up/Play/Pause/Next Vol +-)\r\nJack Type : 3.5mm\r\nDriver : 11.2mm bass boost driver\r\nFrequency Response Range : 20Hz-20000Hz\r\nMicrophone : Yes', '2024-04-26', 10, 10, 8),
(9, 'Realme 3 in 1 Charging Cable', 590.00, 490.00, 'Black & Yellow', '3 Months Brand Warranty', 'The Realme 3-in-1 charging cable is now available at Motion View. It supports Dart, Vooc, and Warp charging. The lightning, micro USB & type-C cable interface is compatible with charging and data sync for almost all tabs and smartphones. It also supports fast charging. Realme 3 in 1 cable can charge up to 3 devices at the same time. An intelligent management chip can adjust the optimal current to specific devices.', '2024-04-26', 35, 6, 8),
(10, 'Xiaomi WiFi Range Extender N300 with 300Mbps', 1599.00, 1350.00, 'White', '6 Months Brand Warranty', 'Technical Specification for the Xiaomi WiFi Range Extender N300 \r\nTechnical Specifications\r\n\r\nProduct Model: RD10/RD10M\r\nDimensions: 80x54x70mm\r\nAntenna Type: 2 external antennas\r\nWireless Standards: IEEE 802.11b/g/n\r\nSignal Rate: 2.4GHz, up to 300Mbps\r\nWireless Security: WPA-PSK/WPA2-PSK encryption\r\nPower Supply: 100-240V/0.35A', '2024-04-26', 10, 7, 6),
(11, 'Redmi Note 13 Pro', 37999.00, 35999.00, 'Black', '1 year', 'Xiaomi is one of the leading smartphone brands in the world, offering high-quality devices at competitive prices. It is the latest addition to its popular Redmi series, which aims to deliver flagship-level performance and features at a mid-range budget. The Redmi 13 Pro is a successor to the Redmi Note 13 Pro, which was launched in 2023 and received positive reviews from users and critics alike. So, keep reading this article to know more details on Xiaomi Redmi 13 Pro.', '2024-04-26', 20, 1, 6),
(12, 'Redmi A3\r\n', 12499.00, 11499.00, 'Black ', '2 years', 'The Xiaomi Redmi A3 Variant: 4GB+64GB is a smartphone that packs a punch with its impressive features. The display is a generous 6.71 inches with an IPS LCD panel that boasts a 90Hz refresh rate. This ensures smooth scrolling and vibrant visuals, making it ideal for multimedia consumption and gaming. The resolution of 720 x 1650 pixels provides decent clarity, although it’s not the highest in its class.\r\n\r\nUnder the hood, the Mediatek Helio G36 chipset powers the Redmi A3. This octa-core processor combines four Cortex-A53 cores clocked at 2.2 GHz and four Cortex-A53 cores running at 1.6 GHz. While it’s not the most high-end processor, it delivers reliable performance for everyday tasks and moderate gaming.\r\n\r\nThe camera setup includes an 8 MP wide-angle lens along with an auxiliary 0.08 MP lens. While it may not compete with flagship devices in terms of photography prowess, it still captures decent shots. The 1080p video recording capability ensures you can preserve your memories in good quality.\r\n\r\nOne of the most impressive features is its massive 5000 mAh battery. This non-removable powerhouse keeps the phone running throughout the day, even with heavy usage. The 10W wired charging ensures you can quickly top up the battery when needed.\r\n\r\nIn terms of design, the Redmi A3 offers a glass front protected by Corning Gorilla Glass 3, while the back comes in either glass or eco leather (silicone polymer). The side-mounted fingerprint sensor adds convenience for unlocking the device.\r\n\r\nThe Xiaomi Redmi A3 Variant: 4GB+64GB strikes a balance between affordability and functionality. If you’re looking for a reliable smartphone with decent performance, a large battery, and a reasonable price tag, the Redmi A3 is worth considering.', '2024-04-26', 20, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `p_into_cart`
--

CREATE TABLE `p_into_cart` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `question_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`p_id`, `u_id`, `date`, `question_text`) VALUES
(9, 2, '2024-04-26', 'Does it support fast charging ?');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `rating_txt` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `u_id`, `star`, `rating_txt`, `date`) VALUES
(1, 1, 4, 'Good quality', '2024-04-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `house` varchar(100) DEFAULT NULL,
  `road` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `house`, `road`, `area`, `district`, `user_type`, `p_id`) VALUES
(1, 'random', 'random23@gmail.com', '23456', '23/81', '2', 'uttara', 'Dhaka', 'general', 4),
(2, 'randomab', 'randomab@gmail.com', 'random123', '12', '2', 'Mirpur', 'Dhaka', 'general', 9),
(3, 'random', 'randombc@gmail.com', '123456', '3', '4', 'Mirpur', 'Dhaka', 'general', 10),
(4, 'random', 'randomde@gmail.com', '123456', '6', '9', 'Mirpur', 'Dhaka', 'general', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`p_id`,`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `past_order`
--
ALTER TABLE `past_order`
  ADD PRIMARY KEY (`u_id`,`past_order`);

--
-- Indexes for table `payslip`
--
ALTER TABLE `payslip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`u_id`,`phone`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`p_id`,`picture`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `p_into_cart`
--
ALTER TABLE `p_into_cart`
  ADD PRIMARY KEY (`p_id`,`c_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`p_id`,`u_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payslip`
--
ALTER TABLE `payslip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `past_order`
--
ALTER TABLE `past_order`
  ADD CONSTRAINT `past_order_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `payslip`
--
ALTER TABLE `payslip`
  ADD CONSTRAINT `payslip_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `payslip_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `cart` (`id`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`);

--
-- Constraints for table `p_into_cart`
--
ALTER TABLE `p_into_cart`
  ADD CONSTRAINT `p_into_cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `p_into_cart_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `cart` (`id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
