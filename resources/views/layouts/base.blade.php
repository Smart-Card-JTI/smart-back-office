<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>SmartParking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

        <!-- DataTables -->
        {{-- <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> --}}
        <!-- Responsive datatable examples -->
        {{-- <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> --}}

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('polinema.ico')}}">
        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('js/jquery-bar-rating/themes/fontawesome-stars.css')}}">
        <script src="{{asset('js/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <link href="{{asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <!-- Sweet Alert -->
        <link href="{{asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body>
      <main class="py-4">
        @yield('content')
    </main>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{asset('assets/pages/jquery.dashboard.js')}}"></script>

        <!-- form advanced init js -->
        <script src="{{asset('assets/pages/jquery.form-advanced.init.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Sweet-Alert  -->
        <script src="{{asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('assets/pages/jquery.sweet-alert.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>


        <script type="text/javascript">
          $(document).ready(function() {

              // Default Datatable
              $('#datatable').DataTable();

              //Buttons examples
              var table = $('#datatable-buttons').DataTable({
                  lengthChange: false,
                  buttons: ['copy', 'excel', 'pdf']
              });

              // Key Tables

              $('#key-table').DataTable({
                  keys: true
              });

              // Responsive Datatable
              $('#responsive-datatable').DataTable();

              // Multi Selection Datatable
              $('#selection-datatable').DataTable({
                  select: {
                      style: 'multi'
                  }
              });

              table.buttons().container()
                      .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
          } );

      </script>
      <script type="text/javascript">
        $(function() {
           $('#rating-pelayanan').barrating({
             theme: 'fontawesome-stars',
             initialRating: 3,
             onSelect:function(value, text, event){
             
                 if (value == 1 || value == 2) {
                 $("#reason-rating").attr("required", "true");
                 $("#reason-area").css('display','block');
                 }
                 else{
                     $("#reason-rating").attr("required", "false");
                     $("#reason-area").css('display','none');
                 }
             
             }
           });
        });
     </script>
     <script type="text/javascript">
      $(function() {
         $('#rating-pelayanan').barrating({
           theme: 'fontawesome-stars',
           initialRating: 3,
           onSelect:function(value, text, event){
           
               if (value == 1 || value == 2) {
               $("#reason-rating").attr("required", "true");
               $("#reason-area").css('display','block');
               }
               else{
                   $("#reason-rating").attr("required", "false");
                   $("#reason-area").css('display','none');
               }
           
           }
         });
      });
   </script>
   <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable-buttons').DataTable();

    detailPengunjung = function(
      no_urut,
      fullname,
      sign_in_date,
      sign_out_date,
      company,
      nik,
      email,
      title,
      tujuan,
      whatsapp,
      phone_number_sms,
      dateofbirth,
      jobposition,
      education,
      government, 
      gender, 
      image
    ) {
      $('#myModal').modal('show');
      $('#no_urut').val(no_urut);			
      $('#read_fullname').val(fullname);
      $('#read_sign_in_date').val(sign_in_date);
      $('#read_company').val(company);
      $('#read_email').val(email);
      $('#read_title').val(title);
      $('#read_tujuan').val(tujuan);
      $('#read_whatsapp').val(whatsapp);
      $('#read_phone_number_sms').val(phone_number_sms);
      $('#read_jobposition').val(jobposition);
      $('#read_government').val(government);
      $('#read_education').val(education);
      $('#read_dateofbirth').val(dateofbirth);
      $('#read_gender').val(gender);
      var read_image = $(this).data('id');
      $(".modal-body #read_image").attr("src", image);
      if(sign_out_date==""){
        $('#read_sign_out_date').val("Belum Keluar");
      }else{
        $('#read_sign_out_date').val(sign_out_date);
      }
      $('#read_nik').val(nik);
    }
    });
  </script>
    </body>
</html>