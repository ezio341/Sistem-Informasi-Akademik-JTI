<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Merubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?=validation_errors()?>
                        </div>
                    <?php endif?>
                    <form action="" method="post">
                    <?php if($mahasiswa!='id not found'):?>
                    <?php foreach ($mahasiswa as $mhs):?>
                    <input type="hidden" name="id" value='<?=$mhs['id'];?>'>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value='<?=$mhs['nama']?>'>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" value='<?=$mhs['nim']?>'>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value='<?=$mhs['email']?>'>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach($jurusan as $key):?>
                                    <?php if($key == $mhs['jurusan']):?>
                                        <option value="<?=$key?>"><?=$key?></option>
                                    <?php else :?>
                                        <option value="<?=$key?>"><?=$key?></option>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    <?php endforeach;?>
                    <?php else:?>
                        <div class="form-group">
                        <label for="error"><strong>Profile does not made yet</strong></label>
                        </div>
                    <?php endif;?>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>