<?php

require_once 'vendor/autoload.php';

use jucksearm\barcode\Datamatrix;

const IMAGE_DIR = __DIR__.'/images/';

echo "Start generation...\n";
for ($row = 12; $row <= 15; ++$row) {
    $code = sprintf('%d', $row);
    echo $code."\n";

    ob_start();
    @Datamatrix::svg($code, IMAGE_DIR.$code.'.svg', 100, 5);
    ob_end_clean();
}
echo "Done ! \n";