<?php
  require __DIR__ . '/inc/all.inc.php';
  $name= (string) $_GET['name']??"";
  if(empty($name)){
    header("location:index.php");
    die();
  }
  $results = fetch_name_entries($name);

  render('result.view',[
    'name'=>$name,
    'char'=> $name[0],
    'results'=>$results
  ]);


