<?php
$arUrlRewrite=array (
  13 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2&$3',
    'ID' => 'bitrix:catalog.element',
    'PATH' => '/catalog/element.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/training/past/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/training/past/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/training/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/training/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^\\??(.*)#',
    'RULE' => '&$1',
    'ID' => 'bitrix:catalog.smart.filter',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  16 => 
  array (
    'CONDITION' => '#^/media/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/media/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:main.register',
    'PATH' => '/auth/registration.php',
    'SORT' => 100,
  ),
);
