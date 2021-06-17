<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tampilTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data TourGuide
        </button>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/tourguide/cari" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari TourGuide..." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="row">
        <div class="col-6">

            <h3>Daftar TourGuide</h3>
            <ul class="list-group">
                <?php foreach( $data['tour'] as $tour) : ?>
                <li class="list-group-item">
                    <?=$tour['nama'];?>
                    <a href="<?= BASEURL; ?>/tourguide/hapus/<?=$tour['id'];?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">hapus</a>
                    <a href="<?= BASEURL; ?>/tourguide/ubah/<?=$tour['id'];?>" class="badge badge-warning float-right ml-2 tampilModalUbah"data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$tour['id']; ?>">edit</a>
                    <a href="<?= BASEURL; ?>/tourguide/detail/<?=$tour['id'];?>" class="badge badge-primary float-right ml-2">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>   
    </div>
</div>   
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data TourGuide</h5>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/tourguide/tambah/" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama TourGuide">
          </div>

          <div class="form-group">
              <label for="daerah">Tempat Daerah Wisata</label>
              <input type="text" class="form-control" id="daerah" name="daerah" placeholder="Daerah Wisata TourGuide">
          </div>

          <div class="form-group">
              <label for="nilai">Nilai Toefl</label>
              <input type="number" class="form-control" id="nilai" name="nilai" placeholder="Nilai TOEFL">
          </div>

          <div class="form-group">
              <label for="no_hp">No HP</label>
              <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomer HP TourGuide">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>