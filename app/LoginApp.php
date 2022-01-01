<?php

namespace App;

class LoginApp
{
  public static function index()
  {
    $data['title'] = "Login";

    view('login', $data);
  }
}
