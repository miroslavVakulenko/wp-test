<?php

$finder = PhpCsFixer\Finder::create()
  ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config
  ->setRules([
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
  ])
  ->setFinder($finder)
  ->setRiskyAllowed(true)
  ->setUsingCache(false)
  ->setPhpVersion('8.2');