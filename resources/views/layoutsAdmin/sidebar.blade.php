<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{-- <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i
                            class="mdi mdi-cart-outline mr-10"></i><span class="hide-menu">Ecommerce
                            Admin</span></a></li>
                <li> <a class="waves-effect waves-dark" href="ecommerce-dashboard.html"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Dashboard</span></a></li> --}}
                <li> <a class="waves-effect waves-dark" href="{{ Route('index') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu"> Dashboard </span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ Route('orders') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu"> Order Status </span></a></li>
                {{-- <li><a class="waves-effect waves-dark" href="{{ Route('catalogue') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Products Catalogue</span></a>
                </li> --}}
                <li><a class="waves-effect waves-dark" href="{{ Route('list') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Product List - List view
                        </span></a></li>
                {{-- <li><a class="waves-effect waves-dark" href="{{ Route('catalogue') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Product List - grid view
                        </span></a></li> --}}
                {{-- <li><a class="waves-effect waves-dark" href="{{ Route('detail') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Product Details</span></a>
                </li> --}}
                <li><a class="waves-effect waves-dark" href="{{ Route('add') }}"> <i class="ti-angle-right"></i> <span
                            class="hide-menu">Add/Edit Products</span></a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{ Route('customers') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">View Customers</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ Route('category') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Category</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ Route('add_category') }}"> <i
                            class="ti-angle-right"></i> <span class="hide-menu">Add/Edit Category</span></a>
                </li>
                <li><a class="waves-effect waves-dark" href="{{ Route('invoice') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Invoice</span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ Route('shipments') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Shipments</span></a></li>
                <li><a class="waves-effect waves-dark " href="{{ Route('reviews') }}"> <i class="ti-angle-right"></i>
                        <span class="hide-menu">Reviews</span></a></li>
                <li> <a class="has-arrow waves-effect waves-dark" href="authentication-login.html"
                        aria-expanded="false"> <i class="mdi mdi-login-variant"></i> <span
                            class="hide-menu">Authentication</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ Route('settings') }}">Account Settings</a></li>
                        <li><a href="{{ Route('login') }}">Login</a></li>
                        <li><a href="{{ Route('register') }}">Register</a> </li>
                        <li><a href="{{ Route('password_recovery') }}">Password Recovery</a></li>
                        <li><a href="{{ Route('lockscreen') }}">Lockscreen</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
