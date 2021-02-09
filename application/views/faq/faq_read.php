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
        <h2 style="margin-top:0px">Faq Read</h2>
        <table class="table">
	    <tr><td>Author</td><td><?php echo $author; ?></td></tr>
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Update At</td><td><?php echo $update_at; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('faq') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>