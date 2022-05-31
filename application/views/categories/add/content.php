<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Kategori Ekleme İşlemi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="<?php echo base_url("Categories/insert") ?>" method="post" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="ana" class="col-sm-2 col-form-label">Ana Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ana" id="ana" placeholder="Ana Kategori">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="üst" class="col-sm-2 col-form-label">Üst Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="üst" id="üst" placeholder="Üst Kategori">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alt" class="col-sm-2 col-form-label">Alt Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="alt" id="alt" placeholder="Alt Kategori">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Kaydet</button>
                                    <button type="submit" class="btn btn-default float-right">İptal</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>