<?php

require_once 'model/connect.php';

function hoc_sinh_index(){
    $connect = connect();
    $sql = "select
     hoc_sinh.*,
     l.ten as ten_lop
    from hoc_sinh
    left join lop l on hoc_sinh.ma_lop = l.ma";
    $result = mysqli_query($connect,$sql);
    return $result;
    mysqli_close($connect);
}
function hoc_sinh_store($ten, $ma_lop){
    $connect = connect();
    $sql = "insert into hoc_sinh (ten,  ma_lop)
        value ('$ten', '$ma_lop')";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
}
function hoc_sinh_edit($ma){
    $connect = connect();
    $sql = "select * from hoc_sinh
         where ma = '$ma'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $each;
}
function hoc_sinh_update($ma, $ten,$ma_lop){
    $connect = connect();
    $sql = "update hoc_sinh
         set
         ten = '$ten',
         ma_lop = '$ma_lop'
         where ma = '$ma'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}
function hoc_sinh_delete($ma,){
    $connect = connect();
    $sql = "delete from hoc_sinh
         where ma = '$ma'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}
