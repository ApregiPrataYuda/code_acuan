
<div class="col-md-9 mt-3 ml-auto mr-4">
<nav class="navbar navbar-expand-lg navbar-light shadow rounded" style="background: #f2f2f2;">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-light border">
            <i class="fas fa-bars"></i>
            <span>Menu</span>
        </button>
        <div class="text-right">
        	<h6></h6><h6 id="timestamp"></h6>
        </div>
    </div>   
</nav>

<div id="flash" data-flash="<?= $this->session->flashdata('pesan') ?>">
<div id="flasherr" data-flasherr="<?= $this->session->flashdata('error') ?>">
  
<div class="card">
  <div class="card-header">
    Data Info
  </div>

  <div class="col-md-4 mt-2">
  <a href="<?= site_url('Info/add')?>" class="btn  btn-primary btn-sm "><i class="fa fa-plus"></i> Add Data</a>
  </div>
 

  <div class="card-body">
  <table class="table table-striped" id="dataTable">
  <thead>
    <tr>
      <th scope="col" style="width:5%">#No</th>
      <th scope="cocel">Nama karyawan</th>
      <th scope="cocel">Nama Cabang</th>
      <th scope="cocel">Nama Device</th>
      <th scope="col">Merk</th>
      <th scope="col">Kategori </th>
      <th scope="col" style="width:5%">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($row->result() as $key => $data) { ?>
        <tr>
            <td><?=$no++ ?></td>
            <td><?= $data->kry_name?></td>
            <td><?= $data->cabang_name?></td>
            <td><?= $data->name?></td>
            <td><?= $data->merk?></td>
            <td><?= $data->category?></td>
            <td>
                <a href="<?=site_url('Info/edit/' . $data->info_id)?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                <a href="<?=site_url('Info/delete/' . $data->info_id)?>" class="btn btn-outline-danger btn-sm" id="btn-hapus"><i class="fa fa-trash"></i></a>
                <a id="set_dtl" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-merk" 
                 data-kry_name="<?= $data->kry_name ?>"
                 data-cabang_name="<?= $data->cabang_name ?>"
                 data-name="<?= $data->name ?>"
                 data-merk="<?= $data->merk ?>"
                 data-category="<?= $data->category ?>"
                 data-ip="<?= $data->ip ?>"
                 data-tgl_beli="<?= $data->tgl_beli ?>"
                 data-prosesor_detail="<?= $data->prosesor_detail ?>"
                 data-umur_device="<?= $data->umur_device ?>"
                 data-serial_number="<?= $data->serial_number ?>"
                 data-ram_slot="<?= $data->ram_slot ?>"
                 data-ram="<?= $data->ram ?>"
                 data-kode_assets="<?= $data->kode_assets ?>"
                 ><i class="fa fa-eye"></i> </a>
   </button>
            </td>
        </tr>
        </tr>
        </tr>
    <?php } ?>
   
  </tbody>
</table>
  </div>
</div>
        <div class="" id="load" style="visibility: hidden">
            <div id="content" class="content bg-secondary" style="opacity: 0.1; position: fixed;"></div>
            <img src="<?php echo base_url('assets/images/loader.gif');?>" width="80" style="position: fixed;z-index:5;top:45%;left:57%">
        </div>
    </div>
    </div>
    

  

<div class="modal fade" id="modal-merk">
    <div class="modal-dialog modal-lg modal-info">
      <div class="modal-content">
        <div class="modal-header">
          <span class="badge badge-primary"><h5 class="modal-title" style="text-align:center;">Detail info</h5></span>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body table-responsive">
          <table class="table table-bordered no-margin">
            <tbody>
              <tr>
                <th>Nama Karyawan</th>
                <td><span id="kry_name"></span></td>
              </tr>
              <tr>
                <th>Nama Cabang</th>
                <td><span id="cabang_name"></span></td>
              </tr>

              <tr>
                <th>name</th>
                <td><span id="name"></span></td>
              </tr>

              <tr>
                <th>merk</th>
                <td><span id="merk"></span></td>
              </tr>

              <tr>
                <th>Kategori</th>
                <td><span id="category"></span></td>
              </tr>

              <tr>
                <th>ip</th>
                <td><span id="ip"></span></td>
              </tr>

              <tr>
                <th>tgl beli</th>
                <td><span id="tgl_beli"></span></td>
              </tr>

              <tr>
                <th>prosesor detail</th>
                <td><span id="prosesor_detail"></span></td>
              </tr>

              <tr>
                <th>umur device</th>
                <td><span id="umur_device"></span></td>
              </tr>

              <tr>
                <th>serial number</th>
                <td><span id="serial_number"></span></td>
              </tr>

              <tr>
                <th>ram slot</th>
                <td><span id="ram_slot"></span></td>
              </tr>

              <tr>
                <th>ram </th>
                <td><span id="ram"></span></td>
              </tr>

              <tr>
                <th>kode assets </th>
                <td><span id="kode_assets"></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $(document).on('click', '#set_dtl', function() {
        var kry_name = $(this).data('kry_name');
        var cabang_name = $(this).data('cabang_name');
        var name = $(this).data('name');
        var merk = $(this).data('merk');
        var category = $(this).data('category');
        var ip = $(this).data('ip');
        var tgl_beli = $(this).data('tgl_beli');
        var prosesor_detail = $(this).data('prosesor_detail');
        var umur_device = $(this).data('umur_device');
        var serial_number = $(this).data('serial_number');
        var ram_slot = $(this).data('ram_slot');
        var ram = $(this).data('ram');
        var kode_assets = $(this).data('kode_assets');
        $('#name').text(name);
        $('#merk').text(merk);
        $('#kry_name').text(kry_name);
        $('#cabang_name').text(cabang_name);
        $('#category').text(category);
        $('#ip').text(ip);
        $('#tgl_beli').text(tgl_beli);
        $('#prosesor_detail').text(prosesor_detail);
        $('#umur_device').text(umur_device);
        $('#serial_number').text(serial_number);
        $('#ram_slot').text(ram_slot);
        $('#ram').text(ram);
        $('#kode_assets').text(kode_assets);
      })
    })
  </script>