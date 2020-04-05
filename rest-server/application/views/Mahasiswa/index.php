<div class="container">
    <?php if($this->session->flashdata('flash-data')): ?>
    <?php if($this->session->flashdata('flash-data')->status): ?>
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
    <?php endif;?>
    <div class="row mt-4">
        <div class="col-md-2">
            <a href="<?=base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
        <div class="">
            <a href="<?=base_url();?>mahasiswa/tambahUserForm" class="btn btn-primary">Tambah User</a>
        </div>
    </div>
    <div class='row mt-3'>
        <div class='col-md-6'>
            <form action="" method="post">
                <div class='input-group'>
                    <input type="text" class='form-control' name='keyword' name='keyword' placeholder='Cari Mahasiswa'>
                    <div class='input-group-append'>
                        <button type="submit" class='btn btn-primary' >Cari</button>
                        <a class="badge badge-primary float-right ml-1 pt-2" href="<?= base_url()?>mahasiswa/index?name=showall">Show All</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar User</h2>

            <div class="list-mahasiswa">
                <div>
                    <ul>
                        <li class="list-group-item">ID. Name</li>
                <?php
                    if($mahasiswa["status"]){
                        foreach ($mahasiswa["data"] as $value) {
                            if($value["level"]!="admin"){
                            echo '<li class="list-group-item">'
                            . $value["id"].'. '.$value["username"]
                                    . '<a class="badge badge-danger float-right ml-1"'
                                    . 'href="'.base_url().'mahasiswa/hapus/'.$value["id"].'"onclick="return confirm("Yakin Data ini akan dihapus?")">Hapus</a>'
                                    . '<a class="badge badge-success float-right ml-1"'
                                    . 'href="'.base_url().'mahasiswa/edit/'.$value["id"].'">Edit</a>'
                                    . '<a class="badge badge-primary float-right"'
                                    . 'href="'.base_url().'mahasiswa/detail/'.$value["id"].'">Detail</a>'
                                    . '</li>';
                            }
                        }
                    }else{
                        echo '<li class="list-group-item">User Not Found</li>';
                    }
                ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>