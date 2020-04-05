<div class='container'>
        <?php if($this->session->flashdata('flash-data')): ?>
            <div class="row mt-4">
                <div class="col-md-6">
                <div class='alert alert-success alert-dismissible fade show'>
                     <strong><?= ucfirst($this->session->flashdata('flash-data')->message);?></strong>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>    
                </div>
            </div>
        <?php endif;?>
    <div class='row mt-3'>
        <div class='col-md-6'>
            <div class='card'>
                <div class='card-header'>
                    Data Mahasiswa
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
                    <a href="<?=base_url();?>editMahasiswa/index/<?=$this->session->userdata('id')?>" class='btn btn-primary'>Edit</a>
                </div>
                <?php endforeach;?>
                <?php else:?>
                <div class='card-body'>
                    <h5 class='card-title'>Your Profile Does Not Exist, Please Contact Administrator!!</h5>
                </div>
                <?php endif;?>
                
            </div>
        </div>
    </div>
</div>