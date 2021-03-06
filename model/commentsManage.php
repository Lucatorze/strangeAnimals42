<?php

class comments{

    function addComments($pdo, $date){

        $stmt = $pdo->prepare("INSERT INTO comments(author, idAuthor, content, date, idArticles) VALUE (?,?,?,?,?)");
        $stmt->bindParam(1, $_POST['author']);
        $stmt->bindParam(2, $_POST['idAuthor']);
        $stmt->bindParam(3, $_POST['content']);
        $stmt->bindParam(4, $date);
        $stmt->bindParam(5, $_POST['idArticles']);
        $stmt->execute();


    }

    function updateComments($pdo, $date){

        $stmt = $pdo->prepare("UPDATE articles SET author = :author, idAuthor = :idAuthor, content = :content, date = :date, idArticles = :idArticles WHERE id = :id");
        $stmt->bindParam("author", $_POST['author']);
        $stmt->bindParam("idAuthor", $_POST['idAuthor']);
        $stmt->bindParam("content", $_POST['content']);
        $stmt->bindParam("date", $date);
        $stmt->bindParam("idArticles", $_POST['idArticles']);
        $stmt->bindParam("id", $_POST['idComments']);
        $stmt->execute();


    }

    function deleteComments($pdo){

        $stmt = $pdo->prepare("DELETE FROM comments WHERE id = :id");
        $stmt->bindParam("id", $_GET['deleteComments']);
        $stmt->execute();

    }

    function getComments($pdo){

        $stmt = $pdo->prepare("SELECT * FROM comments WHERE id = :id");
        $stmt->bindParam("id", $_GET['updateComments']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    function getCommentsOrder($pdo){

        $stmt = $pdo->prepare("SELECT * FROM comments WHERE idArticles = :idArticles ORDER BY date");
        $stmt->bindParam("idArticles", $_GET['id']);
        $stmt->execute();

        $getCommentsOrder = [];

        while ($result = $stmt->fetch()) {
            $getCommentsOrder[] = $result;
        }

        return $getCommentsOrder;
    }

}