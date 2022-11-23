<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- webcam snap take --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script>
    // CAMERA SETTINGS.
    // Webcam.set({
    //     width: 220,
    //     height: 190,
    //     image_format: 'jpeg',
    //     jpeg_quality: 100
    // });
    // Webcam.attach('#camera');

    // // SHOW THE SNAPSHOT.
    // takeSnapShot = function () {
    //     Webcam.snap(function (data_uri) {
    //         document.getElementById('snapShot').innerHTML = 
    //             '<img src="' + data_uri + '" width="70px" height="50px" />';
    //     });
    }
</script>
<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
{{-- <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
<script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
{{-- <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('assets/js/misc.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>
<script src="{{ asset('assets/js/todolist.js') }}"></script> --}}
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('assets/js/dashboard.js') }}"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.2/b-colvis-2.3.2/b-html5-2.3.2/b-print-2.3.2/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/kt-2.8.0/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.js">
</script>
<!-- End custom js for this page -->
@yield('javascript')
