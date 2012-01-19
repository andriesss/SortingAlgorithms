<?php

// configure include paths
set_include_path(__DIR__ . '/../library' . DIRECTORY_SEPARATOR . get_include_path());

// enable autoloading
require_once __DIR__ . '/../library/Centim/Autoload.php';

function startBenchmark(Centim\Sort\Sort $sort)
{
    $it = new \DirectoryIterator(__DIR__ . '/datasets');

    /** @var $f \SplFileInfo */
    foreach ($it as $f) {
        if ($f->isFile()) {
            echo get_class($sort) . " - {$f->getBasename()}\n";

            $start = microtime(true);
            $data = include $f->getRealPath();

            $sort->sort($data);

            $end = microtime(true);
            echo $end - $start . " seconds\n\n";
        }
    }
}

startBenchmark(new Centim\Sort\BubbleSort());
startBenchmark(new Centim\Sort\CountingSort());
startBenchmark(new Centim\Sort\QuickSort());

