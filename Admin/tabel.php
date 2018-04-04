<?php
    include 'dbo.php';
    error_reporting(0);
	if($_GET['page']=="kategori"){
?>

<div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          Kategori berita &nbsp;&nbsp;&nbsp; | &nbsp;
          <a class="btn btn-xs btn-primary" href="index.php?form-kategori=add"><i class="fa fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="8%">Kode</th>
            <th width="15%">kategori</th>
            <th width="70%"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
            $sql = mysql_query("select * from tbkategori") 
                    or die("Error query ".mysql_error());
            while($data = mysql_fetch_array($sql)){        
        ?>
        <tr>
           <td><?php echo $i?></td>
            <td><?php echo $data['kd_kat']?></td>
            <td><?php echo $data['kategori']?></td>
              <td>
				<a class="btn btn-info btn-xs" href="index.php?form-kategori=edit&id=<?php echo $data['kd_kat']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
				<a class="btn btn-danger btn-xs" href="crud/kategori/delete.php?id=<?php echo $data['kd_kat']?>"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
        </tr>
        <?php $i++; }?>
    </tbody>
    </table>
        </div>
      </div>
    </div>
 
</div>

<?php } ?>


<?php

if($_GET['page']=="berita"){
?>

    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
         Input Berita  &nbsp;&nbsp;&nbsp; | &nbsp;
          <a class="btn btn-xs btn-primary" href="index.php?form-berita=add"><i class="fa fa-user-plus"></i> Add</a>
        </div>
        <div class="card-body no-padding">
          <table class="datatable table table-striped primary" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="5%">KD. Kategori</th>
            <th width="15%">Tanggal</th>
            <th width="25%">Judul</th>
            <th width="25%">Isi Berita</th>
            <th width="10%">Gambar</th>
            <th width="10%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
            $sql = mysql_query("select * from tbberita a, tbkategori b where a.kd_kat = b.kd_kat") 
                    or die("Error query ".mysql_error());
            while($data = mysql_fetch_array($sql)){        
        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $data['kategori']?></td>
            <td><?php echo $data['tanggal']?></td>
            <td><?php echo $data['judul']?></td>
            <td><?php echo $data['isi_berita']?></td>
            <td><img src="img/<?php echo $data['gambar'];?>" alt="<?php echo $data['gambar'];?>" width=70px height=70px ></td>
            <td>
			<a class="btn btn-info btn-xs" href="index.php?form-berita=edit&id=<?php echo $data['id_berita']?>"><i class="fa fa-edit"></i> Edit</a>&nbsp;
			<a class="btn btn-danger btn-xs" href="crud/berita/delete.php?id=<?php echo $data['id_berita']?>"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
        </tr>
        <?php $i++; }?>
    </tbody>
</table>
        </div>
      </div>
    </div>
</div>

<?php } ?>