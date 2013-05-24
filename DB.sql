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
	baby_img VARCHAR(250),
	profile_id INT(11) NOT NULL
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
	details VARCHAR(400),
	profile_id INT(11) NOT NULL
);

create table first_visit_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	gin VARCHAR(150),
	estimated DATE,
	weight TINYINT,
	measurements VARCHAR(100),
	firstvisit VARCHAR(400),
	profile_id INT(11) NOT NULL
);

create table whoami_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(200),
	age TINYINT,
	profesion VARCHAR(100),
	location VARCHAR(100),
	dadsname VARCHAR(200),
	photo VARCHAR(250),
	profile_id INT(11) NOT NULL
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
	gross6 VARCHAR(100),
	profile_id INT(11) NOT NULL
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
	second_notes VARCHAR(400),
	profile_id INT(11) NOT NULL
);

create table belly_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	photo1 VARCHAR(250),
	photo2 VARCHAR(250),
	photo3 VARCHAR(250),
	profile_id INT(11) NOT NULL
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
	month3_other VARCHAR(100),
	profile_id INT(11) NOT NULL
);

create table moment_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	title VARCHAR(30),
	subtitle VARCHAR(40),
	photo VARCHAR(250),
	description VARCHAR(600),
	profile_id INT(11) NOT NULL,
	trimestre INT
);

create table ilovemybaby_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	today DATE,
	heartbeat INT,
	first_feeling VARCHAR(300)
);


create table childsex_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	theythink INT,
	ithink INT,
	decided INT,
	whyidecided VARCHAR(100),
	nickname VARCHAR(50)
);


create table firstkick_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	firstkick_date DATE,
	week VARCHAR(50),
	bigquestion INT,
	ifeel VARCHAR(200),
	craving1 VARCHAR(100),
	craving2 VARCHAR(100),
	craving3 VARCHAR(100),
	craving4 VARCHAR(100),
	gross1 VARCHAR(100),
	gross2 VARCHAR(100),
	gross3 VARCHAR(100),
	gross4 VARCHAR(100),
	photo VARCHAR(400),
	photo_date DATE
);



create table bellymonth_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	actual_weight INT,
	measurements VARCHAR(100),
	apetite INT,
	b4 VARCHAR(70),
	sleep INT
);


create table gettingclose_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	named VARCHAR(150),
	possiblename1 VARCHAR(150),
	possiblename2 VARCHAR(150),
	possiblename3 VARCHAR(150),
	possiblename4 VARCHAR(150),
	possiblename5 VARCHAR(150),
	favoritename INT,
	suggestedname1 VARCHAR(150),
	suggestedname2 VARCHAR(150),
	suggestedname3 VARCHAR(150),
	suggestedname4 VARCHAR(150),
	suggestedname5 VARCHAR(150),
	inlaw VARCHAR(150),
	parents VARCHAR(150)
);



create table babyshower_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	bbyshower_date DATE,
	present1 VARCHAR(100),
	present2 VARCHAR(100),
	present3 VARCHAR(100),
	favoritepresent INT,
	guest1 VARCHAR(140),
	guest2 VARCHAR(140),
	guest3 VARCHAR(140),
	photo1 VARCHAR(400),
	photo2 VARCHAR(400)
);

create table coolultrasound_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	ultrasound_date DATE,
	iwas INT,
	doctorsaid VARCHAR(400),
	photo VARCHAR(400),
	urdad INT,
	urdadsays VARCHAR(300),
	imiss VARCHAR(100),
	theythink INT
);

create table nesting_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	nest INT,
	buy1 VARCHAR(100),
	buy2 VARCHAR(100),
	buy3 VARCHAR(100),
	room_photo VARCHAR(400)
);


create table byebelly_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	byebelly_date DATE,
	itstarted INT,
	days INT,
	hours INT,
	iwas VARCHAR(250),
	experience VARCHAR(500)
);

create table specialdelivery_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	photo VARCHAR(400),
	uare VARCHAR(200),
	birthday DATE,
	hour VARCHAR(5),
	location VARCHAR(150),
	itwas INT,
	weightnmeasures VARCHAR(200),
	urhairneyes VARCHAR(400)
);

create table welcomebby_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	ulooklike VARCHAR(100),
	whocutit VARCHAR(150),
	ifelt VARCHAR(250),
	wheniholdu VARCHAR(300),
	metu VARCHAR(500),
	tilday VARCHAR(50),
	nighttime VARCHAR(500),
	most VARCHAR(200)
);

create table epilog_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	belly INT,
	notes VARCHAR(500)
);

create table newfamily_pages(
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	profile_id INT(11) NOT NULL,
	photo VARCHAR(400)
);












