-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 02:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artisthub`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add log entry', 1, 'add_logentry'),
(2, 'Can change log entry', 1, 'change_logentry'),
(3, 'Can delete log entry', 1, 'delete_logentry'),
(4, 'Can view log entry', 1, 'view_logentry'),
(5, 'Can add permission', 2, 'add_permission'),
(6, 'Can change permission', 2, 'change_permission'),
(7, 'Can delete permission', 2, 'delete_permission'),
(8, 'Can view permission', 2, 'view_permission'),
(9, 'Can add group', 3, 'add_group'),
(10, 'Can change group', 3, 'change_group'),
(11, 'Can delete group', 3, 'delete_group'),
(12, 'Can view group', 3, 'view_group'),
(13, 'Can add user', 4, 'add_user'),
(14, 'Can change user', 4, 'change_user'),
(15, 'Can delete user', 4, 'delete_user'),
(16, 'Can view user', 4, 'view_user'),
(17, 'Can add content type', 5, 'add_contenttype'),
(18, 'Can change content type', 5, 'change_contenttype'),
(19, 'Can delete content type', 5, 'delete_contenttype'),
(20, 'Can view content type', 5, 'view_contenttype'),
(21, 'Can add session', 6, 'add_session'),
(22, 'Can change session', 6, 'change_session'),
(23, 'Can delete session', 6, 'delete_session'),
(24, 'Can view session', 6, 'view_session'),
(25, 'Can add user', 7, 'add_user'),
(26, 'Can change user', 7, 'change_user'),
(27, 'Can delete user', 7, 'delete_user'),
(28, 'Can view user', 7, 'view_user'),
(29, 'Can add artist', 8, 'add_artist'),
(30, 'Can change artist', 8, 'change_artist'),
(31, 'Can delete artist', 8, 'delete_artist'),
(32, 'Can view artist', 8, 'view_artist'),
(33, 'Can add events', 9, 'add_events'),
(34, 'Can change events', 9, 'change_events'),
(35, 'Can delete events', 9, 'delete_events'),
(36, 'Can view events', 9, 'view_events'),
(37, 'Can add contact', 10, 'add_contact'),
(38, 'Can change contact', 10, 'change_contact'),
(39, 'Can delete contact', 10, 'delete_contact'),
(40, 'Can view contact', 10, 'view_contact'),
(41, 'Can add team', 11, 'add_team'),
(42, 'Can change team', 11, 'change_team'),
(43, 'Can delete team', 11, 'delete_team'),
(44, 'Can view team', 11, 'view_team'),
(45, 'Can add book artist', 12, 'add_bookartist'),
(46, 'Can change book artist', 12, 'change_bookartist'),
(47, 'Can delete book artist', 12, 'delete_bookartist'),
(48, 'Can view book artist', 12, 'view_bookartist'),
(49, 'Can add newsletter', 13, 'add_newsletter'),
(50, 'Can change newsletter', 13, 'change_newsletter'),
(51, 'Can delete newsletter', 13, 'delete_newsletter'),
(52, 'Can view newsletter', 13, 'view_newsletter');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Venues'),
(2, 'Photographer'),
(3, 'Makeup'),
(4, 'Bride Wear'),
(5, 'Groom'),
(6, 'Mehndi'),
(7, 'Vendors');

-- --------------------------------------------------------

--
-- Table structure for table `django_admin_log`
--

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext DEFAULT NULL,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) UNSIGNED NOT NULL,
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'admin', 'logentry'),
(3, 'auth', 'group'),
(2, 'auth', 'permission'),
(4, 'auth', 'user'),
(5, 'contenttypes', 'contenttype'),
(8, 'myapp', 'artist'),
(12, 'myapp', 'bookartist'),
(10, 'myapp', 'contact'),
(9, 'myapp', 'events'),
(13, 'myapp', 'newsletter'),
(11, 'myapp', 'team'),
(7, 'myapp', 'user'),
(6, 'sessions', 'session');

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` int(11) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2022-08-09 11:38:32.845931'),
(2, 'auth', '0001_initial', '2022-08-09 11:38:35.490471'),
(3, 'admin', '0001_initial', '2022-08-09 11:38:36.124347'),
(4, 'admin', '0002_logentry_remove_auto_add', '2022-08-09 11:38:36.150361'),
(5, 'admin', '0003_logentry_add_action_flag_choices', '2022-08-09 11:38:36.173167'),
(6, 'contenttypes', '0002_remove_content_type_name', '2022-08-09 11:38:36.497912'),
(7, 'auth', '0002_alter_permission_name_max_length', '2022-08-09 11:38:36.775027'),
(8, 'auth', '0003_alter_user_email_max_length', '2022-08-09 11:38:36.831045'),
(9, 'auth', '0004_alter_user_username_opts', '2022-08-09 11:38:36.857746'),
(10, 'auth', '0005_alter_user_last_login_null', '2022-08-09 11:38:37.074166'),
(11, 'auth', '0006_require_contenttypes_0002', '2022-08-09 11:38:37.090889'),
(12, 'auth', '0007_alter_validators_add_error_messages', '2022-08-09 11:38:37.119548'),
(13, 'auth', '0008_alter_user_username_max_length', '2022-08-09 11:38:37.379830'),
(14, 'auth', '0009_alter_user_last_name_max_length', '2022-08-09 11:38:37.652637'),
(15, 'auth', '0010_alter_group_name_max_length', '2022-08-09 11:38:37.716365'),
(16, 'auth', '0011_update_proxy_permissions', '2022-08-09 11:38:37.738708'),
(17, 'auth', '0012_alter_user_first_name_max_length', '2022-08-09 11:38:37.992005'),
(18, 'myapp', '0001_initial', '2022-08-09 11:38:38.137337'),
(19, 'myapp', '0002_artist', '2022-08-09 11:38:38.508257'),
(20, 'myapp', '0003_artist_profile_pic', '2022-08-09 11:38:38.630199'),
(21, 'myapp', '0004_artist_description', '2022-08-09 11:38:38.748258'),
(22, 'myapp', '0005_artist_country', '2022-08-09 11:38:38.894426'),
(23, 'myapp', '0006_auto_20210414_1537', '2022-08-09 11:38:39.344426'),
(24, 'myapp', '0007_contact', '2022-08-09 11:38:39.488178'),
(25, 'myapp', '0008_team', '2022-08-09 11:38:39.608062'),
(26, 'myapp', '0009_auto_20210418_2006', '2022-08-09 11:38:40.098936'),
(27, 'myapp', '0010_bookartist', '2022-08-09 11:38:40.438664'),
(28, 'myapp', '0011_bookartist_artist_id', '2022-08-09 11:38:40.740951'),
(29, 'myapp', '0012_bookartist_is_verified', '2022-08-09 11:38:40.874084'),
(30, 'myapp', '0013_newsletter', '2022-08-09 11:38:41.015988'),
(31, 'sessions', '0001_initial', '2022-08-09 11:38:41.215516');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `django_session`
--

