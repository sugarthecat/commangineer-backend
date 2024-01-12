DROP DATABASE IF EXISTS commangineer;
CREATE DATABASE commangineer;
USE commangineer;
CREATE TABLE run_time(
    level_id int not null,
    user_id int not null,
    completion_time int not null,
    score_id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(score_id)
);
CREATE TABLE settings(
    user_id int not null AUTO_INCREMENT,
    username VARCHAR(40) not null,
    audio_enabled int not null,
    PRIMARY KEY(user_id)
);