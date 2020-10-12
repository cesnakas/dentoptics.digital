<?php
$arUrlRewrite=array (
  3 => 
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
  4 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&$2',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/training/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/training/index.php',
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
