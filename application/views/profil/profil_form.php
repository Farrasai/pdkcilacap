<!doctype html>
<html>
    <head>
        <title>Dinas Pendidikan dan Kebudayaan Kabupaten Cilacap</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Profil <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="visi">Visi <?php echo form_error('visi') ?></label>
            <textarea class="form-control" rows="3" name="visi" id="visi" placeholder="Visi"><?php echo $visi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="misi">Misi <?php echo form_error('misi') ?></label>
            <textarea class="form-control" rows="3" name="misi" id="misi" placeholder="Misi"><?php echo $misi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="tugas_fungsi">Tugas Fungsi <?php echo form_error('tugas_fungsi') ?></label>
            <textarea class="form-control" rows="3" name="tugas_fungsi" id="tugas_fungsi" placeholder="Tugas Fungsi"><?php echo $tugas_fungsi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <input type="hidden" name="id_profil" value="<?php echo $id_profil; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>