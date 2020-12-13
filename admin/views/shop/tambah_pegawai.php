<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=pegawai &page=save" method="POST" enctype="multipart/form-data">

    <div class="col-lg-md-6">
    <div class="form-group">
    <label for="">id_pegawai</label>
        <input type="text" name="id_pegawai" required class="form-control" id="" value="<?=(isset($_POST['id_pegawai']))?$_POST['id_pegawai']:'';?>">
        <input type="hidden" name="id_pegawai" class="form-control" id="" value="<?=(isset($_POST['id_pegawai']))?$_POST['id_pegawai']:'';?>">
        
    </div>
     <div class="col-lg-md-6">
    <div class="form-group">
    <label for="">nama_pegawai</label>
        <input type="text" name="nama_pegawai" required class="form-control" id="" value="<?=(isset($_POST['nama_pegawai']))?$_POST['nama_pegawai']:'';?>">
        <input type="hidden" name="id_pegawai" class="form-control" id="" value="<?=(isset($_POST['id_pegawai']))?$_POST['id_pegawai']:'';?>">
    </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </div>

    </div>
    

</form>
