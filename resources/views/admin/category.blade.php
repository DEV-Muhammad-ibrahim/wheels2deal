@include('layouts.header')

<div id="main-wrapper">
    @include('layouts.navbar')



    @include('layouts.sidebar')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <div class="panel-wrapper">
                    <div class="d-flex m-b-10 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Categories</h5>

                    </div>
                    <div class="table-responsive">
                        <table class="table color-table">
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td><img src="{{ asset('category_images/' . $category->image) }}" alt=""
                                                title="" style="width: 50px; height: auto;">
                                        </td>
                                        <td><span class="font-semibold font-16">{{ $category->name }}</span>
                                            <br>
                                            {{ $category->description }}
                                        </td>
                                        <form action="{{ route('category_delete', $category->id) }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <td><span class="font-semibold font-20 text-blue-light"> <button
                                                        type="submit"
                                                        class="btn btn-rounded waves-effect waves-light bg-danger font-14 text-white">Delete</button></span>
                                        </form>
                                        <br></br>
                                        <a href="{{ route('edit_category', $category->id) }}"
                                            class="btn btn-rounded waves-effect waves-light bg-secondary font-14 text-white">Edit</a>
                                        </td>
                                        <td>
                                            <div id="sparkline16"></div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>

<script src="{{ asset('/assets/vendors/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('/assets/vendors/ps/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<!-- This is data table -->
<script src="{{ asset('/assets/vendors/datatables/jquery.dataTables.min.js') }}"></script>
<!-- start - This is for export functionality only -->
<script src="{{ asset('/assets/vendors/datatables-2/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/pdfmake/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/datatables-2/buttons/buttons.print.min.js') }}"></script>
<!-- end - This is for export functionality only -->
<script src="{{ asset('js/support-tickets.js') }}"></script>
<!--jquery knob -->
<script src="{{ asset('/assets/vendors/knob/jquery.knob.js') }}"></script>
<script src="{{ asset('js/knob-init.js') }}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{ asset('/assets/vendors/styleswitcher/jQuery.style.switcher.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('/assets/vendors/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('/assets/vendors/morrisjs/morris.js') }}"></script>
<!-- maps -->
<script src="../../../../../../../www.amcharts.com/lib/4/maps.js"></script>
<!-- maps -->
<!-- Editable -->
<script src="{{ asset('/assets/vendors/jsgrid/db.js') }}"></script>
<script src="{{ asset('/assets/vendors/jsgrid/dist/jsgrid.min.js') }}"></script>
<script src="{{ asset('js/jsgrid-init.js') }}"></script>
<script src="{{ asset('/assets/vendors/jsgrid/jsgrid-data.js') }}"></script>
<!-- Resources -->
<script src="{{ asset('/assets/vendors/amcharts/core2.js') }}"></script>
<script src="{{ asset('/assets/vendors/amcharts/maps2.js') }}"></script>
<script src="{{ asset('/assets/vendors/amcharts/worldLow.js') }}"></script>
<script src="{{ asset('/assets/vendors/amcharts/animated2.js') }}"></script>
<!--Sparkline JavaScript -->
<script src="{{ asset('/assets/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/map-ecommerce.js') }}"></script>
<script src="{{ asset('js/ecommerce-dashboard.js') }}"></script>
<!--Sparkline JavaScript -->
<script src="{{ asset('/assets/vendors/sparkline/jquery.sparkline.min.js') }}"></script>
</body>



</html>
