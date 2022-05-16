<?php

$dir=getcwd()."/";
$fn=$dir."sample01.csv";
$f=file($fn);
$f2=$f;
$flag01=true;
foreach($f2 as $K=>$linea)
{
  if($flag01)
  {
    $flag01=false;
    continue;
  }
  $data=explode("\t",str_replace("\n","",$linea));
  $data=array_slice($data,2);
  $data=str_replace(",",".",$data);
  $flag=false;
  foreach($data as $d)
  {
    if(!is_numeric($d))
    {
      $flag=true;
    }
  }
  if($flag)
  {
    unset($f[$K]);
  }
}

foreach($f as $linea)
{
  echo str_replace(",",".",$linea);
}

?>
