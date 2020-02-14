<?php
class foo {
    function do_foo() {
        echo "hello php";
    }
}
$bar = new foo;
$bar -> do_foo();


function make_bigger ($num) {
    $num = $num *2;
    return $num;
}


echo make_bigger(20);


//file I/O
//file_get_contents && file_put_contents
function reverse_lines ($filename) {
    //file_get_contents作用后为字符串
    $text = file_get_contents($filename);
    $lines = explode("\n", $text);
    $lines = array_reverse($lines);
    $text = implode("\n", $lines);
    file_put_contents($filename,$text);
}
//or
function reverse_lines2 ($filename) {
    //file接收完成后直接为数组
    $lines = file($filename);
    $lines = array_reverse($lines);
    file_put_contents($filename,implode("",$lines));
}

//空行计数
//Returns how many lines in this file are empty or just spaces
function count_blank_lines ($filename) {
    $count = 0;
    foreach (file($filename)as $line) {
        if (strlen(trim($line))==0) {        //trim: 截取字符串首尾的空行
            $count ++;
        }
    }
    return $count;
}
$blank_lines = count_blank_lines("count_blank.txt");
print "There are total {$blank_lines} blank lines here.";

//scandir 扫描一个目录下的文件
//P.s.：每一个文件下都会有一个.文件和一个..文件
$folder = "images";
$files = scandir($folder);
foreach ($files as $file) {
    print "Find an image: $folder/$file\n";
}
print "Done";
//过滤..和.文件：glob函数
$folder = "images";
$files = scandir($folder);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        print "Find an image: $folder/$file\n";
    }
}
print "Done";

//glob function: 进行模式匹配
$folder = "images";
print "\n";
foreach (glob("$folder\*.png") as $filename) {
    print "Find an image file: $filename\n";
}
print "Done";


//类和对象
//E.g: Bank Account
