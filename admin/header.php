<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
    </button>
    <a class="c-header-brand d-lg-none" href="#">
        <img class="c-sidebar-brand-full" src="assets/img/logo-white.png" width="200px" height="auto" alt="CoreUI Logo">
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
        <svg class="c-icon c-icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
        </svg>
    </button>

    <ul class="c-header-nav d-md-down-none">
        <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="javascript:void(0);">
                <h3><?=GLOBAL_TITLE;?></h3>
            </a> </li>
    </ul>
    <ul class="c-header-nav ml-auto">

        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="true" aria-expanded="false">
                Welcome! Joy <strong> (Admin)</strong>
                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/61.png"
                        alt="approver@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">

                <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item"
                    href="javascript:void(0);">
                    <svg class="c-icon mr-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                    </svg> Profile</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="./index.php">
                    <svg class="c-icon mr-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                    </svg> Logout</a>
            </div>
        </li>
    </ul>
    <div class="c-subheader px-3">
        <!-- Breadcrumb-->
        <!--<ol class="breadcrumb border-0 m-0">-->
        <!--  <li class="breadcrumb-item">Home</li>-->
        <!--  <li class="breadcrumb-item">Logged in as <a href="javascript:void(0);">Approver</a></li>-->

        <!-- Breadcrumb Menu-->
        <!--</ol>-->
    </div>
</header>