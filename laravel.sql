-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 11 2024 г., 19:28
-- Версия сервера: 5.7.39
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adminpanels`
--

CREATE TABLE `adminpanels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `authmezs`
--

CREATE TABLE `authmezs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authmezs`
--

INSERT INTO `authmezs` (`id`, `email`, `username`, `password`, `group`, `created_at`, `updated_at`) VALUES
(1, 'baburinma@suek.ru', 'baburinma', '$2y$10$gvh.zv0fNziYy.6aEpj/rutPltsDmtZ3o.WOTIne7gfhQ9KTl7tj2', 'reklamodatel', '2024-08-11 03:07:20', '2024-08-11 03:07:20'),
(2, 'test@mail.ru', 'test', '$2y$10$QuIe7rIHgG4qToAchal4eOrDAdYJDEahAVMAGB1u9fAHb0R/2F3u6', 'promouter', '2024-08-11 03:16:38', '2024-08-11 03:16:38'),
(4, 'test3@mail.ru', 'test3', '$2y$10$pOWmMCOreENz7Uwsd1KKWOdo6i1Wj5YW50u5X/zoNOAwX/IXbqrNi', 'promouter', '2024-08-11 07:34:10', '2024-08-11 07:34:10'),
(5, 'test2@mail.ru', 'test2', '$2y$10$CN5ZP5Oa/kiggibt5zDmq.6sLiiTdvNJ3//g7GkTTcCaEmzK7o2GW', 'reklamodatel', '2024-08-11 08:18:12', '2024-08-11 08:18:12'),
(7, 'baburinmihail223@gmail.com', 'baburinmihail223', '$2y$10$k7Y5mZCFOsJR4GnttMFtZutzMyZL9gC2l2A6BZieDnO3ktHub9/1u', 'admin', '2024-08-11 12:14:34', '2024-08-11 12:14:34');

-- --------------------------------------------------------

--
-- Структура таблицы `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `zakaz_id` int(11) NOT NULL,
  `promouter_id` int(11) NOT NULL,
  `reklamodatel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `counters`
--

