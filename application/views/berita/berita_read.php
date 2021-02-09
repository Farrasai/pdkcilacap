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
        <h2 style="margin-top:0px">Berita Read</h2>
        <table class="table">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Seo Judul</td><td><?php echo $seo_judul; ?></td></tr>
	    <tr><td>Konten</td><td><?php echo $konten; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>File</td><td><?php echo $file; ?></td></tr>
	    <tr><td>Date</td><td><?php echo $date; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td>Is Active</td><td><?php echo $is_active; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('berita') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>