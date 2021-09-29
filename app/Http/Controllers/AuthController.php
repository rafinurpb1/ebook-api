<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119150,
        'name' => 'Rafi Nur Fauzan',
        'gender' => 'Male',
        'phone' => '08574686359874',
        'class' => 'XII RPL 5'];
  }
}
