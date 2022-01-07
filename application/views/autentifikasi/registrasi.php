<div class="container">

<!-- Outer Row -->
<div class="row justify-c">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <a href="index.html" class="btn btn-primary btn-user btn-block">
                                    Login
                                </a>
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
                                <a class="small" href="register.html">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
<div class="container"> 
<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mxauto"> 
<div class="card-body p-0">               
<!-- Nested Row within Card Body -->               
<div class="row">
<div class="col-lg"> 
<div class="p-5">                          
<div class="text-center"> 
<h1 class="h4 text-gray-900 mb4">Daftar Menjadi Member!</h1> 
</div>

<form class="user" method="post" action="<?= base_url('autentifikasi/registrasi'); ?>">
<div class="form-group"> 
    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>">
    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?> 
</div>
<div class="form-group"> 
    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
</div>
<div class="form-group row"><div class="col-sm-6 mb-3 mb-sm0"> <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">                                       <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>                                   
</div>                                   
<div class="col-sm-6"><input type="password" class="form-control form-control-user" id="password2” name="password2" placeholder="Ulangi Password"> <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
 </div>
</div>
<button type="submit" class="btn btnprimary btn-user btn-block">Daftar Menjadi Member                               </button>                           
</form>                          
 <hr>                           
<div class="text-center"><a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa Password?</a>                           
</div>                           
<div class="text-center"> Sudah Menjadi Member?<a class="small" href="<?= base_url('autentifikasi'); ?>"> Login!</a>                          
 </div>                       
</div>                   
</div>               
</div>           
</div>       
</div> 
</div>
