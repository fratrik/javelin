<?php

require_once '../../support/php/Javelin.php';

$response = array();
$response['tag'] = Javelin::renderTag(
  'a',
  'render for explanation purposes',
  array(
    'sigil' => 'data-link',
    'meta' => 75,
    'href' => '#',
  ));

echo Javelin::renderAjaxResponse($response);


