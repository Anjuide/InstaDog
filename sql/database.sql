CREATE DATABASE InstDog;


CREATE USER InstDog IDENTIFIED WITH mysql_native_password AS 'instdog'; 


GRANT ALL PRIVILEGES ON *.* TO 'InstDog'@'localhost'  WITH GRANT OPTION;   



CREATE TABLE UserDog ( 
    id INT(100) NOT NULL  AUTO_INCREMENT,
    email varchar(255) , 
    pasword varchar(255) ,
    dateLastConnection DATE , 
    nam varchar(100)  ,
     PRIMARY KEY (id)
); 


-- rName varchar(100) ,
--    country varchar(50) ,
--    city varchar(50) , 
--   PRIMARY KEY (id)   
     
--); 

CREATE TABLE Dog (
    id INT(100) NOT NULL AUTO_INCREMENT ,
    nickName INT ,
    birthday DATE ,
    picture varchar(100),
    idUser INT(100) ,
    PRIMARY KEY (id),
    FOREIGN KEY (idUser) REFERENCES UserDog(id)

);     

CREATE TABLE Article (
    id INT(100) NOT NULL  AUTO_INCREMENT,
    textArticle TEXT ,
    publicationDat DATE ,
    picture varchar(100),
    idDog INT(100) ,
    PRIMARY KEY (ID) ,
    FOREIGN KEY (idDog) REFERENCES Dog(id)

);


CREATE TABLE Comment (
    id INT NOT NULL  AUTO_INCREMENT,
    textComment varchar(250) ,
    commentDate DATE ,
    idArticle INT(100) ,
    idUser INT(100) ,
    PRIMARY KEY (id) ,
    FOREIGN KEY (idUser) REFERENCES UserDog(id)
    
); 


CREATE TABLE Race (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name varchar(100),
    PRIMARY KEY(id)
  
);
    

CREATE TABLE DogRace (
    idDog INT(100),
    idRace INT(100) ,
    PRIMARY KEY (idDog, idRace ) ,
    FOREIGN KEY (idDog) REFERENCES Dog(id),
    FOREIGN KEY (idRace) REFERENCES Race(id) 
         
);

