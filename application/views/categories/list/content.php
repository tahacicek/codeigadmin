<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <span class="d-flex justify-content-end m-2">
                        <a href="<?php echo base_url("categories/index") ?>" class="btn btn-primary btn-sm ">Kategori Ekle</a>

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
                                    <th>Ana Kategori</th>
                                    <th>Üst Kategori</th>
                                    <th>Alt Kategori</th>
                                    <th class="text-center">İşlem</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($items as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td><?php echo $item->AnaKategori; ?></td>
                                        <td><?php echo $item->ÜstKategori; ?></td>
                                        <td><?php echo $item->AltKategori; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url("categories/delete/$item->id") ?>" class="btn btn-primary">Sil</a>

                                            <button data-toggle="modal" data-target="#modal-default<?= $item->id ?>" class="btn btn-danger">Güncelle</button>

                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-default<?= $item->id ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><?= $item->AnaKategori ?> Düzenliyorsun...</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="<?php echo base_url("categories/update/$item->id") ?>">
                                                    <div class="modal-body">

                                                        <div class="form-group row">
                                                            <label for="ana" class="col-sm-2 col-form-label">Ana Kategori</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="ana" id="ana" placeholder="Email" value="<?= $item->AnaKategori ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="üst" class="col-sm-2 col-form-label">Üst Kategori</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="üst" id="üst" placeholder="Email" value="<?= $item->ÜstKategori ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="alt" class="col-sm-2 col-form-label">Alt Kategori</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="alt" id="alt" placeholder="Email" value="<?= $item->AltKategori ?>">
                                                            </div>
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