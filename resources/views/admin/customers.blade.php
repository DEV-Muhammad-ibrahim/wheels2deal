@include('layouts.header')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.navbar')
    <!-- ============================================================== -->
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
                <div class="col-md-6 align-self-center">
                    <h3>View Customers</h3>
                </div>
                <div class="col-md-6 text-right font-12"> <a href="index.html">Admin</a> &gt; View Customers</div>
                <div class="">
                    <button
                        class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                            class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example23" class="display nowrap table table-hover">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Opened By</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>status</th>
                                            <th>Assign To</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="../assets/images/users/1.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Mason vox</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>Neque porro quisq</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded close-bt">Closed
                                                </a></td>
                                            <td>Mason vox</td>
                                            <td>1/1/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/2.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Missa Next</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>uam est qui </td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded open-bt">Open</a>
                                            </td>
                                            <td>Missa Next</td>
                                            <td>15/2/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/3.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Jonathan Max</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolorem ipsum </td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded pending-bt">Pending</a>
                                            </td>
                                            <td>Jonathan Max</td>
                                            <td>27/3/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/1.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Scarlett Evans</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolor sit amet</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded close-bt">Closed
                                                </a></td>
                                            <td>Scarlett Evans</td>
                                            <td>28/3/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/1.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Jonathan Max</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>consectetur</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded close-bt">Closed
                                                </a></td>
                                            <td>Jonathan Max</td>
                                            <td>5/5/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/2.jpg" alt="" title=""
                                                    class="profile-img2 img-circle"></td>
                                            <td>Scarlett Evans</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>consectetur</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded open-bt">Open</a>
                                            </td>
                                            <td>Scarlett Evans</td>
                                            <td>10/6/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/3.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Jonathan Max</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>adipisci veli</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded pending-bt">Pending</a>
                                            </td>
                                            <td>Jonathan Max</td>
                                            <td>12/7/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/1.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Mason vox</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolorem ipsum quia </td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded close-bt">Closed
                                                </a></td>
                                            <td>Mason vox
                                            <td>5/8/2022</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/2.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Jonathan Max</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolorem ipsum</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded open-bt">Open</a>
                                            </td>
                                            <td>Jonathan Max</td>
                                            <td>5/7/2022</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/3.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Bruce Kent</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolorem</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded pending-bt">Pending</a>
                                            </td>
                                            <td>Bruce Kent
                                            <td>8/8/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/1.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Wong Chu</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolor sit amet</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded close-bt">Closed
                                                </a></td>
                                            <td>Wong Chu
                                            <td>6/05/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/2.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Tim Langvelt</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolor sit amet</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded open-bt">Open</a>
                                            </td>
                                            <td>Tim Langvelt
                                            <td>9/05/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../assets/images/users/3.jpg"
                                                    class="profile-img2 img-circle" alt="" title="">
                                            </td>
                                            <td>Mitchell Marks</td>
                                            <td><a href="mailto:test@example.com">test@example.com</a></td>
                                            <td>dolor amet</td>
                                            <td><a href="#"
                                                    class="btn waves-effect waves-light btn-rounded pending-bt">Pending</a>
                                            </td>
                                            <td>Mitchell Marks
                                            <td>9/06/2018</td>
                                            <td><a href="#" class="pencil-icon"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i></a> <a href="#"
                                                    class="delete-icon"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a></td>
                                        </tr>
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
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>



</html>
