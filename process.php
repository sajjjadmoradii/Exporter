<?php

use Exporter\WordExporter;


if($_SERVER['REQUEST_METHOD'] !== "POST"){
  // echo 'submit  Not Ok';
  return;
  
}
include "autoload.php";

[$name,$fatherName,$intetnationalCode,$date,$phoneNumbe,$phoneNumber2,$phone,$address,$uploadcard,$uploadsanad,$format]=
[$_POST['name'],$_POST['fatherName'],$_POST['intetnationalCode'],$_POST['date'],$_POST['phoneNumber'],$_POST['phoneNumber2'],$_POST['phone'],$_POST['address'],$_POST['uploadsanad'],$_POST['uploadcard'],$_POST['format']];



$whitelist = ['Word','Exel','Pdf'];

if(!in_array($format,$whitelist)){
  echo "invalid Format";
  return;
}

$data = [
  'name' => $name,
  'fatherName' => $fatherName
];

$exporter = new WordExporter($data);
$exporter->export();

// switch($format){
//   case 'Word':
//     Exporter::export_to_word($name,$fatherName,$intetnationalCode,$date,$phoneNumbe,$phoneNumber2,$phone,$address,$uploadcard,$uploadsanad);
//   break;
//   case 'Exel':
//     Exporter::export_to_exel($name,$fatherName,$intetnationalCode,$date,$phoneNumbe,$phoneNumber2,$phone,$address,$uploadcard,$uploadsanad);
//   break;
//   case 'Pdf':
//     Exporter::export_to_pdf($name,$fatherName,$intetnationalCode,$date,$phoneNumbe,$phoneNumber2,$phone,$address,$uploadcard,$uploadsanad);
//   break;
// }






