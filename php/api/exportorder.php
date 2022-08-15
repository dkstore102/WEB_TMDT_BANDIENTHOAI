<?php
    include_once '../style/style.php';
    $st = new app();
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND where dh.ID_ND = '.$id.'');
    }else{
        if(isset($_REQUEST['mand'])){
            if(isset($_REQUEST['dh'])){
                $dh = $_REQUEST['dh'];
                $mand = $_REQUEST['mand'];
                if($dh == 0){
                    $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND where dh.ID_ND = '.$mand.'');
                }else{
                    $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND where dh.ID_ND = '.$mand.' && dh.TrangThai='.$dh.'');
                }
            }else{
                $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND ');
            }
        }else{
            if(isset($_REQUEST['dh'])){
                $dh = $_REQUEST['dh'];
                if($dh == 0){
                    $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND');
                }else{
                    $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND where dh.TrangThai='.$dh.'');
                }
            }else{
                $st->exportOrder('select dh.TrangThai as TrangThai, dh.ID_DH as ID_DH,nd.HoDem as HoDem,nd.Ten as Ten,dh.NgayLap as NgayLap,dh.TongDon as TongDon,dh.SoDienThoai as SoDienThoai,dh.DiaChi as DiaChi,dh.HinhThucThanhToan as HinhThucThanhToan,dh.ID_ND as ID_ND from donhang dh join nguoidung nd on nd.ID_ND=dh.ID_ND');
            }
        }
    }
?>