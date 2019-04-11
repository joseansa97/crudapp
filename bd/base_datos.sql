CREATE TABLE `tblprod` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_code` varchar(20) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_ctry` varchar(50) NOT NULL,
  `prod_qty` int(20) NOT NULL,
  `price` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE usuarios (
  id int(10) PRIMARY KEY AUTO_INCREMENT,
  prod_code VARCHAR(10) NOT NULL,
  prod_name VARCHAR(30) NOT NULL,
  prod_ctry VARCHAR(50) NOT NULL,
  prod_qty VARCHAR(50) NOT NULL,
  price VARCHAR(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE usuarios (
  id int(10) PRIMARY KEY AUTO_INCREMENT,
  ncontrol VARCHAR(10) NOT NULL,
  nombre VARCHAR(30) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  correo VARCHAR(50) NOT NULL,
  telefono VARCHAR(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;