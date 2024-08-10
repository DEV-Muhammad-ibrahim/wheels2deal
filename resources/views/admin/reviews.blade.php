@include('layouts.header')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    @include('layouts.navbar')
    <!-- End Topbar header -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-6 col-sm-6 align-self-center">
                    <h3>Reviews</h3>
                </div>
                <div class="col-md-6 col-sm-6 text-right font-12"> <a href="index.html">Admin</a> &gt; Reviews</div>
                <div class="">
                    <button
                        class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block row">

                                <div class="col-lg-7 col-md-7 col-sm-7 col p-0">
                                    <div class="text-center">
                                        <h4 class="text-muted mb-10 font-14">Total Reviews</h4>
                                        <h2 class="counter"><span
                                                class="counter-count font-50 text-themecolor">1000</span></h2>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-5  col p-0">
                                    <div class="align-self-center">
                                        <div class="text-center">
                                            <input data-plugin="knob" data-width="93%" data-height="93%"
                                                data-linecap=round data-fgColor="#ffc8c9" data-displayInput=false
                                                value="40" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block row">

                                <div class="col-lg-7 col-md-7 col-sm-7 col p-0">
                                    <div class="text-center">
                                        <h4 class="text-muted mb-10 font-14"> Ratings <span
                                                class="fa fa-star checked font-11"></span>
                                            <span class="fa fa-star checked font-11"></span>
                                            <span class="fa fa-star checked font-11"></span>
                                            <span class="fa fa-star font-11"></span>
                                            <span class="fa fa-star font-11"></span>
                                        </h4>
                                        <h2 class="counter"><span
                                                class="counter-count font-50 text-themecolor">1344</span></h2>

                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-5 col p-0">
                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="93%" data-height="93%" data-linecap=round
                                            data-fgColor="#cfcfff" data-displayInput=false value="40"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block row">

                                <div class="col-lg-7 col-md-7 col-sm-7 col p-0">
                                    <div class="text-center">
                                        <h4 class="text-muted mb-10 font-14">Shipped Orders</h4>
                                        <h2 class="counter"><span
                                                class="counter-count font-50 text-themecolor">324</span></h2>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-5 col p-0">
                                    <div class="text-center"><input data-plugin="knob" data-width="93%"
                                            data-height="93%" data-linecap=round data-fgColor="#ffd9bd"
                                            data-displayInput=false value="40" data-skin="tron"
                                            data-angleOffset="180" data-readOnly=true data-thickness=".1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block row">
                                <div class="col-lg-7 col-md-7 col-sm-7 col p-0">
                                    <div class="text-center">
                                        <h4 class="text-muted mb-10 font-14">Answers & Questions</h4>
                                        <h2 class="counter"><span
                                                class="counter-count font-50 text-themecolor">1234</span></h2>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-5 col p-0">
                                    <div class="text-center"><input data-plugin="knob" data-width="93%"
                                            data-height="93%" data-linecap=round data-fgColor="#c6f0b1"
                                            data-displayInput=false value="40" data-skin="tron"
                                            data-angleOffset="180" data-readOnly=true data-thickness=".1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center-m">Latest Reviews</h4>
                        </div>

                        <div class="row m-0 text-center-m">
                            <div class="col-md-1 col-sm-2 text-center"><img src="../assets/images/users/review1.jpg"
                                    alt="" title="" class="radius image-boder img-fluid"></div>
                            <div class="col-md-11 col-sm-10">
                                <h2 class="font-15 m-0">Daryl Michaels <span class="font-13 text-themecolor">Product:
                                        Mobile Phone</span></h2>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star font-13"></span>
                                <span class="fa fa-star font-13"></span> <span class="red">1 Min ago </span>

                                <p class="mt-5">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metu.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>

                        <div class="row m-0 text-center-m">
                            <div class="col-md-1 col-sm-2 text-center"><img src="../assets/images/users/review2.jpg"
                                    alt="" title="" class="radius image-boder img-fluid"></div>
                            <div class="col-md-11 col-sm-10">
                                <h2 class="font-15 m-0">Nina Williams <span class="font-13 text-themecolor">Product:
                                        Mobile Phone</span></h2>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star font-13"></span>
                                <span class="fa fa-star font-13"></span> <span class="red">1 Min ago </span>

                                <p class="mt-5">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metu.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>

                        <div class="row m-0 text-center-m">
                            <div class="col-md-1 col-sm-2 text-center"><img src="../assets/images/users/review3.jpg"
                                    alt="" title="" class="radius image-boder img-fluid"></div>
                            <div class="col-md-11 col-sm-10">
                                <h2 class="font-15 m-0">Brian Dunkst <span class="font-13 text-themecolor">Product:
                                        Mobile Phone</span></h2>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star checked font-13"></span>
                                <span class="fa fa-star font-13"></span>
                                <span class="fa fa-star font-13"></span> <span class="red">1 Min ago </span>

                                <p class="mt-5">
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in
                                    faucibus.Cras sit amet nibh libero, in gravida nulla. Nulla vel metu.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="mt-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark"
                                class="default-dark-theme working">7</a></li>
                        <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                        </li>
                        <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            <div class="row">
                <div class="col-md-6 col-sm-6 font-12">Copyrights 2023. Organic E-store Admin. All Rights Reserved
                </div>
                <div class="col-md-6 col-sm-6 text-right font-12">Designed & Developed by <a
                        href="http://www.srgit.com/" target="_blank" class="text-themecolor">SRGIT</a></div>
            </div>
        </footer>
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
<script src="../assets/vendors/jquery/jquery.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!--Menu sidebar -->
<script src="js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="js/custom.min.js"></script>
<!-- This is data table -->
<script src="../assets/vendors/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="../assets/vendors/datatables-2/buttons/dataTables.buttons.min.js"></script>
<script src="../assets/vendors/datatables-2/buttons/buttons.flash.min.js"></script>
<script src="../assets/vendors/datatables-2/pdfmake/jszip.min.js"></script>
<script src="../assets/vendors/datatables-2/pdfmake/pdfmake.min.js"></script>
<script src="../assets/vendors/datatables-2/pdfmake/vfs_fonts.js"></script>
<script src="../assets/vendors/datatables-2/buttons/buttons.html5.min.js"></script>
<script src="../assets/vendors/datatables-2/buttons/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script src="js/support-tickets.js"></script>



<!--jquery knob -->
<script src="../assets/vendors/knob/jquery.knob.js"></script>
<script src="js/knob-init.js"></script>





<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<!-- Mirrored from www.creativethemes.co.in/buy-creativetheme-html-template/organicfood-store/image-html/html/ecommerce/main/ecommerce-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2024 19:20:34 GMT -->

</html>
