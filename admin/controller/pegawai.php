<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/shop/tambah_pegawai.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['id_pegawai'])){
                $err['id_pegawai']="id wajib terisi";
            }
            if(!is_numeric($_POST['nama_pegawai'])){
                $err['nama_pegawai']="nama pegawai wajib terisi";
            }     
            }
     if(!isset($err)){
          $id_pegawai=$_SESSION['login']['id'];
          if(!empty($_POST['id_pegawai'])){
           //update
                $sql="update pegawai set id_pegawai='$_POST[id_pegawai]',nama_pegawai='$_POST[nama_pegawai]'";
            }else{
            //save
                $sql = "INSERT INTO pegawai (id_pegawai,nama_pegawai) 
                VALUES ('$_POST[id_pegawai]','$_POST[nama_pegawai])";
            }
                if ($conn->query($sql) === TRUE) {
                header('Location: '.$con->site_url().'/admin/index.php?mod=pegawai');
                } else {
                $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }
        
        }
        if(isset($err)){
            $content="views/shop/tambah_pegawai.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
      $pegawai="SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'";
      $pegawai=$conn->query($id_pegawai;
      $_POST=$pegawai->fetch_assoc();
      
        $content="views/shop/tambah_pegawai.php";
        include_once 'views/template.php'; 
        break;
    case 'delete';
        $pegawai="delete from pegawai where id_pegawai='$_GET[id]'";
        $pegawai=$conn->query($id_pegawai);
        header('Location: '.$con->site_url().'/admin/index.php?mod=pegawai');
    break;
    default:
        $sql="select * from pegawai";
        $pegawai=$conn->query($sql);
        $conn->close();
        $content="views/shop/tampil_pegawai.php";
        include_once 'views/shop/template.php';