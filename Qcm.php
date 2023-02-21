<?php
require_once ('Database.php');

class QCM {
    private $dbo;

    public function __construct() {
        $database = new Database();
        $this->dbo = $database->connection();
    }

    public function addQuestion($question) {
        $sql = "INSERT INTO question (question) VALUES (:question)";
        $query = $this->dbo->prepare($sql);
        $query->bindParam(':question', $question);
        $query->execute();
        return $this->dbo->lastInsertId();
    }

    public function addReponse($id_question, $reponse, $truefalse) {
        $sql = "INSERT INTO reponse (id_question, reponse, truefalse) VALUES (:id_question, :reponse, :truefalse)";
        $query = $this->dbo->prepare($sql);
        $query->bindParam(':id_question', $id_question);
        $query->bindParam(':reponse', $reponse);
        $query->bindParam(':truefalse', $truefalse);
        $query->execute();
    }

    public function fillReponse($question, $reponse1, $truefalse1, $reponse2, $truefalse2, $reponse3, $truefalse3) {
        $id_question = $this->addQuestion($question);
        $this->addReponse($id_question, $reponse1, $truefalse1);
        $this->addReponse($id_question, $reponse2, $truefalse2);
        $this->addReponse($id_question, $reponse3, $truefalse3);
    }
}
