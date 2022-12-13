
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
    Data Asset Masuk
  </div>

  <div class="col-md-4 mt-2">
  <a href="<?= site_url('Asset_masuk/Tambah_data')?>" class="btn  btn-primary btn-sm "><i class="fa fa-plus"></i> Add Data</a>
  </div>
 
  <div class="card-body">
  <table class="table table-responsive table-striped" id="dataTable">
  <thead>
    <tr>
      <th scope="col" style="width:5%">#No</th>
      <th scope="col">Kode Asset Masuk</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Pengirim</th>
      <th scope="col">Total Qty</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Status Masuk</th>
      <th scope="col" style="width:5%">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($row->result() as $key => $data) { ?>
        <tr>
           <td><?= $no++?></td>
           <td><?= $data->kode_masuk?></td>
           <td><?= indo_date($data->tanggal_masuk)?></td>
           <td><?= $data->pengirim?></td>
           <td><?= $data->total_qty?></td>
           <td><?=indo_currency($data->total_harga)?></td>
           <td><?= $data->status_masuk?></td>
           <td>
              <a href="<?=site_url('Asset_masuk/edit_data/'. $data->id)?>" class="btn btn-warning btn-sm "><i class="fa fa-edit"></i></a>
              <a href="<?=site_url('Asset_masuk/delete/'. $data->id)?>" id="btn-hapus" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a>
           </td>
        </tr>
    <?php } ?>
   
  </tbody>
</table>
  </div>
</div>
    </div>
    </div>
    