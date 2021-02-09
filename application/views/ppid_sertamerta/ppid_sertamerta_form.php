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
        <h2 style="margin-top:0px">Ppid_sertamerta <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="isi">Isi <?php echo form_error('isi') ?></label>
            <textarea class="form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <input type="hidden" name="id_sertamerta" value="<?php echo $id_sertamerta; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ppid_sertamerta') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>