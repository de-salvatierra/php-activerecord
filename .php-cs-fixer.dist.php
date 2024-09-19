<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PHPyh\CodingStandard\PhpCsFixerCodingStandard;

$finder = (new Finder())
    ->in(__DIR__);

$config = (new Config())
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
    ->setFinder($finder);

(new PhpCsFixerCodingStandard())->applyTo($config);

return $config;
