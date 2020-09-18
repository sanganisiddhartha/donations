<?php
$name=$_POST['dName'];
$email=$_POST['demail'];
$phone=$_POST['dphnum'];
$amount=$_POST['damount'];
//$authType="instamojo/Instamojo.php";
  include 'instamojo/Instamojo.php';
  
  $api = new  Instamojo\Instamojo('test_6d98d63bb64146c06dd282b511a','test_6bb04ec9736353673bf6966fc62','https://test.instamojo.com/api/1.1/');
    try {
    $response = $api->PaymentRequestCreate(array(
        "purpose" => "Donate The needy" ,
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "donor_name"=>$name,
        "phone"=>$phone,
        "send_sms"=>true,
        "allow_repeated_payments"=>false,
        //"redirect_url" => "https://localhost:8000/thankyou.html"
       // "webhook"=>
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
?>