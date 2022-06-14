<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>

                            <?= $this->session->flashdata('pesan'); ?>
                            <form class="user" method="post" action="<?= base_url('admin/index'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="<?= set_value
                                    ('email'); ?>" id="email" placeholder="Masukan Alamat Email" name="email"> <?= 
                                    form_error('email', '<small class="test-danger pl-3"', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" 
                                    id="password" placeholder="Masukan Alamat Password" name="password"> <?= 
                                    form_error('password', '<small class="test-danger pl-3"', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block"> Masuk </button>
                            </form>
                                
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="autentifikasi/registrasi">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>