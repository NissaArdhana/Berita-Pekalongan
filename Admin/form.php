<?php
	include 'dbo.php';
    error_reporting(0);
    if($_GET["form-berita"]=="add"){
?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Input Berita</div>
        <div class="card-body">
     <form class="form form-horizontal" name="frberita" method="POST" action="crud/berita/create.php" enctype="multipart/form-data" >
        <div class="section">
          <div class="section-body">
            <div class="form-group">
					<label class="col-md-2 control-label">Kategori</label>
						<div class="col-md-9">
						<div class="input-group">
							 <select id="ms" multiple="multiple" class="select2" class="form-control" name="kd_kat">
                  <option value="">-- Pilih Kategori --</option>
                  <?php
                    $sql = mysql_query("select * from tbkategori")
                    or die("Error Query : ".mysql_error());
                    while($data = mysql_fetch_array($sql)){
                  ?>
                  <option value="<?php echo $data['kd_kat']?>" />
                    <?php echo $data['kd_kat'].' - '.$data['kategori']?>
                    <?php } ?>
              </select>
						  
						</div>
						</div>
					</div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tanggal</label>
              <div class="col-md-9">
                    <input type="text" class="form-control" id="dua" value="<?php echo isset($_GET['id'])?$data[1]:date('Y-m-d'); ?>" name="tanggal" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Judul</label>
              <div class="col-md-9">
                <input type="text" placeholder="Judul Berita" class="form-control" name="judul">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Isi Berita</label>
              <div class="col-md-9">
                  <textarea rows="7" class="form-control konten" placeholder="Isi Berita" name="isi_berita" id="isi_berita"></textarea>
              </div>
            </div>
			<div class="form-group">
                            <label for="tiga" class="col-sm-2 control-label">Gambar</label>
                            <div class="col-sm-10">
								<td><input type="file" name="gambar"></td>
                            
                </div>
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9 col-md-offset-2">
                <input type="submit" class="btn btn-primary" value="Save">
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
    <?php } ?>

<?php
    if($_GET["form-berita"]=="edit"){
    $id = $_GET["id"];
    $sql = mysql_query("select * from tbberita a, tbkategori b, tbuser c "." where id_berita='$id' ")
	or die ("Error Query : ".mysql_error());
    if($row=mysql_fetch_array($sql)){  
?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form Input Berita</div>
        <div class="card-body">
     <form class="form form-horizontal" name="frprodi" method="POST" action="crud/berita/update.php" enctype="multipart/form-data">
        <div class="section">
          <div class="section-title">Form Input Berita</div>
          <div class="section-body">
            <div class="form-group">
              <label class="col-md-2 control-label">Kategori</label>
              <div class="col-md-9">
                 <div class="input-group">   
						  <select class="select2" class="form-control" name="kode_kat">
							  <option value="<?php echo $row['kd_kat']?>" /><?php echo $row['kd_kat'].'-'.$row['kategori']?>
						<?php
							$sql = mysql_query("select * from tbkategori")
							or die("Error Query : ".mysql_error());
							while($data = mysql_fetch_array($sql)){
						?>
						<option value="<?php echo $data['kd_kat']?>" /><?php echo $data['kd_kat'].'-'.$data['kategori']?>
						<?php } ?>
						  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Tanggal </label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="tanggal" value="<?php echo $row['tanggal']?>">
                <input type="hidden" class="form-control" name="id_berita" value="<?php echo $row['id_berita']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label" >Judul</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="judul" value="<?php echo $row['judul']?>">
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-2 control-label">Isi Berita</label>
              <div class="col-md-9">
                <textarea rows="7" class="form-control konten" placeholder="Isi Berita" name="isi_berita" id="isi_berita"><?php echo $row['isi_berita']?></textarea>
              </div>
            </div>
              <div class="form-group">
              <label class="col-md-2 control-label">Gambar</label>
              <div class="col-md-9">
                <input type="file" class="form-control" name="gambar" value="<?php echo $row['gambar']?>">
              </div>
            </div> 
              
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9 col-md-offset-2">
                <input type="submit" class="btn btn-primary" value="Save">
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
</form>
        </div>
    </div>
    </div>
</div><?php }}?>


<?php
    if($_GET["form-kategori"]=="add"){
?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form kategori</div>
        <div class="card-body">
     <form class="form form-horizontal" name="frjur" method="POST" action="crud/kategori/create.php">
        <div class="section">
          <div class="section-title">Form kategori</div>
          <div class="section-body">
            <div class="form-group">
              <label class="col-md-2 control-label">Kode kategori</label>
              <div class="col-md-2">
                  <input type="text" class="form-control" name="kd_kat" value="<?php echo $row['kd_kat']?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama kategori</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="kategori">
              </div>
            </div>
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9 col-md-offset-2">
                <input type="submit" class="btn btn-primary" value="Save">
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
    <?php } ?>

<?php
    if($_GET["form-kategori"]=="edit"){
    $id = $_GET["id"];
    $sql = mysql_query("select * from tbkategori where kd_kat='$id'")
	or die ("Error Query : ".mysql_error());
    if($row=mysql_fetch_array($sql)){    
?>

<div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">Form kategori</div>
        <div class="card-body">
     <form class="form form-horizontal" name="frkat" method="POST" action="crud/kategori/update.php">
        <div class="section">
          <div class="section-title">Form kategori</div>
          <div class="section-body">
            <div class="form-group">
              <label class="col-md-2 control-label">Kode kategori</label>
              <div class="col-md-2">
                  <input type="text" class="form-control" value="<?php echo $row['kd_kat']?>" name="kd_kat" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2 control-label">Nama kategori</label>
              <div class="col-md-9">
                <input type="text" class="form-control" value="<?php echo $row['kategori']?>" name="kategori">
              </div>
            </div>
          </div>
        </div>
        <div class="form-footer">
          <div class="form-group">
            <div class="col-md-9 col-md-offset-2">
                <input type="submit" class="btn btn-primary" value="Save">
                <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
</form>
        </div>
    </div>
    </div>
</div>
    <?php }}?>