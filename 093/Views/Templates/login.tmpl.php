<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="1800">
    <title>Connexion</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<main class="form-signin text-center">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form id="loginform" autocomplete="off">
                    <h1 class="h3 mb-4">Veuillez vous connecter</h1>

                    <div class="form-floating m-3">
                        <input type="email" class="form-control ps-4" id="login" placeholder="name@example.com">
                        <label for="login">Adresse Email</label>
                    </div>
                    <div class="form-floating m-3">
                        <input type="password" class="form-control ps-4" id="password" placeholder="Password">
                        <label for="password">Mot de passe</label>
                    </div>
                    <button id="loginBtn" data-redirect="<?php if (isset($_GET['redirect'])) {
                                                                echo $_GET['redirect'];
                                                            }; ?>" class="w-100 btn btn-lg btn-danger bg-gradient mb-2" type="button">Se connecter</button>
                    <p class="mb-0">Vous n'avez pas de compte?</p>
                    <a href="/?display=register<?php if (isset($_GET['redirect'])) {
                                                    echo "&redirect=" . $_GET['redirect'];
                                                }; ?>" class="btn btn-warning">Cliquez ici pour vous inscrire</a>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
</main>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/argon2-bundled.min.js"></script>
<script src="js/auto-encheres.js"></script>
<script src="js/md5.min.js"></script>


</html>