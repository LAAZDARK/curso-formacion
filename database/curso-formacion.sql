-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2021 a las 22:43:47
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso-formacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_my_courses` (IN `user_id` INT)  BEGIN
  SELECT
  c.id AS idCourse,
  c.nombre AS nombreCourse,
  c.descripcion AS descripcionCourse,
  c.duracion AS duracionCourse,
  c.costo AS costoCourse,
  e.id AS idEdition,
  e.course_id AS idCourse,
  e.teacher_id AS idTeacher,
  a.id AS idApplication,
  a.user_id AS idUser,
  a.edition_id AS idEdition,
  u.id AS idUser,
  u.name AS nombreUsuario,
  u.email AS correoUsuario,
  u.gender AS generoUsuario
  FROM courses c
  LEFT JOIN editions e
  ON c.id = e.course_id
  LEFT JOIN applications a
  ON a.edition_id = e.id
  LEFT JOIN users u
  ON a.user_id = u.id
  WHERE a.user_id = user_id;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `applications`
--

CREATE TABLE `applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `edition_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `edition_id`, `created_at`, `updated_at`) VALUES
(1, 12, 20, '2021-11-17 08:33:05', '2021-11-17 08:33:05'),
(2, 1, 17, '2021-11-17 11:25:30', '2021-11-17 11:25:30'),
(3, 1, 11, '2021-11-17 11:32:17', '2021-11-17 11:32:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `nombre`, `descripcion`, `duracion`, `costo`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Jamil McLaughlin', 'Reprehenderit dicta quibusdam dolore inventore laudantium repudiandae. Velit quis dolorum modi numquam. Aliquam dicta est reiciendis provident.', 5, 1354, 10, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(2, 'Zack Bernier', 'Quo reiciendis et reiciendis deleniti. Assumenda non soluta voluptatem tempora doloremque rem repellat. Et ullam iste temporibus impedit qui et similique. Consectetur quidem error iusto consequuntur dolore quae. Ea veniam dolore pariatur eos.', 5, 639, 0, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(3, 'Miss Maryjane Murray Sr.', 'Facere provident est aut ea iste molestiae aliquam. Voluptatem dolorem unde iure et dolor sed. Architecto commodi consequatur provident modi non accusamus.', 3, 659, 5, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(4, 'Marty O\'Conner', 'Id aut deleniti omnis asperiores. Aut animi similique iusto voluptatibus ut. Molestias quam enim ut et.', 5, 1420, 2, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(5, 'Ms. Eleanore Kemmer PhD', 'Autem corrupti repellendus quibusdam porro. Dolorem saepe sapiente at sit accusantium rerum qui enim. Ipsam aperiam quia enim omnis eaque qui totam.', 2, 569, 1, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(6, 'Modesta Morar', 'Vitae non mollitia omnis voluptatem sequi dolorum. Dolor velit ab earum sit nihil. Molestiae dignissimos adipisci blanditiis amet porro consectetur. Et tempore magnam consequuntur. Assumenda rem aut repudiandae cumque occaecati ab voluptatem.', 2, 1408, 3, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(7, 'Wilhelm Dach', 'Quis alias ex eaque ad non. Corrupti id ex quaerat qui omnis eos. Voluptatibus amet facilis hic molestiae. Quam fuga ut et blanditiis dolor maxime et.', 10, 1199, 1, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(8, 'Chanelle Lang', 'In inventore fugit totam velit deleniti enim. Dicta temporibus sunt commodi ut aperiam. Adipisci adipisci mollitia eos repellat et. Iusto deserunt sunt aut fugiat aut necessitatibus aut.', 6, 921, 9, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(9, 'Dr. Rudolph Stiedemann', 'Soluta rem ipsum eaque eos harum et. Totam nostrum vel recusandae blanditiis velit delectus.', 10, 1414, 3, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(10, 'Elva Lind', 'Enim nemo autem quia et et. Sit non adipisci autem vel sint incidunt. Sapiente sed deserunt cupiditate esse.', 10, 762, 0, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(11, 'Darrick Vandervort DDS', 'Quidem minima in maiores voluptatum voluptas labore est. Adipisci distinctio id harum reiciendis ut. Praesentium eveniet fuga officiis eum beatae sunt. Non quidem est fugiat iure consequatur. Consequatur alias tempore quia ducimus modi quaerat ut dolorem.', 1, 948, 4, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(12, 'Enid Ratke', 'Sed quia laudantium nostrum exercitationem repudiandae ullam. Ex dolore dolorem aperiam delectus. Impedit et vel sapiente quia nihil ut dignissimos.', 6, 1430, 7, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(13, 'Nolan Lubowitz MD', 'Vel iure eius dolores et. Facilis eveniet iste repellendus consectetur voluptas. Quia asperiores nisi id. Dolor hic laudantium eos corporis cupiditate.', 10, 1246, 2, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(14, 'Kendall Keebler Jr.', 'Et ut aut quibusdam rem. Eos sunt soluta dolor odio quas placeat est. Quasi dolor sit quisquam inventore.', 1, 1314, 7, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(15, 'Ulices Hand', 'Ut exercitationem alias quis laborum doloribus provident enim. Nulla earum sed dolorem numquam. Aliquid quia modi aut libero quibusdam.', 6, 1301, 8, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(16, 'Arthur Buckridge II', 'Dignissimos quo provident id mollitia expedita. Deserunt sed quasi beatae eligendi. Est nostrum eius distinctio quo.', 10, 1443, 6, '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(17, 'Kadin Abbott PhD', 'Cumque possimus dignissimos a excepturi maxime iure. Placeat id repellendus eum quia. Quae voluptates totam itaque voluptatem accusamus dolores. Vel adipisci ut deleniti ratione commodi veniam.', 7, 756, 7, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(18, 'Dejuan Lesch', 'Impedit at facere quia est dolor veritatis. Rem impedit nostrum est nulla cum ab. Suscipit nihil libero earum sunt.', 5, 1431, 9, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(19, 'Rosamond Schulist', 'Sequi dolore suscipit rerum corporis omnis praesentium reprehenderit. Ipsam a et sunt aspernatur. Est numquam nisi expedita eaque. Et omnis aliquam optio quia qui omnis architecto eius.', 5, 922, 0, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(20, 'Kadin Stiedemann Jr.', 'Ex voluptas blanditiis similique qui. Quis omnis beatae ut aut nobis. Laborum non perferendis est eum in. Dicta et nam quo voluptatem cupiditate.', 8, 597, 10, '2021-11-17 08:32:29', '2021-11-17 08:32:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editions`
--

