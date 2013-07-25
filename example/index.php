<?php
/**
 * Include CSTester class
 */
include __DIR__.'/../src/nazarpc/CSTester.php';
/**
 * Use namespace
 */
use nazarpc\CSTester;
/**
 * Create class instance and run testing
 */
(new CSTester(__DIR__.'/tests'))->run();