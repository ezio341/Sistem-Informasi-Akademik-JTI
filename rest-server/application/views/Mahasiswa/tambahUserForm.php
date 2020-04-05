<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data User
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <?=validation_errors()?>
                        </div>
                    <?php endif?>
                    <form action="<?= base_url()?>mahasiswa/tambahUser" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control" name="level" id="level">
                                <?php foreach($level as $key):?>
                                    <?php if($key == $mahasiswa['level']):?>
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

