DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(20) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `payment` int(1) NOT NULL,
  `fulfillment` int(1) NOT NULL,
  `total` varchar(25) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_number`, `customer`, `payment`, `fulfillment`, `total`, `create_date`) VALUES
(1, '1wimo1n51gn14', 'wimo@irawan.com', 1, 1, '200000', '2021-04-12 06:18:21'),
(2, '2WIMO1N51GN14', 'irawan@wimo.com', 1, 1, '300000', '2021-04-12 06:19:09'),
(3, '3WIMO1N51GN14', 'irawanwimo@email.com', 0, 0, '250000', '2021-04-12 06:19:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;