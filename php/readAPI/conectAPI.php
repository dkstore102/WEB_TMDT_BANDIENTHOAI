<?php
    class api1{
        function readAPI($url){
            $link = curl_init($url);
            curl_setopt($link, CURLOPT_RETURNTRANSFER, 1);
            $re = curl_exec($link);
            $json =  json_decode($re);
            return $json;
        }
        function readProduct($url){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item '.$cal->NhaCungCap.'">
                <!-- Block2 -->
                <form action="#" method="PORT">
                    <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="images/'.$cal->Anh.'" alt="IMG-PRODUCT">
                        <input type="hidden" name="IP" value="'.$cal->ID_CTSP.'">
                        <button type="submit"><a class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" href="./product-detail.php?IP='.$cal->ID_SP.'">SHOW MORE</a></button>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="product-detail.php" class="stext-104 js-name-detail cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                '.$cal->TenSP.'
                            </a>

                            <span class="stext-105 cl3">
                                '.$cal->Gia.'
                            </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative">    
                                <button class="btn" name="button" value="add"><i class="zmdi zmdi-shopping-cart"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                </form>
            </div>';
            }
        }
        function readExportsystem($url){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                echo '<option value="'.$cal->id_cauhinh.'">'.$cal->Ram.' / '.$cal->Rom.' / '.$cal->Chip.'</option>';
            }
        }
        function readExportColor($url){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                echo '<option value="'.$cal->id_mau.'">'.$cal->ten_mau.'</option>';
            }
        }
        function readProductDetail_title($url){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                echo '<div class="item-slick3" data-thumb="images/'.$cal->Anh.'">
                        <div class="wrap-pic-w pos-relative">
                            <img src="images/'.$cal->Anh.'" alt="IMG-PRODUCT">

                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/'.$cal->Anh.'">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                    </div>';
                    $ten = $cal->TenSP;
                    $nhacc = $cal->NhaCungCap;
                    $thietke = $cal->ThietKe;
                    $gia = $cal->Gia;
                    $ip = $cal->ID_SP;
            }
            echo '</div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            <b>'.$ten.'</b>
                        </h4>

                        <span class="mtext-106 cl2">
                            Giá: '.$gia.' VNĐ
                        </span>

                        <p class="stext-102 cl3 p-t-23">
                           Mô tả: Được cung cấp bởi nhà phát hành '.$nhacc.' với thiết kế'.$thietke.'.
                        </p>';
        }
        function readCart($url){
            $xem = $this->readAPI($url);
            $tongtien = 0;
            $i = 0;
            if(count($xem)){
                foreach($xem as $cal){
                    $i = $i+1;
                    $_SESSION["number_cart"]=$i;
                    $tongtien = $tongtien + ($cal->Soluong * $cal->Gia);
                    echo '<form><li class="header-cart-item flex-w flex-t m-b-12">
                                <a href="?button=delete&ID='.$cal->ID_CTSP.'">
                                    <div class="header-cart-item-img">
                                        <img src="images/'.$cal->Anh.'" alt="IMG">
                                    </div>
                                </a>
                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        '.$cal->TenSanPham.'('.$cal->Mau.'/'.$cal->Ram.'/'.$cal->Rom.'/'.$cal->Chip.')
                                    </a>
    
                                    <span class="header-cart-item-info">
                                        '.$cal->Soluong.' x '.$cal->Gia.'VND
                                    </span>
                                </div>
                            </li></form>';
                        }
            }else {
                echo '<div class="alert alert-success">
                            <strong>Notification!</strong> Not find to cart !
                        </div>
                        <a><button class="btn btn-success">Go to Shop </button></a>';
                        $_SESSION["number_cart"]=$i;
            }
            echo'</ul>
				
                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: '.$tongtien.' VND
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>';
        }
        function readCartDetail($url){
            $xem = $this->readAPI($url);
            $tongtien = 0;
            $i=0;
            foreach($xem as $cal){
                $tongtien = $tongtien + ($cal->Soluong * $cal->Gia);
                $i=i+1;
                echo '<form>
                        <tr class="table_row">
                            <td class="text-center"> 
                                <a href="?button=delete&ID='.$cal->ID_CTSP.'">
                                    <div class="header-cart-item-img ml-5 mt-5">
                                        <img src="images/'.$cal->Anh.'" alt="IMG">
                                        <input type="hidden" name="ID" value="'.$cal->ID_CTSP.'">
                                    </div>
                                </a>
                            </td>
                            <td class="text-center"><p class="p-t-66">'.$cal->TenSanPham.'</p></td>
                            <td class="text-center"><p class="p-t-66">'.$cal->Gia.'</p></td>
                            <td class="text-center "><input class="m-t-60 txt-center form-control" type="number" name="num-product" value="'.$cal->Soluong.'"></td>
                            <td class="text-center"><p class="p-t-66">'.$cal->Gia * $cal->Soluong.'</p></td>
                            <td class="text-center"><button class="btn btn-info m-t-60" name="button" value="update">UPDATE</button></td>
                        </tr>
                    </form>';
            }
            if(count($xem) == 0) {
                echo '<div class="alert alert-success">
                            <strong>Notification!</strong> Not find to cart !
                        </div>
                        <a><button class="btn btn-success">Go to Shop </button></a>';
            }
            $_SESSION['tongtien'] =$tongtien;
            $_SESSION['nums']=$i;
        }
        function Infomation_Shipping($url){
            $xem = $this->readAPI($url);
            $tongtien = 0;
                foreach($xem as $cal){
                    $tongtien = $tongtien + ($cal->Soluong * $cal->Gia);
                    echo '';
                }
        }
        function readLogin($url){
            $xem = $this->readAPI($url);
            if(count($xem)){
                if($_REQUEST['username']) {
                $user = $_REQUEST['username'];
                $pass = $_REQUEST['pass'];
                $n = 0;
                foreach ($xem as $val) {
                    if ($val->User == $user && $val->Pass == $pass) {
                        $_SESSION["username"] = $user;
                        $_SESSION["phanquyen"] = $val->PhanQuyen;
                        $_SESSION["maND"] = $val->ID_ND;
                        $phanquyen = $_SESSION["phanquyen"];
                        $_SESSION['current_user'] = $user;
                        $_SESSION["trangthai"] = $_SESSION["phanquyen"];
                        $_SESSION['name'] = $val->Ten;
                        switch ($phanquyen) {
                            case '1': {
                                echo'<script>alert ("Login Succes!!!"); window.location.replace("index.php"); </script>';
                                break;
                            }
                            case '2': {
                                echo'<script>alert ("Login Admin Succes!!!"); window.location.replace("./admin/index.php"); </script>';
                                break;
                            }

                        }
                    } else {
                    echo '<script>
                            alert("thông tin đăng nhập sai");
                        </script>';
                    }
                }
                }
            }
        }
        function check_permission($q)
        {
            $phanquyen = $_SESSION["phanquyen"];
            if ($_SESSION["phanquyen"] != $q) {
                header("location:login.php");
            }
        }
        function readCustomer($url){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                echo '<h4 class="mtext-109 cl2 p-b-30 text-center ">
                        Infomation Customer
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                    </div>

                    <form action="#" class="col-12 ">
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30 ">
                            <div class="p-r-18 p-r-0-sm w-full-ssm w-full w-full-lg">
                                <div class="p-t-15">
                                    <div class="form-group row">
                                        <label class="col-2" for="email">Full Name:</label>
                                        <div class="col-2"></div>
                                        <input type="text" class="form-control col-5" placeholder="First Name..." name="fname" value="'.$cal->HoDem.'">
                                        <input type="text" class="form-control col-3" placeholder="Last Name..." name="lname" value="'.$cal->Ten.'">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2" for="email">Address:</label>
                                        <div class="col-2"></div>
                                        <input type="text" class="form-control col-8" placeholder="Địa chỉ ... " name="address" value="'.$cal->DiaChi.'">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2" for="email">Phone Number:</label>
                                        <div class="col-2"></div>
                                        <input type="phone" class="form-control col-8" placeholder="Phone number ..." name="phone" value="'.$cal->Phone.'">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-2" for="email">Mail Address:</label>
                                        <div class="col-2"></div>
                                        <input type="email" class="form-control col-8" placeholder="Email ... " name="email" value="'.$cal->Email.'">
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33">
                            
                        </div>

                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04" name="button" value="update">
                            Proceed to Checkout
                        </button>

                    </form>';
            }
        }
        function CheckPass($url,$pass){
            $xem = $this->readAPI($url);
            foreach($xem as $cal){
                if($cal->Pass == $pass){
                    return 1;
                }
            }
        }
        function ReadOrder($url)
        {
            $xem = $this->readAPI($url);
            $dem=0;
            echo '<table class="table-shopping-cart table ">
            <thead>
                <tr class="table_head text-center">
                    <th class="text-center">STT</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>				
            <tbody>';
            foreach($xem as $cal)
            {
                echo '<form>
                <tr class="table_row">
                    <input type="hidden" name="id" value="'.$cal->id.'"/>
                    <td class="text-center"><p class="p-t-66">'.++$dem.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->date.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->address.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->phone.'</p></td>
                    <td class="text-center"><button class="btn btn-info m-t-60" name="button" value="view">VIEW</button></td>
                </tr>
            </form>';
            }
            echo '</tbody>
            </table>';
        }
        function ReadOrderPending($url)
        {
            $xem = $this->readAPI($url);
            $dem=0;
            echo '<table class="table">
                    <thead>
                        <tr class="text-center border border-dark">
                            <th class="text-center">STT</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>				
                    <tbody>';
            foreach($xem as $cal)
            {
                echo '<form>
                <tr">
                    <input type="hidden" name="id" value="'.$cal->id.'"/>
                    <td class="text-center"><p class="p-t-66">'.++$dem.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->date.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->address.'</p></td>
                    <td class="text-center"><p class="p-t-66">'.$cal->phone.'</p></td>
                    <td class="text-center"><button class="btn btn-info m-t-60" name="button" value="view">VIEW</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-info m-t-60" name="button" value="cancel">CENCAL</button></td>
                </tr>
            </form>';
            }
            echo '</tbody>
            </table>';
        }
        function ReadDetail($url)
        {
            $xem = $this->readAPI($url);
            $tongtien = 0;
            echo '<table class="table ">
                <thead>
                    <tr class="text-center">
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>				
                <tbody>';
            foreach($xem as $cal)
            {
                $tongtien = $tongtien + ($cal->soluong * $cal->gia);
                echo 
                '<form>
                    <tr>
                        <td class="text-center"><p class="p-t-66">'.$cal->ten.'</p></td>
                        <td class="text-center"><p class="p-t-66">'.$cal->gia.'</p></td>
                        <td class="text-center"><p class="p-t-66">'.$cal->soluong.'</p></td>
                        <td class="text-center"><p class="p-t-66">'.$cal->gia * $cal->soluong.'</p></td>
                    </tr>
                </form>';          
            }
            echo '</tbody>
            </table>';
        }
        function ReadOrderAdmin($url)
        {
            $xem = $this->readAPI($url);
            $dem=0;
            echo '<thead>
                        <tr class="table_head text-center">
                            <th class="text-center">STT</th>
                            <th class="text-center">Customer Name</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Payment Status</th>
                            <th class="text-center">Orders Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>				
                    <tbody>';
            foreach($xem as $cal)
            {
                echo '<form >
                        <tr style="height: 50px;padding-top: 10px;">
                            <input type="hidden" name="id_dh" value="'.$cal->id.'">
                            <td class="text-center"><p>'.++$dem.'</p></td>
                            <td class="text-center"><p>'.$cal->HoTen.'</p></td>
                            <td class="text-center"><p>'.$cal->date.'</p></td>
                            <td class="text-center"><p>'.$cal->address.'</p></td>
                            <td class="text-center"><p>'.$cal->total.'</p></td>
                            <td class="text-center"><p>'.$cal->trangthai.'</p></td>
                            <td class="text-center"><p>'.$cal->hinhthucthanhtoan.'</p></td>
                            <td class="text-center"><button class="btn btn-info" name="button" value="view">VIEW</button></td>
                        </tr>
                    </form>';
            }
            echo '</tbody>';
        }
        function ReadOrderDetaiAdmin($url)
        {
            $xem = $this->readAPI($url);
            $dem=0;
            echo '<thead>
                        <tr class="table_head text-center">
                            <th class="text-center">STT</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Products Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Number</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>				
                    <tbody>';
            foreach($xem as $cal)
            {
                echo '<form >
                        <tr style="height: 50px;padding-top: 10px;">
                            <input type="hidden" name="id_dh" value="'.$cal->id.'">
                            <td class="text-center"><p>'.++$dem.'</p></td>
                            <td class="text-center"><p>'.$cal->anh.'</p></td>
                            <td class="text-center"><p>'.$cal->name.'</p></td>
                            <td class="text-center"><p>'.$cal->number.'</p></td>
                            <td class="text-center"><p>'.$cal->price.'</p></td>
                            <td class="text-center"><p>'.$cal->total.'</p></td>
                            <td class="text-center"><button class="btn btn-info" name="button" value="view">VIEW</button></td>
                        </tr>
                    </form>';
            }
            echo '</tbody>';
        }
    }
?>