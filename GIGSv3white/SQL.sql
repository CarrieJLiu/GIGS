	
  DROP DATABASE IF EXISTS project1;
  CREATE DATABASE project1;
  GRANT USAGE ON *.* TO "root"@"localhost" IDENTIFIED BY "";
  GRANT ALL PRIVILEGES ON project1.* TO "root"@"localhost";

  USE project1;

  /* Create Users Table */

  CREATE TABLE IF NOT EXISTS employer (
    id int(11) NOT NULL AUTO_INCREMENT,
    userName varchar(128) NOT NULL,
    userEmail varchar(128) NOT NULL,
    userPWD varchar(128) NOT NULL,
    phone varchar(128) NOT NULL,
    country varchar(128) NOT NULL,
    city varchar(128) NOT NULL,
    province varchar(128) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 CREATE TABLE IF NOT EXISTS gigworker (
    id int(11) NOT NULL AUTO_INCREMENT,
    userName varchar(128) NOT NULL,
    userEmail varchar(128) NOT NULL,
    userPWD varchar(128) NOT NULL,
    phone varchar(128) NOT NULL,
    country varchar(128) NOT NULL,
    city varchar(128) NOT NULL,
    province varchar(128) NOT NULL,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS newchat (
  id int NOT NULL AUTO_INCREMENT,
  message text NOT NULL,
  `from` varchar(128) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS review (
  id int NOT NULL AUTO_INCREMENT,
	message text NOT NULL,
	PRIMARY KEY (id)
) ;
  
  CREATE TABLE gigs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(50) NOT NULL,
    city VARCHAR(50) NOT NULL,
    domain VARCHAR(50) NOT NULL,
    company VARCHAR(50) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    hourly_paid DECIMAL(8,2) NOT NULL
);

