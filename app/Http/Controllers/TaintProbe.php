<?php

namespace App\Http\Controllers;

class TaintProbe
{
    public function index(): void
    {
        $cmd = $_GET['cmd'];
        if (is_string($cmd)) { exec($cmd); }
    }
}
