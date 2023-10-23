<?php
class Model_latihan1 extends CI_model
{
    //membuat variable untuk menampung nilai
    public $nilai1,$nilai2,$nilai3;

    //metode penjumlahan
    public function jumlah($nl1 = null, $nl2 = null)
    {
    $this -> nilai1 = $nl1;
    $this -> nilai2 = $nl2;
    $this -> hasil  = $this -> nilai1 + $this -> nilai2;
    return $this -> hasil; 
    }
}
