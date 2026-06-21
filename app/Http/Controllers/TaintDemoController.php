<?php

namespace App\Http\Controllers;

/**
 * DEMO ONLY: deliberate command-injection sink to show Psalm taint analysis,
 * SARIF upload, GitHub annotations, and a failing check. Do not merge.
 */
class TaintDemoController
{
    public function run(): void
    {
        $cmd = $_GET['cmd'];

        if (is_string($cmd)) {
            exec($cmd);
        }
    }
}
