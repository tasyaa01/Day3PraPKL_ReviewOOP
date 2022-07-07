<?php

class jurusan extends Database{

    //menampilkan data jurusan ke index.php
    public function index(){

        $jurusan1 = mysqli_query($this->koneksi, "select * from jurusan");
        return $jurusan1;

    }

    //Membuat Data jurusan
    public function create($kode_jurusan,$jurusan){

        mysqli_query($this->koneksi,"insert into jurusan values (null,'$kode_jurusan','$jurusan ')");

    }

    //Memiliih Data jurusan Yang Akan Dirubah
    public function edit($id){

        $jurusan1 = mysqli_query($this->koneksi, "select * from jurusan where id='$id'");
        return $jurusan1;

    }

    //Merubah Data jurusan
    public function update($id,$kode_jurusan,$jurusan){

        mysqli_query($this->koneksi, "update jurusan set kode_jurusan='$kode_jurusan' ,jurusan='$jurusan' where id='$id'");

    }

    //Menampilkan Data jurusan Berdasarkan Isi
    public function show($id){

        $jurusan1 = mysqli_query($this->koneksi, "select * from jurusan where id='$id'");
        return $jurusan1;

    }

    //Menghapus Data jurusan
    public function delete($id){

        mysqli_query($this->koneksi, "delete from jurusan where id='$id'");

    }
}
?>