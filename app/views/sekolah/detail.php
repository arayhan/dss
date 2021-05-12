<main>
    <?php $sekolah = $data['sekolah']; 
    $penilaian = json_decode($data['sekolah']['penilaian'], true);
    ?>
    <div class="card">
        <h1 id="sekolah">Detail <?= $sekolah['nama']; ?></h1>
        <form>
            <div class="form-group">
                <label for="id_sekolah">ID Sekolah</label>
                <div class="form-detail">
                    <?= $sekolah['id']; ?>
                </div>

            </div>

            <div class="form-group">
                <label for="nama_sekolah">Nama Sekolah</label>
                <div class="form-detail">
                    <?= $sekolah['nama']; ?>
                </div>

            </div>

            <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah</label>
                <div class="form-detail">
                    <?= $sekolah['alamat']; ?>
                </div>

            </div>

            <div class="form-group">
                <label for="alamat_sekolah">Akreditasi</label>
                <div class="form-detail">
                    <?= var_dump($penilaian);?>
                </div>

            </div>

        </form>

    </div>


</main>