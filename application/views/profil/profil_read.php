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
        <h2 style="margin-top:0px">Profil Read</h2>
        <table class="table">
	    <tr><td>Visi</td><td><?php echo $visi; ?></td></tr>
	    <tr><td>Misi</td><td><?php echo $misi; ?></td></tr>
	    <tr><td>Tugas Fungsi</td><td><?php echo $tugas_fungsi; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('profil') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>