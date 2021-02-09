<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Unitkerja <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Unit <?php echo form_error('nama_unit') ?></label>
            <input type="text" class="form-control" name="nama_unit" id="nama_unit" placeholder="Nama Unit" value="<?php echo $nama_unit; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Struktur Bidang <?php echo form_error('struktur_bidang') ?></label>
            <input type="text" class="form-control" name="struktur_bidang" id="struktur_bidang" placeholder="Struktur Bidang" value="<?php echo $struktur_bidang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Icon <?php echo form_error('icon') ?></label>
            <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?php echo $icon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Pimpinan <?php echo form_error('pimpinan') ?></label>
            <input type="text" class="form-control" name="pimpinan" id="pimpinan" placeholder="Pimpinan" value="<?php echo $pimpinan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kontak <?php echo form_error('kontak') ?></label>
            <input type="text" class="form-control" name="kontak" id="kontak" placeholder="Kontak" value="<?php echo $kontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Maps <?php echo form_error('maps') ?></label>
            <input type="text" class="form-control" name="maps" id="maps" placeholder="Maps" value="<?php echo $maps; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jumlah Pegawai <?php echo form_error('jumlah_pegawai') ?></label>
            <input type="text" class="form-control" name="jumlah_pegawai" id="jumlah_pegawai" placeholder="Jumlah Pegawai" value="<?php echo $jumlah_pegawai; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <input type="hidden" name="id_unitkerja" value="<?php echo $id_unitkerja; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('unitkerja') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>