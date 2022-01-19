<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
<?php
/*
//////matriz associtiva////
// second type to define array
$type2 = array('1'=>'3','5'=>'8','7'=> '1<br>');

// display => Array ( [key] => value [key2] => value2 [key3] => value3 )
print_r($type2);

"<br>";
//for $type2 indexes are key, key2, keys3
echo $type2['7'];
*/



/*
// we are defining an empty array (no data)
$arr = array();

// we can assign data like this
$arr[0] = 'harish';
$arr[1] = 'kumar';

// we can also skip indexes ( there is no 2 and 3)
$arr[4] = 'jump';

// we can use both types of indexes in same array
$arr['day'] = 'Monday';
$arr['num1'] = 4;
$arr['num2'] = 5;

// each variable is independent
$arr['num3'] = $arr['num1'] + $arr['num2'];

// printing array
print_r($arr);
*/
/*
$number = array(1,21,23,43,32,23,4);
// our variables are $a[0], $a[1], $a[2]........

// initially sum is 0
$sum = 0;
for($i = 0;$i<7;$i++)
{
  // i will increase 1 every time, i.e. position of array will shift
  // 1 every time in loop
  $sum += $number[$i];
}
echo $sum;



/*
$number = array(1,21,23,43,32,23,4);
// our variables are $a[0], $a[1], $a[2]........

// initially sum is 0
$sum = 0;
foreach ($number as $v) {
  // in each iteration we are doning something like this
  // $v = $a[$i];
  // $sum += $v;
  // i++;
  $sum += $v;
}
echo $sum;


/*
$number=array(1,2,3,4,5);

foreach ($number as $numbers) {
    echo $numbers;
}
*/  




?>
</body>
</html>