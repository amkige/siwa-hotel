-- Table structure for table `bookings`

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT 'Primary Key',
  `customer_name` varchar(255) NOT NULL,
  `number_of_people` int(11) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `conctact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `messages`

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT 'Primary Key',
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
);