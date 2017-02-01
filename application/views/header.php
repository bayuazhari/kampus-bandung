<!DOCTYPE html>
<html>
  <head>
    <title>Kampus Bandung</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v3.20.1/css/ol.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v3.20.1/build/ol.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script>
      $(document).ready(function(){
        $('#myTable').DataTable();
      });
    </script>
    <style>
    <?php foreach($colleges as $college) :
    echo 
      '#marker'.$college->id.' {
        width: 20px;
        height: 20px;
        border: 1px solid #088;
        border-radius: 10px;
        background-color: #FF3300;
        opacity: 0.5;
      }
      #'.$college->singkatan.' {
        text-decoration: none;
        color: black;
        font-size: 11pt;
        font-weight: bold;
        text-shadow: white 0.1em 0.1em 0.2em;
      }';
      endforeach; ?>
      .popover-content {
        min-width: 180px;
      }
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url('index.php/home'); ?>"><span class="glyphicon glyphicon-home"></span> Kampus Bandung</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('home/view_college', '<span class="glyphicon glyphicon-th-list"></span> Data Kampus'); ?></li>
            <li><?php echo anchor('home/view_server', '<span class="glyphicon glyphicon-tasks"></span> Detail Server'); ?></li>
            <li><?php echo anchor('login/logout', '<span class="glyphicon glyphicon-log-out"></span> Logout('.$this->session->userdata('username').')'); ?></li>
          </ul>
        </div>
      </div>
    </div>