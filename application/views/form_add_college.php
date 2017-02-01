<?php $this->load->view('header') ?>
    <div class="page-header container-fluid">
      <div class="col-lg-12">
        <h2>Tambah Data Kampus</h2>
        <ol class="breadcrumb">
          <li><?php echo anchor('home/view_college', '<i class="glyphicon glyphicon-th-list"></i> Data Kampus'); ?></li>
          <li class="active"><i class="glyphicon glyphicon-plus"></i> Tambah Data Kampus</li>
          <div style="clear: both;"></div>
        </ol>
      </div>
    </div>
    <div class="container-fluid">
    <div class="col-md-1"></div>
    <div class="col-md-10">
	  <?=form_open_multipart('home/add_college',['class'=>'form-horizontal'])?>
	    <?php $error = form_error("nama", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Nama Kampus</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="nama" value="<?= set_value('nama') ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <?php $error = form_error("singkatan", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Singkatan</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="singkatan" value="<?= set_value('singkatan') ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <?php $error = form_error("website", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Website</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="website" value="<?= set_value('website') ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <?php $error = form_error("latitude", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Latitude</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="latitude" value="<?= set_value('latitude') ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <?php $error = form_error("longitude", "<p class='text-danger'>", '</p>'); ?>
	    <div class="form-group <?php echo $error ? 'has-error' : '' ?>">
	      <label class="col-sm-2 control-label">Longitude</label>
	      <div class="col-sm-10">
	         <input type="text" class="form-control" name="longitude" value="<?= set_value('longitude') ?>">
	         <?php echo $error; ?>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-offset-2 col-sm-10">
	         <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-save-file"></i> Simpan</button>
	      </div>
	    </div>
	  </form>
	</div>
	<div class="col-md-1"></div>
	</div>
<?php $this->load->view('footer') ?>
