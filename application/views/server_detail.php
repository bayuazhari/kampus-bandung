<?php $this->load->view('header') ?>
    <div class="page-header container-fluid">
      <h2 align="center">Detail Server</h2>
    </div>
    <div class="container-fluid">
    <div class="col-md-4"></div>
	<div class="col-md-4">
		<table class="table">
			<tr>
                <td><strong>Site</strong></td>
                <td>:</td>
                <td><?=$server->site?></td>
            </tr>
            <tr>
                <td><strong>Port</strong></td>
               	<td>:</td>
                <td><?=$server->port?></td>
            </tr>
            <tr>
               	<td></td>
                <td></td>
                <td><?=anchor('home/edit_server/' . $server->id,'<i class="glyphicon glyphicon-edit"></i> Ubah',['class'=>'btn btn-default btn-sm pull-right'])?>
            </tr>
        </table>
    </div>
    <div class="col-md-4"></div>
    </div>
<?php $this->load->view('footer') ?>