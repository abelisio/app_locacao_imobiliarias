CREATE TABLE `locatario` (
  `idlocatario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_locatario` varchar(100) NOT NULL,
  `email_locatario` varchar(100) NOT NULL,
  `telefone_locatario` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idlocatario`)
);


CREATE TABLE `locador` (
  `idlocador` int(11) NOT NULL AUTO_INCREMENT,
  `nome_locador` varchar(100) NOT NULL,
  `email_locador` varchar(100) NOT NULL,
  `telefone_locador` varchar(15) DEFAULT NULL,
  `dia_repasse_locador` datetime NOT NULL,
  PRIMARY KEY (`idlocador`)
);


CREATE TABLE `imoveis` (
  `idimovel` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(400) DEFAULT NULL,
  `locador` varchar(100) NOT NULL,
  PRIMARY KEY (`idimovel`)
);


CREATE TABLE `contratos` (
  `idcontrato` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imovel` int(11) NOT null,
  `propietario` varchar(100) NOT NULL,
  `taxa_adminitracao` varchar(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `data_ini` datetime NOT NULL,
  `data_fim` datetime NOT NULL,
  `valor_aluguel` varchar(100) NOT NULL,
  `valor_condominio` varchar(100) NOT NULL,
  `valor_iptu` varchar(100) NOT NULL,
    PRIMARY KEY (`idcontrato`)
);