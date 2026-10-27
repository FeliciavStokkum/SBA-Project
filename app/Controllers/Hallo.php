<?php

namespace App\Controllers;

class Hallo extends BaseController
{
    public function index(): string
    {
        $data = [
            'titel'   => 'Welkom bij CodeIgniter',
            'bericht' => 'Hallo wereld! Dit is mijn eerste pagina.',
        ];

        return view('welcome', $data);
    }
}