<?php
    include_once '../style/style.php';
    $st = new app();
    $id=$_REQUEST['IP'];
    $st->exportColor("select ctsp.ID_MAU as ID_MAU,m.TenMau as TenMau from chitietsanpham ctsp join mau m on m.ID_MAU=ctsp.ID_MAU where ctsp.ID_SP='$id' group by ID_Mau");

?>