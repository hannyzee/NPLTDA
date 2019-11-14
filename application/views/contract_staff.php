<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('main/head'); ?>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
          <?php $this->load->view('main/top-bar'); ?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <?php $this->load->view('main/sidebar'); ?>?>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Contract Staff Personal Informatiom</h3>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <form class="form-material m-t-40" method="post" action="<?php echo base_url('Employee/new_contract');?>">
                                     <div class="form-group">
                                         <div class="form-group">
                                        <label>Employee Code</label>
                                        <input type="text" id="ecode" name="ecode" class="form-control"> 
                                    </div>
                                        <label >First Name</label>
                                        <input type="text" id="ename" name="ename" class="form-control"> 
                                    </div>
                                     <div class="form-group">
                                        <label >Last Name</label>
                                        <input type="text" id="lanme" name="lname" class="form-control"> 
                                    </div>
                                     <div class="form-group">
                                        <label>Gender</label>
                                       <label class="custom-control custom-radio">
                                            <input id="male" name="sex"value="male" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Male</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="female" name="sex" value="female" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Female</span>
                                        </label>
                                    </div>
                                     <div class="form-group">
                                        <label>Role</label>
                                        <input type="text" name="role" class="form-control" >
                                    </div>
                                     <div class="form-group">
                                        <label>Salary</label>
                                        <input type="text" name="salary" class="form-control" >
                                    </div>
                                     <div class="form-group">
                                        <label>jdate</label>
                                        <input type="date" name="jdate" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Address</label>
                                        <textarea class="form-control" rows="5" name="address"></textarea>
                                    </div>
                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
             <?php $this->load->view('main/footer');?> 
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url('js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('js/waves.js');?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('js/sidebarmenu.js');?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js');?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('js/custom.min.js');?>"></script>
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/plugins/styleswitcher/jQuery.style.switcher.js');?>"></script>
</body>

</html>
