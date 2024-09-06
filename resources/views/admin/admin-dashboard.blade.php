@include('layouts.admin.head')

<body>
    <div class="app-root d-flex flex-column">
        <!-- ***** Sidebar Start ***** -->

        @include('layouts.admin.sidebar')
        <!-- ***** Sidebar End ***** -->

        <!-- ***** Responsive Menu Backdrop Start ***** -->
        <div class="menu-backdrop"></div>
        <!-- ***** Responsive Menu Backdrop End ***** -->

        <!-- ***** Main Start ***** -->
        <main class="app-main">
            <!-- ***** Header Start ***** -->
            <header class="main-header d-flex justify-content-between">
                <!-- ***** Sidebar Menu Open Button Start ***** -->
                <a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
                <!-- ***** Sidebar Menu Open Button End ***** -->

                <!-- ***** Navbar Start ***** -->
                @include('layouts.admin.navbar')
                <!-- ***** Navbar End ***** -->

                <div class="header-tools d-flex align-items-center">
                    <!-- ***** Search Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="p3">
                                <div class="w-100 position-relative d-flex align-items-center">
                                    <i data-feather="search" stroke-width="2" height="22"
                                        class="text-body-tertiary position-absolute"></i>
                                    <input type="text"
                                        class="form-control border-0 outline-none input-reset ps6 bg-transparent"
                                        placeholder="Search...">
                                </div>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5 d-flex flex-row justify-content-between">
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-primary-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="message-circle" stroke-width="2" height="36"
                                            class="text-primary"></i>
                                    </div>
                                    <span>Chat</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-info-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="folder" stroke-width="2" height="36" class="text-info"></i>
                                    </div>
                                    <span>Files</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-success-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="mail" stroke-width="2" height="36" class="text-success"></i>
                                    </div>
                                    <span>Inbox</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-warning-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="check-circle" stroke-width="2" height="36"
                                            class="text-warning"></i>
                                    </div>
                                    <span>Tasks</span>
                                </a>
                                <a href="#"
                                    class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
                                    <div
                                        class="rounded-circle width-50 height-50 bg-danger-subtle d-flex align-items-center justify-content-center mb2">
                                        <i data-feather="pie-chart" stroke-width="2" height="36"
                                            class="text-danger"></i>
                                    </div>
                                    <span>CRM</span>
                                </a>
                            </div>
                            <div class="bg-light p5 pt3 pb3">Recently Searched:</div>
                            <div class="height-350 overflow-hidden search-scroll ss-container">
                                <div class="p5">
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="calendar" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Calendar</span>
                                        <span class="text-heading">"birthday"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="message-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Chat</span>
                                        <span class="text-heading">"october invoice"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="mail" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Inbox</span>
                                        <span class="text-heading">"project files"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="phone" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Contacts</span>
                                        <span class="text-heading">"justin case"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="database" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Projects</span>
                                        <span class="text-heading">"mobile app sketch file"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Tasks</span>
                                        <span class="text-heading">"seo report"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="columns" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Kanban Board</span>
                                        <span class="text-heading">"design assets"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">ToDo</span>
                                        <span class="text-heading">"shopping list"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="pie-chart" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">CRM</span>
                                        <span class="text-heading">"barry tone"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="calendar" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Calendar</span>
                                        <span class="text-heading">"birthday"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="message-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Chat</span>
                                        <span class="text-heading">"october invoice"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="mail" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Inbox</span>
                                        <span class="text-heading">"project files"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="phone" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Contacts</span>
                                        <span class="text-heading">"justin case"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="database" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Projects</span>
                                        <span class="text-heading">"mobile app sketch file"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check-circle" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Tasks</span>
                                        <span class="text-heading">"seo report"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="columns" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">Kanban Board</span>
                                        <span class="text-heading">"design assets"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="check" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">ToDo</span>
                                        <span class="text-heading">"shopping list"</span>
                                    </a>
                                    <a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
                                        <i data-feather="pie-chart" stroke-width="2" height="20"
                                            class="text-body-tertiary me3"></i>
                                        <span class="me3 text-body">CRM</span>
                                        <span class="text-heading">"barry tone"</span>
                                    </a>
                                </div>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Search Dropdown End ***** -->

                    <!-- ***** Chat Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight" data-disableScrolling="false">
                            <i data-feather="message-square" stroke-width="2" height="22"
                                class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Chat Content Start ***** -->
                        <div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header p6">
                                <div class="d-flex">
                                    <div class="d-flex align-items-center">
                                        <div class="position-relative">
                                            <div class="img-fix rounded-circle me3 height-40 width-40">
                                                <img src="assets/media/avatars/12.jpg" alt="">
                                            </div>
                                            <span
                                                class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
                                        </div>
                                        <h6 class="mb0">Justin Case</h6>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none"
                                            data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                class="text-body"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="archive" stroke-width="1.5" height="14"
                                                        class="text-body me1"></i>
                                                    Archive
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <i data-feather="mic-off" stroke-width="1.5" height="16"
                                                        class="text-body me1"></i>
                                                    Muted
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                    href="#">
                                                    <div class="d-flex align-items-center">
                                                        <i data-feather="trash-2" stroke-width="1.5" height="16"
                                                            class="text-body me1"></i>
                                                        Delete
                                                    </div>
                                                    <i data-feather="info" stroke-width="2" height="12"
                                                        class="text-body me1" data-bs-toggle="tooltip"
                                                        data-bs-placement="left" data-bs-custom-class="qd-tooltip"
                                                        data-bs-title="If you delete it, this action cannot be undone."></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <button type="button" class="border-0 bg-transparent p0 outline-none"
                                        data-bs-dismiss="offcanvas" aria-label="Close">
                                        <i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas-body p0 overflow-hidden">
                                <div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
                                    <div class="d-flex flex-column align-items-start mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="assets/media/avatars/12.jpg" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>48 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Hi, can you send me the files of the new
                                                project by email?</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <span>46 min.</span>
                                            <span class="text-heading ms3">You</span>
                                            <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                <img src="assets/media/avatars/6.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="p4 bg-light rounded">
                                            <span class="text-heading">I don't have all the files. I can only send
                                                documents.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-start mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="assets/media/avatars/12.jpg" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>43 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Okey send.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-end mb6">
                                        <div class="d-flex align-items-center mb3">
                                            <span>40 min.</span>
                                            <span class="text-heading ms3">You</span>
                                            <div class="img-fix rounded-circle me3 height-30 width-30 ms3">
                                                <img src="assets/media/avatars/6.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="p4 mb1 bg-light rounded">
                                            <a href="#"
                                                class="text-heading d-flex align-items-center text-decoration-none">
                                                <i data-feather="file" stroke-width="1.5" height="22"
                                                    class="text-heading me2"></i>
                                                New Project.docx
                                            </a>
                                        </div>
                                        <div class="p4 bg-light rounded">
                                            <span class="text-heading">This file contains all the
                                                information.</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column align-items-start">
                                        <div class="d-flex align-items-center mb3">
                                            <div class="img-fix rounded-circle me3 height-30 width-30 me3">
                                                <img src="assets/media/avatars/12.jpg" alt="">
                                            </div>
                                            <span class="text-heading me3">Justin Case</span>
                                            <span>38 min.</span>
                                        </div>
                                        <div class="p4 bg-info-subtle rounded">
                                            <span class="text-heading">Thank you very much. I owe you lunch
                                                😁</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p6 bg-light">
                                <div
                                    class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
                                    <div>
                                        <a href="#"
                                            class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
                                            <i data-feather="paperclip" stroke-width="1.5" height="18"
                                                class="text-body"></i>
                                        </a>
                                    </div>
                                    <div class="w-100">
                                        <input type="text"
                                            class="form-control border-0 outline-none input-reset bg-transparent"
                                            placeholder="Type your message here">
                                    </div>
                                    <div>
                                        <a href="#"
                                            class="width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="send" stroke-width="1.5" height="22"
                                                class="text-body"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ***** Chat Content Start ***** -->
                    </div>
                    <!-- ***** Chat End ***** -->

                    <!-- ***** My Apps Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="hard-drive" stroke-width="2" height="22" class="text-secondary"></i>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="d-flex justify-content-between align-items-center p5">
                                <h6 class="mb0">My Apps</h6>
                                <span class="badge rounded-pill badge-soft text-bg-info">7 Updates</span>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5">
                                <div class="container-fluid p0">
                                    <div class="row">
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light position-relative">
                                                <span
                                                    class="badge rounded-pill text-bg-success position-absolute scale-50 top-0 end-0">
                                                    <i data-feather="check" stroke-width="2" height="22"
                                                        class="text-white"></i>
                                                </span>
                                                <img class="mb-2" src="assets/media/logos/github.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Github</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/bitbucket.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/dribbble.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Dribbble</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/dropbox.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/mailchimp.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Mail</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/slack.svg" height="30"
                                                    alt="">
                                                <span class="text-heading">Slack</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/amazon.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">AWS</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/gitlab.svg"
                                                    height="30" alt="">
                                                <span class="text-heading">Gitlab</span>
                                            </a>
                                        </div>
                                        <div class="col-4 mb5">
                                            <a href="#"
                                                class="d-flex justify-content-center align-items-center flex-column border p5 text-decoration-none rounded border-dashed hover-light">
                                                <img class="mb-2" src="assets/media/logos/figma.svg" height="30"
                                                    alt="">
                                                <span class="text-heading">Figma</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="btn btn-primary btn-soft btn-sm d-block" href="#"
                                                role="button">View App Market</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** My Apps Dropdown End ***** -->

                    <!-- ***** Notification Dropdown Start ***** -->
                    <div class="dropdown me3">
                        <!-- ***** Icon Start ***** -->
                        <a href="javascript:;"
                            class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
                            <span
                                class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
                        </a>
                        <!-- ***** Icon End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-350 p0">
                            <!-- ***** Content Start ***** -->
                            <div class="d-flex justify-content-between align-items-center p5">
                                <h6 class="mb0">Notifications</h6>
                                <span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
                            </div>
                            <hr class="opacity-20 m0">
                            <div class="p5">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img src="assets/media/avatars/1.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Congratulations Barry! 🥳</strong>
                                        <span class="mb1 text-body">You've been the top seller this month.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">16 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="dollar-sign" stroke-width="1.5" height="22"
                                                class="text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Qoduby has been sold 🤑</strong>
                                        <span class="mb1 text-body">You earned $40 from this sale.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-primary">22 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="me3">
                                        <div
                                            class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                            <i data-feather="bar-chart-2" stroke-width="1.5" height="22"
                                                class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">Monthly Report 👨‍💻</strong>
                                        <span class="mb1 text-body">The monthly report was uploaded.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-success">27 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a href="#" class="d-flex justify-content-start text-decoration-none">
                                    <div class="img-fix width-40 height-40 rounded-circle me3">
                                        <img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-column align-items-start">
                                        <strong class="text-heading me1">New message received 👋🏻</strong>
                                        <span class="mb1 text-body">You have 7 unread messages.</span>
                                        <span class="badge rounded-pill badge-soft text-bg-info">48 minutes
                                            ago</span>
                                    </div>
                                </a>
                                <hr class="opacity-20 border-dashed">
                                <a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read
                                    All Notifications</a>
                            </div>
                            <!-- ***** Content End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Notification Dropdown End ***** -->

                    <!-- ***** Profile Dropdown Start ***** -->
                    <div class="dropdown">
                        <!-- ***** Profile Image Start ***** -->
                        <a href="javascript:;" class="dropdown-toggle header-dropdown outline-none"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-fix width-40 height-40 rounded">
                                <img src="assets/media/avatars/6.jpg" alt="">
                            </div>
                        </a>
                        <!-- ***** Profile Image End ***** -->

                        <!-- ***** Dropdown Content Start ***** -->
                        <div class="dropdown-menu width-250 p0">
                            <!-- ***** Content Info Start ***** -->
                            <div class="d-flex justify-content-start mb3 p5 pb0">
                                <div class="img-fix width-40 height-40 me3 rounded">
                                    <img src="assets/media/avatars/6.jpg" alt="">
                                </div>
                                <div class="d-flex flex-column text-start">
                                    <div class="d-flex flex-row align-items-center">
                                        <strong class="text-heading me1">Barry Tone</strong>
                                        <span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
                                    </div>
                                    <small>@QodubyTheme</small>
                                </div>
                            </div>
                            <!-- ***** Content Info End ***** -->

                            <!-- ***** Balance Start ***** -->
                            <div class="p5 pt0">
                                <div class="bg-secondary-subtle p3 rounded d-flex justify-content-between">
                                    <span>Balance</span>
                                    <strong class="text-heading">$3.754,45</strong>
                                </div>
                            </div>
                            <hr class="opacity-20 mt0">
                            <!-- ***** Balance End ***** -->

                            <!-- ***** Menu Start ***** -->
                            <div class="p5 pt0 pb0">
                                <ul class="nav flex-column text-start p0">
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-overview.html">My Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="apps-file-manager-files.html">My Files</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-project.html">My Tasks</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-statements.html">My Statements</a>
                                    </li>
                                </ul>
                            </div>
                            <hr class="opacity-20">
                            <!-- ***** Menu End ***** -->

                            <!-- ***** Settings Start ***** -->
                            <div class="p5 pt0">
                                <ul class="nav flex-column text-start p0">
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none"
                                                data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                                Language
                                                <span
                                                    class="badge badge-soft rounded-pill text-bg-primary">English</span>
                                            </a>
                                            <ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center"
                                                        href="#">
                                                        English
                                                        <i data-feather="check" stroke-width="1.5" height="22"
                                                            class="text-success"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">Spanish</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">French</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0"
                                                        href="#">Japanese</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown">
                                            <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none"
                                                data-bs-toggle="dropdown" aria-expanded="false" href="#">
                                                Theme
                                                <span class="badge badge-soft rounded-pill text-bg-light"
                                                    id="current-theme">Light</span>
                                            </a>
                                            <ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-light"
                                                        href="#">
                                                        Light
                                                        <i data-feather="check" stroke-width="1.5" height="22"
                                                            class="text-success"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-dark"
                                                        href="#">Dark</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-account-user-settings.html">Account Settings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-heading hover-primary ps0"
                                            href="pages-authentication-sign-in.html">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- ***** Settings End ***** -->
                        </div>
                        <!-- ***** Dropdown Content Start ***** -->
                    </div>
                    <!-- ***** Profile Dropdown End ***** -->

                    <!-- ***** Header Menu Open Button Start ***** -->
                    <a class="header-menu-trigger ms3"><span>Menu</span></a>
                    <!-- ***** Header Menu Open Button End ***** -->
                </div>
            </header>
            <!-- ***** Header End ***** -->

            <!-- ***** Content Start ***** -->
            <div class="app-content p6 pb2 smp1">
                <div class="container-fluid p0">
                    <!-- Mini Widgets Start -->
                    <div class="row">
                        <!-- Widget 1 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-primary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Total Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">48</h1>
                                <span>Vehicles available for rental</span>
                            </div>
                        </div>
                        <!-- Widget 1 End -->

                        <!-- Widget 2 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-info rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Reservation</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">16</h1>
                                <span>New incoming reservations</span>
                            </div>
                        </div>
                        <!-- Widget 2 End -->

                        <!-- Widget 3 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-success rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Faulty Vehicle</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">7</h1>
                                <span>Vehicles in maintenance</span>
                            </div>
                        </div>
                        <!-- Widget 3 End -->

                        <!-- Widget 4 Start -->
                        <div class="col-xxl-3 col-md-6 mb5">
                            <div class="bg-secondary rounded-3 pt2 pb5 text-center">
                                <h6 class="text-white mb0">Active Car</h6>
                            </div>
                            <div class="card shadow-card p5 text-center mtn4">
                                <h1 class="mb1">27</h1>
                                <span>Rented, unused cars</span>
                            </div>
                        </div>
                        <!-- Widget 4 End -->
                    </div>
                    <!-- Mini Widgets End -->

                    <!-- Analytics Row Start -->
                    <div class="row">
                        <!-- Chart Start -->
                        <div class="col-xxl-9 mb5">
                            <div class="card shadow-card">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4">
                                        <div class="bg-light h-100 p6 d-flex align-items-center">
                                            <div class="d-flex flex-column justify-content-start">
                                                <div class="border-bottom-dashed pb5 mb5">
                                                    <span class="d-block mb4">REVENUE</span>
                                                    <h4>$7.367,56</h4>
                                                </div>
                                                <div class="border-bottom-dashed pb5 mb5">
                                                    <span class="d-block mb4">ORDERS</span>
                                                    <h4>27</h4>
                                                </div>
                                                <div>
                                                    <span class="d-block mb4">AVG. ORDER VAL.</span>
                                                    <h4 class="mb0">$272,87</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-8 p6 pb4">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb0">Orders</h6>
                                            </div>
                                            <div class="col d-flex flex-row justify-content-end">
                                                <div class="dropdown">
                                                    <button type="button"
                                                        class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-30 rounded ps3"
                                                        data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span class="text-body">Monthly</span>
                                                        <i data-feather="chevron-down" stroke-width="2"
                                                            height="16" class="text-heading"></i>
                                                    </button>
                                                    <ul class="dropdown-menu text-start">
                                                        <li><a class="dropdown-item" href="#">Today</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Last
                                                                Week</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Last
                                                                Month</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                                href="#">
                                                                Current Year <i data-feather="info" stroke-width="2"
                                                                    height="12" class="text-body me1"
                                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                                    data-bs-custom-class="qd-tooltip"
                                                                    data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="chart26" class="chart26"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart End -->

                        <!-- Recent Activity Start -->
                        <div class="col-xxl-3 mb5">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb5">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline me3">Recent Activity</h6>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="d-flex justify-content-start text-decoration-none border-bottom-dashed pb4 mb4">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="map-pin" stroke-width="2" height="22"
                                                        class="text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived Customer</strong>
                                                <span class="mb1 text-body">#348 has been arrived</span>
                                                <span class="badge rounded-pill badge-soft text-bg-primary">3
                                                    minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex justify-content-start text-decoration-none border-bottom-dashed pb4 mb4">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-info-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="file-text" stroke-width="2" height="22"
                                                        class="text-info"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived New Car</strong>
                                                <span class="mb1 text-body">Car #27 has been arrived</span>
                                                <span class="badge rounded-pill badge-soft text-bg-info">7 minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start text-decoration-none">
                                            <div class="me3">
                                                <div
                                                    class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
                                                    <i data-feather="dollar-sign" stroke-width="2" height="22"
                                                        class="text-success"></i>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column align-items-start">
                                                <strong class="text-heading me1">Arrived Passenger</strong>
                                                <span class="mb1 text-body">Customer #16 has been</span>
                                                <span class="badge rounded-pill badge-soft text-bg-success">12
                                                    minutes
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Activity End -->
                    </div>
                    <!-- Analytics Row End -->

                    <!-- Map & Table Row Start -->
                    <div class="row">
                        <!-- Map Start -->
                        <div class="col-xxl-6 mb5">
                            <div class="card shadow-card p5">
                                <div id="car-map" class="w-100 height-610 rounded"></div>
                            </div>
                        </div>
                        <!-- Map End -->

                        <!-- Table Start -->
                        <div class="col-xxl-6 mb5">
                            <div class="card shadow-card p6">
                                <div class="row align-items-center mb1">
                                    <div class="col d-flex flex-row justify-content-between align-items-center">
                                        <h6 class="mb0 d-inline me3">Last Reservations</h6>
                                        <div class="dropdown">
                                            <button type="button"
                                                class="border-0 bg-transparent p0 outline-none dropdown-toggle arrow-none"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-feather="more-horizontal" stroke-width="2" height="22"
                                                    class="text-body"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Today</a></li>
                                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table qd-table mb0 align-middle">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/1.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">VOLKSWAGEN</span>
                                                            <strong class="text-heading">Golf TSI 2017</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 9, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 12, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/2.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">MERCEDES</span>
                                                            <strong class="text-heading">AMG GT 2019</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 5, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 11, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft text-bg-danger">Cancel</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/3.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">TOYOTA</span>
                                                            <strong class="text-heading">4Runner 2018</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 4, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 9, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/4.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">NISSAN</span>
                                                            <strong class="text-heading">Altima 2020</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 3, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 7, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft text-bg-success">Active</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="width-120 height-80 img-fix rounded">
                                                                <img src="assets/media/cars/1.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">SUBARU</span>
                                                            <strong class="text-heading">Outback 2019</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">START</span>
                                                            <strong class="text-heading">Apr 1, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="d-block mb2">END</span>
                                                            <strong class="text-heading">Apr 10, 2023</strong>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft text-bg-danger">Cancel</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table End -->
                    </div>
                    <!-- Map & Table Row Start -->

                    <!-- Rental Calendar Start -->
                    <div class="row mb5">
                        <div class="col-12">
                            <div class="card shadow-card p6">
                                <div class="row mb4 align-items-center">
                                    <div class="col">
                                        <h6 class="mb0">Rental Calendar</h6>
                                    </div>
                                    <div class="col d-flex flex-row justify-content-end">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="bg-transparent p0 outline-none dropdown-toggle arrow-none border height-30 rounded ps3"
                                                data-bs-auto-close="outside" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="text-body">Last 3 Month</span>
                                                <i data-feather="chevron-down" stroke-width="2" height="16"
                                                    class="text-heading"></i>
                                            </button>
                                            <ul class="dropdown-menu text-start">
                                                <li><a class="dropdown-item" href="#">Last 6 Month</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Last 9 Month</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Last 12 Month</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center justify-content-between"
                                                        href="#">
                                                        Current Year <i data-feather="info" stroke-width="2"
                                                            height="12" class="text-body me1"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            data-bs-custom-class="qd-tooltip"
                                                            data-bs-title="Only data from the beginning of the year to this time are shown."></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="overflow-x-scroll">
                                                <div class="col-12 mb5">
                                                    <strong class="d-block mb2">April 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            16</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            17</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            18</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            19</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            22</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            23</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            24</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            25</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            26</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            27</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            28</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            29</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            30</div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb5">
                                                    <strong class="d-block mb2">May 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-warning-subtle text-warning p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            16</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            17</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            18</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            19</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            22</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            23</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            24</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            25</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            26</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            27</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            28</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            29</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            30</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            31</div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <strong class="d-block mb2">June 2023</strong>
                                                    <div class="d-flex">
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            01</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            02</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            03</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            04</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            05</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            06</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            07</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            08</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            09</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            10</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            11</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            12</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            13</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            14</div>
                                                        <div
                                                            class="bg-secondary-subtle text-heading p3 px-3 rounded me1">
                                                            15</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            16</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            17</div>
                                                        <div class="bg-danger-subtle text-danger p3 px-3 rounded me1">
                                                            18</div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">19
                                                        </div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            20</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            21</div>
                                                        <div
                                                            class="bg-primary-subtle text-primary p3 px-3 rounded me1">
                                                            22</div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">23
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">24
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">25
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">26
                                                        </div>
                                                        <div class="bg-light text-heading p3 px-3 rounded me1">27
                                                        </div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            28</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            29</div>
                                                        <div
                                                            class="bg-success-subtle text-success p3 px-3 rounded me1">
                                                            30</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rental Calendar End -->
                </div>
            </div>
            <!-- ***** Content End ***** -->

            <!-- ***** Footer Start ***** -->
            <!-- Page Specific Javascript -->
            <script src="{{ asset('adminAssets/js/pages/dashboards/dashboard-06.js') }}" crossorigin="anonymous"></script>

            @include('layouts.admin.footer')
