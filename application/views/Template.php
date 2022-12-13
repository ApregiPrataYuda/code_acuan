<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" >
    

    <title>App Info | Nobby</title>
    <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/sweetalert2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.css');?>">
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.ico')?>"/>
    <script defer src="<?php echo base_url('assets/js/solid.js');?>"></script>
    <script defer src="<?php echo base_url('assets/fontawesome/js/all.js');?>"></script>
    
    <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js');?>"></script>
    <script src="https://cdn.tiny.cloud/1/mwenmwg7pvd8y2z2jssym12tc4fq13u7ao1a6yvpo6lct9hv/tinymce/5/tinymce.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.tablesorter.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/autoNumeric.js"); ?>"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
    <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/datatables.js');?>"></script>
    <!--<script type="text/javascript" src="<?php echo base_url('assets/js/moment.js');?>"></script>-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jspdf.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/html2canvas.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/home/script.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/NicEdit.js')?>">
                </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <style type="text/css">
    .table td, .table th{
        white-space:nowrap;
    }

    .table th{
        cursor: pointer;
    }

    .arrow-up {
        width: 0; 
        height: 0; 
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid black;
    }

    .arrow-down {
        width: 0; 
        height: 0; 
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 20px solid #f00;
    }

    .arrow-right {
        width: 0; 
        height: 0; 
        border-top: 60px solid transparent;
        border-bottom: 60px solid transparent;
        border-left: 60px solid green;
    }

    .arrow-left {
        width: 0; 
        height: 0; 
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent; 
        border-right:10px solid blue; 
    }
    
    #return-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        display: block;
        text-decoration: none;
        -webkit-border-radius: 35px;
        -moz-border-radius: 35px;
        border-radius: 35px;
        display: none;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top i {
        color: #fff;
        margin: 0;
        position: relative;
        left: 16px;
        top: 13px;
        font-size: 12px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #return-to-top:hover {
        background: rgba(0, 0, 0, 0.9);
    }
    #return-to-top:hover i {
        color: #fff;
        top: 5px;
    }
</style>

</head>
<?php 
function tgl_indo($tanggal){
    $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<body onload="startTime()" style="background: #b3b3b3">



<nav class="shadow" id="sidebar" style="position:fixed;z-index:2;">
    <div class="sidebar-header bg-light border shadow">
        <a href="<?php echo base_url('welcome');?>"><img src="<?php echo base_url('assets/images/nobby.png');?>" width="150" onclick="loader()"></a>
    </div>
    <h4><span class="badge badge-primary ml-3 mt-4">APP-INFO</span></h1>

    <div class="row ml-2 mb-2">
  <div class="col-8">
  <nav class="nav flex-column">
  <a class="nav-link" href="<?= site_url('Dashboard')?>"><i class="fa fa-folder"></i> Dashboard</a>
  <a class="nav-link" href="<?= site_url('Cabang')?>"><i class="fa fa-home"></i> Cabang</a>
  <a class="nav-link" href="<?= site_url('Karyawan')?>"><i class="fa fa-users"></i> Karyawan</a>
  <a class="nav-link" href="<?= site_url('Info')?>"><i class="fa fa-file"></i> Info</a>
  <a class="nav-link" href="<?= site_url('Input')?>"><i class="fa fa-file"></i> TES</a>
  <a class="nav-link" href="<?= site_url('Asset_masuk')?>"><i class="fa fa-file"></i> Asset Masuk</a>
  
</div>

</nav>
  </div>
</div>
    
</nav>



<?php echo $contents?>



<a href="javascript:" id="return-to-top" class="btn btn-primary"><i class="fas fa-arrow-up"></i></a>

<script>
    // ===== Scroll to Top ==== 
    $('#konten').scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('#konten ,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });


 
</script>

<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugins -->
  <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
  <script src="<?= base_url() ?>assets/vendor/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url() ?>assets/vendor/ckeditor/styles.js"></script>
  <script>

    var flash = $('#flash').data('flash');
    if (flash) {
      Swal.fire({
        icon: 'success',
        title: 'success',
        text: flash
      })
    }

    var flasherr = $('#flasherr').data('flasherr');
    if (flasherr) {
      Swal.fire({
        icon: 'info',
        title: 'error',
        text: flasherr
      })
    }


    $(document).on('click', '#btn-hapus', function(e) {
      e.preventDefault();
      // link for href
      var link = $(this).attr('href');
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data Akan Dihapus!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = link;
        }
      })
    })
  </script>


  <script>
    $(function() {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      // $('.textarea').wysihtml5()
    })
  </script>


  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable()
    })
  </script>

</body>

</html>