<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$myname = 'harish';
// return 6
echo strlen($myname).'</br>';
// return 14 (includes spaces)
echo strlen('it is a string');

$string = "This is a @str string for a search";

// this will return search
// the part of word starting with sea
echo strstr($string, 'sea').'</br>';

// this will return earch
// the part of word starting with ear
echo strstr($string, 'ear').'</br>';

// this will return 8
// it is postition fo first 'a'
// position starts from 0, not 1
echo strpos($string, 'a').'</br>';

// this will return 30
// it is position of last 'a'
echo strrpos($string, 'a').'</br>';

// this will return 3
// number of 'a'
echo substr_count($string, 'a').'</br>';

// this will return @str string for a search
// string after @ (includeing @)
echo strpbrk($string, '@').'</br>';




?>
</body>
</html>l