@include('layouts.head')

<body>
    <div class="backdrop"></div>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.widget')
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
                                <li><a href="profile.html">profile</a></li>
                                <li><a href="create-ads.html">create ads</a></li>
                                <li><a href="posted-ads.html">posted ads</a></li>
                                <li><a href="favorite.html">favorites</a></li>
                                <li><a href="compare.html">compares</a></li>
                                <li><a href="review.html">reviews</a></li>
                                <li><a href="notify.html" class="active">notify</a></li>
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
                <h2 class="mc-breadcrumb-title">notifications</h2><select class="form-select mc-breadcrumb-select">
                    <option value="recent" selected>recent notifications</option>
                    <option value="unread">unread notifications</option>
                    <option value="read">read notifications</option>
                    <option value="mark">mark as all read</option>
                </select>
                <ul class="mc-breadcrumb-list">
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="index.html">home</a></li>
                    <li class="mc-breadcrumb-item"><a class="mc-breadcrumb-link" href="dashboard.html">dashboard</a>
                    </li>
                    <li class="mc-breadcrumb-item">notify</li>
                </ul>
            </div>
        </div>
    </section>
    <div class="section-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="notify-list">
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/01.jpg" alt="avatar"><i
                                        class="material-icons favorite">favorite</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>added to his favorite list <b>Mercedez
                                            benz super mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/02.jpg" alt="avatar"><i
                                        class="material-icons rating">star</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>just review on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/03.jpg" alt="avatar"><i
                                        class="material-icons comment">forum</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>just comment on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/04.jpg" alt="avatar"><i
                                        class="material-icons announce">campaign</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>announce on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/avatar/05.jpg" alt="avatar"><i
                                        class="material-icons blog">edit</i></div>
                                <div class="notify-meta"><span><b>Autoland</b>write a super blog on <b>Mercedez benz
                                            super mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                        <li class="notify-item"><a class="notify-content" href="#">
                                <div class="notify-media"><img src="../images/favicon.png" alt="favicon"><i
                                        class="material-icons privacy">shield</i></div>
                                <div class="notify-meta"><span><b>Ghurnek</b>privacy concern on <b>Mercedez benz super
                                            mclaren</b></span><small>about few minutes ago!</small></div>
                            </a><a class="notify-close" href="#"><i class="material-icons">close</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="bottom-paginate">
                        <p class="page-info">Showing 12 of 60 Results</p>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link material-icons">chevron_left</a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link active">01</a></li>
                            <li class="page-item"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a href="#" class="page-link">45</a></li>
                            <li class="page-item"><a href="#"
                                    class="page-link material-icons">chevron_right</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
</body>


</html>
