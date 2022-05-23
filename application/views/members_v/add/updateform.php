<!DOCTYPE html>
<html lang="tr">

<!-- Header -->
<?php $this->load->view("includes/header"); ?>
<!-- /.Header -->

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view("includes/navbar"); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("includes/aside"); ?>
        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->

            <?php $this->load->view("{$viewFolder}/{$subviewFolder}/content"); ?>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php $this->load->view("includes/footer"); ?>


    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <?php $this->load->view("includes/scripts"); ?>
    <!-- Scripts -->

</body>

</html>