INSERT INTO `counters` (`id`, `zakaz_id`, `promouter_id`, `reklamodatel_id`, `created_at`, `updated_at`) VALUES
(2, 3, 2, 1, '2024-08-11 07:23:05', '2024-08-11 07:23:05'),
(3, 2, 2, 1, '2024-08-11 07:33:21', '2024-08-11 07:33:21'),
(5, 4, 4, 1, '2024-08-11 08:18:41', '2024-08-11 08:18:41'),
(6, 3, 4, 1, '2024-08-11 08:20:10', '2024-08-11 08:20:10');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_03_133502_create_zakazs_table', 1),
(6, '2024_08_03_154828_create_authmezs_table', 1),
(7, '2024_08_06_152113_create_counters_table', 1),
(8, '2024_08_07_134935_create_adminpanels_table', 1),
(9, '2024_08_08_050738_create_statisticks_table', 1),
(10, '2024_08_10_130647_create_prices_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id_price_in` int(11) NOT NULL,
  `user_id_price_exit` int(11) NOT NULL,
  `id_zakaz` int(11) NOT NULL,
  `income` int(11) NOT NULL,
  `expenses` int(11) NOT NULL,
  `platform_procent` int(11) NOT NULL,
  `user_procent` int(11) NOT NULL,
  `day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `user_id_price_in`, `user_id_price_exit`, `id_zakaz`, `income`, `expenses`, `platform_procent`, `user_procent`, `day`, `month`, `year`, `created_at`, `updated_at`) VALUES
(11, 1, 2, 3, 12, 8, 30, 70, '12', '08', '2024', '2024-08-11 11:01:34', '2024-08-11 11:01:34'),
(12, 1, 2, 3, 12, 8, 30, 70, '13', '10', '2024', '2024-08-11 11:01:38', '2024-08-11 11:01:38'),
(13, 1, 2, 3, 12, 8, 30, 70, '11', '08', '2024', '2024-08-11 11:01:42', '2024-08-11 11:01:42'),
(14, 1, 2, 2, 10, 7, 30, 70, '11', '08', '2024', '2024-08-11 11:01:44', '2024-08-11 11:01:44'),
(15, 1, 2, 3, 12, 8, 30, 70, '11', '08', '2024', '2024-08-11 11:02:22', '2024-08-11 11:02:22'),
(16, 1, 2, 3, 12, 8, 30, 70, '11', '08', '2024', '2024-08-11 11:02:25', '2024-08-11 11:02:25'),
(17, 1, 2, 2, 10, 7, 30, 70, '11', '08', '2024', '2024-08-11 12:42:05', '2024-08-11 12:42:05'),
(18, 1, 2, 3, 12, 8, 30, 70, '11', '08', '2024', '2024-08-11 12:46:17', '2024-08-11 12:46:17');

-- --------------------------------------------------------

--
-- Структура таблицы `statisticks`
--

CREATE TABLE `statisticks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `count_link` int(11) NOT NULL,
  `block_link` int(11) NOT NULL,
  `price_link` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statisticks`
--

INSERT INTO `statisticks` (`id`, `count_link`, `block_link`, `price_link`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 12, '2024-08-11 03:17:07', '2024-08-11 03:17:07'),
(2, 1, 0, 12, '2024-08-11 03:26:30', '2024-08-11 03:26:30'),
(3, 1, 0, 12, '2024-08-11 03:31:06', '2024-08-11 03:31:06'),
(4, 1, 0, 12, '2024-08-11 03:31:21', '2024-08-11 03:31:21'),
(5, 1, 0, 12, '2024-08-11 03:31:25', '2024-08-11 03:31:25'),
(6, 1, 0, 12, '2024-08-11 03:31:34', '2024-08-11 03:31:34'),
(7, 1, 0, 12, '2024-08-11 03:52:52', '2024-08-11 03:52:52'),
(8, 1, 0, 12, '2024-08-11 03:53:55', '2024-08-11 03:53:55'),
(9, 1, 0, 12, '2024-08-11 03:53:58', '2024-08-11 03:53:58'),
(10, 1, 0, 12, '2024-08-11 04:03:49', '2024-08-11 04:03:49'),
(11, 1, 0, 12, '2024-08-11 04:04:49', '2024-08-11 04:04:49'),
(12, 1, 0, 12, '2024-08-11 04:05:28', '2024-08-11 04:05:28'),
(13, 1, 0, 12, '2024-08-11 04:16:25', '2024-08-11 04:16:25'),
(14, 1, 0, 12, '2024-08-11 04:18:48', '2024-08-11 04:18:48'),
(15, 1, 0, 12, '2024-08-11 07:22:04', '2024-08-11 07:22:04'),
(16, 0, 1, 0, '2024-08-11 07:22:16', '2024-08-11 07:22:16'),
(17, 1, 0, 1, '2024-08-11 08:18:42', '2024-08-11 08:18:42'),
(18, 1, 0, 12, '2024-08-11 10:55:21', '2024-08-11 10:55:21'),
(19, 1, 0, 12, '2024-08-11 10:55:32', '2024-08-11 10:55:32'),
(20, 1, 0, 12, '2024-08-11 10:55:32', '2024-08-11 10:55:32'),
(21, 1, 0, 12, '2024-08-11 10:57:48', '2024-08-11 10:57:48'),
(22, 1, 0, 12, '2024-08-11 10:57:49', '2024-08-11 10:57:49'),
(23, 1, 0, 12, '2024-08-11 10:57:50', '2024-08-11 10:57:50'),
(24, 1, 0, 12, '2024-08-11 10:58:26', '2024-08-11 10:58:26'),
(25, 1, 0, 12, '2024-08-11 10:59:23', '2024-08-11 10:59:23'),
(26, 1, 0, 12, '2024-08-11 11:01:34', '2024-08-11 11:01:34'),
(27, 1, 0, 12, '2024-08-11 11:01:38', '2024-08-11 11:01:38'),
(28, 1, 0, 12, '2024-08-11 11:01:42', '2024-08-11 11:01:42'),
(29, 1, 0, 10, '2024-08-11 11:01:44', '2024-08-11 11:01:44'),
(30, 1, 0, 12, '2024-08-11 11:02:22', '2024-08-11 11:02:22'),
(31, 1, 0, 12, '2024-08-11 11:02:25', '2024-08-11 11:02:25'),
(32, 1, 0, 10, '2024-08-11 12:42:05', '2024-08-11 12:42:05'),
(33, 1, 0, 12, '2024-08-11 12:46:17', '2024-08-11 12:46:17');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `zakazs`
--

CREATE TABLE `zakazs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripthion_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_project` int(11) NOT NULL,
  `platform_procent` int(11) NOT NULL,
  `user_procent` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zakazs`
--

INSERT INTO `zakazs` (`id`, `name_project`, `topic_project`, `descripthion_project`, `url_project`, `price_project`, `platform_procent`, `user_procent`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Котики', 'Животные', 'Заказ 1', 'https://ya.ru/', 1, 20, 80, 0, 1, '2024-08-11 03:07:40', '2024-08-11 12:43:20'),
(2, 'Вольво', 'машины', 'Заказ 2', 'https://ya.ru/', 10, 30, 70, 0, 1, '2024-08-11 03:07:51', '2024-08-11 12:45:32'),
(3, 'Помада', 'Косметика', 'Заказ 3', 'https://ya.ru/', 12, 30, 70, 0, 1, '2024-08-11 03:08:02', '2024-08-11 12:46:03'),
(4, 'Видеокарта', 'ПК', 'Заказ4', 'https://ya.ru/', 1, 20, 80, 0, 1, '2024-08-11 03:08:09', '2024-08-11 12:46:59');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adminpanels`
--
ALTER TABLE `adminpanels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authmezs`
--
ALTER TABLE `authmezs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statisticks`
--
ALTER TABLE `statisticks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `zakazs`
--
ALTER TABLE `zakazs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adminpanels`
--
ALTER TABLE `adminpanels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `authmezs`
--
ALTER TABLE `authmezs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `statisticks`
--
ALTER TABLE `statisticks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `zakazs`
--
ALTER TABLE `zakazs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
