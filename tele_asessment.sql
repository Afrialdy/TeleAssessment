-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tele_asessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_id` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_id` int(10) NOT NULL,
  `image_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_05_23_144053_add_details_to_users_table', 2),
(5, '2024_05_28_043957_create_surveys_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `json` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `js` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `json`, `js`, `created_at`, `updated_at`) VALUES
(13, 'Quiz 1 COVID 19 Screening Form', '{\n    \"title\": \"COVID-19 Screening Form\",\n    \"description\": \"All fields with an asterisk (*) are required fields and must be filled out in order to process the information in strict confidentiality.\",\n    \"logo\": \"https://api.surveyjs.io/private/Surveys/files?name=fe375fa6-4c8c-40ab-a9c7-51a97b7ad500\",\n    \"questionErrorLocation\": \"bottom\",\n    \"logoFit\": \"cover\",\n    \"logoPosition\": \"right\",\n    \"pages\": [{\n            \"name\": \"patient-info\",\n            \"title\": \"Patient Information\",\n            \"elements\": [{\n                    \"type\": \"panel\",\n                    \"name\": \"full-name\",\n                    \"title\": \"Full name\",\n                    \"elements\": [{\n                            \"type\": \"text\",\n                            \"name\": \"first-name\",\n                            \"title\": \"First name\",\n                            \"isRequired\": true,\n                            \"maxLength\": 25\n                        },\n                        {\n                            \"type\": \"text\",\n                            \"name\": \"last-name\",\n                            \"startWithNewLine\": false,\n                            \"title\": \"Last name\",\n                            \"isRequired\": true,\n                            \"maxLength\": 25\n                        }\n                    ]\n                },\n                {\n                    \"type\": \"panel\",\n                    \"name\": \"personal-info\",\n                    \"elements\": [{\n                            \"type\": \"text\",\n                            \"name\": \"ssn\",\n                            \"title\": \"Social Security number\",\n                            \"isRequired\": true,\n                            \"maxLength\": 9,\n                            \"validators\": [{\n                                \"type\": \"regex\",\n                                \"text\": \"Your SSN must be a 9-digit number.\",\n                                \"regex\": \"^\\\\d{9}$\"\n                            }]\n                        },\n                        {\n                            \"type\": \"text\",\n                            \"name\": \"birthdate\",\n                            \"startWithNewLine\": false,\n                            \"title\": \"Date of Birth\",\n                            \"isRequired\": true,\n                            \"inputType\": \"date\"\n                        }\n                    ]\n                }\n            ]\n        },\n        {\n            \"name\": \"symptoms\",\n            \"title\": \"Current Symptoms\",\n            \"elements\": [{\n                \"type\": \"checkbox\",\n                \"name\": \"symptoms\",\n                \"title\": \"Have you experienced any of the following symptoms of COVID-19 within the last 48 hours?\",\n                \"isRequired\": true,\n                \"choices\": [\n                    \"Fever or chills\",\n                    \"New and persistent cough\",\n                    \"Shortness of breath or difficulty breathing\",\n                    \"Fatigue\",\n                    \"Muscle or body aches\",\n                    \"New loss of taste or smell\",\n                    \"Sore throat\"\n                ],\n                \"showNoneItem\": true,\n                \"noneText\": \"No symptoms\"\n            }]\n        },\n        {\n            \"name\": \"contacts\",\n            \"title\": \"Contacts\",\n            \"elements\": [{\n                    \"type\": \"boolean\",\n                    \"name\": \"contacted-person-with-symptoms\",\n                    \"title\": \"Have you been in contact with anyone in the last 14 days who is experiencing these symptoms?\"\n                },\n                {\n                    \"type\": \"radiogroup\",\n                    \"name\": \"contacted-covid-positive\",\n                    \"title\": \"Have you been in contact with anyone who has since tested positive for COVID-19?\",\n                    \"choices\": [\"Yes\", \"No\", \"Not sure\"]\n                }\n            ]\n        },\n        {\n            \"name\": \"travels\",\n            \"title\": \"Travels\",\n            \"elements\": [{\n                    \"type\": \"boolean\",\n                    \"name\": \"travelled\",\n                    \"title\": \"Have you travelled abroad in the last 14 days?\"\n                },\n                {\n                    \"type\": \"text\",\n                    \"name\": \"travel-destination\",\n                    \"visibleIf\": \"{travelled} = true\",\n                    \"title\": \"Where did you go?\"\n                }\n            ]\n        },\n        {\n            \"name\": \"tests\",\n            \"title\": \"Tests\",\n            \"elements\": [{\n                    \"type\": \"boolean\",\n                    \"name\": \"tested-covid-positive\",\n                    \"title\": \"Have you tested positive for COVID-19 in the past 10 days?\"\n                },\n                {\n                    \"type\": \"boolean\",\n                    \"name\": \"awaiting-covid-test\",\n                    \"title\": \"Are you currently awaiting results from a COVID-19 test?\"\n                },\n                {\n                    \"type\": \"paneldynamic\",\n                    \"name\": \"emergency-contacts\",\n                    \"title\": \"Emergency Contacts\",\n                    \"description\": \"If possible, it\'s best to specify at least TWO emergency contacts.\",\n                    \"panelsState\": \"firstExpanded\",\n                    \"confirmDelete\": true,\n                    \"panelAddText\": \"Add a new contact person\",\n                    \"visibleIf\": \"(({tested-covid-positive} = true or {contacted-covid-positive} = \'Yes\') or ({symptoms} notempty and {symptoms} notcontains \'none\'))\",\n                    \"isRequired\": true,\n                    \"templateElements\": [{\n                            \"type\": \"text\",\n                            \"name\": \"emergency-first-name\",\n                            \"title\": \"First name\"\n                        },\n                        {\n                            \"type\": \"text\",\n                            \"name\": \"emergency-last-name\",\n                            \"startWithNewLine\": false,\n                            \"title\": \"Last name\"\n                        },\n                        {\n                            \"type\": \"text\",\n                            \"name\": \"emergency-relationship\",\n                            \"title\": \"Relationship\"\n                        },\n                        {\n                            \"type\": \"text\",\n                            \"name\": \"emergency-phone\",\n                            \"startWithNewLine\": false,\n                            \"title\": \"Phone number\",\n                            \"inputType\": \"tel\"\n                        }\n                    ]\n                }\n            ]\n        },\n        {\n            \"name\": \"finalization\",\n            \"title\": \"Miscellaneous\",\n            \"elements\": [{\n                    \"type\": \"comment\",\n                    \"name\": \"additional-info\",\n                    \"title\": \"Additional information\"\n                },\n                {\n                    \"type\": \"text\",\n                    \"name\": \"date\",\n                    \"title\": \"Date\",\n                    \"inputType\": \"date\"\n                },\n                {\n                    \"type\": \"signaturepad\",\n                    \"name\": \"signature\",\n                    \"startWithNewLine\": false,\n                    \"title\": \"Signature\"\n                }\n            ]\n        }\n    ],\n    \"completeText\": \"Submit\",\n    \"showPreviewBeforeComplete\": \"showAnsweredQuestions\",\n    \"showQuestionNumbers\": false,\n    \"widthMode\": \"static\",\n    \"width\": \"1000px\"\n}', 'const survey = new Survey.Model(json);\r\nsurvey.onComplete.add((sender, options) => {\r\n    console.log(JSON.stringify(sender.data, null, 3));\r\n});\r\n\r\n$(\"#surveyElement\").Survey({ model: survey });', NULL, NULL),
(14, 'Quiz 2 Product Fit Survey', 'const json = {\n \"title\": \"Product/Market Fit Survey Template\",\n \"pages\": [\n  {\n   \"name\": \"page1\",\n   \"elements\": [\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"customer_role\",\n     \"title\": \"What best describes your role?\",\n     \"showOtherItem\": true,\n     \"choices\": [\n      \"Engineering Lead\",\n      \"Project Manager\",\n      \"Software Developer\",\n      \"Designer\",\n      \"Product Manager\",\n      \"CEO / Founder\",\n      \"Customer Support\"\n     ],\n     \"otherText\": \"Other\",\n     \"colCount\": 3\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"start_using\",\n     \"title\": \"How did you start using the product?\",\n     \"choices\": [\n      {\n       \"value\": \"created\",\n       \"text\": \"I created my account\"\n      },\n      {\n       \"value\": \"invited\",\n       \"text\": \"I was invited to an account\"\n      }\n     ]\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"product_discovering\",\n     \"title\": \"How did you first discover the product? \",\n     \"showOtherItem\": true,\n     \"choices\": [\n      \"Friend or colleague\",\n      \"Search engine\",\n      \"Facebook\",\n      \"Twitter\",\n      \"Blog\"\n     ],\n     \"otherText\": \"Other\",\n     \"colCount\": 3\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"paid_customer\",\n     \"title\": \"Do you currently pay for the product? \",\n     \"isRequired\": true,\n     \"choices\": [\n      \"Yes\",\n      \"No\"\n     ]\n    }\n   ]\n  },\n  {\n   \"name\": \"page2\",\n   \"elements\": [\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"product_fit\",\n     \"title\": \"How would you feel if you could no longer use the product?\",\n     \"isRequired\": true,\n     \"choices\": [\n      {\n       \"value\": \"3\",\n       \"text\": \"Very disappointed\"\n      },\n      {\n       \"value\": \"2\",\n       \"text\": \"Somewhat disappointed\"\n      },\n      {\n       \"value\": \"1\",\n       \"text\": \"Not disappointed\"\n      }\n     ]\n    },\n    {\n     \"type\": \"comment\",\n     \"name\": \"product_fit_comment\",\n     \"visibleIf\": \"{product_fit} notempty\",\n     \"title\": \"Please help us understand why you selected the answer above\"\n    }\n   ]\n  },\n  {\n   \"name\": \"page3\",\n   \"elements\": [\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"product_alternative\",\n     \"title\": \"What would you use as an alternative if [the product] were no\\nlonger available?\",\n     \"showOtherItem\": true,\n     \"choices\": [\n      \"Alternative 1\",\n      \"Alternative 2\",\n      \"Alternative 3\",\n      \"Alternative 4\",\n      \"Alternative 5\",\n      \"Alternative 6\"\n     ],\n     \"otherText\": \"Other (please name)\",\n     \"colCount\": 3\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"product_benefit\",\n     \"title\": \"What is the primary benefit that you have received from the\\nproduct?\",\n     \"showOtherItem\": true,\n     \"choices\": [\n      \"Benefit 1\",\n      \"Benefit 2\",\n      \"Benefit 3\",\n      \"Benefit 4\",\n      \"Benefit 5\",\n      \"Benefit 6\"\n     ],\n     \"colCount\": 3\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"product_recommend\",\n     \"title\": \"Have you recommended the product to anyone?\",\n     \"choices\": [\n      \"Yes\",\n      \"No\"\n     ]\n    }\n   ]\n  },\n  {\n   \"name\": \"page4\",\n   \"elements\": [\n    {\n     \"type\": \"rating\",\n     \"name\": \"nps_score\",\n     \"title\": \"How likely are you to recommend the product to a friend or\\ncolleague? \",\n     \"isRequired\": true,\n     \"rateMin\": 0,\n     \"rateMax\": 10,\n     \"minRateDescription\": \"Most unlikely\",\n     \"maxRateDescription\": \"Most likely\"\n    },\n    {\n     \"type\": \"radiogroup\",\n     \"name\": \"favorite_functionality\",\n     \"title\": \"What\'s your favorite functionality / add-on for the product?\",\n     \"showOtherItem\": true,\n     \"choices\": [\n      \"Feature 1\",\n      \"Feature 2\",\n      \"Feature 3\",\n      \"Feature 4\",\n      \"Feature 5\",\n      \"Feature 6\"\n     ],\n     \"colCount\": 3\n    },\n    {\n     \"type\": \"comment\",\n     \"name\": \"product_improvement\",\n     \"title\": \"How could the product be improved to better meet your\\nneeds?\"\n    }\n   ]\n  },\n  {\n   \"name\": \"page5\",\n   \"elements\": [\n    {\n     \"type\": \"multipletext\",\n     \"name\": \"contact_customer\",\n     \"title\": \"Want us to follow-up? Leave your name and email here:\",\n     \"items\": [\n      {\n       \"name\": \"Name\"\n      },\n      {\n       \"name\": \"E-mail\",\n       \"inputType\": \"email\",\n       \"validators\": [\n        {\n         \"type\": \"email\"\n        }\n       ]\n      }\n     ]\n    }\n   ]\n  }\n ]\n};', 'const survey = new Survey.Model(json);\r\nsurvey.onComplete.add((sender, options) => {\r\n    console.log(JSON.stringify(sender.data, null, 3));\r\n});\r\n\r\n$(\"#surveyElement\").Survey({ model: survey });', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `age`, `gender`, `is_active`) VALUES
(2, 'Armani Dickinson', 'kelsi42@example.com', '2024-05-23 07:44:10', '$2y$10$C8AQ6j89Ok0qE6Stq1NTK.C/J8O2DiMHM/QS24tYG5ZeiCXOL1t56', 'X7cpmmt7XR', '2024-05-23 07:44:10', '2024-05-23 07:44:10', '+1.493.234.2467', 19, 'Female', 0),
(3, 'Ms. Nicolette Quigley IV', 'missouri02@example.org', '2024-05-23 07:44:11', '$2y$10$cd4Ux9e1vyBIxd435eYPHuaK4fphG8ikfBljSd249OGmM/3ymE4oO', 'xfsPwWU3uU', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '(527) 655-4060 x328', 22, 'Female', 1),
(4, 'Mrs. Lucy Boehm III', 'dickens.vicente@example.org', '2024-05-23 07:44:11', '$2y$10$IhofpBZtomaEqQuWWkImWe6RgpPd/Ll4EuvttM/fKun547/A76HZ2', 'vnPZ30xm7B', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '(203) 543-8732 x2743', 64, 'Male', 1),
(5, 'Laron McLaughlin', 'willms.celestino@example.org', '2024-05-23 07:44:11', '$2y$10$oeSg4E3qKx.XZVMjgqtdMeHUJwnXk04ymH9Arz/IOBsUPHYrZ9P/O', 'FgntlZciQd', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '1-418-370-6366 x71749', 29, 'Female', 1),
(6, 'Timothy Metz', 'bborer@example.net', '2024-05-23 07:44:11', '$2y$10$xDVaWxlYWP4a4I6V4nYBnuToUPuElvElzpzziLmovfMjS.CfKNEJO', 'L698LcNSlL', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '+1 (705) 387-5385', 62, 'Female', 1),
(7, 'Dillon Satterfield', 'amos39@example.com', '2024-05-23 07:44:11', '$2y$10$2q5SwfXFhCv5Qzr0BRHOa.tB3nx8XMxPAK9s4Uf3B7cl93yBWIphW', '7Lft4WbbA5', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '+1 (328) 561-7011', 64, 'Male', 1),
(8, 'Prof. Cloyd Kemmer', 'sipes.kimberly@example.com', '2024-05-23 07:44:11', '$2y$10$blmnx353d3QV/P.La2FC0OIv4IO.1ZUi.cPVhqpI21YMRHLyw4EX2', 'GBiSvW9KBp', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '548.938.8513', 38, 'Male', 0),
(9, 'Ellie Yost', 'block.vernie@example.com', '2024-05-23 07:44:11', '$2y$10$fo54/7VCxDAXJAJvIu/ZH.8o/6kHDhjuwp.CyH8YBxbUgM9vHC4uq', 'wGaLiNMaUH', '2024-05-23 07:44:11', '2024-05-23 07:44:11', '+1.879.321.4410', 61, 'Male', 1),
(10, 'Prof. Vernice Little DDS', 'karolann.mraz@example.net', '2024-05-23 07:44:11', '$2y$10$FWrmNCB6qiCu4sFLeCSyjORuFoYUk4CZ7MXkK9tcsYQLjZwjN82dm', 'cN9ieSlpZ6', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '+1-343-485-2788', 24, 'Male', 1),
(11, 'Crystal Bosco', 'trisha04@example.com', '2024-05-23 07:44:12', '$2y$10$0obbiSme6fGpRhsVmmzQtu269rqQkYkR.cLLLXKm4XUemiqnJYUri', '7BkGvwIZyD', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '+1-563-405-8345', 63, 'Female', 1),
(12, 'Green Stracke', 'hoeger.reva@example.net', '2024-05-23 07:44:12', '$2y$10$NGyvmcCspuiWaedmjlCoqu6V62KWGWkGO4sSRR4lxXIhlJqpyH7Te', 'QbfzgBVQqo', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '750-859-2820', 58, 'Male', 1),
(13, 'Jana Swift', 'lueilwitz.leatha@example.net', '2024-05-23 07:44:12', '$2y$10$SL1/J12i35KH4qkUb8ziZOJL.vKQGwMUYKmYvZcwyN4G2rqD5O.72', 'lyKuN5eJu4', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '(770) 395-6775', 22, 'Male', 0),
(14, 'Aric Robel', 'adelle.lindgren@example.org', '2024-05-23 07:44:12', '$2y$10$/axkvYSO8QfpH63VYiYZSOXYRKgsjAijccemN0FfAJm1vtbotxvUW', 'vT7ksD0AL2', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '+14713049403', 43, 'Female', 1),
(15, 'Carmelo Ortiz III', 'savanah.eichmann@example.net', '2024-05-23 07:44:12', '$2y$10$qWk1yjyjag6eUFqIt3IA0OGeOAOhB2bgqP2pLdzdmw0E25rTKrysy', 'ixwzRRura9', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '798-316-1387 x2687', 46, 'Female', 0),
(16, 'Korey Bechtelar', 'aryanna.muller@example.net', '2024-05-23 07:44:12', '$2y$10$ZirkUpFoamSWho0O1EpdW.R9lYPwHTFsgJO3D8ulLvMwcRhrYUBfm', 'eLngjVe3Lw', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '(446) 958-3478', 50, 'Female', 1),
(17, 'Mr. Regan Paucek DDS', 'crooks.camron@example.net', '2024-05-23 07:44:12', '$2y$10$wF5Nclk8zigT8On6dnzcCezGgYRk/1ZyFTturVbocodbMgFW0aiia', 'E2scoMSo31', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '989.998.6715', 42, 'Female', 1),
(18, 'Randal Wilderman', 'sidney.frami@example.org', '2024-05-23 07:44:12', '$2y$10$m1CDh1/xdxLYH9siGgula.UkIO.9aIr2jbIBfyttgqTePUzXDZlXS', 'lOFPAn2pJ5', '2024-05-23 07:44:12', '2024-05-23 07:44:12', '851-214-8474 x817', 18, 'Male', 0),
(19, 'Pablo Bednar', 'wilfred.deckow@example.com', '2024-05-23 07:44:13', '$2y$10$vYRNhiFEx0O63Ykno0IYOe3ab8LOWv6l/O0x7AvZAEkytjKGje146', 'ahadx8pGbp', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '(689) 570-6613 x49142', 48, 'Male', 1),
(20, 'Mr. Darron Kub', 'kari.predovic@example.net', '2024-05-23 07:44:13', '$2y$10$6tyhbK7I8EI5xFN8gqvx7e7LyztPkk7uLOZGsof0CmajbcRQgol3m', 'PhaqJYxl1X', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '426.539.4176 x07088', 43, 'Female', 1),
(21, 'Dallas Upton Jr.', 'jacinto.lehner@example.net', '2024-05-23 07:44:13', '$2y$10$SpfblI/6b7Qt1isJn3w24ObQY2.jbzn3RWyt/ayYdbr9OgdQR43uG', 'AmGIMvHe1k', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '(573) 373-8648 x82467', 52, 'Male', 1),
(22, 'Bailee Koss', 'kianna.kunde@example.org', '2024-05-23 07:44:13', '$2y$10$bR6BoSM3xyQuls3wl72kouls6H/QjiW4zJE/a5rbkvO6fWmX6v8za', 'wPPvkACfdn', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '(624) 429-6512 x68999', 53, 'Female', 1),
(23, 'Ona Brekke', 'travis99@example.org', '2024-05-23 07:44:13', '$2y$10$7xu3Y3oUgoPxiXgmYTaKC.cFjvzt0SnunKSTPoY9qXoUMjOUYZEze', 'kngfId3cQJ', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '518-704-2565 x476', 60, 'Female', 0),
(24, 'Mr. Lorenzo Wolf PhD', 'fmertz@example.com', '2024-05-23 07:44:13', '$2y$10$lTQ67lQtz6wX3MLrxgUmseXwNkHNK3dLCMMrlu8J1ZMaI2pLowDCe', 'YJiLlCE1Zi', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '1-326-702-7951', 55, 'Male', 1),
(25, 'Queenie O\'Conner PhD', 'mustafa.heidenreich@example.net', '2024-05-23 07:44:13', '$2y$10$a4vaguiQR.2OnIvQaIyqqu97yzpONOUc2iCY3EQv1PgujUCP/5FAK', 'kuiHIJMWXs', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '957.549.1339 x82964', 50, 'Male', 0),
(26, 'Wyatt Graham', 'shagenes@example.org', '2024-05-23 07:44:13', '$2y$10$Yf9BSiAHyk2YmddvCigMh.gIjq3/uAV4lU5dxYr7n.lJsdwxGbnDW', 'fGlZnrr4fX', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '1-689-552-3419 x06468', 37, 'Male', 1),
(27, 'Glennie Heidenreich', 'melvin29@example.net', '2024-05-23 07:44:13', '$2y$10$3nqLyTHPbL/8J6aAGuQBHOR0fMDSuUDdschxLMQEEMI7Ja1cCkgJu', 'tNeUZhQTzk', '2024-05-23 07:44:13', '2024-05-23 07:44:13', '(751) 475-0080 x5055', 47, 'Male', 0),
(28, 'Anita Kuhn', 'alessandra87@example.com', '2024-05-23 07:44:13', '$2y$10$DgXAUVFC6LqdF.eR.woqNurpL3VlT6H/oibNKclr/3vxQtxTmX7SS', 'aLl9frGpZZ', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '(472) 904-4269', 38, 'Female', 0),
(29, 'Ms. Clotilde Gorczany III', 'clair.ondricka@example.net', '2024-05-23 07:44:14', '$2y$10$.apNZdI6Q.bHS62msN2yeu6DdVyqRGDFWrR.RywzMAR2CisZZpzOK', 'oWcNHQVByW', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '1-674-790-2860', 65, 'Female', 1),
(30, 'Kirstin Hahn', 'yboyle@example.com', '2024-05-23 07:44:14', '$2y$10$9wUNmexIpFZBfzA3XsYMuup2t.h7HsykuX7IWB1JuUxkgDV0z3MN2', 'ZM5Grr65X9', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '435-227-7925', 39, 'Female', 1),
(31, 'Pablo Ankunding', 'kcormier@example.org', '2024-05-23 07:44:14', '$2y$10$CrmdB5njp.w2X2N0GmPwOeJEZ5ngxnDOBlnBy3RpsQBdGQpomc44S', '7puaCDLMa8', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '740.553.8706', 18, 'Female', 1),
(32, 'Mrs. Viviane Reichel', 'hope10@example.net', '2024-05-23 07:44:14', '$2y$10$JJXzA9AJfZoKq144h9FE0OAq4tUT7M5CMhdnLvcqKQwhWr9t8qtHC', 'gme6qSNCu7', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '739.599.4617', 25, 'Female', 1),
(33, 'Prof. Jonatan Feest DDS', 'doyle.llewellyn@example.com', '2024-05-23 07:44:14', '$2y$10$FEzFzX9jOADwvVcMcF93teXZSFana5YqC0zlHfaXkseq38k0X3b9y', 'J9CKZeen8J', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '1-248-603-1359 x5741', 21, 'Female', 0),
(34, 'Caesar Runte', 'wilson85@example.com', '2024-05-23 07:44:14', '$2y$10$Bmh.gEFCfas5uycuPFt8ZOljAiSYCekSI9qxxKe8vZgFB5QlzXx9q', 'mLBu2f4g8v', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '(451) 389-8408 x553', 44, 'Female', 1),
(35, 'Mrs. Rosalee Gaylord', 'janice75@example.net', '2024-05-23 07:44:14', '$2y$10$LVDZGAUUQOaBpYB7J4RmAe0V8ifftD9MGyPZM1Uz/cCO5VCzJzUky', 'esV5gxBklX', '2024-05-23 07:44:14', '2024-05-23 07:44:14', '(901) 329-3716 x5314', 31, 'Female', 0),
(36, 'Breanne Gutmann Jr.', 'tobin.lueilwitz@example.net', '2024-05-23 07:44:14', '$2y$10$zNmhi5uzyzkntF.KY7mWMuUKskYOvXknRJ3TfJBq7TfcH7iPUk4hq', 'apTuVmm0ie', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '554.330.4994', 21, 'Female', 0),
(37, 'Reece Yost', 'rempel.marlin@example.net', '2024-05-23 07:44:15', '$2y$10$k8iFbN25.UM8uhKkOngcde9eZXYnDBvER0874XUeAS2nhanLLe5nG', 'Zztwftwl4D', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '532.769.4644 x16468', 62, 'Female', 0),
(38, 'Dixie Kirlin', 'aurelia89@example.com', '2024-05-23 07:44:15', '$2y$10$KbhZYjVnZMSG.N1F67gq.OCmniPtX0D9YRJwpkgackXEebs6VSsh.', 'ynaBA0kE1n', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '203.715.7484 x402', 40, 'Male', 0),
(39, 'Everett Yost', 'bpowlowski@example.com', '2024-05-23 07:44:15', '$2y$10$uW9e0XI6Bu.vQgNU6XLzvOXI1slpzZIaWKC3KOl5cXyUYQfcaVsaC', 'PB8qK9cNiO', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '990-368-7054', 20, 'Male', 1),
(40, 'Alice DuBuque', 'oreilly.gilberto@example.org', '2024-05-23 07:44:15', '$2y$10$x.BVIgs3gBPfbRW1uD5i6.murTsGyn.fnY/sOPR7kWBim23nlzx0O', 'BeRgXvLGId', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '443.897.2470 x67749', 43, 'Male', 0),
(41, 'Prof. Zackary Bruen', 'alia25@example.com', '2024-05-23 07:44:15', '$2y$10$IZeb32e/PB3mvfd1R7O4MuEV/zkyBSCuOyP5NViTXtsqsSD3AqIFa', '6cqSyexob0', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '341.418.3039', 56, 'Male', 1),
(42, 'Forrest Bartoletti', 'troy34@example.com', '2024-05-23 07:44:15', '$2y$10$VYhJ7F.ZOE.vMYF8BRptSeHwAfAN/4lCoYrpSfx0ihvHJTXwNnx5u', 'WRnwHwXYxa', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '967.464.6062', 26, 'Female', 0),
(43, 'Prof. Tyrel Torp III', 'xhills@example.com', '2024-05-23 07:44:15', '$2y$10$JBjeJiPNiXS8IvJe.de/E.E3YmTHPQDDDCsm2nui0a1ZdSqqV6vCC', 'BpwkrJsjiu', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '+1-537-573-9836', 32, 'Female', 1),
(44, 'Laurence Gulgowski', 'soledad09@example.com', '2024-05-23 07:44:15', '$2y$10$utlUwf.nRAOmEzY/Lnp4fubYRybF3pCxeZRuG2QY5sjM9uZ3BYC7u', 'AEM4Pk5kGu', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '(748) 493-2723', 55, 'Male', 1),
(45, 'Dr. Rashad Schinner', 'wparker@example.net', '2024-05-23 07:44:15', '$2y$10$kGp6m3kH5biFt/PMr.WQWOrKPPr4MnZb.6m/ngNhi3ktiH0sphwpy', 'pp5dc7zhb7', '2024-05-23 07:44:15', '2024-05-23 07:44:15', '692.262.3328 x53220', 30, 'Female', 1),
(46, 'Christian Lind', 'vromaguera@example.com', '2024-05-23 07:44:16', '$2y$10$4TbwUJPC5Eyca01z8IGefe00QchAxbUQWaYmVjNQKFlydr50Ip.Jm', 'g1fbEhylGl', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '360.334.8074', 42, 'Male', 1),
(47, 'Hayden D\'Amore', 'gretchen74@example.org', '2024-05-23 07:44:16', '$2y$10$Wl19F6tMSOl/0d5NUbwXi.RrLuXqYzHitjKgMcZWrZROCvrXOuaEm', 'cjV8DDlRpR', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '969-582-7133 x7535', 43, 'Male', 0),
(48, 'Kaylin Spencer', 'ndoyle@example.org', '2024-05-23 07:44:16', '$2y$10$ASPhfvH/nxAkC6i2IRgMx.o44RBFt0grW6BErTFAVY.lxb2CoFNbe', 'CekVMjWF7f', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '695-296-5192', 52, 'Female', 1),
(49, 'Mrs. Kellie Rolfson', 'pswaniawski@example.net', '2024-05-23 07:44:16', '$2y$10$BqIY2o0NvI.GF3IWkgyl1.EK71DYB/YfgpsoJYZi1vgKUcRC/sHPW', 'bgw1pYMPVw', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '725-332-4908 x907', 58, 'Female', 1),
(50, 'Prof. Corrine Schowalter PhD', 'dixie45@example.org', '2024-05-23 07:44:16', '$2y$10$ckVLCWOs/TY8r4GiflE9IOb3SLNTCIQ6My7Rzi7vnXbDQ/BUrt9y2', 'jqPeAjF196', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '316-725-5570', 51, 'Male', 0),
(51, 'Tia Howe', 'burnice55@example.net', '2024-05-23 07:44:16', '$2y$10$cIfrryYOMvuVI3NqapAqP.4HE9gQ6J/yeTplC4YOhbUCWiPR.P.3.', 'l5fmSP6E8M', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '+17352125158', 65, 'Female', 1),
(52, 'Luisa Keeling', 'nhansen@example.org', '2024-05-23 07:44:16', '$2y$10$.r0dc08Tv0Sr9imw2sRsE.xgptBmopQQ42ExQccaQk4.uE09k/Zby', 'zMC3FbuQ8u', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '(519) 782-9245 x34979', 41, 'Female', 1),
(53, 'Dr. Kendra Konopelski V', 'werner63@example.org', '2024-05-23 07:44:16', '$2y$10$1ZZA4WPbEbThT1.7romUq.UVoDi8NqW8tP07aaFMyLUa3y4xGUcUu', 'cR1ZzrsdPN', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '565-565-0555', 51, 'Male', 0),
(54, 'Tressa Trantow', 'lenny.johns@example.org', '2024-05-23 07:44:16', '$2y$10$kOfW6fuChtMCDz77kXF9beFQq7X/FCvr2H61Ecgq47ZQBGuh755ry', 'xPV0mID8SQ', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '1-774-809-9246 x7413', 46, 'Male', 0),
(55, 'Jailyn Connelly Jr.', 'aturner@example.com', '2024-05-23 07:44:16', '$2y$10$u4XhvEmIiBhC00AmZhCMY.peFyLBZSy0DgunFXFyFwevuC22X.1ru', 'jHztYyixYK', '2024-05-23 07:44:16', '2024-05-23 07:44:16', '919.286.4794 x38549', 50, 'Male', 0),
(56, 'Esther Ortiz', 'eulalia64@example.com', '2024-05-23 07:44:16', '$2y$10$Wm8rms8f9.uZpRvedFxe3.58HltldkO.TnwieKv17vHpH1se4Kuq2', 'v59M01kEOJ', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '1-303-239-6945 x078', 25, 'Male', 0),
(57, 'Sage Baumbach', 'ikuhlman@example.com', '2024-05-23 07:44:17', '$2y$10$FsTiEnzvotgLfZEaK2GU3unIqROXUtrrqfCHyAYDImxxU.cT52GOa', '9GPLwqXrwI', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '219.786.1339', 40, 'Female', 0),
(58, 'Alessia Conn', 'herzog.graciela@example.org', '2024-05-23 07:44:17', '$2y$10$oZHl.JfRI2MoCAQ0SdlkJ.4D6BrhrZwCMg0v6eCM7mQXQWhFng.5G', 'T7x5658Vi6', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '+1 (745) 268-8198', 35, 'Female', 1),
(59, 'Amely Kohler', 'stanford.braun@example.net', '2024-05-23 07:44:17', '$2y$10$roZZh7cOq3ook0nmUijrQO/1oInYf9tyiHHVZbir.eR3TZPiigpT.', 'JaXKM8lKr9', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '(365) 474-9550 x90308', 48, 'Female', 1),
(60, 'Francisco Torphy', 'uhegmann@example.net', '2024-05-23 07:44:17', '$2y$10$bQ61qrPaEiym73PPO6MLA.6bQHtatbi9Ov1bevk5MB.nCUe58mh3i', 'JNwJT5wDQX', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '+1-847-209-2998', 49, 'Male', 1),
(61, 'Dr. Bryon Kshlerin', 'mharvey@example.net', '2024-05-23 07:44:17', '$2y$10$FblRy.USzxIJMiJs0zZwgOS8DAX0cxpZWK7zsDTYFf135XsCmEDcm', 'uuIX6yaxJK', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '(670) 344-4079 x3495', 33, 'Male', 0),
(62, 'Verner Roob', 'jace.altenwerth@example.com', '2024-05-23 07:44:17', '$2y$10$U/pijCMvePkN6h.10p4l1.SOLUnGw5KhOXRGV.c9UyiIn.hqy0pZq', 'SWd8v7NwJk', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '489.442.5119 x0533', 26, 'Male', 0),
(63, 'Marcos Hartmann', 'kenyon44@example.org', '2024-05-23 07:44:17', '$2y$10$QmwWy7CgzYR5.NklyrPjaOTs7rpUXorwbrvYQ.lWOXjO7FDzjZYdu', 'gWzCttwlSV', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '(494) 306-2541', 28, 'Male', 0),
(64, 'Dr. Emery Lesch', 'rbergnaum@example.net', '2024-05-23 07:44:17', '$2y$10$NBKYaa45gSla9hUSmmyP6.S.XVr.fXkZ6.ofhcD/aLVr.ASKHnB02', 'e9L7dgZ4HB', '2024-05-23 07:44:17', '2024-05-23 07:44:17', '1-383-715-1453', 56, 'Female', 0),
(65, 'Hailey Bosco', 'arvilla44@example.net', '2024-05-23 07:44:17', '$2y$10$TwDeFhFSBntmAv1MBKy3gOrjl5H4hoYS/SotwCVcZPABInczz..Nm', 'YSutkY2eBX', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '(478) 706-6368 x9631', 46, 'Female', 1),
(66, 'Abe Runolfsdottir', 'larue03@example.net', '2024-05-23 07:44:18', '$2y$10$pKBwJreqURd3ETAAQk4oTOAd.DMMmHCkK4qhaYyitty4916hweGKm', 'jGLwxiLvyc', '2024-05-23 07:44:18', '2024-05-23 11:34:46', '(763) 287-2810 x6651', 48, 'Female', 1),
(67, 'Mr. Juston Schowalter', 'delia.ryan@example.net', '2024-05-23 07:44:18', '$2y$10$.OtLW5dsE6PYs2S8NKx.YOj/2FqXB0lkMElAK9ZBDgf2kxUg8GRkO', 'JmY5nXrqCI', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '863-350-3834', 44, 'Male', 0),
(68, 'Chaya Hoeger', 'ihuels@example.net', '2024-05-23 07:44:18', '$2y$10$6VAaEUeig9arhLry58MyXeWU5EVVWVuA7HKrqD5e1zu1TbqEY37Qm', 'RtAPHG9qq9', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '992.834.5510 x59581', 33, 'Female', 1),
(69, 'Ford Dicki Jr.', 'harvey.beau@example.org', '2024-05-23 07:44:18', '$2y$10$YsRfl0Tw3ofi.b5FeNl7eufz241AOpOSf/3oPuXPz3N2VcQStYFkm', 'ev77gV4WdE', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '+1.983.367.6832', 51, 'Male', 1),
(70, 'Prof. Floy Harber III', 'kunde.talia@example.org', '2024-05-23 07:44:18', '$2y$10$4BEKnNQtw8j3WafOmHKuhud0b8cV6X0V2ehKQLesUQu7xCLMhoUBC', 'ZTgIcY7f53', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '843-618-0937 x748', 58, 'Female', 0),
(71, 'Alysa Wiza', 'jayne.anderson@example.net', '2024-05-23 07:44:18', '$2y$10$Lh9EO6vCCORhcoyLkHo1luOHHYJFYfxYKkFA9TRBGerKfU5OSidBW', 'BJrGhH500o', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '+14324631766', 20, 'Male', 1),
(72, 'Mrs. Kianna Smitham I', 'mohamed.feest@example.org', '2024-05-23 07:44:18', '$2y$10$so9HLOgATFqt0CknFaEuYe5T2USRhaVD.u8LLqzfYQHpeEnJFQjqa', 'YeoQEfLMnZ', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '269-762-2648 x05659', 39, 'Male', 1),
(73, 'Mrs. Annamarie Lehner III', 'akilback@example.com', '2024-05-23 07:44:18', '$2y$10$DeTwXOv0.BNveRql7N65r.fU6JgZEhQ08kGofLmflMcclPkSdkEzK', '3Dqe7kMYsO', '2024-05-23 07:44:18', '2024-05-23 07:44:18', '1-805-277-9754', 55, 'Male', 0),
(74, 'Mr. Chester Raynor', 'terry.winona@example.org', '2024-05-23 07:44:18', '$2y$10$mvXhUlBungMKVzSyDpqApO/mUHV8upupsDWgIC/gKP64450K/HK.2', '02MevaGWkP', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '1-713-563-6320 x88298', 30, 'Female', 0),
(75, 'Mr. Doug Schmitt Jr.', 'larkin.domenico@example.net', '2024-05-23 07:44:19', '$2y$10$vuzPUuqf98IK9iWabJsWx.gLmQsfM.9Xqq7K8aXhZycxKqmyWCi42', 'NDvJJdFFar', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '+1-405-434-1808', 49, 'Male', 1),
(76, 'Dr. Bette Hintz III', 'lourdes06@example.org', '2024-05-23 07:44:19', '$2y$10$R9QG7HfWvToXq0ggtCDFNeL.VDN/NZx8ySr.69zUhzc.e8PpOBfcW', 'IwQaGdeVDn', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '607.813.1633 x8218', 45, 'Male', 1),
(77, 'Prof. Chandler Feest', 'rogers06@example.org', '2024-05-23 07:44:19', '$2y$10$/BDiFzx2nFv/OI9ge7U/QurihinEbLb34ChizFjVigL91QtAQSfie', '98Y31MrJci', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '(819) 582-8135', 41, 'Female', 1),
(78, 'Jack Lehner II', 'bednar.jewel@example.com', '2024-05-23 07:44:19', '$2y$10$feQsELH.fonJj/szdej9C.ru18FWNcmAtrOM53zWYcGmKVXJkkil6', 'CF99iqXM0n', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '(557) 445-8932 x038', 28, 'Female', 0),
(79, 'Jeremie Kertzmann', 'lori07@example.org', '2024-05-23 07:44:19', '$2y$10$VRM74h0McGB7gyccPlESSeMy4FQjUDCGsA5MNlfX7y16KsW8vYyY6', 'KIZjdxymnt', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '1-246-219-6674 x25948', 53, 'Female', 0),
(80, 'Domingo Schmidt V', 'wunsch.lela@example.com', '2024-05-23 07:44:19', '$2y$10$xnGIWREmfGiVm1A8Xrwfx.UyO0Pm5bRTza7iN4L.o3ZlZM66n0yUq', 'UIfdouNm6t', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '+13599226945', 31, 'Male', 0),
(81, 'Janelle Dickinson', 'turner99@example.net', '2024-05-23 07:44:19', '$2y$10$JMmgA88qfPDQKonrQHdoWucS0LB0jH.PDpYvDcAAeiPvB16x0o9L6', 'XtkQumpE5b', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '+1-938-419-3395', 34, 'Female', 1),
(82, 'Mr. Wilson Von', 'kohler.mona@example.com', '2024-05-23 07:44:19', '$2y$10$0WNtyEoBo0ZG2wHfO.Xb/e9.ahlbziGCvw8rzG/Xu2/v6WvKRPrzi', '3SFxVyFLnL', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '+1 (804) 602-7900', 24, 'Female', 0),
(83, 'Ms. Carlee Connelly DDS', 'elittel@example.com', '2024-05-23 07:44:19', '$2y$10$GUmhxWNDJTs/c6eXdSC.xef2oi.n2GokDGEpwjuNmSpGZMkoAAomG', '1AoM9xVcWJ', '2024-05-23 07:44:19', '2024-05-23 07:44:19', '1-850-230-8130 x013', 28, 'Female', 0),
(84, 'Prof. Tanya Brown I', 'aurore.glover@example.org', '2024-05-23 07:44:19', '$2y$10$y4VgpE3Dnabke/2gLjFqp.QSRs5vD9vgzMikB4XuYmhSeRRXF/z.G', '3pNyEJRuB1', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '(472) 851-4400 x30510', 58, 'Male', 0),
(85, 'Devin Boyer', 'kerluke.lamont@example.net', '2024-05-23 07:44:20', '$2y$10$B3QUcd361aZ9TOnNfN3E4eiUUGoNIy9c/LTxGUvWEoOWINR7dOuCG', '9rAFptY1tJ', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '+1.372.509.8581', 22, 'Male', 0),
(86, 'Gillian Schowalter', 'sonny64@example.net', '2024-05-23 07:44:20', '$2y$10$.hbGmFb0XffrCkruM.2G0ORDTaxQ41Qz8czt6eKNK.98HxAMpruPu', 'c4pxtA1na9', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '769.278.2978 x3162', 31, 'Male', 1),
(87, 'Elisabeth Predovic', 'lfisher@example.com', '2024-05-23 07:44:20', '$2y$10$tipmfNpFOA8quw9rW8GozeyGw4udIFkeEHcvBIVnwhH8mv87iD9mi', '0HyVRz2KGL', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '+1-821-720-0322', 33, 'Male', 0),
(88, 'Willa Jast', 'carmela.predovic@example.org', '2024-05-23 07:44:20', '$2y$10$3EbyAtHnEK8.2YoK.Q1II.MtvjCWsZhjQo/2Qrll676UOuhxtGtqq', 'ETiVAnahkO', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '1-414-582-0469 x35996', 63, 'Female', 1),
(89, 'Drake Schmeler', 'volkman.al@example.org', '2024-05-23 07:44:20', '$2y$10$11i2i5NcnYlIjYajghW/hupLJWMSJmcJcNc.SO/AUUD/Ap56Ju/F.', 'IKw2YIBrIN', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '1-261-785-6720 x63336', 54, 'Female', 0),
(90, 'Flo Macejkovic', 'simonis.katherine@example.com', '2024-05-23 07:44:20', '$2y$10$QQBUg8PpoTOIm85ejCZwPeRQb6m6j4sKqzeUaf2yd5Cd.pnZbfOpu', 'A71fgSS23v', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '(680) 926-8855', 37, 'Male', 1),
(91, 'Bonnie Frami', 'lhartmann@example.net', '2024-05-23 07:44:20', '$2y$10$np1yrocFlxWUXs00RJEW0ewoYggF1Xs8AzGWu0hsieJkdf/tS198u', 'Rz2ZG8wDKB', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '616-608-8395 x430', 59, 'Female', 1),
(92, 'Kendra Hamill', 'janae53@example.com', '2024-05-23 07:44:20', '$2y$10$SbALSkP/owRs7XALm85Ikuf3RUiJneNy1SAX0.gLAPWiPI.jAScCi', 'vdhEl6JNk5', '2024-05-23 07:44:20', '2024-05-23 07:44:20', '+1-437-953-7225', 36, 'Female', 1),
(93, 'Zena Frami', 'bartholome74@example.net', '2024-05-23 07:44:21', '$2y$10$SuhPLQvQrDEFMHIwRmLe/OvJeujPJ5mWMMXC4UShbwXxyY2G11UrC', 'MMSJW1J27h', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '(632) 478-8019 x69959', 30, 'Female', 0),
(94, 'Cedrick Hayes', 'barney.heaney@example.com', '2024-05-23 07:44:21', '$2y$10$S1Q5JsotgrbP1Dj.rRIM6Oa8ofkoA0C5ERQHr56Zz53.MlW3XNjlG', 'rMfqYc5kSi', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '+1-584-509-6283', 59, 'Male', 0),
(95, 'Prof. Dessie Herman', 'schroeder.adell@example.net', '2024-05-23 07:44:21', '$2y$10$YqirRyCFO.KPNfT.RkhQX..pdIJUcR93HUnWkx6Hpz00uGMyM.iWC', 'OqUCz3IAy1', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '840.854.1427', 62, 'Male', 1),
(96, 'Mrs. Diana Will', 'rutherford.kaitlin@example.net', '2024-05-23 07:44:21', '$2y$10$BgrQeZw2DMRgkW1MUukqwuarcKMi4.N2XZAW6rpiu.Fe6SjBfgzy6', 'F1RSKFU5BP', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '+1-623-293-6851', 28, 'Female', 0),
(97, 'Edd Windler IV', 'eloisa18@example.org', '2024-05-23 07:44:21', '$2y$10$Ds2S9lmEK.J2R7pfRIaahO8RbUXHQzvEqmJ03PQydkctkbVqQnuDq', 'WXg79oElsu', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '+1-839-759-7939', 23, 'Female', 1),
(98, 'Mr. Abdullah Schaden MD', 'russel52@example.com', '2024-05-23 07:44:21', '$2y$10$/aJdNX7iIvi9j1DPeFvwke8YgnKHrLyMT8zzZIlaWvufAdOwN362q', '3EjgiEG4V6', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '267.971.1805', 46, 'Female', 0),
(99, 'Antonetta Hyatt', 'georgianna30@example.com', '2024-05-23 07:44:21', '$2y$10$S8NcuU0IpcGDDoA1p21dcuzwkKUYAsnPjtpui5OGD/M6HyiwuQ3Dm', 'oZuGxZhUJv', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '1-832-759-5306 x909', 24, 'Male', 1),
(100, 'Miguel Zboncak', 'altenwerth.kory@example.com', '2024-05-23 07:44:21', '$2y$10$3bxJ1zu6PJJyqiBL5tiDE.Dhv79V9.zrwPYc1u.PziTCKFX6lzzay', 'PIr2JXdk3G', '2024-05-23 07:44:21', '2024-05-23 07:44:21', '601.803.8670', 23, 'Female', 1),
(101, 'Dr. Walter Ritchie', 'ruecker.marc@example.net', '2024-05-23 07:44:22', '$2y$10$erQoGM4D..FOiT5UenbkwuZd7WHpVQbn3lnuSFtZ0ZKs04rUirfYi', 'nFZtq8ajHV', '2024-05-23 07:44:22', '2024-05-23 07:44:22', '1-924-980-6809 x71122', 18, 'Female', 0),
(107, 'William Jonathan', 'billy.maxy.academy@gmail.com', NULL, '$2y$10$VnLuLvb52XeKt9UUImFULOu2bu9Q5Q.d.956fIBshmZquZnFTLo.6', NULL, '2024-05-26 18:48:17', '2024-05-27 18:19:01', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
