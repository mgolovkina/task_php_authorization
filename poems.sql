-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 02 2015 г., 16:59
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `poems`
--

-- --------------------------------------------------------

--
-- Структура таблицы `poems`
--

CREATE TABLE IF NOT EXISTS `poems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `author` varchar(256) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `poems`
--

INSERT INTO `poems` (`id`, `title`, `author`, `text`) VALUES
(1, 'Обнимайте любимых людей', 'Владимир Ток', 'Обнимайте любимых людей,\r\nБез особых на то причин.\r\nМожно стать в сотню раз сильней,\r\nЛишь поверив, что ты не один.\r\n\r\nЧеловеку уже теплей,\r\nЕсли рядом надежный друг.\r\nЖизнь не дарит нам легких путей,\r\nНо и мы не опустим рук.\r\n\r\nОбнимайте заместо слов,\r\nБудьте счастливы за других,\r\nИ прощайте своих врагов,\r\nБерегите своих родных.\r\n\r\nЧеловеку уже смелей,\r\nС жарким сердцем вперед шагать,\r\nЕсли рядом тот самый друг,\r\nКого хочется обнимать.'),
(2, '***', 'Амина Новак', 'Можно я сегодня, как Высоцкий\r\nРасскажу о том, что не люблю?\r\nБудет мой рассказ весьма коротким-\r\nСлишком долго просто я терплю…\r\nНе люблю нахальных грубых хамов,\r\nКто достиг определенных лет,\r\nВидят лишь всегда одни изъяны,\r\nБудто в людях лучших качеств нет.\r\nНе люблю продажных отношений\r\nИ дележку на твое-мое.\r\nТех, кто ради низменных свершений,\r\nСвету тычет грязное белье.\r\nНе люблю вранья и подхалимов-\r\nЧестность что-то стала не в чести.\r\nНе люблю блатных понтов галимых-\r\nВрут и рвут рубаху на груди.\r\nНе люблю завистников ленивых,\r\nТех, кто хает вечно всех подряд.\r\nСотворив себе кумиров лживых,\r\nЗализать их дО смерти хотят.\r\nНе люблю альфонсов и подонков-\r\nКто живет на женское бабло.\r\nСтелет мягко, только спать-то жестко.\r\nЛет на сто таких припасено.\r\nНе люблю гламур на силиконе-\r\nКажется, надуешь и взлетит.\r\nБольше по душе мне те, кто скромен,\r\nКто глазами тянет, как магнит.\r\nНе люблю заносчивых глупышек.\r\nНе глупышек даже, просто дур\r\nОтличить их сложно от мартышек,\r\nНесмотря на качество фигур.\r\nВот такой коротенький рассказик,\r\nКак вначале обещала я.\r\nКто не вник, то можно еще разик\r\nПрочитать. Ни строчки в нем вранья!'),
(3, '***', 'Вита Савицкая', 'Знаешь... как трудно... быть хрупкой и маленькой...\r\nСтрогой... красивой...у всех на виду...\r\nЖить между... сказкой... надеждой и паникой...\r\nИ называть... ерундой ...ерунду...\r\n\r\nЗнаешь... как трудно... страницами чистыми...\r\nДни начинать... без чужих параной...\r\nИ рассыпаться... отважными искрами...\r\nВ ливень холодный... почти ледяной...\r\n\r\nЗнаешь... как трудно... мечты пересаживать...\r\nЧтобы мороз... не сумел их... убить...\r\nИ разбираться... с запутанной пряжею...\r\nЧтоб отыскать... путеводную нить...\r\n\r\nЗнаешь... как трудно... молчаньем... не одами...\r\nБоль усмирять ... и тушить миражи...\r\nЗнаешь... как трудно.. .быть нежной и подлинной...\r\nВ мире... лежащем по горло... во лжи...'),
(4, 'Зимнее утро', 'Александр Пушкин', 'Мороз и солнце; день чудесный! \r\nЕще ты дремлешь, друг прелестный — \r\nПора, красавица, проснись: \r\nОткрой сомкнуты негой взоры \r\nНавстречу северной Авроры, \r\nЗвездою севера явись! \r\n\r\nВечор, ты помнишь, вьюга злилась, \r\nНа мутном небе мгла носилась; \r\nЛуна, как бледное пятно, \r\nСквозь тучи мрачные желтела, \r\nИ ты печальная сидела — \r\nА нынче... погляди в окно: \r\n\r\nПод голубыми небесами \r\nВеликолепными коврами, \r\nБлестя на солнце, снег лежит; \r\nПрозрачный лес один чернеет, \r\nИ ель сквозь иней зеленеет, \r\nИ речка подо льдом блестит. \r\n\r\nВся комната янтарным блеском \r\nОзарена. Веселым треском \r\nТрещит затопленная печь. \r\nПриятно думать у лежанки. \r\nНо знаешь: не велеть ли в санки \r\nКобылку бурую запречь? \r\n\r\nСкользя по утреннему снегу, \r\nДруг милый, предадимся бегу \r\nНетерпеливого коня \r\nИ навестим поля пустые, \r\nЛеса, недавно столь густые, \r\nИ берег, милый для меня.'),
(5, 'Не жалею, не зову, не плачу', 'Сергей Есенин', 'Не жалею, не зову, не плачу, \r\nВсе пройдет, как с белых яблонь дым. \r\nУвяданья золотом охваченный, \r\nЯ не буду больше молодым. \r\n\r\nТы теперь не так уж будешь биться, \r\nСердце, тронутое холодком, \r\nИ страна березового ситца \r\nНе заманит шляться босиком. \r\n\r\nДух бродяжий! ты все реже, реже \r\nРасшевеливаешь пламень уст \r\nО моя утраченная свежесть, \r\nБуйство глаз и половодье чувств. \r\n\r\nЯ теперь скупее стал в желаньях, \r\nЖизнь моя? иль ты приснилась мне? \r\nСловно я весенней гулкой ранью \r\nПроскакал на розовом коне. \r\n\r\nВсе мы, все мы в этом мире тленны, \r\nТихо льется с кленов листьев медь... \r\nБудь же ты вовек благословенно, \r\nЧто пришло процвесть и умереть.');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_last` datetime NOT NULL,
  PRIMARY KEY (`id_session`),
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `sid`, `time_start`, `time_last`) VALUES
(15, 1, '0xeCIQQWa6', '2015-12-02 16:46:25', '2015-12-02 16:46:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `name`) VALUES
(1, 'admin', '6316f74c33ac4a63ca9d86002242eb72', 'Марина');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
