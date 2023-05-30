

<h2 class="text-center mb-4">Liste des annonces</h2>

<div class="row mt-4 mx-4 ps-4">
    <?php foreach ($data as $annonce) : ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100 text-start text-bg-dark" style="width: 18rem;">
                <img src="imgs/<?= $annonce['photo'] ?>" class="card-img-top" alt="Photo de bagnole">
                <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= $annonce['marque'] . ' - ' . $annonce['modele'] ?></h5>
                        <p class="card-text"><?= $annonce['description'] ?></p>
                        <a href= <?='/?annonce=' . $annonce['uid_annonce']?> class="btn btn-outline-danger mt-auto">Détails</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
