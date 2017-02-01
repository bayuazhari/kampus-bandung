<?php $this->load->view('header') ?>
    <div class="page-header container-fluid">
      <h2 align="center">Data Kampus di Bandung</h2>
    </div>
    <div class="container-fluid">
	<div class="col-md-12">
		<table id="myTable" class="table table-bordered table-striped table-hover">
			<thead>
	        <tr>
	        	<th>No.</th>
	           	<th class="text-center">Nama Kampus</th>
	            <th class="text-center">Singkatan</th>
	            <th class="text-center">Website</th>
	            <th class="text-center">Lokasi</th>
	            <th class="text-center"><?=anchor('home/add_college','<i class="glyphicon glyphicon-plus"></i> Tambah',array('class'=>'btn btn-primary btn-sm'))?></th>
	        </tr>
	        </thead>
	        <tbody>
	        <?php foreach ($colleges as $college): ?>
	        <tr>
	        	<td><?= $college->id ?></td>
	            <td><?= $college->nama ?></td>
	            <td><?= $college->singkatan ?></td>
	            <td><a target="_blank" href="<?= $college->website ?>"><?= $college->website ?></a></td>
	            <td><?php echo '<a target="_blank" href="https://www.google.co.id/maps/search/'.$college->latitude.',+'.$college->longitude.'/@'.$college->latitude.','.$college->longitude.',17z">'. $college->latitude .', '.$college->longitude .'</a>'; ?></td>
	            <td class="text-center">
					<?=anchor('home/edit_college/'.$college->id,'<i class="glyphicon glyphicon-edit"></i> Ubah',array('class'=>'btn btn-default btn-sm'))?>
	                <?=anchor('home/delete_college/'.$college->id,'<i class="glyphicon glyphicon-trash"></i> Hapus',array('class'=>'btn btn-danger btn-sm',
							'onclick'=>'return confirm(\'Apakah anda yakin ingin menghapus ini ?\')'))?>
	            </td>
	        </tr>
	        <?php endforeach; ?>
	        </tbody>
	    </table>
	</div>
	</div>
<?php $this->load->view('footer') ?>