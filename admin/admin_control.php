<?php
include('admin_connect.php');


class data
{


    function login($tk, $mk)
    {
        global $conn;
        $sql = "select * from login where taikhoan='$tk' and matkhau='$mk' ";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }


    function select_login()
    {
        global $conn;
        $sql = "select*from login";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    //---------------------------quản lý tài xế----------------------------

    public function insert_taixe($anh, $hoten, $ngaysinh, $gioitinh, $diachi, $sdt, $cccd, $loaibang, $tuyenxe)
    {

        global $conn;
        $sql = "INSERT INTO ql_taixe (anhtaixe,hoten_taixe,ngaysinh,gioitinh,diachi,sodienthoai,so_cccd,loaibang,tuyenxe) 
        VALUES ('$anh', '$hoten', '$ngaysinh', '$gioitinh', '$diachi', '$sdt', '$cccd', '$loaibang', '$tuyenxe')";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function update_taixe($anh, $hoten, $ngaysinh, $gioitinh, $diachi, $sdt, $cccd, $loaibang, $tuyenxe, $id)
    {
        global $conn;
        $sql = "update ql_taixe set 
        anhtaixe = '$anh',
        hoten_taixe = '$hoten', 
        ngaysinh = '$ngaysinh',
        gioitinh = '$gioitinh', 
        diachi = '$diachi', 
        sodienthoai = '$sdt', 
        so_cccd = '$cccd', 
        loaibang ='$loaibang',
        tuyenxe = '$tuyenxe' 
        where id = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    function select_taixe()
    {
        global $conn;
        $sql = "select*from ql_taixe";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    public function select_taixe_id($id)
    {
        global $conn;
        $sql = "select * from ql_taixe where id = '$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
