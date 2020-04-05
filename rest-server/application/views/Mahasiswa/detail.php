<div class='container'>
    <div class='row mt-3'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header'>
                    Detail Data Mahasiswa
                </div>
                <?php if($mahasiswa['data']!='id not found'):?>
                <?php foreach ($mahasiswa['data'] as $key):?>
                <div class='card-body'>
                    <h5 class='card-title'><?= ucwords($key['nama']);?></h5>
                    <p class='card-text'>
                        <label for=""><b>Email : </b></label>
                        <?= $key['email'];?>
                    </p>
                    <p class='card-text'>
                        <label for=""><b>Nim : </b></label>
                        <?= $key['nim'];?>
                    </p>
                    <p class='card-text'>
                        <label for=""><b>Jurusan : </b></label>
                        <?= $key['jurusan'];?>
                    </p>
                    <a href="<?=base_url();?>mahasiswa" class='btn btn-primary'>Kembali</a>
                </div>
                <?php endforeach;?>
                <?php else:?>
                        <div class="form-group mt-3 ml-2">
                        <label for="error"><strong>Profile does not made yet</strong></label>
                        </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>