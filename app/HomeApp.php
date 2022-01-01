<?php

namespace App;

class HomeApp
{
  public static function index()
  {
    $data['nama'] = "Bagus trianurdin";
    $data['title'] = "Tes Title";
    
    view('index', $data);
  }

  public static function add()
  {
    $data['title'] = 'Tambah Mahasiswa';

    view('add', $data);
  }
}
