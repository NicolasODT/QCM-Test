CREATE DATABASE qcmTest DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE
    question (
        id_question INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        question VARCHAR(255) NOT NULL
    );

CREATE TABLE
    reponse (
        id_reponse INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        id_question INT UNSIGNED NOT NULL,
        reponse VARCHAR(255) NOT NULL,
        truefalse TINYINT(1) NOT NULL,
        FOREIGN KEY (id_question) REFERENCES question(id_question)
    );

SELECT id_question,question FROM question;