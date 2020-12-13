<html> 
<head><title>login</title>
<link rel =Stylesheet href="Style.css" type="text/css">
<div class="login"> </div> 
</head>
</html>
<?php
if(isset($_POST['email'])){
    //action
    $conn=$con->koneksi();
    $email=$_POST['email'];$psw=($_POST['password']);
    $sql = "SELECT * FROM user where password ='$psw' and email ='$email' and active='Y'";
    $user = $conn->query($sql);
    if($user->num_rows>0){
        session_start();
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id']=$sess['id'];
        $url="http://localhost/SARAS_SHOP";
        header('Location:http://localhost/SARAS_SHOP/admin/index.php?mod=barang');
    }else{
        $msg="Email dan Password tidak cocok";
        include_once 'views/v_login.php';
    }
}else{
    include_once 'views/v_login.php';
}
?>
