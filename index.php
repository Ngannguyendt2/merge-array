<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array1=[1,2,3,4];
$array2=[5,6,7,8];
function mergeArray($arr1,$arr2){
    $arr3=[];
    foreach ($arr1 as $value){
        array_push($arr3,$value);
        //$arr3[] = $value;
    }
    foreach ($arr2 as $value){
        array_push($arr3,$value);
    }
    return var_dump($arr3);
}
echo mergeArray($array1,$array2);
?>
</body>
</html>
