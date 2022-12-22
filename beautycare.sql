-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 11:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `time` time NOT NULL DEFAULT current_timestamp(),
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `name`, `email`, `mob_number`, `date`, `time`, `message`, `status`) VALUES
(1, 'chetan', '', '', '0000-00-00', '11:13:32', '', 'approve'),
(2, 'hemangi', '', '', '0000-00-00', '10:56:36', '', 'approve'),
(3, 'aaa', 'kunjalrav@gmail.com', '7574909927', '0000-00-00', '00:00:00', 'ssss', 'cancelled'),
(4, 'hemangi', '', '', '0000-00-00', '00:00:00', '', 'cancelled'),
(5, 'hemangi', '', '', '0000-00-00', '10:58:35', '', 'approve'),
(6, 'kunjal', 'kk@gmail.com', '6325987410', '2022-04-15', '10:59:06', 'hii', 'approve'),
(7, 'kunjal', 'kunjalrav@gmail.com', '8200608347', '2022-04-28', '11:00:00', 'Hair cutting\r\n', 'pendding'),
(8, 'panchal hemangi', 'hemangi@gmail.com', '8200608347', '2022-05-03', '15:16:01', 'facial', 'approve'),
(9, 'Gopi', 'g@gmail.com', '7574909927', '2022-05-02', '15:16:27', 'eyesbrow', 'pendding'),
(10, 'shivani', 's@gmail.com', '7984544707', '2022-05-27', '15:16:37', 'hand vex', 'pendding'),
(22, 'kunjal', 'k@gmail.com', '8230963256', '2022-05-11', '12:00:00', 'facial', 'cancelled'),
(23, 'Hemangi', 'hemangi@gmail.com', '8200608347', '2022-05-17', '18:00:00', 'Facial', 'pendding');

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
(2, 2, '   Face Serum   ', 'skin1.jpg', 'serum.jpg', 1000, 5, 980, '   This luxurious, lightweight face serum helps transform the look of aging skin by working both on skins surface and penetrating skins surface by combining Hyaluronic Acid, a proven wrinkle-fighter, with our highest concentration of Pro-Xylane, an exclusive anti-aging super ingredient developed by Loreal Paris Laboratories.Batch No. CGB0151. Mfd:01/2022. Use before 36 months from date of manufacturing. Net Qty:250 ml. ', '   AQUA / WATER, DIPROPYLENE GLYCOL, DIMETHICONE, GLYCERIN, HYDROXYPROPYL TETRAHYDROPYRANTRIOL, PROPYLENE GLYCOL, C12-15 ALKYL BENZOATE, ALCOHOL DENAT, DIMETHICONE/VINYL DIMETHICONE CROSSPOLYMER, PEG-100 STEARATE, STEARIC ACID, POTASSIUM CETYL PHOSPHATE, POTASSIUM HYDROXIDE, CARBOMER, GLYCERYL STEARATE, SILICA 2-OLEAMIDO-1,3-OCTADECANEDIOL PALMITIC ACID DISODIUM EDTA, HYDROLYZED HYALURONIC ACID, HYDROXYETHYLCELLULOSE, CAPRYLOYL SALICYLIC ACID, XANTHAN GUM, CETYL ALCOHOL, OCTYLDODECANOL, TOCOPHERYL ACETATE, PHENOXYETHANOL, CI 15985 / YELLOW 6, CI 19140 / YELLOW 5, CI 77891 / TITANIUM DIOXIDE, MICA, LINALOOL, LIMONENE, CITRONELLOL, BENZYL ALCOHOL, PARFUM / FRAGRANCE.   ', b'0'),
(3, 3, '  Hair Straightener  ', 'stratner1.jpg', 'statrner2.jpg', 1845, 10, 1402, '  Straighten it. Style it. Make it smooth Straighten and style your hair with ease. This straightener with SilkProtect technology and ceramic plates glides gently through your hair, while optimizing temperature for less heat exposure. Look your best for all those selfie moments. 2 years warranty ', '  Country of Origin â€ : â€Ž India\r\nManufacturer â€ : â€Ž Philips, Philips India Limited\r\nPacker â€ : â€Ž Philips India Limited, Contact details - 1800 102 2929\r\nImporter â€ : â€Ž Philips India Limited, 3rd Floor, Tower A, DLF IT Park, 8 Block AF, Major Arterial road, Kolkata - 700156\r\nItem Weight â€ : â€Ž 330 g\r\nNet Quantity â€ : â€Ž 330.0 gram\r\nIncluded Components â€ : â€Ž Hair Straightener, product manual, warranty card\r\nGeneric Name â€ : â€Ž Philips BHS393/40 Straightener with SilkProtect Technology. Straighten, curl, suitable for all hair types.  ', b'0'),
(4, 4, 'Mehndi Cone', 'mehndi1.jpg', 'mehndi2.jpg', 120, 21, 95, 'Quality: 100% Natural Henna paste\r\nSimply clean skin surface before applying, open cap and press some diluted paste out.\r\nLeave it to dry for 60-90 minutes and scrap of dried paste.\r\nLong lasting dark maroon color on your palm & feet.\r\nTemporary Body Art.\r\npkg.  Date : 24-March-2022\r\nExp. Date : before 6 month', 'Country of Origin â€ : â€Ž India\r\nManufacturer â€ : â€Ž Neha Herbal\r\nItem Weight â€ : â€Ž 30 g\r\nNet Quantity â€ : â€Ž 1.0 gram\r\nGeneric Name â€ : â€Ž Mehndi Henna\r\nIngredients : Made with organic natural extracts and ingredients like Amla, Neem, Green Tea, Shikakai and Hibiscus flower. Neha Herbal Mehandi gives your hair a natural tone and fortifies it. \r\n', b'0'),
(28, 1, 'Lakme Eyeconic Kajal', 'leakme1.jpg', 'leakme2.jpg', 150, 7, 143, 'jhhh', 'jjjjjj', b'1'),
(29, 1, 'Lakme Eyeconic Kajal', 'leakme1.jpg', 'leakme2.jpg', 180, 12, 168, 'Manufacturer â€ : â€Ž Hindustan Unilever - haridwar Factory\r\nASIN â€ : â€Ž B0798KV8S6\r\nItem model number â€ : â€Ž 22810\r\nCountry of Origin â€ : â€Ž India\r\nManufacturer â€ : â€Ž Hindustan Unilever - haridwar Factory, Hindustan Unilever - haridwar Factory Plot number 1, Sector 1A , IIE, BHEL,Sidcul, Ranipur, Haridwar, Uttarakhand 249403 Toll Free no: 18001022221\r\nPacker â€ : â€Ž Hindustan Unilever - haridwar Factory Plot number 1, Sector 1A , IIE, BHEL,Sidcul, Ranipur, Haridwar, Uttarakhand 249403 Toll Free no: 18001022221', 'Smudge proof and convenient twist- up format for deep stroke\r\nWater proof, lasts up to 22 hrs\r\nIt is dermatologically tested & is safe for the eyes\r\nEasy Twist up format\r\nCan be used water line and eye lids\r\nDeep black finish', b'0'),
(30, 2, 'Maybelline  Liquid Lipcolor', 'lipstic1.jpg', 'lipstic2.jpg', 714, 5, 709, 'Shake up your longwear with Super Stay Vinyl Ink. This Liquid Lipcolor delivers no-budge saturated vinyl color and up to 16HR wear. Its color lock formula defies smudging and transfer. Swipe the formula across your lips and enjoy an instant shine and all day color. Available in 10 high-impact vinyl shades for your every lip look. From poppy brights to saturated red tones and even the perfect everyday neutrals, express yourself with Maybelline longwear lipcolor', 'G890207 - Ingredients: Isododecane, Dimethicone, Trimethylsiloxysilicate, Polymethylsilsesquioxane/Trimethylsiloxysilicate, Polypropylsilsesquioxane, C30-45 Alkyldimethylsilyl Polypropylsilsesquioxane, Trimethylsiloxyphenyl Dimethicone, Trimethyl Pentaphenyl Trisiloxane, Bis-Stearyl Dimethicone, Dimethiconol, Trihydroxystearin, Phenoxyethanol, Alumina, Ethylhexylglycerin, Tocopheryl Acetate, Triethoxycaprylylsilane, Limonene, Isopropyl Palmitate, Isopropyl Myristate, Silica, Benzyl Benzoate, Benzyl Alcohol, Citronellol, Linalool, Aloe Barbadensis Leaf Extract, Tocopherol, Parfum / Fragrance [+/- May Contain: Ci 77891 / Titanium Dioxide, Ci 15850 / Red 7, Ci 77491, Ci 77492, Ci 77499 / Iron Oxides, Ci 45410 / Red 28 Lake, Ci 45380 / Red 22 Lake, Ci 15985 / Yellow 6 Lake, Ci 19140 / Yellow 5 Lake, Ci 17200 / Red 33 Lake, Ci 15850 / Red 6, Ci 77742 / Manganese Violet, Ci 42090 / Blue 1 Lake]. Fil T286301/1', b'0'),
(31, 2, '   Cc Face Cream   ', 'cc1.jpg', 'cc2.jpg', 99, 1, 98, '   Everyday make-up can take a lot of time and sometimes can even look made-up. If you are looking for a cream that can take care of your delicate skin and give you that glow seamlessly, LakmÃ© 9to5 CC Cream is the perfect choice. This cream acts as your invisible skin stylist and lets you get that perfect look of makeup + skincare for any occasion. It may be work, party or simply an evening with friends, your personal stylist will help you get the right look for it all. Itâ€™s time to move on to a simpler regime without compromising on skincare. The new LakmÃ© 9to5 CC Cream moisturises your skin to give you a nourished and refreshing glow with the benefits of make-up. With 4 shades â€“ Beige, Honey, Bronze and Almond this CC cream blends into your skin completely to give you that invisible make-up finish. It conceals dark spots and blemishes to give you and even skin tone. With sun protection of SPF 30 PA++ and makeup benefits skin coverage, this cream takes complete care of your complexion. This cream can also be used along with other products or on its own if you prefer just the light touch of make-up. Furthermore, the LakmÃ© 9to5 CC cream comes in a chic sturdy packaging with a well fitted rose gold cap. LakmÃ© 9 to 5 CC Cream brings you the best of both worlds: Itâ€™s skincare with a touch of makeup to give you the perfect look, for any occasion, in an instant. \r\nItem Form:Cream\r\nBrand:	LAKMÃ‰\r\nProduct Benefits:	Brightening\r\nRecommended Uses For Product:	Sun Protection,Blemishes,Evens Skin Tone\r\nSkin Type:	All  ', '   Take a pea sized amount and dot across face. Dap the cream gently with finger-tips till it completely blends into the skin   ', b'0'),
(32, 1, 'Makeup Brush Set', 'brush1.jpg', 'brush3.jpg', 999, 70, 700, '\r\nBrand:	HUDA GIRL\r\nColour:	Black\r\nMaterial:	Wood\r\nItem Form:	Wand\r\nRecommended Uses For Product:	Face Makeup,Smoothening,Professional\r\nHUDA GIRL Makeup Brushes 24pcs Makeup Brush Set Includes:\r\n1. Foundation Brush ; 2. Powder Brush ; 3. Angled Powder Brush\r\n\r\n4. Contouring Brush ; 5. Blending Brush ; 6. Fan Brush\r\n\r\n7. Large Fan Brush ; 8. Eyelash Brush ; 9. Eyebrow Brush\r\n\r\n10. Eyeshadow Brush ; 11. Big Eyebrow Brush ; 12. Small Eyeshadow Brush\r\n\r\n13. Small Eyebrow Brush ; 14. Concealer Brush; 15. Angled Eyebrow Brush\r\n\r\n16. Lip Brush ; 17. Eyeliner Brush ; 18. Sponge Eye shadow Brush\r\n\r\n19. Cream Shadow Brush ; 20. Eye Definer Brush ; 21. Wedge Brush\r\n\r\n22. Coverage Face Brush ; 23. Small Plane Brush ; 24. Big Plane Brush', '1. Wet the brush with warm water, being careful not to fully immerse the base of the bristles.\r\n\r\n2. Place a pea-sized drop of brush cleanser (or any mild cleanser like baby shampoo) in the palm of your hand.\r\n\r\n3. Swirl the bristles in the cleanser in a circular motion until the brush is fully lathered.\r\n\r\n4. Rinse the bristles, squeezing from the base to the tips to remove excess water.\r\n\r\n5. Repeat until the water runs clear and all makeup is removed from the brush.\r\n\r\n6. Reshape the bristles to their original form and lay the brush down on a flat surface to dry. You can also gently brush bristles on a paper towel to remove buildup. (Tip: Wash brushes at night so they are dry and ready for use in the morning.)', b'0'),
(33, 3, 'Nova NHP 8215 1800 Watts Proffesional Hair Dryer', 'dryer1.jpg', 'dryer2.jpg', 1699, 50, 854, 'Hair Type:	All\r\nModel Name:	PRO SERIES\r\nColour:	Black\r\nBrand:	Nova\r\nMaterial:	Plastic\r\nIntroducing Nova Professional Dryer with 1800 watts of powerful drying , so that you can get salon-like hair styling even at your home . This hair dryer features Advanced Ehd + Technology which ensures that only the right amount of heat is distributed on your hair and preventing any damage to your hair. The Shine and condition Techonlogy ensures that you hair is always silky and smooth. The Thermo protect temperature setting in this dryer also provides shine and conditions your hair, so that you have a Gorgeous looking hair style.', 'Professional AC motor: 5x longer life cycle vs conventional dryer\r\nRemovable filter for easy cleaning . Length Of Chord - 1.6 Metres\r\n1 year Brand Warranty\r\nIncludes various attachements , for controlled airflow over wider scalp area, esp. for curly hair\r\nIncludes Cool Shot Button, that provides a burst of cold air to help set the desired hairstyle\r\nControls consistent optimal temperature for healthy drying and professional styling', b'0'),
(34, 3, 'Livon Hair Serum for Women & Men for Dry and Rough', 'hair_serum1.jpg', 'hair_serum2.jpg', 300, 25, 225, 'Product Benefits:	Hydrating\r\nHair Type:	Dry and rough\r\nScent	:Unscented\r\nLiquid Volume:	100 Millilitres\r\nItem Form:	Serum\r\nBrand:	Livon\r\nHate how your hair refuses to be under your control? Tame those tresses with Livon Serum for Rough and Dry Hair! Livon Serum for Rough and Dry Hair has been specially crafted for dry, rough & excessively frizzy hair which is unmanageable & so hard to control! Enriched with rich Moroccan Argan Oil extracts, Livon Serum for Rough and Dry Hair moisturizes hair intensely but without any limpness, cutting away all the frizz, bringing back volume control and giving intense smoothness that lasts for 24 hours! Just apply a few drops on towel dried hair and feel your  hair smoothen even as it dries. It forms a lubricious layer on the hair to make dry and rough hair smooth and silky.  It breathes life into dry hair, giving it intense smoothness that lasts for an entire day. Now let those locks loose and flaunt that salon finish! Dull? Dry? Rough? You are going to be waving good bye to all of these along with all your worries, because Livon Serum for Rough and Dry Hair is  going to pour life into those locks instantly.', 'Specially Crafted for Dry & Rough Hair: If you have dry, rough, rebellious or excessively frizzy hair, Livon Serum for Dry & Rough Hair is made for you\r\nIntense Hydration: Enriched with moroccan argan oil extracts, Livon Serum for Dry & Rough hydrates your hair without giving it any limpness\r\nIntense Smoothness for 24 Hours: Now, get intense smoothness for 24 hours with just a few drops of this hair serum\r\nEliminates Frizz: This serum for dry hair instantly eliminates frizz and tames flyaways giving your hair the much needed smoothness it deserves\r\nRebellious to Tamed Hair: This hair serum for women brings back much needed volume control over rebellious hair\r\nSmooth, Salon Finish Hair: Apply to your hair before making a hairstyle to boost moisture and add smoothness to give you smooth and glossy, salon finish hair.', b'0');

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
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `cod_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cod`
--

