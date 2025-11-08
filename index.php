
<?php

  require __DIR__ . '/inc/all.inc.php';

  $char = (string)($_GET['char']??''); 

  if(strlen($char)>1){
      $char=$char[0];
  }
  $char = strtoupper($char);

$names = fetch_names_by_initial($char);
$commonNames = most_common_names();

render('index.view',[
  'char'=>$char,
  'names'=>$names,
  'commonNames'=>$commonNames
]);



