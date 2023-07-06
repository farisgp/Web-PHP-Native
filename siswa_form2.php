<?php
//ciptakan object dari class Jabatan & Divisi
$obj_jurusan = new Jurusan();
$obj_panitia = new Panitia();
$obj_siswa = new Siswa();
//panggil fungsi untuk menampilkan data jabatan & divisi
$data_jurusan = $obj_jurusan->dataJurusan(); 
$data_panitia = $obj_panitia->dataPanitia(); 

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
$siswa = $obj_siswa->getSiswa($idedit);
?>
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Input Siswa Baru</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
    <div class="container">
        <form action="siswa_controller.php" method="POST" class="row">
            
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
                $ar_gender = ['L'=>'Laki-laki', 'P'=>'Perempuan'];
                foreach($ar_gender as $k => $jk){
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="<?= $k ?>" <?= $k ?>>
                    <label class="form-check-label"><?= $jk ?></label>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Asal Sekolah</b></label>
                <input type="text" class="form-control main" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Umur</b></label>
                <input type="text" class="form-control main" name="umur" placeholder="Umur">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Program Studi</b></label>
                <div class="form-group">
                    <select class="form-control main" name="program_studi">
                        <option selected>-- Pilih Program Studi --</option>
                        <?php
                    foreach($data_jurusan as $jur){
                    ?>
                        <option value="<?= $jur['id'] ?>"><?= $jur['nama_prodi'] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" class="form-control main" rows="10"
                    placeholder="Alamat"></textarea>
            </div>
            <div class="col-12 text-center">
                <?php
                //----------modus entri data baru, form dlm keadaan kosong-------------
                if(empty($idedit)){
                ?>
                <button type="submit" name="proses" value="simpan" class="btn-success btn-sm">Simpan</button>
                <?php
                }
                //----------modus edit data lama, form terisi data lama -------------
                else{
                ?>
                <button type="submit" name="proses" value="ubah" class="btn-warning btn-sm">Ubah</button>
                <!-- hidden field untuk klausa where id=? -->
                <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?> 

            </div>
        </form>
    </div>
</section>