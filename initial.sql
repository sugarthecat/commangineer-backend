DROP DATABASE IF EXISTS commangineer;
CREATE DATABASE commangineer;
USE commangineer;
CREATE TABLE run_time(
    level_id int not null,
    completion_time int not null,
    user VARCHAR(30) not null,
    score_id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(score_id)
);