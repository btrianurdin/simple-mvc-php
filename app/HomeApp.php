<?php

namespace App;

class HomeApp
{
  public static function index()
  {
    $data['nama'] = "Bagus trianurdin";
    
    view('index', $data);
  }
}