INSERT INTO `cod` (`cod_id`, `product_id`, `email_id`, `total_price`, `type`) VALUES
(2, 30, 'hemangi@gmail.com', 709.00, 'cod'),
(8, 30, 'hemangi@gmail.com', 709.00, 'cod'),
(15, 30, 'hemangi@gmail.com', 709.00, 'cod'),
(19, 34, 'k@gmail.com', 393.00, 'cod'),
(20, 29, 'hemangi@gmail.com', 168.00, 'cod');

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
(73, 'kunjal', '8200608347', 'k@gmail.com', 'female', ' kada ', 'kada', 325369, '2022-04-07', '963', 9283, '2022-04-25', 'customer', b'0'),
(74, 'kunjal', '8160227320', 'hemangi@gmail.com', 'female', ' 6/Vasantnagar ', ' Visnagar ', 384315, '2022-04-07', '799', 9367, '2022-04-26', 'customer', b'0'),
(75, 'vivek', '8160227323', 'vivekpanchal25327@gmail.com', 'male', '6/Vasantnagar ', 'Visnagar', 384315, '2001-11-30', 'vivek3', 5045, '2022-04-27', 'customer', b'0'),
(76, 'rutvi', '6354972106', 'riya@gmail.com', 'female', 'Vadanagar', 'Vadanagar', 384312, '1999-09-07', '123', 7019, '2022-04-28', 'customer', b'0'),
(78, '', '9595950000', '', '', '', '', 0, '0000-00-00', '', 9923, '2022-05-07', 'customer', b'1'),
(79, '', '', '', '', '', '', 0, '0000-00-00', '', 5474, '2022-05-07', 'customer', b'1'),
(80, 'Mahima', '7383417452', 'mahimapanchal18@gmail.com', 'female', 'Visnagar', 'Visnagar', 384315, '1998-12-09', 'mahima', 8167, '2022-11-06', 'customer', b'1'),
(81, 'Shivangi Panchal', '9173734557', 'shivangi@gmail.com', 'female', '34, vrundavan society', 'Mahesana', 384315, '2022-11-01', '123456', 9517, '2022-11-06', 'customer', b'0');

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `email_id`, `total_price`, `created`, `modified`, `status`) VALUES
(51, 'k@gmail.com', 6300.00, '2022-05-06 08:10:38', '2022-05-06 08:10:38', '1'),
(52, 'hemangi@gmail.com', 1960.00, '2022-05-06 08:13:05', '2022-05-06 08:13:05', '1'),
(53, 'vivekpanchal25327@gmail.com', 1402.00, '2022-05-06 08:16:03', '2022-05-06 08:16:03', '1'),
(54, 'riya@gmail.com', 1075.00, '2022-05-06 08:18:18', '2022-05-06 08:18:18', '1'),
(55, 'hemangi@gmail.com', 6300.00, '2022-05-07 06:17:11', '2022-05-07 06:17:11', '1'),
(56, 'hemangi@gmail.com', 980.00, '2022-05-07 13:49:42', '2022-05-07 13:49:42', '1'),
(57, 'hemangi@gmail.com', 1402.00, '2022-05-07 18:35:00', '2022-05-07 18:35:00', '1'),
(58, 'hemangi@gmail.com', 980.00, '2022-05-09 07:23:55', '2022-05-09 07:23:55', '1'),
(59, 'hemangi@gmail.com', 709.00, '2022-05-10 06:18:18', '2022-05-10 06:18:18', '1'),
(60, 'k@gmail.com', 393.00, '2022-05-10 11:51:20', '2022-05-10 11:51:20', '1'),
(61, 'k@gmail.com', 6468.00, '2022-05-10 12:23:07', '2022-05-10 12:23:07', '1'),
(62, 'hemangi@gmail.com', 168.00, '2022-05-10 19:00:42', '2022-05-10 19:00:42', '1'),
(63, 'hemangi@gmail.com', 25200.00, '2022-05-14 09:17:12', '2022-05-14 09:17:12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(5) NOT NULL,
  `total_price` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `email_id`, `product_id`, `total_price`, `quantity`, `date`, `status`) VALUES
