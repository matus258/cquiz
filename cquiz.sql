CREATE TABLE `usuario` (
`nome` VARCHAR( 200 ) NOT NULL ,
`email` VARCHAR( 200 ) NOT NULL ,
`cpf` VARCHAR( 200 ) NOT NULL ,
`telefone` VARCHAR( 200 ) NOT NULL ,
`sexo` CHAR NOT NULL ,
`senha` VARCHAR( 200 ) NOT NULL ,
`dataNasc` DATE NOT NULL ,
`id` INT NOT NULL ,
PRIMARY KEY ( `id` )
)