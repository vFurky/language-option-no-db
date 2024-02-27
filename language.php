<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Exception\LogicException;

$userLanguage = "tr";
$translator = new Translator($userLanguage);
$translator -> addLoader('yaml', new YamlFileLoader());
$translator -> addResource('yaml', './languages/messages.' . $userLanguage . '.yml', $userLanguage);