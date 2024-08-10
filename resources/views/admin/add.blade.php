@include('layouts.header')

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

        @include('layouts.navbar')

        @include('layouts.sidebar')

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-6 align-self-center">
                        <h3>Add/Edit Products</h3>
                    </div>
                    <div class="col-6 text-right font-12"> <a href="index.html">Admin</a> &gt; Add/Edit Products</div>
                    <div class="">
                        <button
                            class="right-side-toggle waves-effect waves-light bg-primary btn btn-circle btn-sm pull-right ml-10"><i
                                class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <form class="form-horizontal" action="{{ Route('product_add') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4> General </h4>
                                    <div class="row">
                                        <div class="form-wrap form-wrap2 col-12">
                                            <div>
                                                <div class="form-group">
                                                    <label class="control-label font-16 mb-1">Product Name</label>
                                                    <div>
                                                        <input type="text" class="form-control font-14"
                                                            placeholder="Name" name="name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12 mb-10">
                                                        <label class="control-label font-14 mb-1">Select
                                                            Category</label>
                                                        <div>
                                                            <select class="form-select font-14"
                                                                data-style="btn-default btn-outline" name="category">
                                                                <option data-tokens="Category">Select Category
                                                                </option>
                                                                @foreach ($categories as $category)
                                                                    <option data-tokens="Category 1"
                                                                        value="{{ $category->name }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-xs-12 mb-10">
                                                        <label class="control-label font-14 mb-1">Model or Part Number
                                                        </label>
                                                        <div>
                                                            <input type="text" class="form-control font-14"
                                                                placeholder=" Model or Part Number " name="model">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3 col-xs-12 mb-10">
                                                        <label class="control-label font-14 mb-1"> Price</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14"
                                                                placeholder=" Price" name="price">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12 mb-10">
                                                        <label class="control-label font-14 ">Currency</label>
                                                        <div>
                                                            <select class="form-select"
                                                                data-style="btn-default btn-outline" name="currency">
                                                                <option data-tokens="Category" value="UED">UED
                                                                </option>
                                                                <option data-tokens="Category 4" value="USD">USD
                                                                </option>
                                                                <option data-tokens="Category 5" value="EURO">EURO
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12">
                                                        <label class="control-label mb-1">Company</label>
                                                        <div>
                                                            <input type="text" class="form-control font-14"
                                                                placeholder="Company" name="company">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="form-group">
                                                <div class="col-sm-12 p-0">
                                                    <label class="col-12 mb-1">Description</label>
                                                    <div class="col-12">
                                                        <textarea class="form-control textarea-lg" name="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card"> --}}
                            {{-- <div class="card-body">
                                <h4> PRICING </h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label font-14 mb-1">Price</label>
                                            <div>
                                                <input type="text" class="form-control font-14">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label font-14 mb-1">Tax Class</label>
                                            <input type="text" class="form-control font-14">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label font-14 mb-1">Discount</label>
                                            <input type="text" class="form-control font-14">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label class="control-label font-14 mb-1">Coupon</label>
                                            <input type="text" class="form-control font-14">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- </div> --}}
                            {{-- <div class="card">
                            <div class="card-body">
                                <div class="row">

                                </div>
                            </div>
                        </div> --}}
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="font-18 text-blue text-uppercase mb-20">Upload Photos <i>Max 5</i> </h4>
                                <div class="upload-photo">
                                    <input type="file" id="input-file-now-custom-1" class="dropify"
                                        data-default-file="" multiple max="5" name="image[]" id="imageInput"
                                        accept="image/*">
                                    <div id="imagePreview"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                            <div class="5">
                                <button type="submit"
                                    class="btn btn-rounded waves-effect waves-light bg-green font-14 text-white">Save</button>
                                <button type="submit"
                                    class="btn btn-rounded waves-effect waves-light btn-outline-default font-14">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @include('layouts.footer')
        </div>


    </div>

    </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imageInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');

            imageInput.addEventListener('change', function(event) {
                // Clear previous image thumbnails
                imagePreview.innerHTML = '';

                // Loop through selected files and display thumbnails (up to 5 images)
                for (let i = 0; i < Math.min(5, event.target.files.length); i++) {

                    const file = event.target.files[i];
                    console.log(file);
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '50px'; // Adjust thumbnail size as needed
                        img.style.height = 'auto';
                        img.style.marginRight = '10px'; // Add some margin between thumbnails
                        imagePreview.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                }
            });
        });
    </script>

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
