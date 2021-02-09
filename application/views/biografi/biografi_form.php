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
        <h2 style="margin-top:0px">Biografi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('jabatan') ?></label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Kantor <?php echo form_error('alamat_kantor') ?></label>
            <input type="text" class="form-control" name="alamat_kantor" id="alamat_kantor" placeholder="Alamat Kantor" value="<?php echo $alamat_kantor; ?>" />
        </div>
	    <div class="form-group">
            <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Lhkpn <?php echo form_error('lhkpn') ?></label>
            <input type="text" class="form-control" name="lhkpn" id="lhkpn" placeholder="Lhkpn" value="<?php echo $lhkpn; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="pendidikan">Pendidikan <?php echo form_error('pendidikan') ?></label>
            <textarea class="form-control" rows="3" name="pendidikan" id="pendidikan" placeholder="Pendidikan"><?php echo $pendidikan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="karir">Karir <?php echo form_error('karir') ?></label>
            <textarea class="form-control" rows="3" name="karir" id="karir" placeholder="Karir"><?php echo $karir; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <input type="hidden" name="id_biografi" value="<?php echo $id_biografi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('biografi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>