INSERT INTO `django_session` (`session_key`, `session_data`, `expire_date`) VALUES
('mrum3kgy6hhz2mqrvzegak78pfrcwvsw', 'eyJzX2VtYWlsIjoiYmh1dHByaW5jZTVAZ21haWwuY29tIn0:1oLNhm:eoqFfLf3uvSNolqHtyp6j2MzFANap7kQ0A3HB6QIRuA', '2022-08-23 11:47:26.197873');

-- --------------------------------------------------------

--
-- Table structure for table `myapp_artist`
--

CREATE TABLE `myapp_artist` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postcode` int(11) NOT NULL,
  `State` varchar(20) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `user_id_id` int(11) NOT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `description` longtext NOT NULL,
  `country` varchar(20) NOT NULL,
  `category` varchar(25) NOT NULL,
  `subcategory` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myapp_artist`
--

INSERT INTO `myapp_artist` (`id`, `address`, `city`, `postcode`, `State`, `fax`, `user_id_id`, `profile_pic`, `description`, `country`, `category`, `subcategory`) VALUES
(1, 'bapunagar', 'ahmedabad', 382350, 'gujarat', '38249864', 25, 'usericon2.png', 'testing', 'India', '6', '13');

-- --------------------------------------------------------

--
-- Table structure for table `myapp_bookartist`
--

