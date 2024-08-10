@include('layouts.header')



<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.header')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    @include('layouts.navbar')
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
                <div class="col-md-6 align-self-center">
                    <h3>Product List</h3>
                </div>
                <div class="col-md-6 text-right font-12"> <a href="index.html">Admin</a> &gt; Product List</div>
                <div class="">
                    <button
                        class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            {{-- <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex pa-10 no-block row">
                                <div class="col-lg-7 col-md-7 col-sm-7 col p-0">
                                    <h4 class="text-muted mb-10 font-14">Order Placed</h4>
                                    <h2 class="counter"><span class="counter-count font-30 text-themecolor">1000</span>
                                    </h2>
                                    <h6 class="font-12">Today's Order</h6>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5  col p-0">
                                    <div class="text-center">
                                        <div class="chart easy-pie-chart-4 m-0" data-percent="75"> <span><img
                                                    src="../assets/images/product/pro-1.jpg" alt="user"
                                                    class="img-circle"></span> </div>
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
                                <div class="col-lg-7 col-md-7 col-sm-7 col  p-0">
                                    <h4 class="text-muted mb-10 font-14">Pending Orders</h4>
                                    <h2 class="counter"><span class="counter-count font-30 text-themecolor">1344</span>
                                    </h2>
                                    <h6 class="font-12">In Process</h6>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5  col p-0">
                                    <div class="text-center">
                                        <div class="chart easy-pie-chart-4 m-0" data-percent="55"> <span><img
                                                    src="../assets/images/product/pro-2.jpg" alt="user"
                                                    class="img-circle"></span> </div>
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
                                    <h4 class="text-muted mb-10 font-14">Shipped Orders</h4>
                                    <h2 class="counter"><span class="counter-count font-30 text-themecolor">324</span>
                                    </h2>
                                    <h6 class="font-12">Shipped Today</h6>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col p-0">
                                    <div class="text-center">
                                        <div class="chart easy-pie-chart-4 m-0" data-percent="85"> <span><img
                                                    src="../assets/images/product/pro-3.jpg" alt="user"
                                                    class="img-circle"></span> </div>
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
                                    <h4 class="text-muted mb-10 font-14">Delivered</h4>
                                    <h2 class="counter"><span class="counter-count font-30 text-themecolor">2354</span>
                                    </h2>
                                    <h6 class="font-12">Delivered Today</h6>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col p-0">
                                    <div class="text-center">
                                        <div class="chart easy-pie-chart-4 m-0" data-percent="45"> <span><img
                                                    src="../assets/images/product/pro-4.jpg" alt="user"
                                                    class="img-circle"></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap table table-hover table-striped basic-t">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Category</th>

                                            <th>Price</th>
                                            <th>Company</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td><img src="{{ asset('product_images/' . $product->image1) }}"
                                                        alt="" title="" class="profile-img2 img-circle">
                                                    {{ $product->name }}</td>
                                                <td>{{ $product->category }}</td>

                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->company }}</td>
                                                <td><span class="text-success">Available</span></td>


                                                <form action="{{ route('product_delete', $product->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <td><span class="font-semibold font-20 text-blue-light"> <button
                                                                type="submit"
                                                                class="btn btn-rounded waves-effect waves-light bg-danger font-14 text-white">Delete</button></span>
                                                </form>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <!-- ============================================================== -->
                                <!-- End PAge Content -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- Right sidebar -->
                                <!-- ============================================================== -->
                                <!-- .right-sidebar -->
                                <div class="right-sidebar">
                                    <div class="slimscrollright">
                                        <div class="rpanel-title"> Service Panel <span><i
                                                    class="ti-close right-side-toggle"></i></span> </div>
                                        <div class="r-panel-body">
                                            <ul id="themecolors" class="mt-20">
                                                <li><b>With Light sidebar</b></li>
                                                <li><a href="javascript:void(0)" data-theme="default"
                                                        class="default-theme">1</a></li>
                                                <li><a href="javascript:void(0)" data-theme="green"
                                                        class="green-theme">2</a></li>
                                                <li><a href="javascript:void(0)" data-theme="red"
                                                        class="red-theme">3</a></li>
                                                <li><a href="javascript:void(0)" data-theme="blue"
                                                        class="blue-theme">4</a></li>
                                                <li><a href="javascript:void(0)" data-theme="purple"
                                                        class="purple-theme">5</a></li>
                                                <li><a href="javascript:void(0)" data-theme="megna"
                                                        class="megna-theme">6</a></li>
                                                <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                                                <li><a href="javascript:void(0)" data-theme="default-dark"
                                                        class="default-dark-theme working">7</a></li>
                                                <li><a href="javascript:void(0)" data-theme="green-dark"
                                                        class="green-dark-theme">8</a></li>
                                                <li><a href="javascript:void(0)" data-theme="red-dark"
                                                        class="red-dark-theme">9</a></li>
                                                <li><a href="javascript:void(0)" data-theme="blue-dark"
                                                        class="blue-dark-theme">10</a></li>
                                                <li><a href="javascript:void(0)" data-theme="purple-dark"
                                                        class="purple-dark-theme">11</a></li>
                                                <li><a href="javascript:void(0)" data-theme="megna-dark"
                                                        class="megna-dark-theme ">12</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Right sidebar -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- End Container fluid  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layouts.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
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
<!-- EASY PIE CHART JS -->
<script src="../assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="../assets/vendors/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>



</html>
