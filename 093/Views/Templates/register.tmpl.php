
<main class="form-signin w-50 m-auto text-center">
    <form autocomplete="off">
        <a href="/">
            <img src="imgs/logo.png" class="my-2" alt="" width="150">
        </a>
        <h1 class="h3 mb-3 fw-normal">Nouvel utilisateur</h1>

        <div class="form-floating m-2">
            <input type="text" class="form-control ps-4" id="prenom" placeholder="Johnny">
            <label class="ps-4 text-secondary" for="prenom">Prénom</label>
        </div>

        <div class="form-floating m-2">
            <input type="text" class="form-control ps-4" id="nom" placeholder="Joe">
            <label class="ps-4 text-secondary" for="nom">Nom</label>
        </div>

        <div class="form-floating m-2">
            <input type="email" class="form-control ps-4" id="login" placeholder="name@example.com">
            <label class="ps-4 text-secondary" for="login">Adresse mail</label>
        </div>

        <div class="form-floating m-2">
            <input type="password" class="form-control ps-4" id="password" placeholder="Password">
            <label class="ps-4 text-secondary" for="password">Mot de passe</label>
        </div>

        <button id="registerBtn" data-redirect="<?php if (isset($_GET['redirect'])) { echo $_GET['redirect']; } ; ?>" class="btn btn-danger mb-2" type="button">S'inscrire</button>
        <p class="mb-0">Vous avez déja un compte?</p>
        <a href="/?display=login<?php if (isset($_GET['redirect'])) { echo "&redirect=" . $_GET['redirect']; } ; ?>" class="btn text-bg-warning text-decoration-none">Cliquez ici pour vous connecter</a>
    </form>
</main>
<script src="js/md5.min.js"></script>