<?php require_once('controller/commentsController.php'); ?>

<section>

    <?php if(isset($_SESSION['userId'])){?>

        <form action="index.php?pages=viewArticles&&id=<?php echo $_GET['id']; ?>" method="post">

            <label for="author">Auteur :</label>
            <input type="text" name="author" id="author" value="<?php echo $result['author']; ?>"><br>
            <br>

            <label for="content">Description :</label>
            <textarea name="content" id="content" cols="40" rows="10"><?php echo $result['content']; ?></textarea><br>

            <input type="hidden" name="idAuthor" value="<?php echo $_SESSION['userId']; ?>">
            <input type="hidden" name="idComments" value="<?php echo $result['id']; ?>">
            <input type="hidden" name="idArticles" value="<?php echo $_GET['id']; ?>">

            <input type="submit" value="Envoyer">

        </form>

        <?php


    }else{
        ?>

        Vous devez être connecté pour commenter cet article !

        <?php
    }
    ?>

</section>