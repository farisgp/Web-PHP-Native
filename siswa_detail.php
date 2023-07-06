<?php
$id = $_REQUEST['id'];
$model = new Siswa();
$data_siswa = $model->getSiswa($id);
?>

<section class="bg-grey" id="service">
            <div class="row justify-content-center">
                        <div class="col-lg-6 pl-4 text-center">
                            <div class="service-content">
                                <h1>Data Detail Siswa Dengan ID Pendaftaran <?=$data_siswa['id']?></h1>
                                <div class="alert alert-success" role="alert">
                                <table align="center">
                                    <tr>
                                        <td align="left">Nama</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['nama'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">ID Pendaftaran</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['id'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Jenis Kelamin</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['jenis_kelamin'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Alamat</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['alamat'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Asal Sekolah</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['asal_sekolah'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Umur</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['umur'] ?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Prodi Pilihan</td>
                                        <td>:</td>
                                        <td align="left"><?= $data_siswa['prodi_pilihan'] ?></td>
                                    <tr>
                                </table>
                                </div>
                            </div>
                        </div>
            </div>
            
            <p align="right">
                <a href="index.php?hal=siswa" class="btn btn-primary" title="back">
                    <i class="fa-hand-o-left" aria-hidden="true"></i>
                </a>
            </p>
</section>