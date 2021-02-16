<!doctype html>
<html>
    <head>
        <title>Dinas Pendidikan dan Kebudayaan Kabupaten Cilacapr</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Berita</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('berita/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('berita/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('berita'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Seo Judul</th>
                <th>Konten</th>
                <th>Kategori</th>
                <th>Foto</th>
                <th>File</th>
                <th>Date</th>
                <th>Updated At</th>
                <th>Is Active</th>
                <th>Action</th>
            </tr>
            <?php foreach ($berita_data as $berita)
            {
                ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $berita->judul ?></td>
                    <td><?php echo $berita->seo_judul ?></td>
                    <td><?php echo $berita->konten ?></td>
                    <td><?php echo $berita->kategori ?></td>
                    <td><?php echo $berita->foto ?> <img src="<?php echo base_url(). '/uploads'.$berita->foto ?>" > </td>
                    <td><?php echo $berita->file ?></td>
                    <td><?php echo $berita->date ?></td>
                    <td><?php echo $berita->updated_at ?></td>
                    <td><?php echo $berita->is_active ?></td>
                    <td style="text-align:center" width="200px">
                        <?php 
                        echo anchor(site_url('berita/read/'.$berita->id_berita),'Read'); 
                        echo ' | '; 
                        echo anchor(site_url('berita/update/'.$berita->id_berita),'Update'); 
                        echo ' | '; 
                        echo anchor(site_url('berita/delete/'.$berita->id_berita),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                        ?>
                    </td>
		        </tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('berita/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>