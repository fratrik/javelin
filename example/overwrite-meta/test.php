<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Javelin Example: Tic Tac Toe</title>
    <script type="text/javascript">var __DEV__ = true;</script>
    <script src="../../pkg/init.dev.js" type="text/javascript"></script>
  </head>
  <body>

    <p>
<?php

  require_once '../../support/php/Javelin.php';

  echo Javelin::renderTag(
    'a',
    'I have data',
    array(
      'sigil' => 'data-link',
      'meta' => 42,
      'href' => '#',
    ));
?>
</p><p>
<?php

  echo Javelin::renderTag(
    'a',
    'I cause a request that makes this data get overwritten',
    array(
      'sigil' => 'request',
      'href' => '#',
    ));

  Javelin::initBehavior('test');

?>
  </p>
  </body>
  <script src="../../pkg/javelin.dev.js" type="text/javascript"></script>
  <script src="test.js" type="text/javascript"></script>
<?php

  echo Javelin::renderHTMLFooter();

?>
</html>
