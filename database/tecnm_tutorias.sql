-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2022 a las 16:51:27
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnm_tutorias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers_options`
--

CREATE TABLE `answers_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `answers_options`
--

INSERT INTO `answers_options` (`id`, `name`, `question_id`, `created_at`, `updated_at`) VALUES
(1, 'Soltero', 9, NULL, NULL),
(2, 'Casado', 9, NULL, NULL),
(3, 'Otro', 9, NULL, NULL),
(4, 'Especificar', 9, NULL, NULL),
(5, 'Si', 10, NULL, NULL),
(6, 'No', 10, NULL, NULL),
(7, 'Casa', 16, NULL, NULL),
(8, 'Departamento', 16, NULL, NULL),
(9, 'Propia', 17, NULL, NULL),
(10, 'Rentada', 17, NULL, NULL),
(11, 'Prestada', 17, NULL, NULL),
(12, 'Otros', 17, NULL, NULL),
(13, 'Si', 33, NULL, NULL),
(14, 'No', 33, NULL, NULL),
(15, 'Si', 39, NULL, NULL),
(16, 'No', 39, NULL, NULL),
(17, 'Femenino', 45, NULL, NULL),
(18, 'Masculino', 45, NULL, NULL),
(19, 'Frecuente/M', 53, NULL, NULL),
(20, 'Muy frecuente/M', 53, NULL, NULL),
(21, 'Nunca', 53, NULL, NULL),
(22, 'Antes', 53, NULL, NULL),
(23, 'A veces', 53, NULL, NULL),
(24, 'Frecuente/M', 54, NULL, NULL),
(25, 'Muy frecuente/M', 54, NULL, NULL),
(26, 'Nunca', 54, NULL, NULL),
(27, 'Antes', 54, NULL, NULL),
(28, 'A veces', 54, NULL, NULL),
(29, 'Frecuente/M', 55, NULL, NULL),
(30, 'Muy frecuente/M', 55, NULL, NULL),
(31, 'Nunca', 55, NULL, NULL),
(32, 'Antes', 55, NULL, NULL),
(33, 'A veces', 55, NULL, NULL),
(34, 'Frecuente/M', 56, NULL, NULL),
(35, 'Muy frecuente/M', 56, NULL, NULL),
(36, 'Nunca', 56, NULL, NULL),
(37, 'Antes', 56, NULL, NULL),
(38, 'A veces', 56, NULL, NULL),
(39, 'Frecuente/M', 57, NULL, NULL),
(40, 'Muy frecuente/M', 57, NULL, NULL),
(41, 'Nunca', 57, NULL, NULL),
(42, 'Antes', 57, NULL, NULL),
(43, 'A veces', 57, NULL, NULL),
(44, 'Frecuente/M', 58, NULL, NULL),
(45, 'Muy frecuente/M', 58, NULL, NULL),
(46, 'Nunca', 58, NULL, NULL),
(47, 'Antes', 58, NULL, NULL),
(48, 'A veces', 58, NULL, NULL),
(49, 'Frecuente/M', 59, NULL, NULL),
(50, 'Muy frecuente/M', 59, NULL, NULL),
(51, 'Nunca', 59, NULL, NULL),
(52, 'Antes', 59, NULL, NULL),
(53, 'A veces', 59, NULL, NULL),
(54, 'Frecuente/M', 60, NULL, NULL),
(55, 'Muy frecuente/M', 60, NULL, NULL),
(56, 'Nunca', 60, NULL, NULL),
(57, 'Antes', 60, NULL, NULL),
(58, 'A veces', 60, NULL, NULL),
(59, 'Frecuente/M', 61, NULL, NULL),
(60, 'Muy frecuente/M', 61, NULL, NULL),
(61, 'Nunca', 61, NULL, NULL),
(62, 'Antes', 61, NULL, NULL),
(63, 'A veces', 61, NULL, NULL),
(64, 'Frecuente/M', 62, NULL, NULL),
(65, 'Muy frecuente/M', 62, NULL, NULL),
(66, 'Nunca', 62, NULL, NULL),
(67, 'Antes', 62, NULL, NULL),
(68, 'A veces', 62, NULL, NULL),
(69, 'Frecuente/M', 63, NULL, NULL),
(70, 'Muy frecuente/M', 63, NULL, NULL),
(71, 'Nunca', 63, NULL, NULL),
(72, 'Antes', 63, NULL, NULL),
(73, 'A veces', 63, NULL, NULL),
(74, 'Si', 81, NULL, NULL),
(75, 'No', 81, NULL, NULL),
(76, 'Algunas', 81, NULL, NULL),
(77, 'Muy buena', 88, NULL, NULL),
(78, 'Buena', 88, NULL, NULL),
(79, 'Más o menos', 88, NULL, NULL),
(80, 'Mala', 88, NULL, NULL),
(81, 'Muy mala', 88, NULL, NULL),
(82, 'Muy buena', 89, NULL, NULL),
(83, 'Buena', 89, NULL, NULL),
(84, 'Más o menos', 89, NULL, NULL),
(85, 'Mala', 89, NULL, NULL),
(86, 'Muy mala', 89, NULL, NULL),
(87, 'Madre', 90, NULL, NULL),
(88, 'Padre', 90, NULL, NULL),
(89, 'Hermano', 90, NULL, NULL),
(90, 'Otro', 90, NULL, NULL),
(91, 'Madre', 92, NULL, NULL),
(92, 'Padre', 92, NULL, NULL),
(93, 'Tutor', 92, NULL, NULL),
(94, 'Otro', 92, NULL, NULL),
(95, 'Muy buena', 95, NULL, NULL),
(96, 'Buena', 95, NULL, NULL),
(97, 'Más o menos', 95, NULL, NULL),
(98, 'Mala', 95, NULL, NULL),
(99, 'Muy mala', 95, NULL, NULL),
(100, 'Muy buena', 100, NULL, NULL),
(101, 'Buena', 100, NULL, NULL),
(102, 'Más o menos', 100, NULL, NULL),
(103, 'Mala', 100, NULL, NULL),
(104, 'Muy mala', 100, NULL, NULL),
(105, 'Si', 98, NULL, NULL),
(106, 'No', 98, NULL, NULL),
(113, 'Sin respuesta', 99, NULL, NULL),
(114, 'Muy buena', 99, NULL, NULL),
(115, 'Buena', 99, NULL, NULL),
(116, 'Más o menos', 99, NULL, NULL),
(117, 'Mala', 99, NULL, NULL),
(118, 'Muy mala', 99, NULL, NULL),
(119, 'No', 153, NULL, NULL),
(120, 'Poco', 153, NULL, NULL),
(121, 'Frecuente/M', 153, NULL, NULL),
(122, 'Mucho', 153, NULL, NULL),
(123, 'No', 154, NULL, NULL),
(124, 'Poco', 154, NULL, NULL),
(125, 'Frecuente/M', 154, NULL, NULL),
(126, 'Mucho', 154, NULL, NULL),
(127, 'No', 155, NULL, NULL),
(128, 'Poco', 155, NULL, NULL),
(129, 'Frecuente/M', 155, NULL, NULL),
(130, 'Mucho', 155, NULL, NULL),
(131, 'No', 156, NULL, NULL),
(132, 'Poco', 156, NULL, NULL),
(133, 'Frecuente/M', 156, NULL, NULL),
(134, 'Mucho', 156, NULL, NULL),
(135, 'No', 157, NULL, NULL),
(136, 'Poco', 157, NULL, NULL),
(137, 'Frecuente/M', 157, NULL, NULL),
(138, 'Mucho', 157, NULL, NULL),
(139, 'No', 158, NULL, NULL),
(140, 'Poco', 158, NULL, NULL),
(141, 'Frecuente/M', 158, NULL, NULL),
(142, 'Mucho', 158, NULL, NULL),
(143, 'No', 159, NULL, NULL),
(144, 'Poco', 159, NULL, NULL),
(145, 'Frecuente/M', 159, NULL, NULL),
(146, 'Mucho', 159, NULL, NULL),
(147, 'No', 160, NULL, NULL),
(148, 'Poco', 160, NULL, NULL),
(149, 'Frecuente/M', 160, NULL, NULL),
(150, 'Mucho', 160, NULL, NULL),
(151, 'No', 161, NULL, NULL),
(152, 'Poco', 161, NULL, NULL),
(153, 'Frecuente/M', 161, NULL, NULL),
(154, 'Mucho', 161, NULL, NULL),
(155, 'No', 162, NULL, NULL),
(156, 'Poco', 162, NULL, NULL),
(157, 'Frecuente/M', 162, NULL, NULL),
(158, 'Mucho', 162, NULL, NULL),
(159, 'No', 163, NULL, NULL),
(160, 'Poco', 163, NULL, NULL),
(161, 'Frecuente/M', 163, NULL, NULL),
(162, 'Mucho', 163, NULL, NULL),
(163, 'No', 164, NULL, NULL),
(164, 'Poco', 164, NULL, NULL),
(165, 'Frecuente/M', 164, NULL, NULL),
(166, 'Mucho', 164, NULL, NULL),
(167, 'No', 165, NULL, NULL),
(168, 'Poco', 165, NULL, NULL),
(169, 'Frecuente/M', 165, NULL, NULL),
(170, 'Mucho', 165, NULL, NULL),
(171, 'No', 166, NULL, NULL),
(172, 'Poco', 166, NULL, NULL),
(173, 'Frecuente/M', 166, NULL, NULL),
(174, 'Mucho', 166, NULL, NULL),
(175, 'No', 167, NULL, NULL),
(176, 'Poco', 167, NULL, NULL),
(177, 'Frecuente/M', 167, NULL, NULL),
(178, 'Mucho', 167, NULL, NULL),
(179, 'No', 168, NULL, NULL),
(180, 'Poco', 168, NULL, NULL),
(181, 'Frecuente/M', 168, NULL, NULL),
(182, 'Mucho', 168, NULL, NULL),
(183, 'No', 169, NULL, NULL),
(184, 'Poco', 169, NULL, NULL),
(185, 'Frecuente/M', 169, NULL, NULL),
(186, 'Mucho', 169, NULL, NULL),
(187, 'No', 170, NULL, NULL),
(188, 'Poco', 170, NULL, NULL),
(189, 'Frecuente/M', 170, NULL, NULL),
(190, 'Mucho', 170, NULL, NULL),
(191, 'No', 171, NULL, NULL),
(192, 'Poco', 171, NULL, NULL),
(193, 'Frecuente/M', 171, NULL, NULL),
(194, 'Mucho', 171, NULL, NULL),
(195, 'No', 172, NULL, NULL),
(196, 'Poco', 172, NULL, NULL),
(197, 'Frecuente/M', 172, NULL, NULL),
(198, 'Mucho', 172, NULL, NULL),
(199, 'No', 173, NULL, NULL),
(200, 'Poco', 173, NULL, NULL),
(201, 'Frecuente/M', 173, NULL, NULL),
(202, 'Mucho', 173, NULL, NULL),
(203, 'No', 174, NULL, NULL),
(204, 'Poco', 174, NULL, NULL),
(205, 'Frecuente/M', 174, NULL, NULL),
(206, 'Mucho', 174, NULL, NULL),
(207, 'No', 175, NULL, NULL),
(208, 'Poco', 175, NULL, NULL),
(209, 'Frecuente/M', 175, NULL, NULL),
(210, 'Mucho', 175, NULL, NULL),
(211, 'No', 176, NULL, NULL),
(212, 'Poco', 176, NULL, NULL),
(213, 'Frecuente/M', 176, NULL, NULL),
(214, 'Mucho', 176, NULL, NULL),
(215, 'No', 177, NULL, NULL),
(216, 'Poco', 177, NULL, NULL),
(217, 'Frecuente/M', 177, NULL, NULL),
(218, 'Mucho', 177, NULL, NULL),
(219, 'Si', 191, NULL, NULL),
(220, 'No', 191, NULL, NULL),
(221, 'Si', 202, NULL, NULL),
(222, 'No', 202, NULL, NULL),
(223, 'Si', 203, NULL, NULL),
(224, 'No', 203, NULL, NULL),
(225, 'Si', 204, NULL, NULL),
(226, 'No', 204, NULL, NULL),
(227, 'Si', 205, NULL, NULL),
(228, 'No', 205, NULL, NULL),
(229, 'Si', 206, NULL, NULL),
(230, 'No', 206, NULL, NULL),
(231, 'Si', 207, NULL, NULL),
(232, 'No', 207, NULL, NULL),
(233, 'Si', 208, NULL, NULL),
(234, 'No', 208, NULL, NULL),
(235, 'Si', 209, NULL, NULL),
(236, 'No', 209, NULL, NULL),
(237, 'Si', 210, NULL, NULL),
(238, 'No', 210, NULL, NULL),
(239, 'Si', 211, NULL, NULL),
(240, 'No', 211, NULL, NULL),
(241, 'Si', 212, NULL, NULL),
(242, 'No', 212, NULL, NULL),
(243, 'Si', 213, NULL, NULL),
(244, 'No', 213, NULL, NULL),
(245, 'Si', 214, NULL, NULL),
(246, 'No', 214, NULL, NULL),
(247, 'Si', 215, NULL, NULL),
(248, 'No', 215, NULL, NULL),
(249, 'Si', 216, NULL, NULL),
(250, 'No', 216, NULL, NULL),
(251, 'Si', 217, NULL, NULL),
(252, 'No', 217, NULL, NULL),
(253, 'Si', 218, NULL, NULL),
(254, 'No', 218, NULL, NULL),
(255, 'Si', 219, NULL, NULL),
(256, 'No', 219, NULL, NULL),
(257, 'Si', 220, NULL, NULL),
(258, 'No', 220, NULL, NULL),
(259, 'Si', 221, NULL, NULL),
(260, 'No', 221, NULL, NULL),
(261, 'Si', 222, NULL, NULL),
(262, 'No', 222, NULL, NULL),
(263, 'Si', 223, NULL, NULL),
(264, 'No', 223, NULL, NULL),
(265, 'Si', 224, NULL, NULL),
(266, 'No', 224, NULL, NULL),
(267, 'Si', 225, NULL, NULL),
(268, 'No', 225, NULL, NULL),
(269, 'Si', 226, NULL, NULL),
(270, 'No', 226, NULL, NULL),
(271, 'Si', 227, NULL, NULL),
(272, 'No', 227, NULL, NULL),
(273, 'Si', 228, NULL, NULL),
(274, 'No', 228, NULL, NULL),
(275, 'Si', 229, NULL, NULL),
(276, 'No', 229, NULL, NULL),
(277, 'Si', 230, NULL, NULL),
(278, 'No', 230, NULL, NULL),
(279, 'Si', 231, NULL, NULL),
(280, 'No', 231, NULL, NULL),
(281, 'Si', 232, NULL, NULL),
(282, 'No', 232, NULL, NULL),
(283, 'Si', 233, NULL, NULL),
(284, 'No', 233, NULL, NULL),
(285, 'Si', 234, NULL, NULL),
(286, 'No', 234, NULL, NULL),
(287, 'Si', 235, NULL, NULL),
(288, 'No', 235, NULL, NULL),
(289, 'Si', 236, NULL, NULL),
(290, 'No', 236, NULL, NULL),
(291, 'Si', 237, NULL, NULL),
(292, 'No', 237, NULL, NULL),
(293, 'Si', 238, NULL, NULL),
(294, 'No', 238, NULL, NULL),
(295, 'Si', 239, NULL, NULL),
(296, 'No', 239, NULL, NULL),
(297, 'Si', 240, NULL, NULL),
(298, 'No', 240, NULL, NULL),
(299, 'Si', 241, NULL, NULL),
(300, 'No', 241, NULL, NULL),
(301, 'Si', 242, NULL, NULL),
(302, 'No', 242, NULL, NULL),
(303, 'Si', 243, NULL, NULL),
(304, 'No', 243, NULL, NULL),
(305, 'Si', 244, NULL, NULL),
(306, 'No', 244, NULL, NULL),
(307, 'Si', 245, NULL, NULL),
(308, 'No', 245, NULL, NULL),
(309, 'Si', 246, NULL, NULL),
(310, 'No', 246, NULL, NULL),
(311, 'Si', 247, NULL, NULL),
(312, 'No', 247, NULL, NULL),
(313, 'Si', 248, NULL, NULL),
(314, 'No', 248, NULL, NULL),
(315, 'Si', 249, NULL, NULL),
(316, 'No', 249, NULL, NULL),
(317, 'Si', 250, NULL, NULL),
(318, 'No', 250, NULL, NULL),
(319, 'Si', 251, NULL, NULL),
(320, 'No', 251, NULL, NULL),
(321, 'Si', 252, NULL, NULL),
(322, 'No', 252, NULL, NULL),
(323, 'Si', 253, NULL, NULL),
(324, 'No', 253, NULL, NULL),
(325, 'Si', 254, NULL, NULL),
(326, 'No', 254, NULL, NULL),
(327, 'Si', 255, NULL, NULL),
(328, 'No', 255, NULL, NULL),
(329, 'Si', 256, NULL, NULL),
(330, 'No', 256, NULL, NULL),
(331, 'Si', 257, NULL, NULL),
(332, 'No', 257, NULL, NULL),
(333, 'Si', 258, NULL, NULL),
(334, 'No', 258, NULL, NULL),
(335, 'Si', 259, NULL, NULL),
(336, 'No', 259, NULL, NULL),
(337, 'Si', 260, NULL, NULL),
(338, 'No', 260, NULL, NULL),
(339, 'Si', 261, NULL, NULL),
(340, 'No', 261, NULL, NULL),
(341, 'No, consideras que tu opinión sea buena y que la de los demás no tenga porque serlo siempre.', 262, NULL, NULL),
(342, 'Si, pero sólo ante las decisiones que consideras demasiado importantes como para actuar precipitadamente. ', 262, NULL, NULL),
(343, 'Si, siempre que puedes consultas con los demás. Te equivocas con frecuencia y quieres hacer las cosas bien.', 262, NULL, NULL),
(344, 'Depende de la decisión. Sueles tener claro lo que vas a hacer, pero consideras las posibilidades que te ofrecen los demas.', 262, NULL, NULL),
(345, 'No le das importancia, te comportas con naturalidad y si alguien te lo comenta haces alguna broma al respecto.', 263, NULL, NULL),
(346, 'Te da mucha vergüenza. Procuras situarte en algún lugar discreto y pasar desapercibido. ', 263, NULL, NULL),
(347, 'Te sientes incómodo pero tratas de no pensar en ello, te entegras en la reunión y das alguna excusa por tu error.', 263, NULL, NULL),
(348, 'No te importa nada en absoluto, aunque no lleves la ropa adecuada tienes estil y sabes llevar bien cualquier cosa.', 263, NULL, NULL),
(349, 'Admiras el estilo de tu acompañante, al final compras un par de prendas necesarias por muy simples en cuanto a forma y color.', 264, NULL, NULL),
(350, 'No estás dispuesto a que te gane, decides comprar varias prendas muy modernas y bastante caras.', 264, NULL, NULL),
(351, 'Asmiras su estilo pero eres muy consciente del tuyo, compras la ropa que mejor te sienta y que necesitas, y pasan un rato ameno probándolos cosas diferentes. ', 264, NULL, NULL),
(352, 'A su lado te sientes bastante poca cosa, te quita las ganas de probarte nada y mucho menos de comprar. Pones una excusa y te marchas.', 264, NULL, NULL),
(353, 'No crees que tengas mucho que contar, tu trabajo es muy corriente, tus amigos son normales y tus aficiones también. Prefieres que esta persona te cuente su vida.', 265, NULL, NULL),
(354, 'Tu trabajo te gusta y aunque sea corriente, siempre lo enfocas desde una perspectiva interesante, tus aficiones son tu pasión y disfrutas hablando de ellas, tambien hablas de tus proyectos futuros. ', 265, NULL, NULL),
(355, 'Hablasen lineas generales de tu tabajo y de tus aficiones, sobre todo hablas de tus amigos y de lo más interesante de sus vidas', 265, NULL, NULL),
(356, 'Más que tu trabajo actual, hablas de tus proyectos y de tus objetivos, y de lo que vas a hacer para logrados, de lo buenas que son tus amistades y lo poco usual de tus aficiones. Te gusta hablar de ti.', 265, NULL, NULL),
(357, 'Paras la explicación y requeres que se empiece de nuevo, si tu no lo eniendes habrá muchas gente que tampoco lo haga.', 266, NULL, NULL),
(358, 'Si hay más gente que pregunte tu también lo haces, si no, buscas en un aparte al ponente para que te aclare las dudas.', 266, NULL, NULL),
(359, 'Te da mucha vergüenza preguntar y demostrar así que no entiendes. Más tarde preguntarás a algún amigo o intentarás informante por tu cuenta.', 266, NULL, NULL),
(360, 'Tomas nota de lo que no entiendes para preguntarlo al finalizar la charla, si sigues con dudas perdirás información complementaria para prepararte mejor.', 266, NULL, NULL),
(361, 'Satisfactoria, tratas de buscar el lado positivo de las cosas y nunca te faltan proyectos y objetivos que perseguir.', 267, NULL, NULL),
(362, 'Horrible, no obstante, sabes que las cosas están mal y que tienes que aguantar lo que sea. Estás muy  agradecido por tener trabajo.', 267, NULL, NULL),
(363, 'No te prpeocupa especialmente el tema, tienes un montón de proyectos más importantes y con tu valía los alcanzarás.', 267, NULL, NULL),
(364, 'Has logrado que no te afecte, consideras más importante tu vida personal y privada y eso es por lo que luchas.', 267, NULL, NULL),
(365, 'Prefieres no pensarlo, el dia ha sido duro pero para ti no es algo nuevo, solo pides  poder dormir bien y que mañana sea un día más tranquilo.', 268, NULL, NULL),
(366, 'Se lo cuentas a todo el mundo, te gusta que se te reconozca cuando haces las cosas bien y exiges en cada que te mimen por haberte esforzado tanto.', 268, NULL, NULL),
(367, 'Esás muy satisgecho y decides darte un capricho, darte un baño de espuma y ver una buena película, o comparte un regalito que hace tiempo querías.', 268, NULL, NULL),
(368, 'Te preocupa que se te haya olvidado algo o haber hecho algo mal por la prisa, repasas mentalmente las actividades y al día  siguiente esperas no tener queja de nadie.', 268, NULL, NULL),
(369, 'No te planteas ser voluntario, hay mil personas más capacitadas que tú para la demostración y no se te da bien hablaren público.', 269, NULL, NULL),
(370, 'Te presentas voluntario, puede ser una experiencia interesante y si sales elegido puedes hacer una presentación innovadora.', 269, NULL, NULL),
(371, 'No te presentas, serías capaz de hacerla bien pero crees que hay gente mejor preparada y mas original que tú.', 269, NULL, NULL),
(372, 'Te presentas y estás casi seguro de que te elegirán, haces buenos proyectos y darás una buena imagen de la empresa.', 269, NULL, NULL),
(373, 'La buena suerte puede tocarle a todo el mundo, yo me considero una persona afortunada a la que la vida le sonríe.', 270, NULL, NULL),
(374, 'Para tener buena suerte hay que trabajar duro, sólo los muy afortunados la tienen sin apenas esfuerzo.', 270, NULL, NULL),
(375, 'Yo no tengo suerte, tanto los premios como las cosas especia les sólo les pasan a los demás.', 270, NULL, NULL),
(376, 'La suerte respecto a los premios es una cuestión de probabilidad, y respecto a las cosas de la vida, siempre depende de cómo se perciban.', 270, NULL, NULL),
(377, 'Te interesa conocerlos no sólo para pasar un buen rato en la reunión sino porque puede ser una forma de iniciar una amistad. ', 271, NULL, NULL),
(378, 'Esperas causarles una buena ompresión y decir cosas que les puedan interesar. ', 271, NULL, NULL),
(379, 'Te gustaría llevarles a tu terreno en la conversación para así poder hablar de los temas que más te interesan.', 271, NULL, NULL),
(380, 'Antes de iniciar una conversación escuchas lo que dicen, y es peras para halbar a que lo hagan de temas que tú conozcas.', 271, NULL, NULL),
(381, 'Con frecuencia', 282, NULL, NULL),
(382, 'De vez en cuando', 282, NULL, NULL),
(383, 'Casi nunca', 282, NULL, NULL),
(384, 'Nunca', 282, NULL, NULL),
(385, 'Con frecuencia', 283, NULL, NULL),
(386, 'De vez en cuando', 283, NULL, NULL),
(387, 'Casi nunca', 283, NULL, NULL),
(388, 'Nunca', 283, NULL, NULL),
(389, 'Con frecuencia', 284, NULL, NULL),
(390, 'De vez en cuando', 284, NULL, NULL),
(391, 'Casi nunca', 284, NULL, NULL),
(392, 'Nunca', 284, NULL, NULL),
(393, 'Con frecuencia', 285, NULL, NULL),
(394, 'De vez en cuando', 285, NULL, NULL),
(395, 'Casi nunca', 285, NULL, NULL),
(396, 'Nunca', 285, NULL, NULL),
(397, 'Con frecuencia', 286, NULL, NULL),
(398, 'De vez en cuando', 286, NULL, NULL),
(399, 'Casi nunca', 286, NULL, NULL),
(400, 'Nunca', 286, NULL, NULL),
(401, 'Con frecuencia', 287, NULL, NULL),
(402, 'De vez en cuando', 287, NULL, NULL),
(403, 'Casi nunca', 287, NULL, NULL),
(404, 'Nunca', 287, NULL, NULL),
(405, 'Con frecuencia', 288, NULL, NULL),
(406, 'De vez en cuando', 288, NULL, NULL),
(407, 'Casi nunca', 288, NULL, NULL),
(408, 'Nunca', 288, NULL, NULL),
(409, 'Con frecuencia', 289, NULL, NULL),
(410, 'De vez en cuando', 289, NULL, NULL),
(411, 'Casi nunca', 289, NULL, NULL),
(412, 'Nunca', 289, NULL, NULL),
(413, 'Con frecuencia', 290, NULL, NULL),
(414, 'De vez en cuando', 290, NULL, NULL),
(415, 'Casi nunca', 290, NULL, NULL),
(416, 'Nunca', 290, NULL, NULL),
(417, 'Siempre', 291, NULL, NULL),
(418, 'Casi siempre', 291, NULL, NULL),
(419, 'A veces ', 291, NULL, NULL),
(420, 'Casi nunca', 291, NULL, NULL),
(421, 'Nunca', 291, NULL, NULL),
(422, 'Siempre', 292, NULL, NULL),
(423, 'Casi siempre', 292, NULL, NULL),
(424, 'A veces ', 292, NULL, NULL),
(425, 'Casi nunca', 292, NULL, NULL),
(426, 'Nunca', 292, NULL, NULL),
(427, 'Siempre', 293, NULL, NULL),
(428, 'Casi siempre', 293, NULL, NULL),
(429, 'A veces ', 293, NULL, NULL),
(430, 'Casi nunca', 293, NULL, NULL),
(431, 'Nunca', 293, NULL, NULL),
(432, 'Siempre', 294, NULL, NULL),
(433, 'Casi siempre', 294, NULL, NULL),
(434, 'A veces ', 294, NULL, NULL),
(435, 'Casi nunca', 294, NULL, NULL),
(436, 'Nunca', 294, NULL, NULL),
(437, 'Siempre', 295, NULL, NULL),
(438, 'Casi siempre', 295, NULL, NULL),
(439, 'A veces ', 295, NULL, NULL),
(440, 'Casi nunca', 295, NULL, NULL),
(441, 'Nunca', 295, NULL, NULL),
(442, 'Siempre', 296, NULL, NULL),
(443, 'Casi siempre', 296, NULL, NULL),
(444, 'A veces ', 296, NULL, NULL),
(445, 'Casi nunca', 296, NULL, NULL),
(446, 'Nunca', 296, NULL, NULL),
(447, 'Siempre', 297, NULL, NULL),
(448, 'Casi siempre', 297, NULL, NULL),
(449, 'A veces ', 297, NULL, NULL),
(450, 'Casi nunca', 297, NULL, NULL),
(451, 'Nunca', 297, NULL, NULL),
(452, 'Siempre', 298, NULL, NULL),
(453, 'Casi siempre', 298, NULL, NULL),
(454, 'A veces ', 298, NULL, NULL),
(455, 'Casi nunca', 298, NULL, NULL),
(456, 'Nunca', 298, NULL, NULL),
(457, 'Siempre', 299, NULL, NULL),
(458, 'Casi siempre', 299, NULL, NULL),
(459, 'A veces ', 299, NULL, NULL),
(460, 'Casi nunca', 299, NULL, NULL),
(461, 'Nunca', 299, NULL, NULL),
(462, 'Siempre', 300, NULL, NULL),
(463, 'Casi siempre', 300, NULL, NULL),
(464, 'A veces ', 300, NULL, NULL),
(465, 'Casi nunca', 300, NULL, NULL),
(466, 'Nunca', 300, NULL, NULL),
(467, 'Siempre', 301, NULL, NULL),
(468, 'Casi siempre', 301, NULL, NULL),
(469, 'A veces ', 301, NULL, NULL),
(470, 'Casi nunca', 301, NULL, NULL),
(471, 'Nunca', 301, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers_types`
--

CREATE TABLE `answers_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `answers_types`
--

INSERT INTO `answers_types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'texto', 'Texto libre', NULL, NULL),
(2, 'opcion', 'Elegir entre varias opciones predeterminadas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `forms`
--

INSERT INTO `forms` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Evaluacion de la accion tutorial', 'Formulario sobre la Evaluacion de la accion tutorial', '2022-04-22 04:16:12', '2022-04-22 04:16:12'),
(2, 'Formato de entrevista', 'Formulario sobre Formato de entrevista', '2022-04-22 04:16:52', '2022-04-22 04:16:52'),
(3, 'Nombre de los hermanos del mayor al menor, incluyendote tú', 'Formulario sobre el Nombre de los hermanos del mayor al menor, incluyendote tú', '2022-04-22 04:17:31', '2022-04-22 04:17:31'),
(4, 'Economia familiar', 'Formulario sobre la Economia familiar', '2022-04-22 04:18:13', '2022-04-22 04:18:13'),
(5, 'Realizacion de estudios', 'Formulario sobre Realizacion de estudios', '2022-04-22 04:18:56', '2022-04-22 04:18:56'),
(6, 'Desajustes psicofisiologicos', 'Formulario sobre Desajustes psicofisiologicos', '2022-04-22 04:19:25', '2022-04-22 04:19:25'),
(7, 'Áreas de Integracion padres', 'Formulario sobre las Áreas de Integracion padres', '2022-04-22 04:20:37', '2022-04-22 04:20:37'),
(8, 'Áreas de Integracion hermanos', 'Formulario sobre las Áreas de Integracion con hermanos', '2022-04-22 04:21:16', '2022-04-22 04:21:16'),
(9, 'Áreas de Integracion familiares', 'Formulario sobre Áreas de Integracion familiares', '2022-04-22 04:24:08', '2022-04-22 04:24:08'),
(10, 'Área social', 'Formulario sobre Área social', '2022-04-22 04:24:30', '2022-04-22 04:24:30'),
(11, 'Características personales (madurez y equilibrio)', 'Formulario sobre Características personales (madurez y equilibrio)', '2022-04-22 04:24:54', '2022-04-22 04:24:54'),
(12, 'Área psicopedagógica', 'Formulario sobre Área psicopedagógica', '2022-04-22 04:25:21', '2022-04-22 04:25:21'),
(13, 'Plan de vida y carrera', 'Formulario sobre Plan de vida y carrera', '2022-04-22 04:25:50', '2022-04-22 04:25:50'),
(14, 'Características personales de...', 'Formulario sobre Características personales de...', '2022-04-22 04:26:59', '2022-04-22 04:26:59'),
(15, 'Encuesta para organización del estudio', 'Formulario sobre Encuesta para organización del estudio', '2022-04-22 04:27:33', '2022-04-22 04:27:33'),
(16, 'Encuesta sobre técnicas de estudio', 'Formulario sobre Encuesta sobre técnicas de estudio', '2022-04-22 04:28:01', '2022-04-22 04:28:01'),
(17, 'Encuesta sobre motivación para el estudio', 'Formulario sobre Encuesta sobre motivación para el estudio', '2022-04-22 04:28:25', '2022-04-22 04:28:25'),
(18, 'Test de autoestima', 'Formulario sobre Test de autoestima', '2022-04-22 04:28:56', '2022-04-22 04:28:56'),
(19, 'Test de asertividad', 'Formulario sobre Test de asertividad', '2022-04-22 04:30:58', '2022-04-22 04:30:58'),
(20, 'Evaluacion de la accion tutorial', 'Formulario sobre Evaluacion de la accion tutorial', '2022-04-22 04:31:23', '2022-04-22 04:31:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_user`
--

CREATE TABLE `form_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2020_05_07_154910_create_roles_table', 1),
(5, '2020_05_07_155218_create_role_user_table', 1),
(6, '2020_05_13_043855_create_forms_table', 1),
(7, '2020_05_13_044054_create_form_user_table', 1),
(8, '2020_05_14_173315_create_answer_types', 1),
(9, '2020_05_14_174429_create_questions_table', 1),
(10, '2020_05_18_045847_create_answers_table', 1),
(11, '2020_06_04_180009_create_answers_options', 1),
(12, '2020_06_22_180550_create_tutors_table', 1),
(13, '2020_06_22_181220_create_pupils_table', 1),
(14, '2020_06_22_181848_create_reunions_table', 1);

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
-- Estructura de tabla para la tabla `pupils`
--

CREATE TABLE `pupils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pupils`
--

INSERT INTO `pupils` (`id`, `coment`, `user_id`, `tutor_id`, `created_at`, `updated_at`) VALUES
(1, '', 3, 1, '2022-01-21 23:06:21', '2022-01-21 23:06:21'),
(2, '', 4, 1, '2022-01-21 23:06:21', '2022-01-21 23:06:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `answer_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `name`, `form_id`, `answer_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Foto', 2, 1, NULL, NULL),
(2, 'Nombre', 2, 1, NULL, NULL),
(3, 'Estatura', 2, 1, NULL, NULL),
(4, 'Peso', 2, 1, NULL, NULL),
(5, 'Carrera', 2, 1, NULL, NULL),
(6, 'Fecha de Nacimiento', 2, 1, NULL, NULL),
(7, 'Sexo', 2, 1, NULL, NULL),
(8, 'Edad', 2, 1, NULL, NULL),
(9, 'Estado Civil', 2, 2, NULL, NULL),
(10, 'Trabaja', 2, 2, NULL, NULL),
(11, 'Lugar de Nacimiento', 2, 1, NULL, NULL),
(12, 'Domicilio Actual', 2, 1, NULL, NULL),
(13, 'Teléfono', 2, 1, NULL, NULL),
(14, 'Codigo Postal', 2, 1, NULL, NULL),
(15, 'E-Mail', 2, 1, NULL, NULL),
(16, 'Tipo de vivienda', 2, 1, NULL, NULL),
(17, 'La casa o departamento onde vives es', 2, 2, NULL, NULL),
(18, 'Numero de personas con las que vives (Parentesco)', 2, 2, NULL, NULL),
(19, 'Nombre del Padre', 2, 1, NULL, NULL),
(32, 'Edad (Padre)', 2, 1, NULL, NULL),
(33, 'Trabaja (Padre)', 2, 2, NULL, NULL),
(34, 'Tipo de Trabajo (Padre)', 2, 1, NULL, NULL),
(35, 'Domicilio (Padre)', 2, 1, NULL, NULL),
(36, 'Teléfono (Padre)', 2, 1, NULL, NULL),
(37, 'Nombre de la Madre', 2, 1, NULL, NULL),
(38, 'Edad (Madre)', 2, 1, NULL, NULL),
(39, 'Trabaja (Madre)', 2, 2, NULL, NULL),
(40, 'Tipo de Trabajo (Madre)', 2, 1, NULL, NULL),
(41, 'Domicilio (Madre)', 2, 1, NULL, NULL),
(42, 'Teléfono (Madre)', 2, 1, NULL, NULL),
(43, 'Nombre', 3, 1, NULL, NULL),
(44, 'Fecha de Nacimiento', 3, 1, NULL, NULL),
(45, 'Sexo', 3, 1, NULL, NULL),
(46, 'Estudios', 3, 2, NULL, NULL),
(47, 'A cuanto ascienden los ingresos mensuales de tu familia', 4, 1, NULL, NULL),
(48, 'En caso de ser económicamente independiente a cuanto asciende tu ingreso', 4, 1, NULL, NULL),
(49, 'Primaria', 5, 1, NULL, NULL),
(50, 'Secundaria', 5, 1, NULL, NULL),
(51, 'Bachillerato', 5, 1, NULL, NULL),
(52, 'Estudios Superiores', 5, 1, NULL, NULL),
(53, 'Manos y/o pies hinchados', 6, 2, NULL, NULL),
(54, 'Dolores en el cientre', 6, 2, NULL, NULL),
(55, 'Dolores de cabeza y/o vómitos', 6, 2, NULL, NULL),
(56, 'Pérdida del equilibrio', 6, 2, NULL, NULL),
(57, 'Fatiga y agotamiento', 6, 2, NULL, NULL),
(58, 'Pérdida de vista u oído', 6, 2, NULL, NULL),
(59, 'Dificultades para dormir', 6, 2, NULL, NULL),
(60, 'Pesadillas o terroes nocturnos a que:', 6, 2, NULL, NULL),
(61, 'Incontinencia (orina, heces)', 6, 2, NULL, NULL),
(62, 'Tartamudeos al esplicarse', 6, 2, NULL, NULL),
(63, 'Miedos intensos ante cosas', 6, 2, NULL, NULL),
(80, '¿Cómo es la relación con tu familia?', 7, 1, NULL, NULL),
(81, '¿Existen dificultades?', 7, 2, NULL, NULL),
(82, '¿De que tipo?', 7, 2, NULL, NULL),
(83, '¿Qué actitud tienes con tu familia?', 7, 1, NULL, NULL),
(84, '¿Cómote relacionas con tu Padre?', 7, 1, NULL, NULL),
(85, '¿Qué actitud tienes hacia tu Padre?', 7, 1, NULL, NULL),
(86, '¿Cómote relacionas con tu Madre?', 7, 1, NULL, NULL),
(87, '¿Qué actitud tienes hacia tu Madre?', 7, 1, NULL, NULL),
(88, 'Relación', 8, 2, NULL, NULL),
(89, 'Actitud', 8, 2, NULL, NULL),
(90, '¿Con quién te sientes más ligado afectivamente?', 9, 2, NULL, NULL),
(91, 'Especificar por que', 9, 1, NULL, NULL),
(92, '¿Quién se ocupa más directamente de tu educación?', 9, 2, NULL, NULL),
(93, '¿Quién ha influido más en tu descisión para estudiar esta carrera?', 9, 1, NULL, NULL),
(94, 'Consideras importante facilitar algún otro dato sobre tu ambiente familiar', 9, 1, NULL, NULL),
(95, '¿Cómo es tu relación con los compañeros?', 10, 2, NULL, NULL),
(96, '¿Por qué?', 10, 1, NULL, NULL),
(97, '¿Cómo es tu relación con tus amigos?', 10, 1, NULL, NULL),
(98, '¿Tienes pareja?', 10, 2, NULL, NULL),
(99, '¿Cómo es tu relación con tu pareja?', 10, 2, NULL, NULL),
(100, '¿Cómo es tu relación con las autoridades académicas?', 10, 2, NULL, NULL),
(101, '¿Qué haces en tu tiempo libre?', 10, 1, NULL, NULL),
(102, '¿Cuál es tu actividad recreativa?', 10, 1, NULL, NULL),
(153, 'Puntual', 11, 2, NULL, NULL),
(154, 'Tímido/a', 11, 2, NULL, NULL),
(155, 'Alegre', 11, 2, NULL, NULL),
(156, 'Agresivo/a', 11, 2, NULL, NULL),
(157, 'Abierto/a a las ideas de otros', 11, 2, NULL, NULL),
(158, 'Reflexivo/a', 11, 2, NULL, NULL),
(159, 'Constante', 11, 2, NULL, NULL),
(160, 'Optimista', 11, 2, NULL, NULL),
(161, 'Impulsivo/a', 11, 2, NULL, NULL),
(162, 'Silencioso/a', 11, 2, NULL, NULL),
(163, 'Generoso/a', 11, 2, NULL, NULL),
(164, 'Inquieto/a', 11, 2, NULL, NULL),
(165, 'Cambios de humor ', 11, 2, NULL, NULL),
(166, 'Dominante', 11, 2, NULL, NULL),
(167, 'Egoísta', 11, 2, NULL, NULL),
(168, 'Sumiso/a', 11, 2, NULL, NULL),
(169, 'Confiado/a en si mismo/a', 11, 2, NULL, NULL),
(170, 'Imaginativo/a', 11, 2, NULL, NULL),
(171, 'Con iniciativa propia', 11, 2, NULL, NULL),
(172, 'Sociable', 11, 2, NULL, NULL),
(173, 'Responsable', 11, 2, NULL, NULL),
(174, 'Perseverante', 11, 2, NULL, NULL),
(175, 'Motivado/a', 11, 2, NULL, NULL),
(176, 'Activo/a', 11, 2, NULL, NULL),
(177, 'Independiente', 11, 2, NULL, NULL),
(178, '¿Cómo te gustaría ser?', 12, 1, NULL, NULL),
(179, '¿Recibes ayuda en tu casa para la realización de tareas escolares?', 12, 1, NULL, NULL),
(180, '¿Qué problemas personales intervienen en tus estudios?', 12, 1, NULL, NULL),
(181, '¿Cuál es tu rendimiento escolar?', 12, 1, NULL, NULL),
(182, 'Mendiona las asignaturas que cursas en el semestre actual.', 12, 1, NULL, NULL),
(183, '¿Cuál es tu asignatura preferia? ¿Por qué?', 12, 1, NULL, NULL),
(184, '¿Cuál es la asignatura en la que sobresales? ¿Por qué?', 12, 1, NULL, NULL),
(185, '¿Qué asignatura te desagrada? ¿Por qué?', 12, 1, NULL, NULL),
(186, '¿Cuál es tu asignatura con más bajo promedio del semestre anterior? ¿Por qué?', 12, 1, NULL, NULL),
(187, '¿Por qué vienes al Tecnológico?', 12, 1, NULL, NULL),
(188, '¿Para qué vienes al Tecnológico?', 12, 1, NULL, NULL),
(189, '¿Qué te motiva para venir al Tecnológico?', 12, 1, NULL, NULL),
(190, '¿Cuál es tu promedio general del ciclo anterior?', 12, 1, NULL, NULL),
(191, '¿Tienes asignaturas reprobadas?', 12, 2, NULL, NULL),
(192, '¿Cuales?', 12, 1, NULL, NULL),
(193, '¿Cuáles son tus planes inmediatos?', 13, 1, NULL, NULL),
(194, '¿Cuáles son tus metas en la vida?', 13, 1, NULL, NULL),
(195, 'Nombre del entrevistador', 13, 1, NULL, NULL),
(196, 'Yo soy...', 14, 1, NULL, NULL),
(197, 'Mi carácter es...', 14, 1, NULL, NULL),
(198, 'A mí me gusta que...', 14, 1, NULL, NULL),
(199, 'Yo aspiro en la vida...', 14, 1, NULL, NULL),
(200, 'Yo tengo miedo que...', 14, 1, NULL, NULL),
(201, 'Pero pienso que podré lograr...', 14, 1, NULL, NULL),
(202, '¿Sueles dejar para el último la preparación de tus trabajos?', 15, 2, NULL, NULL),
(203, '¿Crees que el sueño o el cansancio te impidan estudiar eficazmente en muchas ocasiones?', 15, 2, NULL, NULL),
(204, '¿Es frecuente que no termines tu tarea a tiempo?', 15, 2, NULL, NULL),
(205, '¿Tienes a emprear tiempo en leer revistas, ver televisión o charlar cuando debieras dedicarlos a estudiar?', 15, 2, NULL, NULL),
(206, 'Tus actividades sociales o deportivas. ¿Te llevan a descuidar, a menudo, tus tareas escolares?', 15, 2, NULL, NULL),
(207, '¿Sueles dejar pasar un dia o más antes de repasarlos apuntes tomados en clase?', 15, 2, NULL, NULL),
(208, '¿Sueles dedicar tu tiempo libre entre las 4:00 de la tarde y las 9:00 de la noche a otras actividades que no sean estudiar?', 15, 2, NULL, NULL),
(209, '¿Descubres algunas veces de pronto, que debes entregar una tarea antes de lo que creías?', 15, 2, NULL, NULL),
(210, '¿Te retrasas, con frecuencia, en una asignatura debido a que tienes que estudiar otra?', 15, 2, NULL, NULL),
(211, '¿Te parece que tu rendimiento es muy bajo, en relación con el tiempo que dedicas al estudio?', 15, 2, NULL, NULL),
(212, '¿Está situado tu escritorio directamiente en frente a una ventana, puerta u otra fuente de distracción?', 15, 2, NULL, NULL),
(213, '¿Sueles tiener fotografía, trofeos o recuerdos sobre tu mesa de cómodo?', 15, 2, NULL, NULL),
(214, '¿Sueles estudiar recostado en la cama o arrellanado en un asiento cómodo?', 15, 2, NULL, NULL),
(215, '¿Produce resplandor la lámpara que utilizas al estudiar?', 15, 2, NULL, NULL),
(216, 'Tu mesa de estudio ¿está tan desordenada y llena de objetos, que no dispones de sitio suficiente para estudiar con eficacía?', 15, 2, NULL, NULL),
(217, '¿Sueles interrumpir tu estudio, por personas que vienen a visitarte?', 15, 2, NULL, NULL),
(218, '¿Estudias, con frecuencia, mientras tienes puesta la televisión y/o la radio?', 15, 2, NULL, NULL),
(219, 'En el lugar donde estudias, ¿se pueden ver con facilidad revistas, fotos de jóvenes o materiales pertenecientes a tu afición?', 15, 2, NULL, NULL),
(220, '¿Con frecuencia, interrumpen tu estudio, actividades o ruidos que provienen del exterior?', 15, 2, NULL, NULL),
(221, '¿Sueles hacerse lento tu estudio debido a que no tienens a la mano los libroy los maeriales necesarios?', 15, 2, NULL, NULL),
(222, '¿Tiendes a comenzar la lectura de un libro de texto sin hojear previamente los subtitulos y las ilustraciones?', 16, 2, NULL, NULL),
(223, '¿Te saltas por lo general las figuras, gráficas y tablas cuando estudias un tema?', 16, 2, NULL, NULL),
(224, '¿Suele serte dificil seleccionar los puntos de los temas de estudio?', 16, 2, NULL, NULL),
(225, '¿Te sorprendes con cierta frecuencia, pensando en algo que no tiene nada que ver con lo que estudias?', 16, 2, NULL, NULL),
(226, '¿Sueles tener dificultad en entender tus apuntes de clase cuando tratas de repasarlos, despúes de cierto tiempo?', 16, 2, NULL, NULL),
(227, 'Al tomar notas, ¿te sueles quedar atrás con frecuencia debido a que no puedes escribir con suficiente rapidez?', 16, 2, NULL, NULL),
(228, 'Poco después de comenzar un curso, ¿sueles encontrarte con tus apuntes formando un \"revoltijo\"?', 16, 2, NULL, NULL),
(229, '¿Tomas normalmente tus apuntes tratando de escribir las palabras exactas del docente?', 16, 2, NULL, NULL),
(230, 'Cuando tomas notas de un libro,  ¿tienes la costumbre de copiar el material necesario, palabra por Palabra?', 16, 2, NULL, NULL),
(231, '¿Te es dificil preparar un temario de una evaluación formulas un resumen de este?', 16, 2, NULL, NULL),
(232, '¿Tienes problemas para organizar los datos o el contenido de un evaluación?', 16, 2, NULL, NULL),
(233, '¿Al repasar el temario de una evaluación formulas un resumen de este?', 16, 2, NULL, NULL),
(234, '¿Te preparas a veces para una evaluación memorizando fórmulas, definiciones o reglas que no entiendes con claridad?', 16, 2, NULL, NULL),
(235, '¿Te resulta dificil decidir qué estudiar y cómo estudiarlo cuando preparas un evaluación?', 16, 2, NULL, NULL),
(236, '¿Sueles tener dificultades para organizar, en un orden lógico, las asignaturas que debes estudiar por temas?', 16, 2, NULL, NULL),
(237, 'Al preparar evaluación, ¿sueles estudiar toda la asignatura, en el último momento?', 16, 2, NULL, NULL),
(238, '¿Sueles entregar tus exámenes sin revisarlos detenidamente, para ver si tienen algún  error cometido por descuido?', 16, 2, NULL, NULL),
(239, '¿Te es posible con frecuencia terminar una evaluación de esposición de un tema en el tiempo prescrito?', 16, 2, NULL, NULL),
(240, '¿Sueles perder puntos en exámenes con preguntas de \"Verdadero - Falso, debido a que no lees determinante?', 16, 2, NULL, NULL),
(241, '¿Empleas normalmente mucho tiempo en contestar la primera mitad de la prueba y tienes que apresurarte en la segunda?', 16, 2, NULL, NULL),
(242, 'Después de los primeros días o semanas del curso, ¿tiendes a perder interés por el estudio?', 17, 2, NULL, NULL),
(243, '¿Crees que en general, basta estudiar lo necesario para obtener un \"aprobado\" en las asignaturas.', 17, 2, NULL, NULL),
(244, '¿Te sientes frecuentemente confuso o indeciso sobre cuáles deben ser tus metas formativas y profesionales?', 17, 2, NULL, NULL),
(245, '¿Sueles pensar que no vale la pena el tiempo y el esfuerzo que son necesarios para lograr una educación universitaria? ', 17, 2, NULL, NULL),
(246, '¿Crees que es mas importante divertirte y disfrutar de la vida, que estudiar?', 17, 2, NULL, NULL),
(247, '¿Sueles pasar el tiempo de clase en divagaciones o soñando despierto en lugar de atender al docente?', 17, 2, NULL, NULL),
(248, '¿Te sientes habitualmente incapaz de concentrarte en tus estudios debido a que estas inquieto, aburrido o de mal humor?', 17, 2, NULL, NULL),
(249, '¿Piensas con frecuencia que las asignaturas que estudias tienen poco valor practico para ti?', 17, 2, NULL, NULL),
(250, '¿Sientes, frecuentes deseos de abandonar la escuela y conseguir un trabajo?', 17, 2, NULL, NULL),
(251, '¿Sueles tener la sensación de lo que se enseña en los centros docentes no te prepara para afrontar los problemas de la vida adulta?', 17, 2, NULL, NULL),
(252, '¿Sueles dedicarte a modo casual, según el estado de ánimo en que te encuentres?', 17, 2, NULL, NULL),
(253, '¿Te horroriza estudiar libros de textos porque son insipidos y aburridos?', 17, 2, NULL, NULL),
(254, '¿Esperas normalmente a que te fijen la fecha de un evaluación para comenzar a estudiar los textos o repasar tus apuntes de clases?', 17, 2, NULL, NULL),
(255, '¿Sueles pensar que los exámenes son pruebas penosas de las que no se puede escapar y respecto a las cuales lo que debe hacerse es sobrecicir, del modo que sea?', 17, 2, NULL, NULL),
(256, '¿Sientes con frecuencia que tus docientes no comprenden las necesidades de los estudiantes?', 17, 2, NULL, NULL),
(257, '¿Tienes normalmente la sensación de que tus docentes exigen demasiadas horas de estudio fuera de clase?', 17, 2, NULL, NULL),
(258, '¿Dudas por lo general, en pedir ayuda a tus docentes en tareas que te son difíciles?', 17, 2, NULL, NULL),
(259, '¿Sueles pensar que tus docentes no tienen contacto con los temas y sucesos de actualidad?', 17, 2, NULL, NULL),
(260, '¿Te sientes reacio, por lo general, a hablar con tus docentes de tus proyectos futuros, de estudio o profesionales?', 17, 2, NULL, NULL),
(261, '¿Criticas con frecuencia a tus docentes cuando charlas con tus compañeros?', 17, 2, NULL, NULL),
(262, 'A la hora de tomar decisiones en tu vida, como proponer cosas nuevas en el trabajo, iniciar alguna actividad de ocio, o elegir un color nuevo para pintar tu casa, ¿sueles buscar la aprobación o el apoyo de las personas que te rodean?', 18, 2, NULL, NULL),
(263, 'Imagina que estás en una reunión social o familiar importante; adviertes que 110 vas vestido para la ocasión y que desentonas con los demás, ¿cómo te comportas?', 18, 2, NULL, NULL),
(264, 'Tienes muchas ganas de irte a comprar ropa y le pides a algún amigo que te acompañe. Esta persona es más alta y más atractiva que tú, y todo lo que se prueba le queda mucho mejor que a ti.', 18, 2, NULL, NULL),
(265, 'Un día conoces a alguien nuevo y muy interesante, estas charlando animadamente y llega el momento de hablar de ti, ¿cuál de las siguientes opciones mejor se ajusta a lo que cuentas?', 18, 2, NULL, NULL),
(266, 'En tu lugar de tabajo o de estudios, se está explicando algo que es completamente nuevo para ti. Llega un momento en que te das cuenta que no has entendido casi nada ¿qué haces?', 18, 2, NULL, NULL),
(267, 'Tener un trabajo bien remunerado y que nos guste es algo dificil de conseguir, si tuvieras que valorar tu empreo o situacion laboral, ¿cómo la definirías?', 18, 2, NULL, NULL),
(268, 'Has tenido un día duro, has trabajado con más ahínco para finalizar una tarea en la oficina, has hecho toda las gestiones que tenías pendientes, has resuelto un par de problemas doméstivos y encima le has hecho un favor a un amigo. ¿Qué haces al llegar a ', 18, 2, NULL, NULL),
(269, 'En tu trabajo están buscando a una persona que represente a la empresa en un consurso del ramo. Piden una persona que cumplia unos requisitos, entre ellos, explicar bien vuestro trabajo y que haga una demostración práctica del mismo.', 18, 2, NULL, NULL),
(270, '¿Con cuál de las siguientes frases sobre la buena fortuna estás más de acuerdo?', 18, 2, NULL, NULL),
(271, 'En una fiesta en la que no conocess a nadie excepto a los anfitriones, te presentan a un grupo de personas de aspecto interesante. ¿Cuál es tu actitud?', 18, 2, NULL, NULL),
(282, 'En una reunión dificil, con un ambiente caldeado, soy capaz de hablar de confianza.', 19, 2, NULL, NULL),
(283, 'Si no estoy segura de una cosa, puedo pedir ayuda fácilmente.', 19, 2, NULL, NULL),
(284, 'Si alguna persona es injusta y agresiva, puedo controlar la situación con confianza.', 19, 2, NULL, NULL),
(285, 'Si alguna persona se muestra irónica conmigo o con otras, puedo responder sin agresividad.', 19, 2, NULL, NULL),
(286, 'Si creo que se está abusando de mi, soy capaz de denunciarlo sin alterarme.', 19, 2, NULL, NULL),
(287, 'Si alguna persona me pide permiso para hacer algo que no me gusta, por ejemplo, fumar, puedo decirle que no sin sentirme culpable.', 19, 2, NULL, NULL),
(288, 'Si alguna persona pide mi opinión sobre alguna cosa me siento bien dádosela, aunque no concuerde con la de los demás.', 19, 2, NULL, NULL),
(289, 'Puedo conectar fácil y efectivamente con personas que considero importantes.', 19, 2, NULL, NULL),
(290, 'Cuando encuentro defectos en una tienda o restaurante, soy capaz de exponerlos sin atacar a las otras personas y sin sentirme mal.', 19, 2, NULL, NULL),
(291, 'Tengo toda la informaciónnecesaria sobre el programa de tutoriá de mi plantel.', 20, 2, NULL, NULL),
(292, 'Tengo todas las facilidades en mi departamento para ejercer el programa de tutoria.', 20, 2, NULL, NULL),
(293, 'Si no entiendo algún problema de mis tutorados lo canalizo a la instancia correspondient fácilmente.', 20, 2, NULL, NULL),
(294, 'Tengo a la mano los instrumentos necesarios para identificar las necesidades de tutoría de mis tutorados.', 20, 2, NULL, NULL),
(295, 'La programación de asignatudas en la carreda de mis tutorados les permite asistir a las actividades de apoyo y/o cursos de mejora programados.', 20, 2, NULL, NULL),
(296, 'Tengo buena comunicación y relaciones interpersonales con mis tutorados.', 20, 2, NULL, NULL),
(297, 'Tengo buena comunicación con la coordinacion de tutoría.', 20, 2, NULL, NULL),
(298, 'El tiempo que tengo para preparar mis actividades tutoriales es suficiente.', 20, 2, NULL, NULL),
(299, 'El espacio donde llevo a cabo la actividad tutorial es agradable y poseetodos los requerimientos necesarios.', 20, 2, NULL, NULL),
(300, 'He recibido la capacitación necesaria para ejercer la tutoría.', 20, 2, NULL, NULL),
(301, 'En mi plantel existe la actualización permanente en tuanto al programa de tuotoría.', 20, 2, NULL, NULL),
(302, 'Comentarios.', 20, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reunions`
--

CREATE TABLE `reunions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date_time` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pupil_id` bigint(20) UNSIGNED NOT NULL,
  `tutor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'tutor', NULL, NULL),
