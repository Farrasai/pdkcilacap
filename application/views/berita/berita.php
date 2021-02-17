



     <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">



            <div class="pt-32pt">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Manajemen Berita</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.html">Berita</a></li>

                                <li class="breadcrumb-item active">

                                    List

                                </li>

                            </ol>

                        </div>
                    </div>


                    <div class="row" role="tablist">
                        <div class="col-auto">
                            <a href="<?php echo site_url('berita/create'); ?>" class="btn btn-outline-secondary">Buat Berita</a>
                        </div>
                    </div>

                </div>
            </div>





            <div class="container page__container">
                <div class="page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Tabel Berita Dinas</div>
                    </div>


                    
                    
                    <div class="card mb-32pt">

                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-from" data-lists-sort-desc="true" data-lists-values='["js-lists-values-name", "js-lists-values-status", "js-lists-values-policy", "js-lists-values-reason", "js-lists-values-days", "js-lists-values-available", "js-lists-values-from", "js-lists-values-to"]'>

                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                    <tr>

                                        <th style="width: 18px;" class="pr-0">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">No.</a>
                                        </th>

                                        <th>
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-name">Berita</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Status</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-policy">Tanggal Terbit</a>
                                        </th>
                                        <th style="width: 150px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-reason">Revisi</a>
                                        </th>
                                        <th style="width: 48px;">
                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-days">Aksi</a>
                                        </th>
                                       
                                        <th style="width: 24px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="leaves">

                                <?php foreach ($berita_data as $berita) : ?>

                                    <tr>

                                        <td class="pr-0">
                                            <div class="custom-control custom-checkbox">
                                            <small class="js-lists-values-policy text-50"><?php echo ++$start ?></small>
                                            </div>
                                        </td>

                                        <td>

                                            <div class="media flex-nowrap align-items-center" style="white-space: nowrap;">
                                                <div class="avatar avatar-sm mr-8pt">


                                                    <span class="avatar-title rounded-circle">BN</span>

                                                </div>
                                                <div class="media-body">


                                                    <div class="d-flex align-items-center">
                                                        <div class="flex d-flex flex-column">
                                                            <p class="mb-0"><strong class="js-lists-values-name"><?php echo $berita->judul ?></strong></p>
                                                            <small class="js-lists-values-email text-50"><?php echo $berita->kategori ?></small>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <small class="js-lists-values-status text-50 mb-4pt"><?php echo $berita->is_active ?></small>
                                                <span class="indicator-line rounded bg-warning"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-policy text-50"><?php echo date('d F Y', strtotime($berita->date)); ?></small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-reason text-50"><?php echo date('d F Y', strtotime($berita->updated_at)); ?></small>
                                        </td>
                                        <td>
                                            <small class="js-lists-values-days text-50">
                                            
                                            <a href="<?= base_url('berita/update/'.$berita->id_berita); ?>" class="btn btn-primary btn-sm">Ubah</a>
                                            <button type="button" class="btn btn-accent btn-sm text-white"><?php echo anchor(site_url('berita/delete/'.$berita->id_berita),'Hapus','onclick="javasciprt: return confirm(\'Tenan rep ngapus? ?\')"'); 
                        ?></button>
                                            </small>
                                        </td>
                                       
                                    </tr>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Sebelumnya</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Page 1">
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Page 2">
                                        <span>2</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Selanjutnya</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="card-body bordet-top text-right">
  15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


                    </div>

                    

                </div>
            </div>




        </div>
        <!-- // END Header Layout Content -->
