<?php $this->load->view('header') ?>
    <div class="page-header container-fluid">
      <h2 align="center">Lokasi Kampus di Bandung</h2>
    </div>
    <div id="map" class="map"></div>
    <div style="display: none;">
      <!-- Clickable label -->
    <?php foreach($colleges as $college) :
        echo '<a class="overlay" id="'.$college->singkatan.'" target="_blank" href="'.$college->website.'">'.$college->nama.'</a>';
        echo '<div id="marker'.$college->id.'" title="Marker"></div>';
    endforeach; ?>
      <!-- Popup -->
      <div id="popup" title="Welcome to Bandung"></div>
    </div>
    <script>
    <?php
    echo
      'var layer = new ol.layer.Tile({
        source: new ol.source.OSM({
              url: "http://'.$server->site.':'.$server->port.'/wmts/bdg/webmercator/{z}/{x}/{y}.png"
            })
      });';
    ?>

      var map = new ol.Map({
        layers: [layer],
        target: 'map',
        view: new ol.View({
          center: ol.proj.transform([107.628102, -6.916545], 'EPSG:4326', 'EPSG:3857'),
          zoom: 13
        })
      });

      <?php foreach($colleges as $college) :
        echo 'var pos'.$college->id.' = ol.proj.fromLonLat(['.$college->longitude.','.$college->latitude.']);';

        // marker
        echo
        'var marker'.$college->id.' = new ol.Overlay({
          position: pos'.$college->id.',
          positioning: "center-center",
          element: document.getElementById("marker'.$college->id.'"),
          stopEvent: false
        });
        map.addOverlay(marker'.$college->id.');';

        // label
        echo
        'var '.$college->singkatan.' = new ol.Overlay({
          position: pos'.$college->id.',
          element: document.getElementById("'.$college->singkatan.'")
        });
        map.addOverlay('.$college->singkatan.');';
      endforeach; ?>

      // Popup showing the position the user clicked
      var popup = new ol.Overlay({
        element: document.getElementById('popup')
      });
      map.addOverlay(popup);

      map.on('click', function(evt) {
        var element = popup.getElement();
        var coordinate = evt.coordinate;
        var hdms = ol.coordinate.toStringHDMS(ol.proj.transform(
            coordinate, 'EPSG:3857', 'EPSG:4326'));

        $(element).popover('destroy');
        popup.setPosition(coordinate);
        // the keys are quoted to prevent renaming in ADVANCED mode.
        $(element).popover({
          'placement': 'top',
          'animation': false,
          'html': true,
          'content': '<p>The location you clicked was:</p><code>' + hdms + '</code>'
        });
        $(element).popover('show');
      });
    </script>
<?php $this->load->view('footer') ?>