<?php

/**
 * -------------------------------
 * ADD YOUR PUBLIC FUNCTION BOTTOM
 * -------------------------------
 */

function rupiah($nilai, $format = "")
{
  return $format . number_format($nilai, 0, '', '.');;
}

function generateRandomString($length = 10)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function generateRandomNumber($length)
{
  $characters = '1234567890987654321';
  $charactersLength = strlen($characters);
  $randomNumber = '';
  for ($i = 0; $i < $length; $i++) {
    $randomNumber .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomNumber;
}

function generateSlug($text, string $divider = '-')
{
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, $divider);
  $text = preg_replace('~-+~', $divider, $text);
  $text = strtolower($text);
  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}