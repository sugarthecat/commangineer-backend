DROP DATABASE IF EXISTS commangineer;
CREATE DATABASE commangineer;
USE commangineer;
CREATE TABLE score(
    level_id int not null,
    completion_time int not null,
    user VARCHAR(30) not null,
    score_id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(score_id)
);
CREATE TABLE level(
    level_id int not null AUTO_INCREMENT,
    level_file filestream not null,
    title VARCHAR(45) not null,
    level_description TEXT not null,
    PRIMARY KEY(level_id)
);
CREATE TABLE save(
    level_save filestream not null,
    level_id int not null,
    save_id int not null AUTO_INCREMENT, 
    PRIMARY KEY(save_id);
);