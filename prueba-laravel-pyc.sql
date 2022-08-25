-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para test
DROP DATABASE IF EXISTS `test`;
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `test`;

-- Volcando estructura para tabla test.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.categories: ~17 rows (aproximadamente)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Música clásica', 'Aunque el término música clásica abarca numerosos subgéneros, se denomina así a las grandes composiciones creadas durante el periodo que abarca los siglos XVII, XVIII y principios del XIX, con obras cumbres que surgieron de genios de la música, como por ejemplo: Wagner, Beethoven, Mozart, Vivaldi, Bach o Chopin. Se considera clásica porque es una música atemporal que va más allá de la época en la que fue compuesta y, siglos después, sigue despertando admiración. Por ello, escuchar música clásica actualmente abarca siglos de historia.', '2022-08-22 08:21:40', '2022-08-24 16:23:35'),
	(2, 'Jazz', 'El sonido innovador de la música jazz irrumpió en Estados Unidos a finales del siglo XIX, especialmente en algunas ciudades como Nueva Orleans. Es una música cautivadora y ecléctica, pero con identidad propia. Combina ritmos de blues, swing, tendencias musicales europeas de la época e incluso acordes de música clásica en piano u otros instrumentos, para obtener su sorprendente sonido, alegre y melancólico a partes iguales. Debes saber que el saxofón, trompeta y contrabajo son sus instrumentos clave, además de la improvisación en el escenario. Característica las big bands de grandes figuras, como Louis Amstrong o Tito Puentes.', '2022-08-22 08:21:40', '2022-08-24 16:23:58'),
	(3, 'Blues', 'Íntimamente conectado con el jazz, (algunos lo consideran su predecesor) el blues hunde sus raíces en la música africana que trajeron consigo los esclavos llevados a Estados Unidos. Aquellas tristes canciones fusionadas con otros ritmos americanos y occidentales, hicieron del blues un género musical de gran influencia en la música posterior. Han destacado figuras como B.B. King o Eric Clapton.', '2022-08-22 08:21:40', '2022-08-24 16:24:21'),
	(4, 'Góspel', 'El góspel está dentro de la música religiosa (un género propio), pero poco tiene que ver con los cantos gregorianos de un convento. Esta música espiritual y afroamericana, alcanza su máxima expresión a mediados del siglo XX, de la mano de los coros de las iglesias protestantes o evangélicas. Son cánticos de alabanza a Dios en los que, con sorprendente ritmo y vitalidad, combinan melodías africanas con los himnos y salmos evangélicos.', '2022-08-22 08:21:40', '2022-08-24 16:24:37'),
	(5, 'Soul', 'El soul (alma en inglés) es un género musical que ha influido de manera notable en corrientes musicales posteriores. Tiene su origen en los años 50 y se caracteriza por las melodías pausadas y las letras cargadas de sentimiento y nostalgia. Tiene puntos en común con el góspel, pero su ritmo es mucho más lento.', '2022-08-22 08:21:40', '2022-08-24 16:25:06'),
	(6, 'Pop', 'El pop es una mezcla de distintos ritmos musicales. Se empezó a denominar "pop" en los años 50 del pasado siglo, por ser un tipo de música ligera, bailable, cantable y, en definitiva, "popular". Sigue de moda, existen cantantes y grupos pop en todo el mundo y en cualquier idioma, aunque algunos opinan que el origen de este ritmo pegadizo y universal nació en Liverpool con Los Beatles. El pop es uno de los géneros musicales más escuchados en todo el mundo.', '2022-08-22 08:21:40', '2022-08-24 16:25:22'),
	(7, 'Rock and Roll', 'La música pop no es la única que empieza a estar de moda en los años 50. También en estos años el Rock and Roll despunta como otro género que perdurará en el tiempo. Ritmos bailables, melodías pegadizas y protagonismo de guitarras eléctricas y de batería son sus señas de identidad. Como máximo representante, Elvis Presley. Debes saber que los musicales de rock son conocidos mundialmente.', '2022-08-22 08:21:40', '2022-08-24 16:25:37'),
	(8, 'Country', 'El country es un género clásico de la música popular de Estados Unidos que sigue contando con adeptos en todo el mundo. Estética "vaquera" y canciones sencillas a la guitarra acompañada de otros instrumentos musicales, como el violín, la mandolina o el banjo, estos forman parte de la tradición americana.', '2022-08-22 08:21:40', '2022-08-24 16:25:51'),
	(9, 'Disco', 'Como se intuye, la música disco es la que está pensada para que, cuando suene, la pista de baile de la discoteca se llene. Es en la década de los 70 cuando irrumpe con fuerza en el panorama musical y sigue siendo la favorita de muchos.', '2022-08-22 08:21:40', '2022-08-24 16:26:06'),
	(10, 'Techno', 'El techno es un género musical que deriva de la música disco, cuando se empieza a incluir en ella atrevidos acordes hechos en mesas de mezcla de sonido y, sobre todo, con sintetizadores electrónicos. Se dice los primeros DJs que proporcionaron un nuevo aire a la música disco, fueron los de la ciudad de Detroit en la década de los 80.', '2022-08-22 08:21:40', '2022-08-24 16:26:19'),
	(11, 'Reggae', 'Los acordes del reggae son fácilmente reconocibles por su sencillez y porque se repiten una y otra vez, dándole a cualquier melodía una cadencia constante. Es un género musical originario de Jamaica con importantes reminiscencias africanas, también de la cultura rastafari. La dio a conocer al mundo el mítico Bob Marley.', '2022-08-22 17:38:27', '2022-08-24 16:26:33'),
	(12, 'Salsa', 'Es uno de los ritmos latinos más populares en todo el mundo por sus pegadizas melodías que invitan a bailar (salsa, por supuesto). La salsa, música ligada a la cultura cubana, es una mezcla del propio son cubano y de otras melodías caribeñas y latinoamericanas.', '2022-08-22 17:39:13', '2022-08-24 16:26:47'),
	(15, 'Ranchera', 'Al igual que el flamenco en España, la ranchera es el género musical popular más arraigado en México. Las primeras melodías de este tipo datan del siglo XIX, aunque el apogeo del género llegó con el siglo XX. Siempre unida a los mariachis, las rancheras, con sus letras de amores imposibles y traiciones, son la expresión del pueblo mexicano.', '2022-08-24 16:32:33', '2022-08-24 16:32:33'),
	(16, 'Rap', 'El hip hop no es exactamente un género musical, sino una corriente cultural nacida en los 70, en barrios neoyorkinos como Brooklyn y el Bronx, encabezada por afroamericanos y emigrantes procedentes de distintos países latinos. Los grafitis o el breakdancing son manifestaciones de lo que fue una innovadora cultura urbana, con el rap como música. Los ritmos sencillos, pero potentes y las rimas improvisadas cargadas de denuncia social, definen el género.', '2022-08-24 16:32:59', '2022-08-24 16:32:59'),
	(17, 'Metal', 'El metal y su expresión más extrema, el heavy metal, es una evolución de la música rockera que alcanza su apogeo en los años 80, especialmente en los países occidentales. Es un tipo de música potente, con gran fuerza instrumental y máxima presencia de guitarras eléctricas con punteos "imposibles" acompañados de voces intensas, de fuertes agudos o graves profundos. Iron Maiden o Metallica son algunos de los grupos más representativos.', '2022-08-24 16:33:15', '2022-08-24 16:33:15'),
	(18, 'Funk', 'De la fusión de distintos géneros musicales, como el jazz, el soul y los ritmos latinos, unidos a algunos elementos propios del rock, el funk surge con fuerza a finales de los 60 en Estados Unidos, evolucionando con rapidez al incorporar acordes propios de la incipiente música electrónica. Se considera la "semilla" de lo que sería la música disco.', '2022-08-24 16:33:27', '2022-08-24 16:33:27'),
	(19, 'Bossa Nova', 'La suave y pegadiza bossa nova forma parte de la tradición musical brasileña. Su armoniosa melodía es una delicada evolución de los ritmos de la samba combinados con el jazz. Canciones tan populares como La chica de Ipanema son un claro ejemplo de este género musical atemporal.', '2022-08-24 16:33:39', '2022-08-24 16:33:39');

