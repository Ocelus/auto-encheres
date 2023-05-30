<?php

?>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="imgs/car.svg" class="pe-3" alt=""
                    width="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0 gap-3">
                    <?php
                        if(isset($_SESSION['username'])) {
                    ?>
                        <li class="nav-item d-flex align-items-center">
                            <p class="badge text-bg-dark p-2 mb-0">Connecté en tant que <span class="fw-bold text-primary fs-5"><?= $_SESSION['username']; ?></span></p>
                        </li>
                        <li class="nav-item">
                            <button id="logoutBtn" class="btn btn-danger" style="width: 200px;" type="button" data-redirect="<?php if (isset($_GET['annonce'])) { echo $_GET['annonce']; } ; ?>">Se déconnecter</button>
                        </li>
                    <?php
                        } else {
                    ?>
                        <li class="nav-item">
                            <a href="/?display=login<?php if(isset($_GET['annonce'])) { echo '&redirect=' . $_GET['annonce']; } ?>" class="btn btn-danger" style="width: 200px;">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a href="/?display=register<?php if(isset($_GET['annonce'])) { echo '&redirect=' . $_GET['annonce']; } ?>" class="btn btn-warning" style="width: 200px;">S'inscrire</a>
                        </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="js/auto-encheres.js"></script>
</header>