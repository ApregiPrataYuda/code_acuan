<?php if ($this->session->has_userdata('pesan')) { ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h7><i class="icon fa fa-check"></i> Success! </h7><?= strip_tags(str_replace('</p>', '', $this->session->flashdata('pesan'))); ?>
  </div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h7><i class="icon fa fa-check"></i> Error! </h7><?= strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?>
  </div>
<?php } ?>