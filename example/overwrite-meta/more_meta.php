<?php

require_once '../../support/php/Javelin.php';

$response = array();
$response['tag'] = Javelin::renderTag(
  'a',
  'render for explanation purposes',
  array(
    'meta' => 75,
  ));

echo Javelin::renderAjaxResponse($response);


