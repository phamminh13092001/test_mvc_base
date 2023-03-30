<?php

function connect(){
    $connect = mysqli_connect('localhost','root', '','datn');
    mysqli_set_charset($connect, 'utf8');
    return $connect;
}