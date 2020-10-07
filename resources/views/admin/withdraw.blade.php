<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <h2>Dashboard</h2>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p>
          Admin
          <i class="right fas fa-angle-down"></i>
          </p>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-edit"></i> Edit Profil
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign"></i> Log Out
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Office</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Office</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="{{('index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('akunmaster')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akun Konsultan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Akun Customer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Financial
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{('topup')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Konfirmasi Top Up Saldo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{('withdraw')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permintaan Withdraw</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Multimedia
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Maintenance Iklan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo Modul (Home)</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo Iklan (Pendaftaran)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report Transaksi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan User Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi Hitung Pajak</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Database
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Nama Table</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table Viewer Eksekutor</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Acount Setting
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<div class="content-wrapper">
    <div class="content-header">
      
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                     
                      <th>Member</th>
                       <th>Bank</th>
                      <th>Nama</th>
                      <th>Top Up</th>
                      <th>Saldo</th>
                      <th>Tgl</th>
                      <th>Tlpn</th>
                      <th>Rekening</th>
                      
                    </tr>
                  </thead>
                 <tbody id="tbody">
                    <tr>
                    
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- Update Model -->
<form action="" method="POST" class="users-accept-record-model form-horizontal">
    <div id="accept-modal" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Accept</h4>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-hidden="true">×
                    </button>
                </div>
                <div class="modal-body" id="acceptBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light"
                            data-dismiss="modal">Close
                    </button>
                    <button type="button" class="btn btn-success acceptWithdraw">Accept
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->

















   
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset ('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset ('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset ('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset ('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset ('admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset ('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset ('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset ('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset ('admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset ('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset ('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset ('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset ('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset ('admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('admin/dist/js/demo.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset ('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset ('admin/dist/js/pages/dashboard2.js')}}"></script>
<script src="{{asset ('admin/dist/js/pages/dashboard3.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

<script type="text/javascript">
   var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);

    var database = firebase.database();

    var lastIndex = 0;

    // Get Data
    firebase.database().ref('withdraw/').on('value', function (snapshot) {
        var value = snapshot.val();
        var htmls = [];
        $.each(value, function (index, value) {
            if (value) {
                htmls.push('<tr>\
                <td>' + value.Member + '</td>\
                <td>' + value.Bank + '</td>\
                <td>' + value.Nama + '</td>\
                <td>' + value.Saldo + '</td>\
                <td>' + value.Sisa_Saldo + '</td>\
                <td>' + value.Tgl + '</td>\
                <td>' + value.Tlp + '</td>\
                <td>' + value.rekening + '</td>\
                <td><button data-toggle="modal" data-target="#accept-modal" class="btn btn-info acceptData" data-id="' + index + '">Accept</button>\
                </td>\
            </tr>');
            }
            lastIndex = index;
        });
        $('#tbody').html(htmls);
        $("#submitUser").removeClass('desabled');
    });

        // Update Data
    var acceptID = 0;
    $('body').on('click', '.acceptData', function () {
        acceptID = $(this).attr('data-id');
        firebase.database().ref('registrasi/' + acceptID).on('value', function (snapshot) {
            var values = snapshot.val();
            var acceptData = '<div class="form-group">\
                <label for="first_name" class="col-md-12 col-form-label">Name</label>\
                <div class="col-md-12">\
                    <input id="Name" type="hidden" class="form-control" name="Nama" value="' + values.Nama + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Email" class="col-md-12 col-form-label">Email</label>\
                <div class="col-md-12">\
                    <input id="Email" type="text" class="form-control" name="Email" value="' + values.Email + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Tlp" class="col-md-12 col-form-label">Email</label>\
                <div class="col-md-12">\
                    <input id="Tlp" type="text" class="form-control" name="Tlp" value="' + values.Tlp + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Password" class="col-md-12 col-form-label">Password</label>\
                <div class="col-md-12">\
                    <input id="Password" type="text" class="form-control" name="Password" value="' + values.Password + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Persen" class="col-md-12 col-form-label">Persen</label>\
                <div class="col-md-12">\
                    <input id="Persen" type="text" class="form-control" name="Persen" value="' + values.Persen + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Kelamin" class="col-md-12 col-form-label">Kelamin</label>\
                <div class="col-md-12">\
                    <input id="Kelamin" type="text" class="form-control" name="Kelamin" value="' + values.Kelamin + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Lahir" class="col-md-12 col-form-label">Lahir</label>\
                <div class="col-md-12">\
                    <input id="Lahir" type="text" class="form-control" name="Lahir" value="' + values.Lahir + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Status" class="col-md-12 col-form-label">Status</label>\
                <div class="col-md-12">\
                    <input id="Status" type="text" class="form-control" name="Status" value="' + values.Status + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="nomer_member" class="col-md-12 col-form-label">nomer_member</label>\
                <div class="col-md-12">\
                    <input id="nomer_member" type="text" class="form-control" name="nomer_member" value="' + values.nomer_member + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Saldo" class="col-md-12 col-form-label">Saldo</label>\
                <div class="col-md-12">\
                    <input id="Saldo" type="text" class="form-control" name="Saldo" value="' + values.Saldo + '" required autofocus>\
                </div>\
            </div>\
             <div class="form-group">\
                <label for="Sisa_saldo" class="col-md-12 col-form-label">Sisa saldo</label>\
                <div class="col-md-12">\
                    <input id="Sisa_saldo" type="text" class="form-control" name="Sisa_saldo" value="' + values.Sisa_Saldo + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="Tarif" class="col-md-12 col-form-label">Tarif</label>\
                <div class="col-md-12">\
                    <input id="Tarif" type="text" class="form-control" name="Tarif" value="' + values.Tarif + '" required autofocus>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="last_name" class="col-md-12 col-form-label">Email</label>\
                <div class="col-md-12">\
                    <input id="last_name" type="text" class="form-control" name="Keterangan" value="' + values.Keterangan + '" required autofocus>\
                </div>\
            </div>';

            $('#acceptBody').html(acceptData);
        });
    });

    $('.acceptWithdraw').on('click', function () {
        var values = $(".users-accept-record-model").serializeArray();
        var postData = {
            Nama: values[0].value,
            Email: values[1].value,
            Tlp: values[2].value,
            Keterangan: values[3].value,
        };

        var accepts = {};
        accepts['/withdraw/' + acceptID] = postData;

        firebase.database().ref().accept(accepts);

        $("#accept-modal").modal('hide');
    });

    // Remove Data
    $("body").on('click', '.removeData', function () {
        var id = $(this).attr('data-id');
        $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
    });

  
</script>




</body>
</html>
