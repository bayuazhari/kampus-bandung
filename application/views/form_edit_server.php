<?php
	$id = $server->id;
if($this->input->post('is_submitted')){
	$site = set_value('site');
	$port = set_value('port');
}else{
	$site = $server->site;
	$port = $server->port;
}
?>
<?php $this->load->view('header') ?>
    <div class="page-header container-fluid">
      <div class="col-lg-12">
        <h2>Ubah Server</h2>
        <ol class="breadcrumb">
          <li><?php echo anchor('home/view_server', '<i class="glyphicon glyphicon-tasks"></i> Detail Server'); ?></li>
          <li class="active"><i class="glyphicon glyphicon-edit"></i> Ubah Server</li>
          <div style="clear: both;"></div>
        </ol>
      </div>
    </div>
    <div class="container-fluid">
    <div class="col-md-4"></div>
    <div class="col-md-4">
	  <?=form_open_multipart('home/edit_server/'.$id,['class'=>'form-horizontal'])?>
	    <?php $error = form_error("site", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Site</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="site" value="<?= $site ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <?php $error = form_error("port", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Port</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="port" value="<?= $port ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-10">
	         <button type="submit" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-save-file"></i> Simpan</button>
	      </div>
	    </div>
	  </form>
	</div>
	<div class="col-md-4"></div>
	</div>
<?php $this->load->view('footer') ?>
