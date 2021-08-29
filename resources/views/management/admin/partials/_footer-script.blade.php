 <!-- BEGIN: Vendor JS-->
 <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset('/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
 <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Toastr JS-->
 {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
 <!-- END: Toastr JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{ asset('/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
 <!-- END: Page JS-->
 <script src="{{ asset('/app-assets/js/scripts/forms/form-wizard.js') }}"></script>

 <script>
     $(window).on('load', function() {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     })

    //  Toster Message Type And COlor
     @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
 </script>


 <!--- Notify js Start --->
 <script src="{{ asset('/Backend/js/notify.js') }}"></script>
 <!-- Select2 js -->
 <script src="{{ asset('/Backend/select2/js/select2.min.js') }}"></script>


   <!-- Extar Page Base JS -->
   @stack('js')
   <!-- End:Extar Page Base JS -->

    <!-- Extar Page Base AJAX -->
    @stack('ajax')
    <!-- End:Extar Page Base AJAX -->

