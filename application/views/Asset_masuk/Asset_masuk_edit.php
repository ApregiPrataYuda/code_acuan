
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
  


<div class="card">
  <div class="card-header">
  Data edit Asset Masuk  
  </div>

  <div class="col-md-12 mt-4">
 <form action="" method="post">
  <div class="row">
    
    <div class="col <?=form_error('kode_masuk') ? 'has-error' : null?>">
    <label for="kode_masuk"><span class="badge badge-primary"> Kode Asset Masuk</span> </label>
     <input type="hidden" value="<?=$row->id?>" name="id">
      <input type="text" class="form-control" value="<?=$this->input->post('kode_masuk') ?? $row->kode_masuk?>" name="kode_masuk" id="kode_masuk" placeholder="kode masuk  ...">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('kode_masuk')?></span></small>
    </div>

    <div class="col <?=form_error('tanggal_masuk') ? '' : null ?>">
    <label for="tanggal_masuk"><span class="badge badge-primary"> Tanggal Asset Masuk</span> </label>
      <input type="date" class="form-control" value="<?= $this->input->post('tanggal_masuk') ?? $row->tanggal_masuk?>" name="tanggal_masuk" id="tanggal_masuk">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('tanggal_masuk')?></span></small>
    </div>

    <div class="col <?=form_error('pengirim') ? 'has-error' : null?>">
    <label for="pengirim"><span class="badge badge-primary"> Pengirim</span> </label>
      <input type="text" class="form-control" value="<?= $this->input->post('pengirim') ?? $row->pengirim?>" name="pengirim" id="pengirim" placeholder="Pengirim  ...">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('pengirim')?></span></small>
    </div>

    <div class="col <?=form_error('total_qty') ? '' : null ?>">
    <label for="total_qty"><span class="badge badge-primary"> Total Qty</span> </label>
      <input type="number" class="form-control" value="<?= $this->input->post('total_qty') ?? $row->total_qty?>" name="total_qty" id="total_qty">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('total_qty')?></span></small>
    </div>
  </div>



  <div class="row mt-3">
    <div class="col <?=form_error('total_harga') ? 'has-error' : null?>">
    <label for="total_harga"><span class="badge badge-primary"> Total Harga</span> </label>
      <input type="text" class="form-control" value="<?= $this->input->post('total_harga') ?? $row->total_harga?>" name="total_harga" id="rupiah" placeholder="Total Harga ...">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('total_harga')?></span></small>
    </div>


    
  </div>
  </div>



  <div class="row ml-auto mb-3 mr-5 mt-2">
   <button type="submit" tanggal_masuk="add" class="btn btn-primary mr-2"> <i class="fa fa-save"></i> Submit</button>
   <button type="Reset" class="btn btn-warning mr-2"><i class="fa fa-undo"></i>  Reset</button>
   </div>
   </form>
</div>
  </div>
   </div>  
    </div>
    </div>
    

