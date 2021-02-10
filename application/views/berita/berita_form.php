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
        <h2 style="margin-top:0px">Berita <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Sub Judul <?php echo form_error('seo_judul') ?></label>
            <input type="text" class="form-control" name="seo_judul" id="seo_judul" placeholder="Seo Judul" value="<?php echo $seo_judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="konten">Konten <?php echo form_error('konten') ?></label>
            <textarea class="form-control" rows="3" name="konten" id="konten" placeholder="Konten"><?php echo $konten; ?></textarea>
        </div>
	    <div class="form-group">
            <label>Pilih Kategori</label><?php echo form_error('kategori') ?></label><br>
            <select>
            <option>BIDANG PPTK</option>
            <option>BIDANG DIKDAS</option>
            <option>BIDANG PAUD DIKMAS</option>
            <option>BIDANG KEBUDAYAAN</option>
            <option>BIDANG SARPRAS</option>
            <option>SEKRETARIAT</option>
            <!--Kategori Ditambah-->
            </select>
        </div>
	    <div class="form-group">
        <!--Jangan lupa ditambah jenis file-->
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="file" accept="image/*" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
        <!--ini jenis filenya belum-->
            <label for="varchar">File <?php echo form_error('file') ?></label>
            <input type="file" class="form-control" name="file" id="file" placeholder="File" value="<?php echo $file; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Date <?php echo form_error('date') ?></label>
            <input type="date" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="date" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="char">Is Active <?php echo form_error('is_active') ?></label>
            <input type="text" class="form-control" name="is_active" id="is_active" placeholder="Is Active" value="<?php echo $is_active; ?>" />
        </div>
	    <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berita') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>