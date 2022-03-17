CREATE DATABASE u244070043_irtvm;
USE u244070043_irtvm;

CREATE TABLE `usuario`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`,) VALUES (001,'920117196','99c8e67ed2bd530ba32352c0a6debb33');
INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`,) VALUES (003,'920100939','43a0c51be022464da60c31521b6255e3');