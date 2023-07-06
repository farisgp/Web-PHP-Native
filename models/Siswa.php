<?php
class Siswa{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataSiswa(){
        $sql = "SELECT * from siswa  order by id asc";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getSiswa($id){
        $sql = "SELECT * from siswa WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(); 
        return $rs;   
    }
    public function simpan($datasiswa){
        $sql = "INSERT INTO siswa (nama, jenis_kelamin,asal_sekolah, umur, prodi_pilihan, alamat) VALUES (?,?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datasiswa);  
    }
    public function ubah($datasiswa){
        $sql = "UPDATE siswa SET id=?, nama=?, jenis_kelamin=?, asal_sekolah=?, 
               umur=?, prodi_pilihan=?, alamat=? WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datasiswa);  
    }
    public function hapus($id){
        $sql = "DELETE FROM siswa WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);  
    }
}
?>