CREATE TABLE `myapp_bookartist` (
  `id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `budget` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `event_date` datetime(6) NOT NULL,
  `description` longtext NOT NULL,
  `user_id_id` int(11) NOT NULL,
  `artist_id_id` int(11) DEFAULT NULL,
  `is_verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myapp_bookartist`
--

INSERT INTO `myapp_bookartist` (`id`, `event_name`, `budget`, `address`, `city`, `event_date`, `description`, `user_id_id`, `artist_id_id`, `is_verified`) VALUES
(1, 'merrige functions', 5000, 'Ahmedabad', 'Ahmedabad', '2022-08-10 18:30:00.000000', 'my sister marriage', 1, 1, 1),
(2, 'merrige functions', 5000, 'Ahmedabad', 'Ahmedabad', '2022-08-10 18:30:00.000000', 'my sister marriage', 1, 1, 1),
(3, 'merrige functions', 5000, 'Ahmedabad', 'Ahmedabad', '2022-08-10 18:30:00.000000', 'hi  my marrige functions', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `myapp_contact`
--

CREATE TABLE `myapp_contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `email` varchar(254) NOT NULL,
  `message` longtext NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myapp_contact`
--

INSERT INTO `myapp_contact` (`id`, `fullname`, `contactno`, `email`, `message`, `subject`) VALUES
(1, 'developer9', '9090301842', 'developer9.jstechno@gmail.com', 'error', 'problem');

-- --------------------------------------------------------

--
-- Table structure for table `myapp_events`
--

CREATE TABLE `myapp_events` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `event_pic` varchar(100) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `myapp_newsletter`
--

CREATE TABLE `myapp_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `myapp_team`
--

CREATE TABLE `myapp_team` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` longtext NOT NULL,
  `photos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myapp_team`
--

INSERT INTO `myapp_team` (`id`, `name`, `category`, `description`, `photos`) VALUES
(1, 'prince', 'python developer', 'i am artist hub llc.  CEO', 'https://avatars.githubusercontent.com/u/84903751?v=4');

-- --------------------------------------------------------

--
-- Table structure for table `myapp_user`
--

CREATE TABLE `myapp_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myapp_user`
--

INSERT INTO `myapp_user` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `status`, `role`) VALUES
(1, 'nilesh', 'patil', 'developer3.jstechno@gmail.com', '100', '9834218699', 'active', 'User'),
(2, 'prince', 'bhut', 'bhutprince5@gmail.com', '100', '9664969551', 'active', 'Artist'),
(25, 'urvisha', 'pansuriya', 'urvishapansuriya19@gmail.com', '1234', '9012345679', 'active', 'Artist');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `cid`, `name`) VALUES
(1, 1, 'Small Function Hall'),
(2, 1, 'Banquet'),
(3, 1, 'Resort'),
(4, 1, 'Mandap'),
(5, 1, 'Hotel'),
(6, 2, 'Pre-Wedding Shoot'),
(7, 3, 'Bridal Makeup'),
(8, 4, 'Lehngha'),
(9, 4, 'Sarees'),
(10, 4, 'Gowns'),
(11, 5, 'Shervani'),
(12, 5, 'Wedding Suits'),
(13, 6, 'Mehndi Artist'),
(14, 7, 'Honeymoon'),
(15, 7, 'Pandit'),
(16, 7, 'Decorators'),
(17, 7, 'Catering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  ADD KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  ADD KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`);

--
-- Indexes for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  ADD KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  ADD KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_session`
--
ALTER TABLE `django_session`
  ADD PRIMARY KEY (`session_key`),
  ADD KEY `django_session_expire_date_a5c62663` (`expire_date`);

--
-- Indexes for table `myapp_artist`
--
ALTER TABLE `myapp_artist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myapp_artist_user_id_id_76ba9870_fk_myapp_user_id` (`user_id_id`);

--
-- Indexes for table `myapp_bookartist`
--
ALTER TABLE `myapp_bookartist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myapp_bookartist_user_id_id_99b90bb9_fk_myapp_user_id` (`user_id_id`),
  ADD KEY `myapp_bookartist_artist_id_id_39b03d02_fk_myapp_artist_id` (`artist_id_id`);

--
-- Indexes for table `myapp_contact`
--
ALTER TABLE `myapp_contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `myapp_events`
--
ALTER TABLE `myapp_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myapp_newsletter`
--
ALTER TABLE `myapp_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `myapp_team`
--
ALTER TABLE `myapp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myapp_user`
--
ALTER TABLE `myapp_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `myapp_artist`
--
ALTER TABLE `myapp_artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myapp_bookartist`
--
ALTER TABLE `myapp_bookartist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myapp_contact`
--
ALTER TABLE `myapp_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myapp_events`
--
ALTER TABLE `myapp_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myapp_newsletter`
--
ALTER TABLE `myapp_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myapp_team`
--
ALTER TABLE `myapp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myapp_user`
--
ALTER TABLE `myapp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`);

--
-- Constraints for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`);

--
-- Constraints for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  ADD CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `myapp_artist`
--
ALTER TABLE `myapp_artist`
  ADD CONSTRAINT `myapp_artist_user_id_id_76ba9870_fk_myapp_user_id` FOREIGN KEY (`user_id_id`) REFERENCES `myapp_user` (`id`);

--
-- Constraints for table `myapp_bookartist`
--
ALTER TABLE `myapp_bookartist`
  ADD CONSTRAINT `myapp_bookartist_artist_id_id_39b03d02_fk_myapp_artist_id` FOREIGN KEY (`artist_id_id`) REFERENCES `myapp_artist` (`id`),
  ADD CONSTRAINT `myapp_bookartist_user_id_id_99b90bb9_fk_myapp_user_id` FOREIGN KEY (`user_id_id`) REFERENCES `myapp_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
