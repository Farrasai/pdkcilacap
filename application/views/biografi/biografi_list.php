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
        <h2 style="margin-top:0px">Biografi List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('biografi/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('biografi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('biografi'); ?>" class="btn btn-default">Reset</a>
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
		<th>Nama</th>
		<th>Jabatan</th>
		<th>Alamat Kantor</th>
		<th>Deskripsi</th>
		<th>Lhkpn</th>
		<th>Foto</th>
		<th>Pendidikan</th>
		<th>Karir</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Action</th>
            </tr><?php
            foreach ($biografi_data as $biografi)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $biografi->nama ?></td>
			<td><?php echo $biografi->jabatan ?></td>
			<td><?php echo $biografi->alamat_kantor ?></td>
			<td><?php echo $biografi->deskripsi ?></td>
			<td><?php echo $biografi->lhkpn ?></td>
			<td><?php echo $biografi->foto ?></td>
			<td><?php echo $biografi->pendidikan ?></td>
			<td><?php echo $biografi->karir ?></td>
			<td><?php echo $biografi->created_at ?></td>
			<td><?php echo $biografi->updated_at ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('biografi/read/'.$biografi->id_biografi),'Read'); 
				echo ' | '; 
				echo anchor(site_url('biografi/update/'.$biografi->id_biografi),'Update'); 
				echo ' | '; 
				echo anchor(site_url('biografi/delete/'.$biografi->id_biografi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('biografi/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>