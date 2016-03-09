CREATE TABLE `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `dni` VARCHAR(15) NOT NULL,
    `username` VARCHAR(50) NOT NULL,
    `email` VARCHAR(80) NOT NULL,
    `password` VARCHAR(250) NOT NULL,
    `authKey` VARCHAR(250) NOT NULL,
    `accessToken` VARCHAR(250) NOT NULL,
    `activate` TINYINT(1) NOT NULL DEFAULT '0',
    `verification_code` VARCHAR(250) NOT NULL,
    `role` INT(11) NOT NULL DEFAULT '1',
    `interinos` CHAR(1) NULL DEFAULT NULL,
    `actos` CHAR(1) NULL DEFAULT NULL,
    `concursos` CHAR(1) NULL DEFAULT NULL,
    `oposiciones` CHAR(1) NULL DEFAULT NULL,
    `contraseña` VARCHAR(16) NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=17
;


INSERT INTO `users` (`id`, `dni`, `username`, `email`, `password`, `authKey`, `accessToken`, `activate`, `verification_code`, `role`, `interinos`, `actos`, `concursos`, `oposiciones`, `contraseña`) VALUES (1, '17703071V', 'javier', 'javieriranzo@hotmail.com', 'fssruqF8WfbJ2', '6c20cabb208c48ca167646d5ebc991986c22e6cf435d0f354d26a88835498fa2c9727f20b48d23ffd13569a9dd28db1a853066f0932aa616c4927727e37495e0ae5cab2ec015879b146df3f4471eac1526d65fa96b6fd67ec396dd3e191712a70bbe6093', '542672bfdf2d06c7397de6973fe3cfdbab3c7d5e4a12acceb74218e5d0879c8060afd65b1254a012a364b791d089c78473709cb64905f2d5ede4a5ab3de941f5f4b0c17fcd14b3e595d3f113f9a738b5c34d4497b081d1649b1fabe912b38de30038251c', 1, 'c5762ca6', 2, '1', '1', '1', '1', 'usuario1');
