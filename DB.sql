create table profiles(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(150),
	name VARCHAR(100),
	lastname VARCHAR(100),
	location VARCHAR(150),
	birthday VARCHAR(100),
	created DATETIME,
	cover_photo VARCHAR(250),
	font TINYINT,
	theme TINYINT
);

create table familytree_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	grandpa_dad VARCHAR(100), 
	grandma_dad VARCHAR(100), 
	grandpa_mom VARCHAR(100), 
	grandma_mom VARCHAR(100), 
	grandpa_dad_img VARCHAR(250), 
	grandma_dad_img VARCHAR(250), 
	grandpa_mom_img VARCHAR(250), 
	grandma_mom_img VARCHAR(250), 
	mom VARCHAR(100), 
	dad VARCHAR(100), 
	mom_img VARCHAR(250), 
	dad_img VARCHAR(250), 
	baby VARCHAR(100), 
	baby_img VARCHAR(250)
);

create table congrats_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	sospeche VARCHAR(150),
	prueba DATE,
	firstfeeling VARCHAR(150),
	babycoming TINYINT,
	howishare VARCHAR(200),
	babynum TINYINT,
	babybros VARCHAR(150),
	details VARCHAR(400)
);

create table first_visit_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	gin VARCHAR(150),
	estimated DATE,
	weight TINYINT,
	measurements VARCHAR(100),
	firstvisit VARCHAR(400)
);

create table whoami_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(200),
	age TINYINT,
	profesion VARCHAR(100),
	location VARCHAR(100),
	dadsname VARCHAR(200),
	photo VARCHAR(250)
);

create table sintom_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	matutinos VARCHAR(200),
	worst VARCHAR(100),
	craving1 VARCHAR(100),
	craving2 VARCHAR(100),
	craving3 VARCHAR(100),
	craving4 VARCHAR(100),
	craving5 VARCHAR(100),
	craving6 VARCHAR(100),
	weirdestcraving VARCHAR(250),
	gross1 VARCHAR(100),
	gross2 VARCHAR(100),
	gross3 VARCHAR(100),
	gross4 VARCHAR(100),
	gross5 VARCHAR(100),
	gross6 VARCHAR(100)
);

create table ultrasound_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	first_date DATE,
	first_week TINYINT,
	first_photo VARCHAR(250),
	first_notes VARCHAR(400),
	second_date DATE,
	second_week TINYINT,
	second_photo VARCHAR(250),
	second_notes VARCHAR(400)
);

create table belly_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	photo1 VARCHAR(250),
	photo2 VARCHAR(250),
	photo3 VARCHAR(250)
);


create table animo_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	month1_humor TINYINT,
	month2_humor TINYINT,
	month3_humor TINYINT,
	month1_energy TINYINT,
	month2_energy TINYINT,
	month3_energy TINYINT,
	month1_physical TINYINT,
	month2_physical TINYINT,
	month3_physical TINYINT,
	month1_other VARCHAR(100),
	month2_other VARCHAR(100),
	month3_other VARCHAR(100)
);

create table moment_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	title VARCHAR(30),
	subtitle VARCHAR(40),
	photo VARCHAR(250),
	description VARCHAR(600)
);