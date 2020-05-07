<?php
//متغییر های اصلی//
echo 'ساخته شده توسط:@install2087 <br>رمز شما از 1 تا 17 رقم:';
   $alphabet = '0123456789abcdefghijklmnopqrstuABCDEFGHIJKLMNOPQRSTU';
   $L = 17;
   $password = '';
//عملیات//
$a = str_split($alphabet);
shuffle($a);
for ($i = 0; $i < $L; $i++) {
    $password .= $a[$i];
    echo '<br> '.$password;
}
//install2087.xyz//
