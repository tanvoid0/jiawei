
INSERT INTO `users` (`id`, `image`, `cv`, `name`, `designation`, `email`, `email_verified_at`, `password`, `about`, `address`, `phone`, `facebook`, `twitter`, `linkedin`, `tumblr`, `dribble`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'profile.jpg', 'resume.pdf', '\'Amelie Ebert', 'Marketing Consultant', 'dev@mail.com', NULL, '$2y$10$kDhqETSY7jF5sjVnuBaW6OWUrnR2uicridGLX1EQSMJ/2PB7PXVuy', 'Credibly embrace visionary internal or organic sources and business benefits. Collaboratively integrate efficient portals rather than customized customer service. Assertively deliver friction less services via leveraged interfaces. Conveniently eviscerate accurate sources and process-centric expertise. Energetically fabricate customized imperatives through cooperative catalysts for change.\r\n\r\nDramatically predominate mission-critical materials and cooperative systems. Holistically synergize optimal results through team building \"outside the box\" thinking. Seamlessly facilitate friction less relationships via robust imperatives. Monotonically brand wireless products and excellent action items. Monotonically dis-intermediate granular alignments via sustainable infomediaries.', '1355 Market Street, Suite 900 San Francisco, CA 94103', '+61 3 8376 6284', 'tomodatchisakura', 'tanveer_haque', 'thaque20', 'thaque20', 'thaque20', NULL, NULL, '2019-03-04 13:10:33');


INSERT INTO `vlogs` (`id`, `title`, `link`, `description`, `views`, `likes`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PLrc99hFIZhJpb1Hhl-Nif6LtnHSNlk1p2', NULL, NULL, NULL, '2019-03-03 15:37:26', '2019-03-03 16:01:57'),
(2, NULL, 'PLrc99hFIZhJoggkMxGoN9lrR5hg95B4sn', NULL, NULL, NULL, '2019-03-03 16:03:36', '2019-03-03 16:03:36');


INSERT INTO `works` (`id`, `title`, `company`, `address`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Head of market research', 'Computer & Motor Ltd.', 'United Kingdom, London', 2015, 0, '2019-03-01 11:29:01', '2019-03-01 11:29:01'),
(2, 'Media Analyst', 'BizzNiss', 'United Kingdom, London', 2012, 2015, '2019-03-01 11:29:19', '2019-03-01 11:29:19'),
(3, 'Budget Administrator', 'Somsom LLC', 'United Kingdom, London', 2010, 2012, '2019-03-01 11:29:50', '2019-03-01 11:29:50');


INSERT INTO `skills` (`id`, `title`, `proficiency`, `created_at`, `updated_at`) VALUES
(1, 'Marketing', 62, '2019-03-01 11:27:54', '2019-03-01 11:27:54'),
(2, 'Market Research', 90, '2019-03-01 11:28:04', '2019-03-01 11:28:04'),
(3, 'Organisational Skills', 75, '2019-03-01 11:28:15', '2019-03-01 11:28:15'),
(4, 'Communtcation Skills', 55, '2019-03-01 11:28:25', '2019-03-01 11:28:25'),
(5, 'Project Management', 80, '2019-03-01 11:28:35', '2019-03-01 11:28:35');

INSERT INTO `interests` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Books', 'Proactively extend market-driven e-tailers rather than enterprise-wide supply chains. Collaboratively embrace 24/7 processes rather than adaptive users. Seamlessly monetize alternative e-business.', '2019-03-01 11:31:53', '2019-03-01 11:31:53'),
(2, 'Sports', 'Assertively grow optimal methodologies after viral technologies. Appropriately develop frictionless technology for adaptive functionalities. Competently iterate functionalized networks for best-of-breed services.', '2019-03-01 11:32:00', '2019-03-01 11:32:00'),
(3, 'Art', 'Dramatically utilize superior infomediaries whereas functional core competencies. Enthusiastically repurpose synergistic vortals for customer directed portals. Interactively pursue sustainable leadership via.', '2019-03-01 11:32:06', '2019-03-01 11:32:06');



INSERT INTO `expertises` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Professionally drive', 'Synergistically strategize customer directed resources rather than principle.', '2019-03-01 11:25:15', '2019-03-01 11:25:15'),
(2, 'Seamlessly leverage', 'Quickly repurpose reliable customer service with orthogonal ideas. Competently.', '2019-03-01 11:25:27', '2019-03-01 11:25:27'),
(3, 'Interactively incubate', 'Interactively myocardinate high standards in initiatives rather than next-generation.', '2019-03-01 11:25:36', '2019-03-01 11:25:36'),
(4, 'Globally streamline', 'Dynamically initiate client-based convergence vis-a-vis performance based.', '2019-03-01 11:25:45', '2019-03-01 11:25:45');

INSERT INTO `education` (`id`, `degree`, `institution`, `address`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'MA Product Design', 'University of California', 'United Kingdom, London', 2010, 2012, '2019-03-01 11:30:27', '2019-03-01 11:30:27'),
(2, 'Business marketing course', 'Royal Academy of Business', 'United Kingdom, London', 2007, 2010, '2019-03-01 11:30:48', '2019-03-01 11:30:48'),
(3, 'BA (Hons) Design', 'University of Michigan', 'United Kingdom, London', 2002, 2006, '2019-03-01 11:31:12', '2019-03-01 11:31:12');


CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `proficiency` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tumblr` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dribble` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `views` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `vlogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `views` int(11) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vlogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--
