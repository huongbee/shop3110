<?php
require_once 'model/AcceptOrderModel.php';
session_start();

class AcceptOrderController {
    function checkOrder(){
        $token = $_GET['token'];
        $time = $_GET['t'];
        $model = new AcceptOrderModel;
        $bill = $model->selectBillByToken($token);
        
        if($bill){
            // echo "<pre>";
            // print_r($bill);
            // echo "</pre>";
            $checkTime = time()-$time;
            if($checkTime>86400){
                $_SESSION['error'] = "Thời gian xác nhận đơn hàng đã hết hạn, vui lòng đặt hàng lại";
                header('Location:404');
            }
            else{
                
            }
        }
        else{
            $_SESSION['error'] = "Liên kết bạn nhập vào không tồn tại";
            header('Location:404');
        }
    }
}


?>