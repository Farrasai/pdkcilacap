<!doctype html>
<!--Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode-->
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2 style="margin-top:0px"><?php echo $button ?> Profil </h2>
                </div>
        
        <form action="<?php echo $action; ?>" method="post">
        <div class="ibox-content">
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
	</div>
            </form>
        </div>
        </div>
    </body>
</html>