<?php

switch ($action){
    case'':
        require 'model/hoc_sinh.php';
        $result = hoc_sinh_index();
        require 'view/hoc_sinh/index.php';
        break;
    case 'create':
        require 'model/lop.php';
        $lops = lop_index();
         require 'view/hoc_sinh/create.php';
         break;
    case 'store':
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/hoc_sinh.php';
        hoc_sinh_store($ten, $ma_lop);
        header('location:index.php?controller=hoc_sinh');
        break;
    case'edit':
        $ma = $_GET['ma'];
        require 'model/hoc_sinh.php';
        $each = hoc_sinh_edit($ma);
        require 'model/lop.php';
        $lops = lop_index();
        require 'view/hoc_sinh/edit.php';
        break;
    case'update':
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ma_lop = $_POST['ma_lop'];
        require 'model/hoc_sinh.php';
        hoc_sinh_update($ma , $ten, $ma_lop);
        header('location:index.php?controller=hoc_sinh');
        break;
    case'delete':
        $ma = $_GET['ma'];
        require 'model/hoc_sinh.php';
        hoc_sinh_delete($ma);
        header('location:index.php?controller=hoc_sinh');
        break;
    default:
        echo "Nhập lớp sai";
        break;
}
