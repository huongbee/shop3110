<?php
require_once 'Controller.php';
require_once 'helpers/Cart.php';
require_once 'model/CheckoutModel.php';
require_once 'helpers/functions.php';
session_start();

class CheckoutController extends Controller{
    function __construct(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
    }
    function indexAction(){
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

        $data = [
            'title'=>'Giỏ hàng của bạn',
            'cart'=>$cart
        ];
        return $this->loadView('checkout',$data);
    }

    function checkoutAction(){
        //POST
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];

        $model = new  CheckoutModel;
        $idCustomer = $model->insertCustomer($fullname,$email,$address,$phone);
        if($idCustomer>0){
            //save bill
            $dateOrder = date('Y-m-d',time());
            $paymentMethod = "tructiep";
            $token = createToken();
            $tokenDate = time();

            $oldCart = $_SESSION['cart'];
            $cart = new Cart($oldCart);
            $total = $cart->totalPrice; 

            $idBill = $model->insertBill($idCustomer,$dateOrder,$total,$paymentMethod,$note,$token,$tokenDate);
            if($idBill){
                //save bill detail
            }
            else{
                //delete Customer 

                //
                $_SESSION['error']="Vui lòng thử lại";
                header('Location:gio-hang.html');
                return;
            }
        }
        else{
            $_SESSION['error']="Vui lòng thử lại";
            header('Location:gio-hang.html');
            return;
        }

        
    }
}

