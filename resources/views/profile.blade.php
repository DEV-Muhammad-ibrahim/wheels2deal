@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
    <div class="mobile-menu"><a href="register.html"><i class="material-icons">person</i><span>account</span></a><a
            href="notify.html"><i class="material-icons">notifications</i><span>notify</span><sup>9</sup></a><a
            href="create-ads.html" title="sell vehicless"><i class="material-icons">storefront</i></a><a
            href="compare.html"><i class="material-icons">compare</i><span>compare</span><sup>3+</sup></a><a
            href="favorite.html"><i class="material-icons">favorite</i><span>favorite</span><sup>8</sup></a></div>
    <section class="section-gap-75">
        <div style="background: url(../images/banner/single/02.jpg) no-repeat center / cover;">
            <div class="user-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="user-banner-profile">
                                <div class="user-banner-profile-avatar"><a href="profile.html"><img
                                            src="../images/avatar/01.jpg" alt="avatar"></a></div>
                                <div class="user-banner-profile-meta">
                                    <div class="user-banner-profile-name">
                                        <h3><a href="profile.html">person name</a></h3><span>individual</span>
                                    </div>
                                    <ul class="user-banner-profile-contact-list">
                                        <li><i class="material-icons">phone_in_talk</i><span>+91 987-654-3210</span>
                                        </li>
                                        <li><i class="material-icons">feed</i><span>support@example.com</span></li>
                                        <li><i class="material-icons">public</i><span>exampleGhurnek.com</span></li>
                                        <li><i class="material-icons">map</i><span>1Hd- 50, 010 Avenue, NY 90001 United
                                                States</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-4">
                            <ul class="user-banner-data">
                                <li class="ads"><i class="material-icons">store</i>
                                    <h3>4334</h3>
                                    <p>total advertise</p>
                                </li>
                                <li class="star"><i class="material-icons">star</i>
                                    <h3>2112</h3>
                                    <p>total ratings</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <ul class="user-banner-menu-list">
                                <li><a href="dashboard.html">dashboard</a></li>
                                <li><a href="profile.html" class="active">profile</a></li>
                                <li><a href="create-ads.html">create ads</a></li>
                                <li><a href="posted-ads.html">posted ads</a></li>
                                <li><a href="favorite.html">favorites</a></li>
                                <li><a href="compare.html">compares</a></li>
                                <li><a href="review.html">reviews</a></li>
                                <li><a href="notify.html">notify</a></li>
                                <li><a href="setting.html">settings</a></li>
                                <li><a href="login.html">logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mc-breadcrumb">
        <div class="container">
            <div class="mc-breadcrumb-group">
                <h2 class="mc-breadcrumb-title">user profile</h2>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">profile</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-gap-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="profile-cover-image"><img src="../images/bg/cover.jpg" alt="cover"></div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">about this vendor</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-article">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae modi tempora
                                    odit explicabo dicta qui, blanditiis incidunt possimus natus a adipisci laborum
                                    fugit quaerat perspiciatis reprehenderit expedita magni rerum voluptatum numquam?
                                    Unde eius consectetur quaerat expedita deserunt quis blanditiis ipsa, corporis
                                    mollitia vero modi adipisci ratione voluptate enim voluptas, numquam totam
                                    perspiciatis iure? Necessitatibus voluptates quod, velit in voluptas possimus
                                    accusamus. <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto
                                        laborum nisi minus, modi facere, recusandae non animi porro assumenda dolorem
                                        nemo. Commodi expedita ratione officia voluptate, vel ipsum nam, voluptatibus
                                        nulla doloremque iure sed quas repudiandae atque beatae. Eligendi quaerat fugit
                                        dolores laboriosam voluptatem nisi obcaecati, beatae eum alias? Temporibus eius
                                        laudantium necessitatibus? Doloribus dolor officia nulla accusantium facere
                                        minima</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">vendor location</h4>
                        </div>
                        <div class="common-card-body">
                            <div class="profile-location"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.3406974350205!2d90.48469931445422!3d23.663771197998262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b0d5983f048d%3A0x754f30c82bcad3cd!2sJalkuri%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1605354966349!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">Membership status</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>Joined:</span><span>02 February 2022</span></li>
                                <li><span>type:</span><span>individual</span></li>
                                <li><span>plan:</span><span>business</span></li>
                                <li><span>Spand:</span><span>$4,587</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">contact address</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-specify-list">
                                <li><span>country:</span><span>united state</span></li>
                                <li><span>city:</span><span>Chicago</span></li>
                                <li><span>state:</span><span>west jalkuri</span></li>
                                <li><span>post code:</span><span>1420</span></li>
                                <li><span>road no:</span><span>09</span></li>
                                <li><span>house no:</span><span>17/a</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">email this vendor</h4>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form-group"><input type="text" class="form-control"
                                            placeholder="enter your name"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                                    <div class="form-group"><input type="email" class="form-control"
                                            placeholder="enter your email"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="describe your message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><button class="form-btn"
                                        type="submit">send email</button></div>
                            </div>
                        </form>
                    </div>
                    <div class="common-card">
                        <div class="common-card-header">
                            <h4 class="common-card-header-title">social media</h4>
                        </div>
                        <div class="common-card-body">
                            <ul class="profile-social-list">
                                <li><a href="#" class="icofont-facebook facebook"></a></li>
                                <li><a href="#" class="icofont-twitter twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin linkedin"></a></li>
                                <li><a href="#" class="icofont-instagram instagram"></a></li>
                                <li><a href="#" class="icofont-pinterest pinterest"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
