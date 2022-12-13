
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
  Data Karyawan 
  </div>

  <div class="col-md-12 mt-4">
 <form action="" method="post">
  <div class="row">
    <div class="col <?=form_error('nik') ? 'has-error' : null?>">
    <label for="nik"><span class="badge badge-primary"> Nik Karyawan</span> </label>
      <input type="hidden" value="" name="id">
      <input type="text" class="form-control" value="<?=set_value('nik')?>" name="nik" id="nik" placeholder="Nik Karyawan ...">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('nik')?></span></small>
    </div>
    <div class="col <?=form_error('name') ? '' : null ?>">
    <label for="name"><span class="badge badge-primary"> Nama Karyawan</span> </label>
      <input type="text" class="form-control" value="<?=set_value('name')?>" name="name" id="name" placeholder="Nama Karyawan ...">
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('name')?></span></small>
    </div>
  </div>

  <div class="row ml-auto mb-3 mr-5 mt-2">
   <button type="submit" name="add" class="btn btn-primary ml-2"> <i class="fa fa-save"></i> Submit</button>
   <button type="Reset" class="btn btn-warning mr-2"><i class="fa fa-undo"></i>  Reset</button>
   </div>
   </form>
</div>
  </div>
   </div>  
    </div>
    </div>
    

