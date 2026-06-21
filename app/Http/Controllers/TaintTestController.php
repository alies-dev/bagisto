<?php

namespace App\Http\Controllers;

/**
 * TEMPORARY: deliberate vulnerability to verify Psalm taint analysis + SARIF upload.
 * Do not merge.
 */
class TaintTestController
{
    public function index(): void
    {
        $cmd = (string) $_GET['cmd'];

        exec($cmd);
    }
}
