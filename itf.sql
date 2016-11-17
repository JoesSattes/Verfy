CREATE TABLE `files` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `timestamp` datetime NOT NULL,
    `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `file_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `file_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
