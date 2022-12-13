
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
    Data Cabang
  </div>

  <div class="col-md-4 mt-2">
  <a href="<?= site_url('Cabang/add')?>" class="btn  btn-primary btn-sm "><i class="fa fa-plus"></i> Add Data</a>
  </div>
 

  <div class="card-body">
  <table class="table table-striped" id="dataTable">
  <thead>
    <tr>
      <th scope="col" style="width:5%">#No</th>
      <th scope="col">Kode Cabang</th>
      <th scope="col">Nama Cabang</th>
      <th scope="col" style="width:5%">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   $no=1;
   foreach ($row->result() as $key => $data) { ?>
   <tr>
      <td><?= $no++?>.</td>
      <td><?= $data->kode?></td>
      <td><?= $data->name?></td>
      <td>
        <a href="<?=site_url('Cabang/edit/'. $data->cabang_id)?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
        <a href="<?=site_url('Cabang/delete/'. $data->cabang_id)?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
      </td>
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
    