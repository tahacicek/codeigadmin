<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <span class="d-flex justify-content-end m-2">
                        <a href="<?php echo base_url("members/newForm") ?>" class="btn btn-primary btn-sm ">Yeni Ekle</a>

                    </span>
                    <div class="card-header">
                        <h3 class="card-title">Üyeler Tablosu</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">

                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Durum</th>
                                    <th>Tarih</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td><?php echo $item->email; ?></td>
                                        <td><?php echo $item->isActive; ?></td>
                                        <td><?php echo $item->createdAt; ?></td>
                                        <td>
                                            <a href="<?php echo base_url("members/delete/$item->id") ?>" class="btn btn-primary">Sil</a>

                                            <button data-toggle="modal" data-target="#modal-default<?= $item->id ?>" class="btn btn-danger">Güncelle</button>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-default<?= $item->id ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><?= $item->email ?> Düzenliyorsun...</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="<?php echo base_url("Members/update/$item->id") ?>">
                                                    <div class="modal-body">

                                                        <div class="form-group row">
                                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                            <div class="col-sm-10">
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $item->email ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="email" class="col-sm-2 col-form-label">Durum</label>
                                                            <select name="active" id="active" class="custom-select rounded-0" id="exampleSelectRounded0">
                                                                <option <?php if ($item->isActive == 1) {
                                                                            echo 'checked';
                                                                        } ?> value="1">Aktif</option>
                                                                <option <?php if ($item->isActive == 0) {
                                                                            echo 'checked';
                                                                        } ?> value="0">Pasif</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" value="1" class="btn btn-primary">Save changes</a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- Button trigger modal -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>