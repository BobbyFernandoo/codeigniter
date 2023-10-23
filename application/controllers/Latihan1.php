<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
    echo "Selamat Datang.. selamat belajar Web Programming";
    } 

    public function penjumlahan($nl1, $nl2)
    {
        $this -> load -> model('Model_latihan1');
        
        // $hasil = $this -> Model_latihan1 -> jumlah($nl1, $nl2);
        // echo "Hasil Penjumlahan dari ". $nl1 ." + ". $nl2 ." + ". $hasil; 

    }
}