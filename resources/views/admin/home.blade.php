

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
   
      @include('admin/sidebar')
      <!-- partial -->
      @include('admin/mainbody')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-flex justify-content-center">
            <span class="text-muted text-center d-block d-sm-inline-block">Copyright © 2023.<a href="https://www.fmckeffi.gov.ng/" target="_blank"> FMC KEFFI</a></span>
            </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('admin.scripts')
  <!-- End custom js for this page-->
</body>

</html>

