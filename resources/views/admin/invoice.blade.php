@include('layouts.header')
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
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
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card card-body text-dark printableArea">
                            <div class="row">

                                <div class="col-md-6"><img src="../assets/images/favicon.png" alt=""
                                        title="" style="width: 174px">
                                </div>

                                <div class="col-md-6">
                                    <div class="pull-right text-right">
                                        <address>
                                            <div class="font-bold"> Invoice 120-545K</div>
                                            <p class="mt-20 mb-0"><b class="text-muted font-bold text-dark">Date :</b>
                                                23rd June 2018</p>
                                            <p><b class="text-muted font-bold text-dark">Due Date :</b> 25th June 2018
                                            </p>

                                        </address>
                                    </div>
                                </div>


                                <div class="row col-md-12 pt-40">
                                    <div class="col">
                                        <address>
                                            <div class="text-uppercase font-16 font-bold mb-10">Bill From:</div>
                                            <div class="font-medium m-b-10">XYZ inc.</div>
                                            <p class="mb-10">xyz@company.com</p>
                                            <p class="mb-10">123, Demo Road, New York <br>
                                                USA, 12345</p>
                                            <p class="mb-10">Fax: +0(863) 228-7064<br>
                                                Phone: +(740) 927-9284</p>
                                        </address>
                                    </div>
                                    <div class="col text-left">
                                        <address>
                                            <div class="text-uppercase font-16 font-bold mb-10">Bill To:</div>
                                            <div class="font-medium mb-10">XYZ inc.</div>
                                            <p class="mb-10">xyz@company.com</p>
                                            <p class="mb-10">123, Demo Road, New York<br>
                                                USA, 12345</p>
                                            <p class="mb-10">Fax: +0(863) 228-7064<br>
                                                Phone: +(740) 927-9284</p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive mt-40">
                                        <table class="table  color-table mb-0 invoice-table">
                                            <thead>
                                                <tr>
                                                    <th class="font-bold" style="width:291px">Services</th>
                                                    <th class="font-bold" style="width:183px">Unit</th>
                                                    <th class="font-bold" style="width:155px">Unit Price</th>
                                                    <th class="font-bold" style="width:92px">Quantity</th>
                                                    <th class="font-bold" style="width:61px">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Citrus Fruits</td>
                                                    <td>03</td>
                                                    <td>$15</td>
                                                    <td>17</td>
                                                    <td>$255</td>
                                                </tr>
                                                <tr>
                                                    <td>Organic Fruits</td>
                                                    <td>04</td>
                                                    <td>$15</td>
                                                    <td>17</td>
                                                    <td>$255</td>
                                                </tr>
                                                <tr>
                                                    <td>Green Vegetable</td>
                                                    <td>05</td>
                                                    <td>$15</td>
                                                    <td>17</td>
                                                    <td>$255</td>
                                                </tr>
                                                <tr>
                                                    <td class="invoice-bottom-top" rowspan="3">Note:<br>
                                                        <span class="text-muted">Please pay the total sum via bank
                                                            transfer during 7 days of receive moment. Thank you!</span>
                                                    </td>
                                                    <td class="invoice-bottom-top">&nbsp;</td>
                                                    <td class="invoice-bottom-top" colspan="2"><strong>Subtotal
                                                            Price:</strong></td>
                                                    <td class="invoice-bottom-top">$1389</td>
                                                </tr>
                                                <tr>
                                                    <td class="invoice-bottom">&nbsp;</td>
                                                    <td class="invoice-bottom" colspan="2"><strong>Tax
                                                            20%:</strong></td>
                                                    <td class="invoice-bottom"><span class="text-danger">-10%</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="invoice-bottom">&nbsp;</td>
                                                    <td class="invoice-bottom" colspan="2">
                                                        <strong>Discount:</strong>
                                                    </td>
                                                    <td class="invoice-bottom"><span class="text-success">39%</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th colspan="2">Total price:</th>
                                                    <th>$1418</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit"> Proceed to payment </button>
                                        <button id="print" class="btn btn-default btn-outline" type="button">
                                            <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
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
                        <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                        <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                        <li class="d-block mt-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-theme="default-dark"
                                class="default-dark-theme working">7</a>
                        </li>
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
<script src="js/jquery.PrintArea.js"></script>
<script src="js/print.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>

<!-- Mirrored from www.creativethemes.co.in/buy-creativetheme-html-template/organicfood-store/image-html/html/ecommerce/main/ecommerce-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Mar 2024 19:20:32 GMT -->

</html>
