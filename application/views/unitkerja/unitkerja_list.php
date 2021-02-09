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
        <h2 style="margin-top:0px">Unitkerja List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('unitkerja/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('unitkerja/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('unitkerja'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama Unit</th>
		<th>Deskripsi</th>
		<th>Struktur Bidang</th>
		<th>Icon</th>
		<th>Foto</th>
		<th>Alamat</th>
		<th>Pimpinan</th>
		<th>Kontak</th>
		<th>Email</th>
		<th>Maps</th>
		<th>Jumlah Pegawai</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Action</th>
            </tr><?php
            foreach ($unitkerja_data as $unitkerja)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $unitkerja->nama_unit ?></td>
			<td><?php echo $unitkerja->deskripsi ?></td>
			<td><?php echo $unitkerja->struktur_bidang ?></td>
			<td><?php echo $unitkerja->icon ?></td>
			<td><?php echo $unitkerja->foto ?></td>
			<td><?php echo $unitkerja->alamat ?></td>
			<td><?php echo $unitkerja->pimpinan ?></td>
			<td><?php echo $unitkerja->kontak ?></td>
			<td><?php echo $unitkerja->email ?></td>
			<td><?php echo $unitkerja->maps ?></td>
			<td><?php echo $unitkerja->jumlah_pegawai ?></td>
			<td><?php echo $unitkerja->created_at ?></td>
			<td><?php echo $unitkerja->updated_at ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('unitkerja/read/'.$unitkerja->id_unitkerja),'Read'); 
				echo ' | '; 
				echo anchor(site_url('unitkerja/update/'.$unitkerja->id_unitkerja),'Update'); 
				echo ' | '; 
				echo anchor(site_url('unitkerja/delete/'.$unitkerja->id_unitkerja),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('unitkerja/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>