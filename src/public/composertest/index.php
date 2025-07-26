<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;

$app = new TestController();
$app->run();
echo '<br>';

use Carbon\Carbon;

echo Carbon::now()->format('Y-m-d H:i:s');