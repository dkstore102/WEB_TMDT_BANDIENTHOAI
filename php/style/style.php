<?php
    class app{
        function connect(){
            $con = mysqli_connect("localhost","mafhuuri_dkstore","123","mafhuuri_dkstore");
            $con->set_charset("utf8");
            return $con;
			if(!$con){
                echo'Loi Ket Noi';
                exit();
            }
        }
        
        function exportNumOrder($sql){
            $link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            $num =  $row["ID_DH"];
            return $num;
        }
        function exportProDucts($sql){
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) {
                $data = array();
				while ($row = mysqli_fetch_array($result)) {
					$ID_SP = $row["ID_SP"];
                    $ID_CTSP = $row["ID_CTSP"];
					$TenSP = $row["TenSanPham"];
                    $NhaCC = $row["NhaCungCap"];
                    $Nam = $row["NamPhatHanh"];
                    $LoaiSP = $row["ID_Loai"];
                    $Ram = $row["Ram"];
                    $Rom = $row["Rom"];
                    $Chip = $row["Chip"];
                    $ManHinh = $row["ManHinh"];
                    $ThietKe = $row["ThietKe"];
                    $Mau = $row["TenMau"];
                    $Gia = $row["Gia"];
                    $SoLuong = $row["SoLuong"];
                    $Anh = $row["Anh"];
                    $data[] = array('ID_CTSP' => $ID_CTSP,'ID_SP' => $ID_SP,'TenSP' => $TenSP,'Anh' =>$Anh,'Gia' => $Gia,'SoLuong' => $SoLuong,'Mau' => $Mau,'Ram' => $Ram,'Rom' => $Rom,'Chip' => $Chip,'ManHinh' => $ManHinh,'NhaCungCap' => $NhaCC,'NamPhatHanh' => $Nam,'ThietKe' => $ThietKe);
				}
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
			}
		}
        function exportCart($sql){
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) {
                $data = array();
                $TongTien = 0;
				while ($row = mysqli_fetch_array($result)) {
					$ID_CTSP = $row["ID_CTSP"];
                    $Gia = $row["Gia"];
                    $Ram = $row["ram"];
                    $Rom = $row["rom"];
                    $Chip = $row["chip"];
                    $Mau = $row["mau"];
                    $TenSanPham = $row["TenSanPham"];
                    $SoLuong = $row["SoLuong"];
                    $Anh = $row["Anh"];
                    $TongTien = $TongTien +($SoLuong*$Gia);
                    $data[] = array('ID_CTSP' => $ID_CTSP,'Mau' => $Mau,'Ram' => $Ram,'Rom' => $Rom,'Chip' => $Chip,'Gia' => $Gia,'Soluong'=>$SoLuong,'TenSanPham'=>$TenSanPham,'Anh' =>$Anh,'TongTien' => $TongTien);
				}
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
			}
		}
        function exportCustomer($sql){
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) {
                $data = array();
                $tongTien = 0;
				while ($row = mysqli_fetch_array($result)) {
					$ID_ND = $row["ID_ND"];
                    $User = $row["User"];
                    $Pass = $row["Pass"];
                    $hodem = $row["HoDem"];
                    $Ten = $row["Ten"];
                    $Email = $row["Email"];
                    $Phone = $row["SoDienThoai"];
                    $DiaChi = $row["DiaChi"];
                    $PhanQuyen = $row["PhanQuyen"];
                    $data[] = array('ID_ND' => $ID_ND,'User' => $User,'HoDem'=>$hodem,'Pass' => $Pass,'Ten' => $Ten,'Email' => $Email,'Phone' => $Phone,'DiaChi' => $DiaChi,'PhanQuyen' => $PhanQuyen);
				}
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
			}
		}
        function exportColor($sql){
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) {
                $data = array();
				while ($row = mysqli_fetch_array($result)) {
					$id = $row['ID_MAU'];
                    $ten = $row['TenMau'];
                    $data[] = array('id_mau'=>$id,'ten_mau' => $ten);
				}
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
			}
		}
        function exportSysTem($sql){
			$link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) {
                $data = array();
				while ($row = mysqli_fetch_array($result)) {
					$id = $row['ID_CauHinh'];
                    $Ram = $row["Ram"];
                    $Rom = $row["Rom"];
                    $Chip = $row["Chip"];
                    $ManHinh = $row["ManHinh"];
                    $ThietKe = $row["ThietKe"];
                    $data[] = array('id_cauhinh'=>$id,'Ram' => $Ram,'Rom' => $Rom,'Chip' => $Chip,'ManHinh' => $ManHinh,'Thiet_Ke' => $ThietKe);
				}
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
			}
		}
        function exportOrder($sql)
        {
            $link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) 
            {
                $data = array();
				while ($row = mysqli_fetch_array($result)) 
                {
                    $hodem = $row['HoDem'];
                    $ten = $row['Ten'];
                    $id = $row['ID_DH'];
                    $date = $row['NgayLap'];
                    $total = $row['TongDon'];
                    $address = $row['DiaChi'];
                    $phone = $row['SoDienThoai'];
                    $trangthai = $row['TrangThai'];
                    $hinthucthanhtoan = $row['HinhThucThanhToan'];
                    $id_nd = $row['ID_ND'];
                    $data[] = array('id'=>$id,'HoTen'=>$hodem.' '.$ten, 'date'=>$date, 'total' => $total,'address'=>$address,'phone'=>$phone,'trangthai'=>$trangthai, 'hinhthucthanhtoan' => $hinthucthanhtoan, 'id_nd' => $id_nd);
                }
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
            }
        }
        function exportDetail($sql)
        {
            $link = $this->connect();
			$result = mysqli_query($link,$sql);
			$i = mysqli_num_rows($result);
			if ($i > 0) 
            {
                $data = array();
				while ($row = mysqli_fetch_array($result)) 
                {
                    $gia = $row['Gia'];
                    $soluong = $row['SoLuong'];
                    $ten = $row['TenSanPham'];
                    $data[] = array('gia'=>$gia, 'soluong'=>$soluong,'ten'=>$ten);
                }
                header("content-Type:application/json;charset=UTF-8");
                echo json_encode($data);
            }
        }
        
        function Interactive($sql)
        {
            $link = $this->connect();
            if (mysqli_query($link,$sql)) {
                return 1;
            } else {
                return 0;
            }
        }
        
    }
?>