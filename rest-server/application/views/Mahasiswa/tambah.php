<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?=validation_errors()?>
                        </div>
                    <?php endif?>
                    <form action="<?= base_url()?>mahasiswa/tambahMahasiswa" method="post">
                        <div class="form-group">
                            <label for="user_id">ID User</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter ID User">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="Enter Nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach($jurusan as $key):?>
                                    <?php if($key == $mahasiswa['jurusan']):?>
                                        <option value="<?=$key?>"><?=$key?></option>
                                    <?php else :?>
                                        <option value="<?=$key?>"><?=$key?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>