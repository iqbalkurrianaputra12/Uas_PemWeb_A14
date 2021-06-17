<div class="container mt-5">

    <<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['tour']['nama']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Daerah Wisata <?= $data['tour']['daerah']; ?></h6>
        <p class="card-text">Nilai Toefl <?= $data['tour']['nilai']; ?></p>
        <p class="card-text">No HP <?= $data['tour']['no_hp']; ?></p>
        <a href="<?= BASEURL; ?>/tourguide" class="card-link">Kembali</a>
    </div>
    </div>

</div>    