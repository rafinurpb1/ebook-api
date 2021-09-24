<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => '3103119002',
            'Name' => 'Ade Firmansyah',
            'Gender' => 'Pria',
            'Phone' => '0895384049671',
            'Class' => 'XII RPL 1'
        ];
    }
}
