<?php require('views/templates/header.php'); ?>
<main>

<form method="post" action="">

    <div class="">
      <label for="mailconnect"></label>
      <input type="email" class="" id="mailconnect" name="mailconnect" placeholder="Votre e-mail" required>
    </div>

      <div class="">
          <label for="mdpconnect"></label>
          <input type="password" class="f" id="mdpconnect" name="mdpconnect" placeholder="Votre mot de passe" required>
      </div>

      <div class="">
        <input class="" name="formconnect" type="submit" value="Incription" />
      </div>


</form>
</main>

<?php require('views/templates/footer.php'); ?>