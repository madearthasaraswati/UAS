<script src="https://kit.fontawesome.com/c333d3440e.js" crossorigin="anonymous"></script>
<div class="row">
       <br>
        <h4>Data Pegawai</h4>
       <div class="pull-left">
  </div>
    <br>
    <div class="pull-right">
        <a href="index.php?mod=pegawai&page=add">
        <button class="btn btn-primary" >add</button>
    </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
            <td>No</td>
            <td>Id Pegawai</td><td>Nama Pegawai</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($pegawai != NULL){
                $no=1;
                foreach($pegawai as $row){?>
                <tr>
                    <td><?=$no;?></td><td><?=$row['id_pegawai'] ?></td><td><?=$row['nama_pegawai'];?></td>
                        <a href="index.php?mod=pegawai&page=edit&id=<?=($row["id_pegawai"])?>"><i class="fa fa-pencil"></i></a>
                        <a href="index.php?mod=pegawai&page=delete&id=<?=($row["nama_pegawai"])?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
           <?php $no++; }
            }?>
        </tbody>
    </table>
</div>

