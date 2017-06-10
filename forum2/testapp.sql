

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`email`,`password`) values (1,'dara','dara@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(2,'borey','borey@gmail.com','e10adc3949ba59abbe56e057f20f883e'),(3,'syha','syha@gmail.com','e10adc3949ba59abbe56e057f20f883e');

  CREATE TABLE `quotes` (
    `quote_id` int(3) NOT NULL,
    `quote` varchar(300) NOT NULL,
    `movie` varchar(50) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  --
  -- Vedos taulusta `quotes`
  --

  INSERT INTO `quotes` (`quote_id`, `quote`, `movie`) VALUES
  (1, 'Hasta la Vista', 'Terminator'),
  (6, 'Say hello to my little friend', 'Scarface');

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `quotes`
  --
  ALTER TABLE `quotes`
    ADD PRIMARY KEY (`quote_id`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `quotes`
  --
  ALTER TABLE `quotes`
    MODIFY `quote_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
