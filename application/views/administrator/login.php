 <!--Jangan mengubah template kecuali memang sangat diperlukan, takut ancur tampilannya-->
 <!--Untuk Header Footer dan Sidebar sudah memakai Template-->
 <!-- Header Layout Content -->
 <div class="mdk-header-layout__content page-content ">
    <div class="pt-32pt pt-sm-64pt pb-32pt">
        <div class="container page__container">
        <div class="text-center">
                    <?php echo $this->session->flashdata('pesan') ?>
        </div>
            <form method="post" action="<?php echo base_url('administrator/auth/proses_login')?>" class="user, col-md-5 p-0 mx-auto">
                <div class="form-group">
                    <label class="form-label" for="username">Username:</label>
                    <input id="username" type="text" name="username" class="form-control form-control-user" placeholder="Your username ...">
                    <?php echo form_error('username', '<div class="text-danger small ml-3">, </div>') ?>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password:</label>
                    <input id="password" type="password" name="password" class="form-control form-control-user" placeholder="Your first and last name ...">
                    <?php echo form_error('password', '<div class="text-danger small ml-3">, </div>') ?>
                    <p class="text-right"><a href="fixed-reset-password.html" class="small">Forgot your password?</a></p>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
                <br>
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
