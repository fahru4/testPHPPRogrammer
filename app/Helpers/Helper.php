<?php
use App\Models\Book;
use Illuminate\Support\Facades\Route;

function setActive($uri, $output = "active")
{
  if (is_array($uri)) {
    foreach ($uri as $u) {
      if (Route::is($u)) {
        return $output;
      }
    }
  } else {
    if (Route::is($uri)) {
      return $output;
    }
  }
}

function setAffect($uri, $output = "show")
{
  if (is_array($uri)) {
    foreach ($uri as $u) {
      if (Route::is($u)) {
        return $output;
      }
    }
  } else {
    if (Route::is($uri)) {
      return $output;
    }
  }
}

function codeOrder($length = 6) {
    $characters = '0123456789';
    $randomString = 'No-';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}


?>