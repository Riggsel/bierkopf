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

require_once dirname(__DIR__) . '/bierkopf/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem( dirname(__DIR__) . '/bierkopf/Assets');

$twig = new Twig_Environment(
    $loader,
    array()
);


$base = new \Controller\Base();
$base->setTemplateEngine($twig);
$base->init();