(3, 'student', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(2, 2, 2, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(3, 3, 3, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(4, 4, 3, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(5, 5, 3, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(6, 6, 3, '2022-01-21 21:39:29', '2022-01-21 21:39:29'),
(7, 7, 3, '2022-01-21 21:39:29', '2022-01-21 21:39:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutors`
--

CREATE TABLE `tutors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tutors`
--

INSERT INTO `tutors` (`id`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tutor de prueba', 2, '2022-01-21 22:57:09', '2022-01-21 22:57:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controlNumber` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `campus`, `faculty`, `controlNumber`, `picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'Admin@user.com', NULL, '$2y$10$tNXqdkQ/0XfYsKjRthQUIeF1vR.Qi8u3CL6Sv8D6eOCan7RD3t70.', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 10321000, '', NULL, NULL, NULL),
(2, 'Tutor User', 'Tutor@user.com', NULL, '$2y$10$eeLpoQBgyQqGOpY3hFi1HOl/eiR/1UHxYhXJqwwFcqq1kasSeSicK', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 10321001, '', 'qhu911oP7OPl9VRzbLdXasTsr6yTgeJD6wDiqWTKVeGhBGRZzmS8RajwSRmW', NULL, NULL),
(3, 'Student User', 'Student@user.com', NULL, '$2y$10$cy0uWYEUnfZdPDunN9kisuYT0On/Wwlrsamj2a/6SBsEurKXqFmuW', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 10321002, '', NULL, NULL, NULL),
(4, 'Francisco', 'Francisco@user.com', NULL, '$2y$10$saEJ3cNB7B28o4NnhVS8Q.YjdSMOh.DfWohTTE/q1C368xL2mMm.m', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 14321079, '', NULL, NULL, NULL),
(5, 'Gerardo', 'Gerardo@user.com', NULL, '$2y$10$htuZnrs5eSNBZ3YXbozw2usltgDFACmwxiOlAzOJLp4llabxpV5x6', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 14321080, '', NULL, NULL, NULL),
(6, 'Paula', 'Paula@user.com', NULL, '$2y$10$aolKbePi0JnutlXLl5ESq.nO/7iv3FKLrHiVVP0NjJH/jw.VNPdHq', 'Instituto Tecnologico de Acapulco', 'Ingeniería Bioquímica', 14321081, '', NULL, NULL, NULL),
(7, 'Alina', 'Alina@user.com', NULL, '$2y$10$Ahqp6LfuvR4UJya4gNPmM.xJUNn0PuKuBAJPNaDyR85pX/soZL1jS', 'Instituto Tecnologico de Acapulco', 'Ingeniería en Sistemas Computacionales', 14321078, '', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `answers_options`
--
ALTER TABLE `answers_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_options_question_id_foreign` (`question_id`);

--
-- Indices de la tabla `answers_types`
--
ALTER TABLE `answers_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form_user`
--
ALTER TABLE `form_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_user_form_id_foreign` (`form_id`),
  ADD KEY `form_user_user_id_foreign` (`user_id`);

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
-- Indices de la tabla `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pupils_user_id_foreign` (`user_id`),
  ADD KEY `pupils_tutor_id_foreign` (`tutor_id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_form_id_foreign` (`form_id`),
  ADD KEY `questions_answer_type_id_foreign` (`answer_type_id`);

--
-- Indices de la tabla `reunions`
--
ALTER TABLE `reunions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reunions_pupil_id_foreign` (`pupil_id`),
  ADD KEY `reunions_tutor_id_foreign` (`tutor_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tutors_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_controlnumber_unique` (`controlNumber`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `answers_options`
--
ALTER TABLE `answers_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=472;

--
-- AUTO_INCREMENT de la tabla `answers_types`
--
ALTER TABLE `answers_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `form_user`
--
ALTER TABLE `form_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pupils`
--
ALTER TABLE `pupils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT de la tabla `reunions`
--
ALTER TABLE `reunions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `answers_options`
--
ALTER TABLE `answers_options`
  ADD CONSTRAINT `answers_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Filtros para la tabla `form_user`
--
ALTER TABLE `form_user`
  ADD CONSTRAINT `form_user_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`),
  ADD CONSTRAINT `form_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `pupils`
--
ALTER TABLE `pupils`
  ADD CONSTRAINT `pupils_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`),
  ADD CONSTRAINT `pupils_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_answer_type_id_foreign` FOREIGN KEY (`answer_type_id`) REFERENCES `answers_types` (`id`),
  ADD CONSTRAINT `questions_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`);

--
-- Filtros para la tabla `reunions`
--
ALTER TABLE `reunions`
  ADD CONSTRAINT `reunions_pupil_id_foreign` FOREIGN KEY (`pupil_id`) REFERENCES `pupils` (`id`),
  ADD CONSTRAINT `reunions_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `tutors`
--
ALTER TABLE `tutors`
  ADD CONSTRAINT `tutors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
