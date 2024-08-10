@include('layouts.header')

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-6 align-self-center">
                        <h3>Add/Edit Category</h3>
                    </div>
                    <div class="col-6 text-right font-12"> <a href="index.html">Admin</a> &gt; Add/Edit Category</div>
                    <div class="">
                        <button
                            class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                                class="ti-settings text-white"></i></button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4> Wheels2Deal </h4>
                                <div class="row">
                                    <div class="form-wrap form-wrap2 col-12">
                                        <form class="form-horizontal"
                                            action="{{ Route('update_category', $category->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div>
                                                <div class="form-group">
                                                    <label class="control-label font-16 mb-1">Category Name</label>
                                                    <div>
                                                        <input type="name" class="form-control font-14"
                                                            placeholder="Name" name="name"
                                                            value="{{ $category->name }}">
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="clearfix"></div>

                                            <div class="form-group">
                                                <div class="col-sm-12 p-0">
                                                    <label class="col-12 mb-1">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control textarea-lg" name="description">{{ $category->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="font-18 text-blue text-uppercase mb-20">Upload Category Photo

                                </h4>
                                <div class="upload-photo">
                                    <input type="file" id="input-file-now-custom-1" class="dropify"
                                        data-default-file="" name="image">
                                    <img src="{{ asset('category_images/' . $category->image) }}"
                                        alt="{{ $category->name }}" class="category-image-preview" style="width:50px;">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6 col-sm-6 text-right">
                                        <div class="5">
                                            <button type="submit"
                                                class="btn btn-rounded waves-effect waves-light bg-green font-14 text-white">Update</button>

                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i
                                    class="ti-close right-side-toggle"></i></span> </div>
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
                                <li><a href="javascript:void(0)" data-theme="green-dark"
                                        class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark"
                                        class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark"
                                        class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark"
                                        class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

            @include('layouts.footer')

        </div>

    </div>

    </div>

    <script src="../assets/vendors/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Product Slider -->
    <script src="../assets/vendors/product-slider/product-slider.js"></script>
    <script src="../assets/vendors/product-slider/product-slider.init.js"></script>
    <!-- File drag input -->
    <script src="../assets/vendors/dropify/dist/js/dropify.min.js"></script>
    <!-- Tag input -->
    <script src="../assets/vendors/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/vendors/bootstrap-switch/bootstrap-switch.min.js"></script>
    <script src="js/add-edit.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/vendors/ps/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/vendors/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/vendors/sparkline/jquery.sparkline.min.js"></script>
    <script src="../assets/vendors/switchery/dist/switchery.min.html"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/vendors/styleswitcher/jQuery.style.switcher.js"></script>
</body>



</html>