(47, 51, 'k@gmail.com', 1, 6300, 1, '2022-05-06', 'approve'),
(48, 52, 'hemangi@gmail.com', 2, 1960, 2, '2022-05-06', 'pending'),
(49, 53, 'vivekpanchal25327@gmail.com', 3, 1402, 1, '2022-05-06', 'pending'),
(50, 54, 'riya@gmail.com', 2, 1075, 1, '2022-05-06', 'pending'),
(51, 54, 'riya@gmail.com', 4, 1075, 1, '2022-05-06', 'pending'),
(52, 55, 'hemangi@gmail.com', 1, 6300, 1, '2022-05-07', 'pending'),
(53, 56, 'hemangi@gmail.com', 2, 980, 1, '2022-05-07', 'pending'),
(54, 57, 'hemangi@gmail.com', 3, 1402, 1, '2022-05-07', 'pending'),
(55, 58, 'hemangi@gmail.com', 2, 980, 1, '2022-05-09', 'pending'),
(56, 59, 'hemangi@gmail.com', 30, 709, 1, '2022-05-10', 'pending'),
(57, 60, 'k@gmail.com', 34, 393, 1, '2022-05-10', 'pending'),
(58, 60, 'k@gmail.com', 29, 393, 1, '2022-05-10', 'pending'),
(59, 61, 'k@gmail.com', 1, 6468, 1, '2022-05-10', 'pending'),
(60, 61, 'k@gmail.com', 29, 6468, 1, '2022-05-10', 'pending'),
(61, 62, 'hemangi@gmail.com', 29, 168, 1, '2022-05-10', 'pending'),
(62, 63, 'hemangi@gmail.com', 1, 25200, 4, '2022-05-14', 'pending');

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
(8, 76, 1, 5, 'very good site', '2022-04-28', 0),
(9, 74, 3, 5, 'very good product', '2022-05-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `razorpay`
--

CREATE TABLE `razorpay` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `pay_status` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razorpay`
--

INSERT INTO `razorpay` (`id`, `email`, `amount`, `pay_id`, `pay_status`, `date_added`, `product_id`) VALUES
(9, 'k@gmail.com', 6300, 'pay_JRq2HdWUzDHGw1', 'Success', '2022-05-06 06:11:25', 1),
(10, 'hemangi@gmail.com', 1960, 'pay_JRq5dsjaTgrGBD', 'Success', '2022-05-06 06:14:35', 2),
(11, 'vivekpanchal25327@gmail.com', 1402, 'pay_JRq8CT9TTiXWjU', 'Success', '2022-05-06 06:17:01', 3),
(12, 'riya@gmail.com', 1075, 'pay_JRqALvkGpySxdK', 'Success', '2022-05-06 06:19:03', 4),
(13, 'hemangi@gmail.com', 1402, 'pay_JSPG0hIIDEvZfK', 'Success', '2022-05-07 16:38:43', 3),
(14, 'hemangi@gmail.com', 980, 'pay_JT12Pv8WziOCq6', 'Success', '2022-05-09 05:37:19', 2);

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
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`catalogue_id`);

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`cod_id`);

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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `razorpay`
--
ALTER TABLE `razorpay`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `app_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `beauty_category`
--
ALTER TABLE `beauty_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `beauty_product`
--
ALTER TABLE `beauty_product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `catalogue_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cod`
--
ALTER TABLE `cod`
  MODIFY `cod_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `razorpay`
--
ALTER TABLE `razorpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
