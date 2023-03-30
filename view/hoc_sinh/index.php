<h1>
    Danh Sách Học Sinh
</h1>
<a href="?action=create&controller=hoc_sinh">
    Thêm
</a>
<table border="1" width="100%">
    <tr>
        <th>Mã Học Sinh</th>
        <th>Tên Học Sinh</th>
        <th>Tên Lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($result as $each){ ?>
        <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td><?php echo $each['ten_lop'] ?></td>
            <td>
                <a href="?action=edit&controller=hoc_sinh&ma=<?php echo $each['ma'] ?>">
                     Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&controller=hoc_sinh&ma=<?php echo $each['ma'] ?>">
                     Xóa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>