CREATE TABLE `editions` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_fin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `editions`
--

INSERT INTO `editions` (`id`, `fecha_inicio`, `fecha_fin`, `horario`, `direccion`, `course_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '10', '13', 'Tarde', '934 Laney Forge\nNew Ryley, LA 76355', 12, 17, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(2, '10', '11', 'Mañana', '93537 Bella Grove Apt. 637\nNew Wilfredo, IN 56674-5257', 4, 6, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(3, '9', '11', 'Tarde', '94002 Fahey Gateway\nNorth Carmelaburgh, NH 24291', 4, 1, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(4, '9', '12', 'Tarde', '26377 Estella Center Apt. 919\nDustinmouth, NE 87570-1062', 10, 3, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(5, '10', '11', 'Mañana', '19792 Klein Rapids\nViviennechester, VA 93731-2360', 1, 3, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(6, '10', '11', 'Mañana', '3070 Rempel Ville\nNorth Olga, DE 22993-5564', 19, 1, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(7, '10', '11', 'Mañana', '807 Jones Street\nPort Aliya, IN 81862-4586', 12, 4, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(8, '10', '12', 'Mañana', '83814 Susana Port Suite 171\nJuniortown, CO 05554-9885', 18, 12, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(9, '8', '11', 'Mañana', '5323 Schuppe Street\nGutkowskishire, MS 31222', 5, 17, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(10, '10', '11', 'Tarde', '905 Bode Turnpike\nCadeside, WI 48805', 16, 11, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(11, '8', '13', 'Mañana', '775 Brown Ford Suite 959\nReyesfurt, MO 47406-9056', 14, 20, '2021-11-17 08:32:29', '2021-11-17 08:32:29'),
(12, '8', '12', 'Mañana', '9676 Bergnaum Rest Apt. 368\nEast Edgarburgh, CO 28900-8075', 14, 1, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(13, '10', '13', 'Tarde', '33693 Johnston Views\nLake Wilton, FL 33232-7143', 15, 19, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(14, '8', '12', 'Tarde', '744 Huels Stravenue\nEast Robbview, AZ 67811-7429', 16, 14, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(15, '8', '13', 'Tarde', '734 Doyle Ridge Suite 776\nRohantown, NC 23322-5395', 15, 20, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(16, '8', '11', 'Tarde', '582 Prosacco Circle\nPort Elsefurt, IL 62414-4457', 5, 16, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(17, '9', '12', 'Tarde', '8075 Muller Rue Apt. 926\nNorth Cassidyhaven, AK 36481-8376', 11, 14, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(18, '10', '13', 'Tarde', '356 Sean Greens\nAriannaton, MS 95182-4810', 8, 1, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(19, '8', '13', 'Mañana', '946 Zieme Shoals\nEast Cedrick, SD 79443-8287', 5, 4, '2021-11-17 08:32:30', '2021-11-17 08:32:30'),
(20, '2021-11-09', '2021-11-17', 'Tarde', '882 Stiedemann Manor Apt. 431\nClaudberg, LA 90165 99', 20, 12, '2021-11-17 08:32:30', '2021-11-29 01:38:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_14_230229_create_courses_table', 1),
(6, '2021_11_14_230758_create_editions_table', 1),
(7, '2021_11_17_015719_create_applications_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastName`, `email`, `phone`, `password`, `nationality`, `gender`, `birthday`, `address`, `salary`, `nif`, `status`, `signature`, `created_at`, `updated_at`) VALUES
(1, 'Rosario Brown', 'Mr. Cade Prosacco IV', 'doyle.ena@example.net', '+1.941.852.4110', '$2y$10$JqGXHYuYwS8Ly.19KS9Ne.NKOPFOZe4IXRD1zR.iRvP9P2bI1MUpm', 'México', 'Hombre', '05/11/1996', '9080 Jessika Junctions\nPort Samantha, IN 72873', '1319', 'F7Z9h6o2T4', '1', '1', '2021-11-17 08:32:26', '2021-11-18 10:37:13'),
(2, 'Rosemary Spencer', 'Asa Keeling', 'estella.kohler@example.org', '+1 (321) 713-5675', '$2y$10$4RMkKt/uJoS3igsjM/3biOOxmvnzHHhddYy4QbfqS0bh87SvWL1cK', 'México', 'Mujer', '05/11/1996', '746 Turcotte Throughway Apt. 724\nToychester, SD 34387-7856', '731', 'L5dqozCfSh', '0', '0', '2021-11-17 08:32:26', '2021-11-17 08:32:26'),
(3, 'Prince Ankunding', 'Mariano Hirthe', 'stephan.hauck@example.net', '989-686-9914', '$2y$10$gu09KGEMDZb/pUC5QLfjde1wx0lcpM6v95EoU4e71wTFtv5v4Hy3W', 'Guatemala', 'Mujer', '05/11/1996', '90634 Concepcion Road Suite 314\nAmbrosehaven, KS 20541', '1234', 'zlry5unvy4', '1', '1', '2021-11-17 08:32:26', '2021-11-17 08:32:26'),
(4, 'Arnaldo Lang', 'Cameron Marquardt II', 'hulda00@example.com', '+13208421670', '$2y$10$YHVJma2GJDdMVVzDTiht/uoMTnNch1qGTz9YC5o8178VXDU4dEnzC', 'México', 'Mujer', '05/11/1996', '739 Durgan Vista\nSouth Lucasberg, MS 80025', '1457', 'gALHuufdzC', '1', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(5, 'Dr. Olen Crist IV', 'Ms. Laurine Morar', 'natasha.bergstrom@example.net', '830.249.7377', '$2y$10$m08aJ18ITnRQ2XcqZr2yB.TiYMxR6Su.zlrN67uJbVEmCEf5kX6a6', 'México', 'Mujer', '05/11/1996', '270 Reichel Loop Apt. 407\nNorth Jalyn, CA 95974', '1317', '5CQjZsFzWS', '0', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(6, 'Claudia Gibson', 'Ms. Cortney Green IV', 'bergnaum.daphne@example.org', '641.572.4363', '$2y$10$K8OGvAsfatbPgiqPs4JnX..QrnasKSBsjFLPvAeCLDxyY9GtSWFUG', 'México', 'Mujer', '05/11/1996', '657 Miller Street\nSouth Wendellport, VT 94713', '911', '7KEBwomLJf', '1', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(7, 'Dr. Damien Lind I', 'Aileen Koch', 'zoe.rohan@example.net', '+16086720812', '$2y$10$IbHeUNobJIzT.ZOer9/UDexbf0d4Pyi2X3.c0K1nla.H6XP9x9WJG', 'México', 'Hombre', '05/11/1996', '334 Dakota Harbors\nGoyetteburgh, DE 24689-0215', '681', 'O2BvPYTIJN', '0', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(8, 'Russel Greenfelder', 'Prof. Vena Halvorson', 'broderick.marquardt@example.com', '352-614-6530', '$2y$10$Q042WWQE87O1Sz8zo8Z5cu7hcb9SpgIAVmGCSkekdwWJPfJBVLd0a', 'Guatemala', 'Hombre', '05/11/1996', '144 Koss Prairie Suite 477\nNew Kavonhaven, NC 04933', '1199', 'w127mKuxt8', '0', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(9, 'Prof. Antonio Schuppe', 'Freddie Schinner', 'karen.wehner@example.org', '586.596.8105', '$2y$10$dK5FJc0SIo65.kNQ3zftAeyt5l/qq0glyZ97Zh3x5.7LX/BnLqmVm', 'México', 'Otro', '05/11/1996', '116 Oren Flats Apt. 273\nSwiftburgh, WV 67449', '1473', 'uIe8uGjmDW', '0', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(10, 'Anibal Willms', 'Miss Jakayla Bernier IV', 'aschuppe@example.com', '775.600.5026', '$2y$10$jkI1z9.sfEn3bfxHRn0TtO4hV/cGA4r.Grje9xOzQSJ2GUhOFlbN.', 'Guatemala', 'Hombre', '05/11/1996', '49270 Pfannerstill Rue\nNorth Loren, TN 82143', '817', 'KKxNvKo7pk', '0', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(11, 'Ms. Daniella Botsford V', 'Isaac Torphy', 'arno.raynor@example.com', '567.669.5355', '$2y$10$VOhwnY8L28SWxfdW7k9.q.plxZGFEvQ7X3ZC9fvPdTVgLdFfH46.q', 'México', 'Mujer', '05/11/1996', '719 Granville Mission Apt. 595\nSouth Cielo, OK 53773-0249', '1020', 'MwMCoqahwy', '1', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(12, 'Jermaine Hahn', 'Florence Hahn', 'antonia13@example.com', '+1 (361) 318-6618', '$2y$10$hEzsSqgbonCHGtcn0tvfP.GBxFlg1PYkCwbcsdGPoBzVXtZk/Q.bK', 'Guatemala', 'Hombre', '05/11/1996', '93586 Rebekah Extensions Suite 782\nPort Susanburgh, MT 02683-4671', '1593', 'hxAw2MHfes', '1', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(13, 'Prudence Lang', 'Chet Dietrich', 'heather.blanda@example.org', '947.566.2563', '$2y$10$gq.m7j5x94vCWVioioIyG.EPIZJqVMYsV7piErhUV/2SnzeGuF8p.', 'México', 'Otro', '05/11/1996', '7475 Mann Parkway\nVonmouth, OK 43084', '686', 'xgbEDwbDeB', '0', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(14, 'Herbert Kuhlman Sr.', 'Lilliana Douglas', 'coralie.fritsch@example.com', '+1.650.763.8707', '$2y$10$XeDxMVVmcNo0/jdzyzlcnetEc2BIK8nPtjPP2L9isj356JN3QNW3u', 'Estados Unidos', 'Hombre', '05/11/1996', '45248 Rahul Court\nPort Kristinberg, MI 10720-9265', '1337', 'xvTjX4enOU', '1', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(15, 'Prof. Darien Ebert', 'Tressie Daugherty', 'martin81@example.com', '580.757.1555', '$2y$10$l2v1Qr2ZRhWKoH31muRDmudipTrpBnQbqwY7uSifXKu9VX0TVY056', 'Guatemala', 'Otro', '05/11/1996', '9114 Madyson Club\nEffertzberg, MI 42455-3668', '671', 'Bt38TqILbm', '0', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(16, 'Candido Grant', 'Rhianna Spencer', 'jamal57@example.com', '256-242-8279', '$2y$10$8ewvXfOZdSgYFMWxyUPL6.s0LcAzyeJkGiaIhvz8XtfnpS8s7//Gi', 'México', 'Mujer', '05/11/1996', '4808 Gerhold Islands\nBergnaumland, OH 06109-3464', '767', 'DHsRfIxEg7', '1', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(17, 'Prof. Hershel Strosin II', 'Mr. Isaias Oberbrunner', 'alessandra.wisozk@example.com', '386.624.1939', '$2y$10$t3DXBM6FwcYFzum1kX.NH.8elBZbx5ZAbgV0yisFLLCnQ15g7rPWG', 'Estados Unidos', 'Mujer', '05/11/1996', '94522 Prince Spur\nSouth Erwin, WY 31394-1815', '1179', 'TQB2QWTa8v', '1', '0', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(18, 'Daron Bashirian', 'Prof. Libbie Hyatt I', 'dahlia10@example.com', '716.540.3346', '$2y$10$7Mfp03EMHSSiuFa6GVJUb.37bkE1BNsuHb1z.GYg2lptzxV0AMK3C', 'Estados Unidos', 'Mujer', '05/11/1996', '6743 Lela Plaza Apt. 701\nIvyhaven, KY 11897', '857', '9VE6G3v0DL', '0', '1', '2021-11-17 08:32:27', '2021-11-17 08:32:27'),
(19, 'Chelsey Altenwerth', 'Miss Adrianna Oberbrunner I', 'jean.hayes@example.org', '+1 (539) 994-9258', '$2y$10$UvHTZf.EvAxgwT5NunMtu.Kmj6E7UMhX/rV3hMSJqiicgQbNAvG3G', 'México', 'Otro', '05/11/1996', '27542 Viola Cliffs Apt. 470\nRileyberg, NE 29281', '1274', 'ZTz82A8Tj2', '1', '1', '2021-11-17 08:32:28', '2021-11-17 08:32:28'),
(20, 'Dahlia Larson', 'Stevie Skiles', 'tjerde@example.org', '+1.386.932.6571', '$2y$10$nL678BUAXfj/iML2d.ZsSOVN8KOxDUkOaN1/LzC8mkxO8MIJWGwXC', 'Estados Unidos', 'Mujer', '05/11/1996', '6175 Vandervort Coves Suite 129\nEast Brandoburgh, WV 27309', '1504', 'hLVO0SALp8', '1', '1', '2021-11-17 08:32:28', '2021-11-17 08:32:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editions`
--
ALTER TABLE `editions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `editions`
--
ALTER TABLE `editions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
