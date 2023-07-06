<?php
$model = new Siswa();
$data_siswa = $model->dataSiswa();
$sesi = $_SESSION['MEMBER'];
?>
<section class="section" id="pricing">
        <div class="container">
        <!-- Content -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Jurnal Pendaftaran
                        </h2>
                    </div>
                </div>
            </div> <!-- / .row -->
			<table class="table table-striped">
                <a class="btn-info btn-sm" href="index.php?hal=siswa_form2" role="button"
                    title="Pendaftaran Mahasiswa Baru">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br/><br/>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Prodi Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_siswa as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['asal_sekolah'] ?></td>
                            <td><?= $row['umur'] ?></td>
                            <td><?= $row['prodi_pilihan'] ?></td>
                            <td>
                                <form action="siswa_controller.php" method="POST">
                                    <a href="index.php?hal=siswa_detail&id=<?= $row['id'] ?>">
                                        <button type="button" class="btn-info btn-sm" title="Detail Siswa">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="index.php?hal=siswa_form&idedit=<?= $row['id'] ?>">
                                        <button type="button" class="btn-warning btn-sm" title="Ubah Siswa">
                                            <i class="fa fa-pencil" aria-hidden="true" ></i>
                                        </button>
                                    </a>
                                    <?php
                                    if($sesi['role'] != 'SMA IPA'){
                                    ?>
                                    <button type="submit" class="btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Siswa">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                    <?php } ?>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </section>