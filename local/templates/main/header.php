<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

<?
  $APPLICATION->ShowHead();
  // Bitrix
  use Bitrix\Main\Page\Asset;
  // Meta
  Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=0">');
  // CSS
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/main.min.css');
  // JS
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
?>

  <title><?$APPLICATION->ShowTitle();?></title>

  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<body>