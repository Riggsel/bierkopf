<?php

spl_autoload_register(function ($className)
{
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__;

    $className = str_replace('\\', $ds, $className);

    $file = sprintf('%s%s%s.php', $dir, $ds, $className);

    if (is_readable($file)) {
        require_once $file;
    }
});

$base = new \Controller\Base();