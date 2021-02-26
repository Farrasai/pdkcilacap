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
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role=document>
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
                <!-- Tombol yang memicu modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
                Klik Saya
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Contoh Modal -->
<div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Halo, ini modal sederhana.
        <br/>
        Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Oke</button>
      </div>
    </div>
  </div>
</div>

<div class="container">

  <center>
    <h3>Tutorial Membuat Modal Dengan Bootstrap 4</h3>
    <h4><a href="https://www.malasngoding.com/modal-bootstrap-4/">www.malasngoding.com</a></h4>
  </center>

  <br/>
  <br/>

  <h4>Modal Sederhana</h4>
  <!-- Tombol yang memicu modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaya">
      Klik Saya 
    </button>

  <!-- Contoh Modal -->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Judul Modal Di Sini</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          Halo, ini modal sederhana.
          <br/> Seri Tutorial Bootstrap 4 lengkap dari dasar sampai mahir.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Oke</button>
        </div>
      </div>
    </div>
  </div>

  <br/>
  <hr>
  <br/>

  <h4>Ukuran Modal</h4>
  <!-- Extra large modal / Modal paling besar-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalPalingBesar">Extra large modal</button>

  <div class="modal fade modalPalingBesar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">

      <div class="modal-content">
        <div class="modal-header">
          <h5>Modal extra large (xl)</h5>
        </div>
        <div class="modal-body">
          Contoh modal berukuran paling besar.
        </div>
      </div>

    </div>
  </div>

  <!-- Large modal / Modal besar-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBesar">Large modal</button>

  <div class="modal fade modalBesar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">
        <div class="modal-header">
          <h5>Modal large (lg)</h5>
        </div>
        <div class="modal-body">
          Contoh modal berukuran sedang.
        </div>
      </div>

    </div>
  </div>

  <!-- Small modal / Modal kecil-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalKecil">Small modal</button>

  <div class="modal fade modalKecil" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">

      <div class="modal-content">
        <div class="modal-header">
          <h5>Modal small / kecil (sm)</h5>
        </div>
        <div class="modal-body">
          Contoh modal berukuran paling kecil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam. Lorem ipsum dolor sit
          amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam. Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda
          animi iusto id amet officiis iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis
          iste porro illum blanditiis veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam. sLorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, assumenda animi iusto id amet officiis iste porro illum blanditiis
          veniam molestiae sequi cum magnam, consequuntur culpa beatae excepturi quasi totam.
        </div>
      </div>

    </div>
  </div>

  <br/>
  <hr>
  <br/>

  <h4>Modal Scroll</h4>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contohModalScroll">
      Modal Scroll
    </button>

  <div class="modal fade" id="contohModalScroll" tabindex="-1" role="dialog" aria-labelledby="contohModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contohModalScrollableTitle">Contoh modal scroll bootstrap</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <h3>Tutorial Bootstrap 4</h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit
          illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus
          quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit
          laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident
          cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum
          est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem
          ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Enim reprehenderit illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim reprehenderit
          illo sint nobis vel voluptatibus quod nemo repellat fugit laudantium, dicta ut provident cumque, officiis magni harum est facilis incidunt.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</div>