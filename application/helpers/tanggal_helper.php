<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_indo')) {
  function format_indo($date){
    date_default_timezone_set('Asia/Jakarta'); 
    //array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

    //pemisahan tahun, bulan, hari, dan waktu
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari];
    return $result;
  }
  
}