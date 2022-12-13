
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
   Data Input 
  </div>

  <form action="<?= base_url('input')?>" method="post">
  <div class="col-md-10">

  <div class="row ml-5 mt-1">
     <div class="form-row">
     
        <div class="form-group col-md-4 ">
          <label for=""><span class="badge badge-info">TEXT</span></label>
          <input type="text" class="form-control" name="huruf" id="inputText" placeholder="Example ABC">
          <!-- <input type="button" value="Generate Huruf" class="btn btn-info mt-1" onClick='convertCase(inputText.value)'/> -->
          <button  type="submit" class="btn btn-info btn-sm mt-1">Generate huruf</button>
        </div>

        <div class="form-group col-md-5">
          <label for=""><span class="badge badge-info">DATE</span></label>
          <input type="date" class="form-control" name="date">
          <button  type="submit" class="btn btn-info btn-sm mt-1">Generate Date</button>
        </div>

        <div class="form-group col-md-3">
          <label for=""><span class="badge badge-info">ANGKA</span></label>
          <input type="number" class="form-control" name="angka" placeholder="Ex 123">
          <button  type="submit" class="btn btn-info btn-sm mt-1">Generate Angka</button>
        </div>
            <!-- <div class="col-md-12 mb-2 ml-1">
            <div class="card border-info">
            <div class="card-body" id="dispText">
            </div> --> 

  </form>
  </div>
  </div>

  <div class="col-md-10 mb-2 ml-1 ">
  <button  type="submit" class="btn btn-info btn-sm mt-1">Generate Semua</button>
  </div>

  <div class="col-md-10 mb-2 ml-1">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Huruf</th>
      <th scope="col">Date</th>
      <th scope="col">Angka</th
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $Uppercase?></td>
      <td><?= formatTanggalYmd($date);?></td>
      <td><?= $angka?></td>
    </tr>
  </tbody>
</table>
  </div>


       <div class="form-group col-md-3">
          <label for=""><span class="badge badge-info"></span>Huruf Kecil</label>
          <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="lowercase" placeholder="Ex abc">
          <button  type="submit" class="btn btn-info btn-sm mt-1">Generate Huruf Kecil</button>
        </div>
        <div class="col-md-10 mb-2 ml-1">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Lowercase</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?= $lowercase?></td>
    </tr>
  </tbody>
</table>
  </div>

  
<!-- untuk text -->
  <script type="text/javascript">
     function convertCase(text){
     var strUCase= text.toUpperCase();
     document.getElementById("dispText").innerHTML = strUCase;
     }
  </script>






