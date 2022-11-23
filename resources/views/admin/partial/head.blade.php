<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Education Erp</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    {{-- jequery add --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .sidebar .sidebar-brand-wrapper .sidebar-brand img {
            width: calc(244px - 88px);
            max-width: 100%;
            height: auto;
            margin: auto;
            margin-top: -14px !important;
            vertical-align: middle;
        }
        .form-control {
            border: 1px solid #ced4da !important;
        }
        .border-right {
            border-right: 1px solid #ccc!important;
        }
        .labels {
            font-size: 11px
        }
        #nav-hov {
            /* color: #18272F; */
            position: relative;
            text-decoration: none;
        }

        #nav-hov::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 3px;
        border-radius: 4px;
        background-color: #18272F;
        bottom: 0;
        left: 0;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .3s ease-in-out;
        }

        #nav-hov:hover::before {
        transform-origin: left;
        transform: scaleX(1);
        }

        .table-responsive>.table-bordered {
            border: 1 !important;
        }

        .nested-menu {
            margin-top: 20px;
            max-width: 95%;
            margin-left: 37px;
            left: 0 !important;
        }

        .new-table {
            max-width: 95%;
            margin-left: 37px;
            margin-top: 11px;
        }
    </style>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.2/b-colvis-2.3.2/b-html5-2.3.2/b-print-2.3.2/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />
</head>
