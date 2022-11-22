<!DOCTYPE html>
<!--
Template Name: NobleUI - Admin & Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: You must have a valid license purchased only from above link or https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title class="text-capitalize">SimamoWeb | @yield('title')</title>
   <!-- core:css -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendors/core/core.css') }}">
   <!-- endinject -->
   
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">

   <!-- plugin css for this page -->
   <link rel="stylesheet" href="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
   <!-- end plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather-font/css/iconfont.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
   <!-- endinject -->
   <!-- Layout styles -->
   <link rel="stylesheet" href="{{ asset('admin/assets/css/demo_1/style.css') }}">
   <!-- End layout styles -->
   <link rel="shortcut icon" href="{{ ('admin/assets/images/favicon.png') }}" />
</head>

<body>
   <div class="main-wrapper">

      <!-- partial:partials/_sidebar.html -->
     @include('layouts.partials.sidebar');
      <!-- partial -->

      <div class="page-wrapper">

         <!-- partial:partials/_navbar.html -->
         @include('layouts.partials.navbar')
         <!-- partial -->

         <div class="page-content">
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
               <div>
                 <h4 class="mb-3 mb-md-0 text-capitalize">@yield('title2')</h4>
               </div>
               @yield('title3')
             </div>
            @yield('content')

         </div>

         <!-- partial:partials/_footer.html -->
         @include('layouts.partials.footer')
         <!-- partial -->

      </div>
   </div>

   <!-- core:js -->
   <script src="{{ asset('admin/assets/vendors/core/core.js') }}"></script>
   <!-- endinject -->
   <!-- plugin js for this page -->
   <script src="{{ asset('admin/assets/vendors/chartjs/Chart.min.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
   <!-- end plugin js for this page -->
   <!-- inject:js -->
   <script src="{{ asset('admin/assets/vendors/feather-icons/feather.min.js') }}"></script>
   <script src="{{ asset('admin/assets/js/template.js') }}"></script>
   <!-- endinject -->
   <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
   <script src="{{ asset('admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
   <script src="{{ asset('admin/assets/js/data-table.js') }}"></script>
   <!-- custom js for this page -->
   <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
   <script src="{{ asset('admin/assets/js/datepicker.js') }}"></script>
   <!-- end custom js for this page -->
</body>

</html>