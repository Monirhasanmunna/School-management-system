<!DOCTYPE html>
<html lang="en">

@include('admin.partial.head')

<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
   @include('admin.partial.sideber')
    <!-- partial: sideber end -->


    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_navbar.html -->
     @include('admin.partial.header_menu')
      <!-- partial _navber end -->


  <!-- main-panel start -->
     @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>



  <!-- plugins:js start-->
 @include('admin.partial.footer')
  <!-- End custom js for this page -->
</body>

</html>
