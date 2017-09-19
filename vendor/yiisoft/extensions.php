<?php

$vendorDir = dirname(__DIR__);

return array (
  'abexto/yii2-logeia-common' => 
  array (
    'name' => 'abexto/yii2-logeia-common',
    'version' => '9999999-dev',
  ),
  'abexto/yii2-logeia-phpunit' => 
  array (
    'name' => 'abexto/yii2-logeia-phpunit',
    'version' => '9999999-dev',
    'alias' => 
    array (
      '@abexto/logeia/yii/phpunit' => $vendorDir . '/abexto/yii2-logeia-phpunit/src',
      '@abexto/logeia/yii/phpunit/tests' => $vendorDir . '/abexto/yii2-logeia-phpunit/tests',
    ),
  ),
);
