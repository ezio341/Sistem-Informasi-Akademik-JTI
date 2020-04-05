<div class='container'>
    <div class='row mt-3'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header'>
                    Detail Data Mahasiswa
                </div>
                <?php foreach ($mahasiswa as $key):?>
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
            </div>
        </div>
    </div>
</div>