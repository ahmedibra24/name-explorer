
<?php

  require __DIR__ . '/inc/all.inc.php';

  $char = (string)($_GET['char']??''); 

  if(strlen($char)>1){
      $char=$char[0];
  }
  $char = strtoupper($char);

  $perPage= 15;
  $page = (int)($_GET['page']??1);
  if($page<1) $page=1;


$names = fetch_names_by_initial($char,$page,$perPage);
$count= count_names_by_initial($char);
$numPages = (int) ceil($count / $perPage);
$commonNames = most_common_names();

render('index.view',[
  'char'=>$char,
  'names'=>$names,
  'commonNames'=>$commonNames,
  'pagination'=>[
    'page'=>$page,
    'perPage'=>$perPage,
    'numPages'=>$numPages 
  ]
]);



