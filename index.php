<?php
include "Forms/Autoload.php";
use Creatiff\Forms\Wrapper\Locator;
use Creatiff\Forms\Wrapper\ReaderXml;
use Creatiff\Forms\Wrapper\RenderHtml;


$reader = new ReaderXml(new Locator(__DIR__.'/xml','xml'));
$render = new RenderHtml(new Locator(__DIR__.'\views\sencha'));
$form = $reader->read('layout');
$html = $form->render($render);
include 'sandbox.php';