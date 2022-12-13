

<style type="text/css">

div {
  margin-bottom: 10px;
}

input:invalid + span::after {
  content: "✖";
  padding-left: 5px;
}

input:valid + span::after {
  content: "✓";
  padding-left: 5px;
}
</style>


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
 Data Info 
  </div>

  <div class="col-md-10">
 <form action="" method="post">

  <div class="row ml-4 mt-1">
    <div class="col <?=form_error('kry_id') ? 'has-error' : null?>">
    <label for="kry_id"><span class="badge badge-info"> Nama Karyawan</span> </label>
    <input type="hidden" value="" name="id">
      <select name="kry_id" id="kry_id" class="form-control">
        <option value="">Pilih</option>
        <?php foreach ($Karyawan->result() as $key => $data) { ?>
           <option value="<?=$data->kry_id?>"><?=$data->name?></option>
        <?php }?>
      </select>
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('kry_id')?></span></small>
    </div>

    <div class="col <?=form_error('cabang_id') ? 'has-error' : null?>">
    <label for="cabang_id"><span class="badge badge-info"> Nama Cabang</span> </label>
    <select name="cabang_id" id="cabang_id"  class="form-control">
        <option value="">Pilih</option>
          <?php foreach ($Cabang->result() as $key => $data) { ?>
            <option value="<?=$data->cabang_id == $data->cabang_id ? "selected" : null?>"><?=$data->name?></option>
          <?php }?>
      </select>
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('cabang_id')?></span></small>
    </div>
  </div>

  <div class="row ml-4 mt-1">
    <div class="col <?=form_error('merk') ? 'has-error' : null?>">
    <label for="merk"><span class="badge badge-info"> Nama Merk</span> </label>
     <input type="text" class="form-control" name="merk" id="merk" value="<?=set_value('merk')?>">
     <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('merk')?></span></small>
    </div>

    <div class="col <?=form_error('name') ? 'has-error' : null?>">
    <label for="name"><span class="badge badge-info"> Nama Device</span> </label>
    <input type="text" class="form-control" name="name" id="name" value="<?=set_value('name')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('name')?></span></small>
    </div>
  </div>


  <div class="row ml-4 mt-1">
    <div class="col <?=form_error('category') ? 'has-error' : null?>">
    <label for="category"><span class="badge badge-info"> Kategori</span> </label>
    <select name="category" id="category" value="<?=set_value('category')?>" class="form-control">
        <option value="">Pilih</option>
        <option value="1" <?=set_value('category') == 1 ? "selected" : null?>>Laptop</option>
        <option value="2" <?=set_value('category') == 2 ? "selected" : null?>>PC RAKITAN</option>
        <option value="3" <?=set_value('category') == 3 ? "selected" : null?>>PC ALL IN</option>
      </select>
      <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('category')?></span></small>
    </div>
    <div class="col <?=form_error('kode_assets') ? 'has-error' : null?>">
    <label for="kode_assets"><span class="badge badge-info"> kode assets</span> </label>
    <input type="text" class="form-control" name="kode_assets" id="kode_assets" value="<?=set_value('kode_assets')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('kode_assets')?></span></small>
    </div>
    </div>
   
    

  <div class="row ml-4 mt-1">
    <div class="col <?=form_error('prosesor_detail') ? 'has-error' : null?>">
    <label for="prosesor_detail"><span class="badge badge-info"> prosesor Detail</span> </label>
    <input type="text" class="form-control" name="prosesor_detail" id="prosesor_detail" value="<?=set_value('prosesor_detail')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('prosesor_detail')?></span></small>
    </div>

    <div class="col <?=form_error('tgl_beli') ? 'has-error' : null?>">
    <label for="tgl_beli"><span class="badge badge-info"> Tanggal Beli</span> </label>
    <input type="date" class="form-control" name="tgl_beli" id="tgl_beli" value="<?=set_value('tgl_beli')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('tgl_beli')?></span></small>
    </div>
  </div>



  <div class="row ml-4 mt-1">
    <div class="col  <?=form_error('umur_device') ? 'has-error' : null?>">
    <label for="umur_device"><span class="badge badge-info"> Umur Device</span> </label>
    <input type="text" class="form-control" name="umur_device" id="umur_device" value="<?=set_value('umur_device')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('umur_device')?></span></small>
    </div>

    <div class="col <?=form_error('serial_number') ? 'has-error' : null?>">
    <label for="serial_number"><span class="badge badge-info"> Serial Number</span> </label>
    <input type="text" class="form-control" name="serial_number" id="serial_number" value="<?=set_value('serial_number')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('serial_number')?></span></small>
    </div>
  </div>

  <div class="row ml-4 mt-1">
    <div class="col <?=form_error('ram') ? 'has-error' : null?>">
    <label for="ram"><span class="badge badge-info"> Ram Size(GB)</span> </label>
    <input type="text" class="form-control" id="konversiNumeric"  name="ram" value="<?=set_value('ram')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('ram')?></span></small>
    </div>

    <script type="text/javascript">
		var rupiah = document.getElementById('konversiNumeric');
		rupiah.addEventListener('keyup', function(e){
			rupiah.value = formatRupiah(this.value, '');
		});
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}
	</script>

    <div class="col <?=form_error('ram_slot') ? 'has-error' : null?>">
    <label for="ram_slot"><span class="badge badge-info"> Ram Slot(PCS)</span> </label>
    <input type="text" class="form-control" name="ram_slot" id="ram_slot" value="<?=set_value('ram_slot')?>">
    <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('ram_slot')?></span></small>
    </div>
  </div>

  <div class="row ml-5 mt-1">
  <div class="form-row">
      
        <div class="form-group col-md-3 <?=form_error('ip1') ? 'has-error' : null?>">
          <label for="ip1"><span class="badge badge-info">IP</span></label>
          <input type="text" class="form-control" name="ip1" maxlength="3" id="ip1" value="<?=set_value('ip1')?>" placeholder="Example 192">
           <!-- <span class="validity" id="ip1"></span> -->
          <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('ip1')?></span></small>
        </div>

        <div class="form-group col-md-3 <?=form_error('ip2') ? 'has-error' : null?>">
          <label for="ip2"><span class="badge badge-info">IP</span></label>
          <input type="text" class="form-control" maxlength="3" name="ip2" id="ip2" value="<?=set_value('ip2')?>"  placeholder="Example 168">
          <small class="text-danger" style="font-style: italic"><span class="badge badge-danger"><?=form_error('ip2')?></span></small>
        </div>

        <div class="form-group col-md-2 <?=form_error('ip3') ? 'has-error' : null?>">
          <label for="ip3"><span class="badge badge-info">IP</span></label>
          <input type="text" class="form-control" name="ip3" maxlength="3" id="ip3" value="<?=set_value('ip3')?>" placeholder="Example 0">
          <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('ip3')?></span></small>
        </div>

        <div class="form-group col-md-2 <?=form_error('ip4') ? 'has-error' : null?>">
          <label for="ip4"><span class="badge badge-info">IP</span></label>
          <input type="text" class="form-control" name="ip4" maxlength="3" id="ip4"  value="<?=set_value('ip4')?>"  placeholder="Example 1">
          <small class="text-danger" style="font-style: italic "><span class="badge badge-danger"><?=form_error('ip4')?></span></small>
        </div>
        </div>
   </div>
  
        
   <div class="row  mb-3 mr-5 ml-5 mt-4">
   <button type="submit" name="" class="btn btn-info"> <i class="fa fa-save"></i> Submit</button>
   <button type="Reset" class="btn btn-warning mr-2"><i class="fa fa-undo"></i>  Reset</button>
   </div>
   </form>
</div>
  </div>
   </div>  
    </div>
    </div>

 