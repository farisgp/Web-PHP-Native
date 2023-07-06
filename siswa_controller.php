<?php
include_once 'koneksi.php';
include_once 'models/Siswa.php';
//step 1 tangkap request form
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$asal_sekolah = $_POST['asal_sekolah'];
$umur = $_POST['umur'];
$prodi = $_POST['prodi_pilihan'];
$alamat = $_POST['alamat'];
//step 2 simpan ke array
$datasiswa = [
    $nama, // ? 2
    $jenis_kelamin, // ? 3
    $asal_sekolah, // ? 4
    $umur, // ? 5
    $prodi,
    $alamat // ? 6
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Siswa();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($datasiswa); 
        break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        // ? 10 (klausa where id = ?)
        $datasiswa[] = $_POST['idx']; 
        $model->ubah($datasiswa); break;

    case 'hapus':
        unset($datasiswa);//hapus 9 ? di atas
        //panggil method hapus datasiswa disertai tangkap hidden filed idx untuk klausa where id
        $model->hapus($_POST['idx']); break;
    
    default:
        header('Location:index.php?hal=siswa');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=siswa');