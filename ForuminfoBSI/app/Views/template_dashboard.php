
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SisfoUBSI</title>
    <link href="<?=base_url('/assets/node_modules/css-chart/css-chart.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('/dist/css/style.min.css')?>" rel="stylesheet">
    <!-- page css -->
    <link href="<?=base_url('/dist/css/pages/easy-pie-chart.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sisfo UBSI</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?=$this->include('widget/topbar')?>
        <?=$this->include('widget/sidebar')?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

            
            <?=$this->renderSection('konten')?>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url('/assets/node_modules/jquery/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('/assets/node_modules/popper/popper.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url('dist/js/perfect-scrollbar.jquery.min.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('dist/js/sidebarmenu.js')?>"></script>
    <!--stickey kit -->
    <script src="<?=base_url('/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/sparkline/jquery.sparkline.min.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('dist/js/custom.min.js')?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- EASY PIE CHART JS -->
    <script src="<?=base_url('/assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')?>"></script>
    <script src="<?=base_url('/assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js')?>"></script>
</body>

</html>