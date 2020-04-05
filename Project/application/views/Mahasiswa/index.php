
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
                            <div class="list-mahasiswa">
                            <div class="col-md-12">
                        <h1 style="text-align: center; margin-bottom:30px">List Mahasiswa</h1>
                    </div>
                    <table class="table table-striped table-bordered" id="list_mhs">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                                foreach($mahasiswa as $mhs){?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$mhs['nama']?><a class="badge badge-primary float-right" href="<?=base_url()?>mahasiswa/detail/<?=$mhs["id"]?>">Detail</a></td>
                                </tr>
                                <?php }?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>