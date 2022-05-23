<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <a href="<?php echo base_url("members/newForm") ?>" class="btn btn-primary btn-sm ">Yeni Ekle</a>

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

                                            <a href="<?php echo base_url("members/update/$item->id") ?>" class="btn btn-danger">Güncelle</a>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>