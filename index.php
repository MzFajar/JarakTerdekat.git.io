<html>
<!-- Mz. Fajar 1167050110 -->
<head>
  <title>Mz. Fajar</title>
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <div class="col s12 m8 l9 deep-white lighten-2" style="height:auto">
     <h4 class="center">Mencari Rute Terpendek</h4>
  </div>
  <br>
  <div class="row">
    <div class="col s12 m4 l3 teal lighten-2" style="height:480px; width:400px"> <!-- Note that "m4 l3" was added -->
      <form class="dodger blue">
          <div class="input-field col s12">
            <select name="ke">
              <option value="0">Cicaheum</option>
              <option value="1">Samsat</option>
              <option value="2">Bubat</option>
              <option value="3">LW Panjang</option>
              <option value="4">Cicadas</option>
              <option value="5">Cikutra</option>
              <option value="6">Kosambi</option>
              <option value="7">Alun-alun</option>
            </select>
            <label class="black-text">Dari</label>
          </div>

          <div class="input-field col s12">
            <select name="dari">
              <option value="0">Cicaheum</option>
              <option value="1">Samsat</option>
              <option value="2">Bubat</option>
              <option value="3">LW Panjang</option>
              <option value="4">Cicadas</option>
              <option value="5">Cikutra</option>
              <option value="6">Kosambi</option>
              <option value="7">Alun-alun</option>
            </select>
            <label class="black-text">Dari</label>
          </div>
        </p>
        
        <ul class="collection">
		<center>
          <li class="collection-item"><input type="button" class="waves-effect waves-light btn" value="Cari" onclick='dijkstra(dari.value, ke.value)'></li>
          
		  <p>Result</p>
		  <iframe src="JavaScript:''" style="border:1px; height:170; width:400px; align:center"></iframe>
		  <br>
		</center>
        </ul>
        <input id="debug" type="hidden" value="false">
      </form>
    </div>

    <div class="col s12 m8 l9 deep-white lighten-2" style="height:490px; width:870px"> <!-- Note that "m8 l9" was added -->
      <center>
        <canvas id="mycanvas" width="920" height="460" style="border:8px solid black;">
        </canvas>
      </center> 
    </div>
  </div>

  <footer class="dodger blue" style="width:auto; height:60">  
    <div class="footer-copyright">
      <div class="container">
	  <br>
      © 2018 Copyright Mz. Fajar 1167050110
      <a class="grey-text text-lighten-4 right" href="https://github.com/MzFajar">More Links</a>
      </div>
    </div>
	
  </footer>
  <script src="jquery.js"></script>
  <script src="algoritma.js"></script>
  <script src="js/materialize.min.js"></script>

  <script>
    $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
</body>

</html>