-- Volcando estructura para tabla test.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;

-- Volcando estructura para tabla test.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.migrations: ~7 rows (aproximadamente)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(7, '2022_08_20_201913_add_username', 2),
	(8, '2022_08_22_024936_create_categories_table', 3),
	(9, '2022_08_22_024909_create_posts_table', 4);

-- Volcando estructura para tabla test.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;

-- Volcando estructura para tabla test.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;

-- Volcando estructura para tabla test.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `observations` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.posts: ~9 rows (aproximadamente)
DELETE FROM `posts`;
INSERT INTO `posts` (`id`, `title`, `description`, `observations`, `image`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'CORELLI: Concerti grossi op. 6. Gli Incogniti. Violín y dirección: Amandine Beyer', 'Atrapado entre los grandes fastos de Verdi y Wagner, el tercer centenario de la muerte de Arcangelo Corelli ha pasado casi inadvertido entre nosotros, pero hay pocas músicas tan perfectas, y tan admiradas e imitadas, como sus Concerti grossi op. 6. Es difícil imaginarlos interpretados con más convicción, ímpetu o delicadeza que en este registro dominado por la magnética personalidad de la violinista francesa Amandine Beyer.', NULL, '1302ed33-298d-4c53-9324-c0198981b6d9.webp', 1, 4, '2022-08-24 16:40:17', '2022-08-24 16:40:17'),
	(2, 'BACH: Sonatas y Partitas (vol. 1). Chris Thile (mandolina)', 'Cuesta creer que pueda tocarse realmente así, pero el polifacético Chris Thile –que da con ello el salto de la música bluegrass a la clásica– hace suyas estas obras con la naturalidad y el desparpajo de los más grandes. Bien tocado y pensado, Bach admite casi cualquier traslación y las piezas que él escribió originalmente para violín suenan en la omnipotente mandolina del joven portento estadounidense como recién compuestas por un genio intemporal. Una revelación.', NULL, '80ef5090-5850-47fd-80ea-9ee0518ba051.jpg', 1, 4, '2022-08-24 16:43:29', '2022-08-24 16:43:29'),
	(3, 'BACH: Pasión según san Juan. Dunedin Consort. Dirección: John Butt', 'Existen versiones para casi todos los gustos de la Pasión según san Juan, pero ninguna presenta la música de Bach enmarcada en el contexto litúrgico de un servicio de Vísperas del Viernes Santo en el Leipzig de su época, que es como la escucharon en su día sus conciudadanos. Apoyado en sus formidables conocimientos teóricos y en un grupo cada vez mejor atemperado a su desbordante idiosincrasia, John Butt nos muestra una obra que creíamos conocer bajo una nueva luz y el resultado es deslumbrante.', NULL, '8779da8e-d220-4c7a-9457-223bcab7251a.jpg', 1, 4, '2022-08-24 16:44:47', '2022-08-24 16:44:47'),
	(4, 'Kind of Blue', 'El disco de Miles Davis Kind of Blues es sin duda alguna el álbum más reconocido en la historia del Jazz. Se publicó en 1959 y es parte de la corriente del Cool Jazz y Jazz Modal.\r\n\r\nEl disco es el continuo de la experimentación de Jazz Modal que Miles empezó en el disco Milestone. La aportación más significativa es seguramente la del pianista Bill Evans que añade su toque introspectivo e impresionista a lo largo del disco, especialmente en temas como la balada Blue in Green.', 'Músicos:\r\n\r\n    Miles Davis (trompeta)\r\n    John Coltrane (saxo tenor)\r\n    Julian "Cannonball" Adderley (saxo alto)\r\n    Bill Evans (piano)\r\n    Winton Kelly (piano en la canción Freddie Freeloader)\r\n    Paul Chambers (contrabajo)\r\n    Jimmy Cobb (batería)', '44b655c2-d7f9-4341-9276-c645c4d570db.jpg', 2, 4, '2022-08-24 16:48:28', '2022-08-24 16:48:28'),
	(5, 'Ella and Louis', 'En 1956 la cantante Ella Fitzgerald graba este disco junto al gran trompetista y cantante Louis Armstrong. Dos voces completamente diferentes se unen y complementan perfectamente en este disco espectacular. Es uno de los mejores discos para los novatos del Jazz pero también un icono para los oyentes más experimentados.', 'Músicos:\r\n\r\n    Ella Fitzgerald – vocals\r\n    Louis Armstrong – vocals, trumpet\r\n    Oscar Peterson – piano\r\n    Herb Ellis – guitar\r\n    Ray Brown – bass\r\n    Buddy Rich – drums', 'a3de801e-4983-49c6-95c1-04953f4a047e.jpg', 2, 4, '2022-08-24 16:49:58', '2022-08-24 16:49:58'),
	(6, 'Blue Train', 'Es un disco del saxofonista John Coltrane publicado en 1958 por Blue Note. El estilo es Hard Bop y los dos temas que destacan son Blue Train y Moment\'s Notice.', 'Músicos\r\n\r\n    John Coltrane – tenor saxophone\r\n    Lee Morgan – trumpet\r\n    Curtis Fuller – trombone\r\n    Kenny Drew – piano\r\n    Paul Chambers – bass\r\n    Philly Joe Jones – drums', '346b9cc7-aa37-4757-ace2-ac6aebcfdc65.jpg', 2, 4, '2022-08-24 16:51:31', '2022-08-24 16:51:31'),
	(7, 'The Sidewinder', 'Uno de los clásicos de la trompeta Jazz. El disco fue grabado por Lee Morgan en 1964 y mezcla elementos de Jazz Soul y Blues.', 'Músicos:\r\n\r\n    Lee Morgan – trumpet\r\n    Joe Henderson – tenor saxophone\r\n    Barry Harris – piano\r\n    Bob Cranshaw – double bass\r\n    Billy Higgins – drums', '24c1d44f-6ef4-4f6d-b2fe-8a581fd7953c.jpg', 2, 4, '2022-08-24 16:52:33', '2022-08-24 16:52:33'),
	(8, 'King Of The Delta Blues', 'Conocida como la Emperatriz del Blues, Bessie Smith estaba considerada como una auténtica superestrella en los años veinte del pasado siglo y fue una auténtica fuerza de la naturaleza que vivió a su manera su corta pero intensa vida.\r\n\r\nA mediados de los 60 Columbia Record sacó a la calle una compilación de esta leyenda llegando a vender la exorbitante cifra de un millón de discos, algo inimaginable para el blues por entonces.', NULL, '5f94bea3-2749-413a-9191-11bea3f0056c.jpg', 3, 4, '2022-08-24 16:55:53', '2022-08-24 16:55:53'),
	(9, 'West Side Soul', 'Pieza fundamental del blues eléctrico, la sensible voz de Sam bien complementada con su poderoso sonido, el blues de Chicago ya no seria el mismo…', NULL, 'd049a644-9515-4e07-8671-726cec3c7b16.jpg', 3, 4, '2022-08-24 16:57:03', '2022-08-24 16:57:03'),
	(10, 'Moanin’ At The Moonlight', 'ndispensable por donde se lo escuche, se llenaría una enciclopedia con la cantidad de músicos (blancos y negros) que utilizaron los acordes de este trabajo. Dixon en las letras, Hubert Sumlin en las guitarras y el gran lobo aullador estremeciendo hasta la médula .', '', '2afb122f-9d48-4dca-be57-514666f45a17.jpg', 3, 4, '2022-08-24 16:58:46', '2022-08-24 16:58:46'),
	(11, 'At Last', 'Esta gran cantante aquí se mueve como pez en el agua, se corre de la sutileza a la pasión en materia de registro como nunca nadie lo había hecho hasta ahora, ¿se imaginan la repercusión que habrá sido cuando James entonaba “I Just Wanna Make Love To You” por ese entonces…?', NULL, '8041a0ed-a489-43c7-b6a6-0c9053ad7d32.jpg', 3, 4, '2022-08-24 17:01:23', '2022-08-24 17:01:23'),
	(12, 'Who\'s Next', 'Sin saber qué camino tomar tras el éxito de Tommy, el guitarrista de The Who Pete Townshend trató de emularlo con Lifehouse, que iba a ser una ambiciosa ópera rock de ciencia ficción. Pero el proyecto se abandonó en favor de un disco de rock clásico. Y fue una afortunada decisión, porque además de salvar a Townshend de una crisis nerviosa y a la banda de la ruptura, supuso la creación de nueve temazos que se conviertieron en clásicos instantáneos.', NULL, '6fdb4b65-e300-4da7-a889-e30c26cd07bf.jpg', 7, 4, '2022-08-24 17:02:50', '2022-08-24 17:02:50'),
	(13, 'The Rise and Fall of Ziggy Stardust and the Spiders from Mars', 'Dicen que la mitad de lo que hoy en día ves y escuchas en la música rock viene de David Bowie y la otra mitad no importa. Y aunque quizá eso sea un pelín exagerado, este torrente de glam cayendo en cascada desde el planeta Marte es –junto a Tommy y el Thick as a brick de Jethro Tull– el álbum conceptual definitivo. Su álter ego en forma de superestrella alienígena bisexual nos dejó una de sus mejores canciones, Starman, y con esta obra maestra de galácticas proporciones redefinió lo que podía ser una rockstar.', NULL, '83cbdccb-cb7f-4b06-974f-1d0c94e83a3f.jpg', 7, 4, '2022-08-24 17:04:07', '2022-08-24 17:04:07'),
	(14, 'IV', 'Seguramente los muy MUY fans de Led Zeppelin se quedarían con el magnífico Physical Graffiti como el disco más completo de la banda, pero este IV tiene tal cantidad de hits que es imposible no recomendarlo a quien se adentre por primera vez en territorio Zep. Puro rock and roll (literalmente, en el tema 2), con la dosis justa de folk y hard rock, además de por supuesto, el mejor solo de guitarra de la historia. Gracias por todo, Jimmy Page.', NULL, 'ea3833e0-a31d-402f-b6be-99fc4be81a9f.jpg', 7, 4, '2022-08-24 17:05:14', '2022-08-24 17:05:14'),
	(15, 'Paranoid', 'Este es uno de los discos más importantes en la historia de la música. De acuerdo con Rob Halford este disco es muy importante porque es el modelo del metal. Además de que llevó al mundo a un nuevo sonido y a un nuevo escenario. Por otro lado, los temas que manejan son importantes para las próximas generaciones.', NULL, '7053a941-e9b5-4e64-99fe-6acfecc4d12b.jpg', 17, 4, '2022-08-24 17:07:45', '2022-08-24 17:07:45'),
	(16, 'Master of Puppets', 'No podemos negar que este disco es una obra maestra, pues tiene canciones de mayor duración y con un arreglo musical más amplio. Por si fuera poco, es uno de los discos que tiene el toque único e inolvidable de Cliff Burton, el bajista que murió en 1986 por un drástico accidente.', NULL, '2eb40722-2489-4967-8098-a35139dcc439.jpg', 17, 4, '2022-08-24 17:09:56', '2022-08-24 17:09:56'),
	(17, 'British Steel', 'Este es uno de los discos que cualquier interesado en el metal debe escuchar. La intimidante voz de Rob Halford marcó un gran e imponente camino en el metal británico para volverse más fuerte y pesado. \'Acortamos las canciones, incrementamos la emoción y el tempo e hicimos algo que todo el mundo pensaba que no se podía hacer, que no era aceptable como heavy metal: le metimos melodía\', dijo el guitarrista Glenn Tipton.', NULL, '833991a4-008c-44e3-ba24-964de47e0f8c.jpg', 17, 4, '2022-08-24 17:11:19', '2022-08-24 17:11:19');

-- Volcando estructura para tabla test.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla test.users: ~3 rows (aproximadamente)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
	(4, 'Paulo Cesar', 'correo@correo.com', NULL, '$2y$10$AEkjDmTRcnWDUqIjCO71G.L1oQtQdkiBB8nZM1OK98kp2YJ0YVtSa', NULL, '2022-08-21 02:07:32', '2022-08-25 20:56:21', 'pylloldi');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
