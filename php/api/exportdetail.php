<?php
    include_once '../style/style.php';
    $st = new app();
    $id = $_REQUEST['id'];
    $st->exportDetail("select ctdh.SoLuong as SoLuong, ctsp.Gia as Gia, sp.TenSanPham as TenSanPham from sanpham as sp join chitietsanpham as ctsp on sp.ID_SP = ctsp.ID_SP join chitietdonhang as ctdh on ctsp.ID_CTSP = ctdh.ID_CTSP join donhang as dh on dh.ID_DH = ctdh.ID_DH where dh.ID_DH = $id");
?>