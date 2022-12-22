-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 02:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email_id`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob_number` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `name`, `email`, `mob_number`, `date`, `time`, `message`, `status`) VALUES
(1, 'chetan', '', '', '0000-00-00', '2022-04-20 05:43:32', '', 'approve'),
(2, 'hemangi', '', '', '0000-00-00', '2022-04-28 05:26:36', '', 'approve'),
(3, 'aaa', 'kunjalrav@gmail.com', '7574909927', '0000-00-00', '0000-00-00 00:00:00', 'ssss', '0'),
(4, 'hemangi', '', '', '0000-00-00', '0000-00-00 00:00:00', '', ''),
(5, 'hemangi', '', '', '0000-00-00', '2022-04-20 05:28:35', '', 'approve'),
(6, 'kunjal', 'kk@gmail.com', '6325987410', '2022-04-15', '2022-04-20 05:29:06', 'hii', 'approve'),
(7, 'kunjal', 'kunjalrav@gmail.com', '8200608347', '2022-04-28', '2022-05-02 05:30:00', 'Hair cutting\r\n', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `beauty_category`
--

CREATE TABLE `beauty_category` (
  `category_id` int(3) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beauty_category`
--

INSERT INTO `beauty_category` (`category_id`, `category_name`, `image`, `status`) VALUES
(1, 'Makeup', 'bridal-makeup.jpg', b'0'),
(2, 'Skin', 'skin.jpg', b'0'),
(3, 'Hair', 'hair.jpg', b'0'),
(4, ' Mehndi', 'mehndi.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `beauty_product`
--

CREATE TABLE `beauty_product` (
  `product_id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `discount` int(2) NOT NULL,
  `total_price` int(5) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beauty_product`
--

INSERT INTO `beauty_product` (`product_id`, `category_id`, `product_name`, `image1`, `image2`, `price`, `discount`, `total_price`, `description`, `ingredients`, `status`) VALUES
(1, 1, '           Makeup Set     ', 'makeupbox.jpg', 'makeupkit2.jpg', 7000, 10, 6300, '           Package Include:\r\n48 Color Eyeshadow Palette\r\n5 x Blusher\r\n6 Color Compact Powder\r\n3 Color Contour Cream\r\n6 Color Cream Lip Gloss\r\n1 x Glitter\r\n4 x Lipstick\r\n4 Color Brow Powder\r\n4 Color Lip Gloss\r\n2 x Eyeshadow Cream\r\n2 x Lip Pencil\r\n2 x Eye Pencil\r\n4 x Applicator\r\n1 x Eyebrow Brush\r\n2 x Lip Brush\r\n2 x Blush Brush\r\n1 x Portable Case\r\n1 x Mirror\r\n2 x Toe Separator\r\n1 x Storage Case           ', '           Our cosmetics lasting color effect can be used for a long time. Provides seamless, flawless camouflage in ultra-smooth finish. With high-quality ingredients and silky luster, they can last all day. And the effect is waterproof and sweatproof.           ', b'0'),
(2, 2, 'Face Serum', 'skin1.jpg', 'serum.jpg', 1000, 5, 980, 'This luxurious, lightweight face serum helps transform the look of aging skin by working both on skins surface and penetrating skins surface by combining Hyaluronic Acid, a proven wrinkle-fighter, with our highest concentration of Pro-Xylane, an exclusive anti-aging super ingredient developed by Loreal Paris Laboratories.', 'AQUA / WATER, DIPROPYLENE GLYCOL, DIMETHICONE, GLYCERIN, HYDROXYPROPYL TETRAHYDROPYRANTRIOL, PROPYLENE GLYCOL, C12-15 ALKYL BENZOATE, ALCOHOL DENAT, DIMETHICONE/VINYL DIMETHICONE CROSSPOLYMER, PEG-100 STEARATE, STEARIC ACID, POTASSIUM CETYL PHOSPHATE, POTASSIUM HYDROXIDE, CARBOMER, GLYCERYL STEARATE, SILICA 2-OLEAMIDO-1,3-OCTADECANEDIOL PALMITIC ACID DISODIUM EDTA, HYDROLYZED HYALURONIC ACID, HYDROXYETHYLCELLULOSE, CAPRYLOYL SALICYLIC ACID, XANTHAN GUM, CETYL ALCOHOL, OCTYLDODECANOL, TOCOPHERYL ACETATE, PHENOXYETHANOL, CI 15985 / YELLOW 6, CI 19140 / YELLOW 5, CI 77891 / TITANIUM DIOXIDE, MICA, LINALOOL, LIMONENE, CITRONELLOL, BENZYL ALCOHOL, PARFUM / FRAGRANCE.', b'0'),
(3, 3, 'Hair Straightener', 'stratner1.jpg', 'statrner2.jpg', 1845, 24, 1402, 'Straighten it. Style it. Make it smooth Straighten and style your hair with ease. This straightener with SilkProtect technology and ceramic plates glides gently through your hair, while optimizing temperature for less heat exposure. Look your best for all those selfie moments.', 'Country of Origin â€ : â€Ž India\r\nManufacturer â€ : â€Ž Philips, Philips India Limited\r\nPacker â€ : â€Ž Philips India Limited, Contact details - 1800 102 2929\r\nImporter â€ : â€Ž Philips India Limited, 3rd Floor, Tower A, DLF IT Park, 8 Block AF, Major Arterial road, Kolkata - 700156\r\nItem Weight â€ : â€Ž 330 g\r\nNet Quantity â€ : â€Ž 330.0 gram\r\nIncluded Components â€ : â€Ž Hair Straightener, product manual, warranty card\r\nGeneric Name â€ : â€Ž Philips BHS393/40 Straightener with SilkProtect Technology. Straighten, curl, suitable for all hair types.', b'0'),
(4, 4, 'Mehndi Cone', 'mehndi1.jpg', 'mehndi2.jpg', 120, 21, 95, 'Quality: 100% Natural Henna paste\r\nSimply clean skin surface before applying, open cap and press some diluted paste out.\r\nLeave it to dry for 60-90 minutes and scrap of dried paste.\r\nLong lasting dark maroon color on your palm & feet.\r\nTemporary Body Art.\r\npkg.  Date : 24-March-2022\r\nExp. Date : before 6 month', 'Country of Origin â€ : â€Ž India\r\nManufacturer â€ : â€Ž Neha Herbal\r\nItem Weight â€ : â€Ž 30 g\r\nNet Quantity â€ : â€Ž 1.0 gram\r\nGeneric Name â€ : â€Ž Mehndi Henna\r\nIngredients : Made with organic natural extracts and ingredients like Amla, Neem, Green Tea, Shikakai and Hibiscus flower. Neha Herbal Mehandi gives your hair a natural tone and fortifies it. \r\n', b'0'),
(27, 3, '   Makeup Box   ', 'SSC.jpg', 'SSC.jpg', 0, 0, 0, '   .,,,;lll   ', '   vgggg   ', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(3) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `total_price` int(5) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email_id`, `total_price`, `created`, `modified`, `status`) VALUES
(1, 'riya@gmail.com', 44100, '2022-05-02 13:44:35', '2022-05-02 13:44:35', ''),
(2, '', 44100, '2022-05-02 13:45:31', '2022-05-02 13:45:31', ''),
(3, '', 44100, '2022-05-02 13:45:50', '2022-05-02 13:45:50', ''),
(4, '', 44100, '2022-05-02 13:45:57', '2022-05-02 13:45:57', ''),
(5, 'riya@gmail.com', 44100, '2022-05-02 13:47:00', '2022-05-02 13:47:00', ''),
(6, 'riya@gmail.com', 44100, '2022-05-02 13:51:43', '2022-05-02 13:51:43', ''),
(7, 'riya@gmail.com', 12600, '2022-05-02 13:55:46', '2022-05-02 13:55:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(3) NOT NULL,
  `order_id` int(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `product_id` int(5) NOT NULL,
  `total_price` int(5) NOT NULL,
  `quantity` int(2) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `order_id`, `email_id`, `product_id`, `total_price`, `quantity`, `date`, `status`) VALUES
(1, 6, 'riya@gmail.com', 1, 44100, 7, '2022-05-02', 'pending'),
(2, 7, 'riya@gmail.com', 1, 12600, 2, '2022-05-02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `catalogue_id` int(3) NOT NULL,
  `catalogue_name` varchar(50) NOT NULL,
  `catalogue_price` int(5) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`catalogue_id`, `catalogue_name`, `catalogue_price`, `status`) VALUES
(1, '    Eyebrow ', 40, b'0'),
(2, 'Full Hand Wax', 150, b'0'),
(3, 'Full Leg Wax', 150, b'0'),
(4, 'Cleanup', 200, b'0'),
(5, ' Gold Facial ', 350, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(3) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(3) NOT NULL,
  `description` text NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `image`, `price`, `description`, `status`) VALUES
(1, ' Short Term Course ', 'course3.jpg', 1000, ' -> Hair Stylling includes Hair Cut and Hair Style\r\n-> Hair Treatment Course : Hair Falling, Dandruff, Rebonding, Straightening, Perming, Smoothing, Hair Spa\r\n-> Hair Colour Course\r\n-> Advance Skin Treatment\r\n\r\nCourse Duration : 1.5 Month ', b'0'),
(2, '  Self Advance Course  ', 'course1.jpg', 3000, '  -> Threading\r\n-> Bleaching\r\n-> Dye\r\n-> Advance Manicure & Pedicure\r\n-> Head Massage\r\n-> Personal Care of Skin and Hairs\r\n-> Advance Make up : Water Proof, Non Water Proof\r\n-> Waxing\r\n-> Mehndi\r\n-> Beauty Tips\r\n-> Advance Facials\r\n-> Saree Drapping\r\n-> Crimping & Ironing or Hair Pressing\r\n\r\nCourse Duration : 3 Months  ', b'0'),
(3, ' Professional Course ', 'course2.jpg', 5000, ' -> Threading \r\n-> Bleaching \r\n-> Dye \r\n-> Advance Manicure & Pedicure\r\n-> All types of Advance Cutting\r\n- >Head Massage \r\n-> Basic of cutting & hair Setting \r\n-> Hair Colouring  (Loreal & Matrix) \r\n-> Advance Facials \r\n-> Skin & Hair Care \r\n-> Personal Care Tips \r\n-> Beauty Tips \r\n-> Saree Drapping \r\n-> Hair Spa and Deep Conditioning \r\n-> Detail Knowledge of Machine:- Steaming, Galvanic High Fredgiency or Ozone Vibrator, Suction Hot & Cold Steam, Micro Derma Brasion, Bleackheads, Remover Diamond Derma Brasion, Ultrasonic, Skin tes tor Magnifying Glass. \r\n-> Ozone Treatment for Skin and Hair \r\n-> Rebonding & Hair Straightening \r\n-> Advance Make up:- Water Proof â€¢ Non Water Proof \r\n-Simple Makeup, Party Makeup, Glossy Makeup Concealor Makeup, Ivory Makeup, Model Makeup. Bridal Makeup, Corrective Makeup, 40+ Makeup. \r\n-> Spa Facials \r\n-> Spa Treatment\r\n \r\nCourse Duration : 6 Months ', b'0'),
(16, '', '', 0, '', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `cust_fullname` varchar(50) NOT NULL,
  `mob_number` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin_code` int(6) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(6) NOT NULL,
  `otp` int(4) NOT NULL,
  `create_date` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `cust_fullname`, `mob_number`, `email_id`, `gender`, `address`, `city`, `pin_code`, `dob`, `password`, `otp`, `create_date`, `type`, `status`) VALUES
(62, '  aakash', '7574909927', '  k@gmail.com  ', '    ', '    ', '    ', 0, '0000-00-00', '    ', 6584, '2022-04-11', '', b'1'),
(63, ' kunjal 11', ' 798454470', 'kunjalrav@gmail.com ', ' female ', ' kada ', '  VIsnagar  ', 384315, '2022-04-01', '987', 4055, '2022-04-11', '', b'0'),
(66, '', '75', '', '', '', '', 0, '0000-00-00', '', 1134, '2022-04-15', '', b'1'),
(67, '', '', '', '', '', '', 0, '0000-00-00', '', 5351, '2022-04-18', '', b'1'),
(68, 'hemangi', '7984544707', 'hemangi@gmail.com', 'female', ' 6/Vasantnagar ', ' VIsnagar ', 384315, '2022-05-07', '456', 3831, '2022-04-25', '', b'0'),
(70, 'aakash', ' 820060834', 'k@gmail.com', 'male', 'visnagar', ' visnagar ', 384315, '2022-04-07', '789', 8315, '2022-04-25', '', b'1'),
(73, 'kunjal', '8200608347', 'k@gmail.com', 'female', ' kada ', 'kada', 325369, '2022-04-07', '789', 9283, '2022-04-25', 'customer', b'0'),
(74, 'Hemangi', '8160227320', 'hemangi@gmail.com', 'female', ' 6/Vasantnagar ', ' Visnagar ', 384315, '2022-04-07', '123', 9367, '2022-04-26', 'customer', b'0'),
(75, 'vivek', '8160227323', 'vivekpanchal25327@gmail.com', 'male', '6/Vasantnagar ', 'Visnagar', 384315, '2001-11-30', 'vivek3', 5045, '2022-04-27', 'customer', b'0'),
(76, 'rutvi', '6354972106', 'riya@gmail.com', 'female', 'Vadanagar', 'Vadanagar', 384312, '1999-09-07', '123', 7019, '2022-04-28', 'customer', b'0'),
(77, 'aakash', '9106502123', '', 'male', '', '', 0, '0000-00-00', '', 6783, '2022-04-28', 'customer', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `password`, `type`, `status`) VALUES
(1, 'kunjalrav@gmail.com', '987', 'customer', b'0'),
(3, 'hemangi@gmail.com', '963', 'admin', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(5) NOT NULL,
  `total_price` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `package_price` int(5) NOT NULL,
  `package_description` text NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `image`, `package_price`, `package_description`, `package_title`, `duration`, `status`) VALUES
(1, 'regular_pk.jpg', 7000, '-> Threading\r\n-> Bleaching\r\n-> Facial (1 time)\r\n-> Waxing (Hands ,Legs ,Under Arms)\r\n->  Simple Mehndi\r\n-> Regular Makeup\r\n', 'Regular Bridal', '15 Days', b'0'),
(2, 'simple_pk.jpg', 5000, '-> Threading  \r\n-> Facial (1 time) \r\n-> Waxing (Hands, Under Arms) \r\n-> Simple Mehndi \r\n-> Simple Makeup', 'Simple Package', '10 Days', b'0'),
(3, 'hd_pk.jpg', 10000, '-> Threading\r\n-> Bleaching  \r\n-> Facial (2 time) \r\n-> Waxing (Hands,Legs,Under Arms)\r\n-> Manicure\r\n-> Bridal Mehndi \r\n-> HD Makeup\r\n-> Hair Style \r\n-> Jewellery', 'HD (High Definition)', '1 Month', b'0'),
(4, 'matt_pk.jpg', 15000, '-> Threading\r\n-> Bleaching  \r\n-> Facial (3 time) \r\n-> Waxing (Hands,Legs,Under Arms)\r\n-> Manicure & Padicure\r\n-> Body Polishing\r\n-> Body Massage\r\n-> Bridal Mehndi \r\n-> matte Makeup\r\n-> Hair Spa\r\n-> Heavy Hair Style \r\n-> Jewellery', 'Matte Bridal ', '1.5 Month', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking`
--

CREATE TABLE `package_booking` (
  `booking_id` int(3) NOT NULL,
  `package_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `payment_status` bit(1) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_payment`
--

CREATE TABLE `package_payment` (
  `payment_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `package_id` int(3) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `expire_date` date NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `rating_score` int(1) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `customer_id`, `product_id`, `rating_score`, `message`, `date`, `status`) VALUES
(7, 74, 1, 3, 'hrello', '2022-04-27', 0),
(8, 76, 1, 5, 'very good site', '2022-04-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `email_id`, `product_id`, `quantity`, `status`) VALUES
(18, 'k@gmail.com', 2, 1, 0),
(19, 'riya@gmail.com', 2, 1, 0),
(20, 'riya@gmail.com', 3, 1, 0),
(21, 'riya@gmail.com', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `beauty_category`
--
ALTER TABLE `beauty_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `beauty_product`
--
ALTER TABLE `beauty_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`catalogue_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`email_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_booking`
--
ALTER TABLE `package_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `package_payment`
--
ALTER TABLE `package_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `beauty_category`
--
ALTER TABLE `beauty_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `beauty_product`
--
ALTER TABLE `beauty_product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `catalogue_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_booking`
--
ALTER TABLE `package_booking`
  MODIFY `booking_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_payment`
--
ALTER TABLE `package_payment`
  MODIFY `payment_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
