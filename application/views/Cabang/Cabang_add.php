
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
  Tambah Data Cabang 
  </div>

  <div class="col-md-6">
  <form action="" method="post">
  <div class="form-group <?=form_error('kode') ? 'has-error' : null?>">
    <label for="kode"><span class="badge badge-primary"> Kode Cabang</span> </label>
    <input type="hidden" name="id" value="">
    <input type="text" class="form-control" name="kode" onkeyup="this.value = this.value.toUpperCase() " value="<?=set_value('kode')?>" id="kode" placeholder="Kode Cabang ...">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('kode')?></span></small>
  </div>
  <div class="form-group class="form-group <?=form_error('name') ? 'has-error' : null?>">
    <label for="name"><span class="badge badge-primary"> Nama Cabang</span> </label>
    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>" id="name" placeholder="Nama Cabang">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('name')?></span></small>
  </div>
   <div class="row ml-auto mb-3 mr-5">
   <button type="submit" name="add" class="btn btn-primary"> <i class="fa fa-save"></i> Submit</button>
   <button type="Reset" class="btn btn-warning mr-2"><i class="fa fa-undo"></i>  Reset</button>
   </div>
   </form>
</div>
  </div>
   </div>  
    </div>
    </div>
    