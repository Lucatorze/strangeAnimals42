<?php require_once('controller/registerController.php'); ?>

<section>

    <form id="registerForm" method="POST"> <!-- action="index.php?pages=register"-->
        <fieldset class="contenairForm">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom"><br><br>

            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Nom"><br><br>

            <label for="nickname">Pseudo</label>
            <input type="text" name="nickname" id="nickname" placeholder="Pseudo"><br><br>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password"><br><br>

            <label for="password2">Vérification du mot de passe</label>
            <input type="password" name="password2" id="password2"><br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="E-Mail"><br><br>

            <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
        </fieldset>
    </form>
    <div class="contenairResult">
        <div id="blocSuccess"><?php echo $msgOk; ?></div>
    </div>
    <!-- <script src="./assets/js/registerAjax.js"></script> -->
    <script src="./assets/js/registerScript.js"></script>
</section>