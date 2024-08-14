@include('layoutsAdmin.header')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    @include('layoutsAdmin.navbar')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layoutsAdmin.sidebar')
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
                <div class="col-6 align-self-center">
                    <h3>Ecommerce Dashboard</h3>
                </div>
                <div class="col-6 text-right font-12"> <a href="index.html">Admin</a> &gt; Ecommerce Dashboard
                </div>
                <div class="">
                    <button
                        class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Info box -->
            <!-- ============================================================== -->
            <div class="row ">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block">
                                <div class="align-slef-center ">
                                    <h2 class="counter text-themecolor"><span class="counter-count">14</span></h2>
                                    <h6 class="text-muted mb-0 text-uppercase">Pending Orders</h6>
                                </div>
                                <div class="align-self-center display-6 ml-auto text-themecolor"><i
                                        class="icon-Over-Time"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block">
                                <div class="align-slef-center ">
                                    <h2 class="counter text-themecolor"><span class="counter-count">24 </span>
                                    </h2>
                                    <h6 class="text-muted mb-0 text-uppercase">Completed Orders</h6>
                                </div>
                                <div class="align-self-center display-6 ml-auto text-themecolor"><i
                                        class="icon-Big-Data"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block">
                                <div class="align-slef-center ">
                                    <h2 class="counter text-themecolor"><span class="counter-count">50</span></h2>
                                    <h6 class="text-muted mb-0 text-uppercase">Refund Requests</h6>
                                </div>
                                <div class="align-self-center display-6 ml-auto text-themecolor"><i
                                        class="icon-Arrow-Refresh"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block">
                                <div class="align-slef-center ">
                                    <h2 class="counter text-themecolor"><span class="counter-count">12</span></h2>
                                    <h6 class="text-muted mb-0 text-uppercase">New Comments</h6>
                                </div>
                                <div class="align-self-center display-6 ml-auto text-themecolor"><i
                                        class="ti-shopping-cart-full"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0 align-self-center"> Sales Chart </h5>
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel-wrapper">
                                <div class="d-flex m-b-10 no-block">
                                    <h5 class="card-title m-b-0 align-self-center">Top product sales</h5>
                                    <div class="ml-auto text-light-blue"> <a href="#"
                                            class="pull-left text-light-blue inline-block refresh mr-15"> <i
                                                class="fas fa-sync"></i> Update </a> </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table color-table">
                                        <tbody>
                                            {{-- <tr>
                                                <td><img src="../assets/images/product/pro1.jpg" alt=""
                                                        title=""></td>
                                                <td><span class="font-semibold font-16">Notebook Asus Aspire</span>
                                                    <br>
                                                    $375
                                                </td>
                                                <td><span class="font-semibold font-20 text-blue-light">$9375</span>
                                                    <br>
                                                    25 sales
                                                </td>
                                                <td>
                                                    <div id="sparkline16"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/product/pro2.jpg" alt=""
                                                        title=""></td>
                                                <td><span class="font-semibold font-16">Notebook Asus Aspire</span>
                                                    <br>
                                                    $375
                                                </td>
                                                <td><span class="font-semibold font-20 text-blue-light">$9375</span>
                                                    <br>
                                                    25 sales
                                                </td>
                                                <td>
                                                    <div id="sparkline17"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="../assets/images/product/pro3.jpg" alt=""
                                                        title=""></td>
                                                <td><span class="font-semibold font-16">Notebook Asus Aspire</span>
                                                    <br>
                                                    $375
                                                </td>
                                                <td><span class="font-semibold font-20 text-blue-light">$9375</span><br>
                                                    25 sales</td>
                                                <td>
                                                    <div id="sparkline18"></div>
                                                </td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="jsgrid_1" class="font-14"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-20">Traffic By Country</h4>
                            <div id="chartdiv"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-uppercase mb-20">Traffic Sources</h4>
                            <div class="list-css">
                                <ul>
                                    <li><a href="#">Organic </a>
                                        <div id="sparkline1" class="float-right"></div>
                                    </li>
                                    <li><a href="#">Direct</a>
                                        <div id="sparkline2" class="float-right"></div>
                                    </li>
                                    <li><a href="#">Social</a>
                                        <div id="sparkline3" class="float-right"></div>
                                    </li>
                                    <li><a href="#">Referral</a>
                                        <div id="sparkline4" class="float-right"></div>
                                    </li>
                                    <li><a href="#">Social</a>
                                        <div id="sparkline5" class="float-right"></div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Info box -->
            <!-- ============================================================== -->
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
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark"
                                    class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                            </li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark"
                                    class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layoutsAdmin.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@include('layoutsAdmin.script')
</body>



</html>
