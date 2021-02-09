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
                    <h2><b>List Biografi</b></h2>
                    <?php if ($this->session->userdata('message') != '') {?>
                    <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <?=$this->session->userdata('message')?> <a class="alert-link" href="#"></a>
                    </div>
                 <?php }?>
                </div>
                <div class="ibox-content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-8">
               
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('biografi/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" value="<?php echo @$_GET['q']; ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success" onclick="lookup('<?php echo base_url()?>biografi/lookup')" >Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Jabatan</th>
		<th class="text-center">Alamat Kantor</th>
		<th class="text-center">Deskripsi</th>
		<th class="text-center">Lhkpn</th>
		<th class="text-center">Foto</th>
		<th class="text-center">Pendidikan</th>
		<th class="text-center">Karir</th>
		<th class="text-center">Created At</th>
		<th class="text-center">Updated At</th></tr>
            </thead>
			<tbody><?php
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
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>