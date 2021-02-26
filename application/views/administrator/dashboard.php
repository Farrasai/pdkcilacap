 <!--Jangan mengubah template kecuali memang sangat diperlukan, takut ancur tampilannya-->
 <!--Untuk Header Footer dan Sidebar sudah memakai Template-->
 <div class="container-fluid">
    <div class="mdk-header-layout__content page-content ">
        <div class="pt-32pt pt-sm-64pt pb-32pt">
            <div class="text-center">
                <h4>
                <div class="alert alert-success w3-container w3-margin-bottom" role="alert">
                    <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>DASHBOARD
                </div>
                </h4>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat Datang!</h4>
                    <p>Selamat datang <strong><?php echo $username; ?></strong> di Sistem Informasi Dinas Pendidikan dan Kebudayaan Kabupaten Cilacap. Anda masuk sebagai: <strong><?php echo $level; ?></strong></p>
                    <hr>
                    <p class="mb-0">Jangan lupa untuk selalu jaga kesehatan dan selalu fokus dalam bekerja</p>
                </div>
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
