<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-bordered" data-assets-path="Assets/Admin/" data-template="vertical-menu-template-bordered">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords"
        content="dashboard, material, material design, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <!-- Favicon -->
    <link id="favicon" rel="icon" href="/Assets/Admin/img/icons/logoipsum-296.svg">
    <!--Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="/Assets/Admin/vendor/fonts/materialdesignicons.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/node-waves/node-waves.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="/Assets/Admin/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/css/rtl/theme-bordered.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/Assets/Admin/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/dropzone/dropzone.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="/Assets/Admin/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <!-- Page CSS -->
    @yield('style-libs')

    <!-- Helpers -->
    <script src="/Assets/Admin/vendor/js/helpers.js"></script>
    <script src="/Assets/Admin/js/config.js"></script>

</head>

<body>

    <?php
    $account['accounts'] = $_SESSION['user'];
    extract($account);
    ?>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <!-- Overlay -->
        <div class="layout-container">

            <!-- HEADER -->
            @include('layouts.header')
            <!--/ HEADER -->

            <div class="layout-page">

                @include('layouts.navBar')

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    @yield('content')

                    <!--FOOTER-->
                    @include('layouts.footer')
                    <!-- /FOOTER-->

                    <div class="content-backdrop fade">
                    </div>

                </div>
                <!-- Content wrapper -->
            </div>

        </div>
        <!-- / Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- core js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/Assets/Admin/vendor/libs/jquery/jquery.js"></script>
    <script src="/Assets/Admin/vendor/libs/popper/popper.js"></script>
    <script src="/Assets/Admin/vendor/js/bootstrap.js"></script>
    <script src="/Assets/Admin/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/Assets/Admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/Assets/Admin/vendor/libs/hammer/hammer.js"></script>
    <script src="/Assets/Admin/vendor/libs/i18n/i18n.js"></script>
    <script src="/Assets/Admin/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/Assets/Admin/vendor/js/menu.js"></script>
    <!-- end build -->

    <!-- Vendors JS -->
    <script src="/Assets/Admin/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="/Assets/Admin/vendor/libs/quill/katex.js"></script>
    <script src="/Assets/Admin/vendor/libs/quill/quill.js"></script>
    <script src="/Assets/Admin/vendor/libs/dropzone/dropzone.js"></script>
    <script src="/Assets/Admin/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
    <script src="/Assets/Admin/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="/Assets/Admin/vendor/libs/tagify/tagify.js"></script>
    <script src="/Assets/admin/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
    <script src="/Assets/admin/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="/Assets/admin/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="/Assets/admin/vendor/libs/cleavejs/cleave.js"></script>
    <script src="/Assets/admin/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="/Assets/Admin/vendor/libs/select2/select2.js"></script>

    <!-- Main JS -->
    <script src="/Assets/Admin/js/main.js"></script>

    @yield('script-libs')

    <!-- Page JS -->
    {{-- <script src="/Assets/Admin/js/form-validation.js"></script> --}}
    {{-- <script src="/Assets/Admin/js/forms-selects.js"></script> --}}
    {{-- <script src="/Assets/Admin/js/pages-account-settings-account.js"></script> --}}

</body>

</html>
