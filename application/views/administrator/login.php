 <!--Jangan mengubah template kecuali memang sangat diperlukan, takut ancur tampilannya-->
 <!--Untuk Header Footer dan Sidebar sudah memakai Template-->
 <!-- Header Layout Content -->
 <div class="mdk-header-layout__content page-content ">
    <div class="pt-32pt pt-sm-64pt pb-32pt">
        <div class="container page__container">
            <form method="post" action="<?php echo base_url('administrator/auth/proses_login')?>" class="user, col-md-5 p-0 mx-auto">
                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <input id="email" type="text" name="email" class="form-control" placeholder="Your email address ...">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password:</label>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Your first and last name ...">
                    <p class="text-right"><a href="fixed-reset-password.html" class="small">Forgot your password?</a></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
                <br>
                <div class="text-center">
                    <?php echo $this->session->flashdata('pesan') ?>
                </div>
            </form>
        </div>
    </div>
    <!-- Kalau diperlukan login FB dll-->
     <!--
    <div class="page-separator justify-content-center m-0">
        <div class="page-separator__text">or sign-in with</div>
    </div>
   
    <div class="bg-body pt-32pt pb-32pt pb-md-64pt text-center">
        <div class="container page__container">
            <a href="fixed-index.html" class="btn btn-secondary btn-block-xs">Facebook</a>
            <a href="fixed-index.html" class="btn btn-secondary btn-block-xs">Twitter</a>
            <a href="fixed-index.html" class="btn btn-secondary btn-block-xs">Google+</a>
        </div>
    </div>
</div>
// END Header Layout Content -->
