<?=$this->extend('template_dashboard')?>

<?=$this->section('konten')?>


<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title">Profile Mahasiswa</div>
                    </div>
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
                                <div class="form-group">
                                    <label for="fullName">NIM</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="" name="nim" value="<?=$sandi?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label for="eMail">Nama</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="" name="nama" value="<?=$email?>" readonly="">
                                </div>

                                <div class="form-group">
                                    <label for="addRess">Kelas</label>
                                    <input type="text" class="form-control" id="addRess" placeholder="12.3B.30" value="12.3B.30" readonly="">
                                </div>
                              
                            </div>
                            
                               
                                
                                
                              
                            
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="text-right">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?=$this->endSection()?>
