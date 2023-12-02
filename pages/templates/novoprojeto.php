
<?php
require '../../php/menu.php';
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projetos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projetos</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Projeto de Pesquisa</h3>
        </div>

      <div class="card-body">
      <form>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Título</label>
            <input id="titulo" type="text" class="form-control" placeholder="Título">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label>Orientador</label>
            <input id="orientador" type="text" class="form-control" placeholder="Orientador">
          </div>
        </div>

        <div class="col-sm-6">

          <div class="form-group">

          <label>Área do Conhecimento:</label>
      <select id="area" class="form-control">
      <option>Ciências Exatas e da Terra.</option>
      <option>Ciências Biológicas.</option>
      <option>Engenharias.</option>
      <option>Ciências da Saúde.</option>
      <option>Ciências Agrárias.</option>
      <option>Linguística, Letras e Artes.</option>
      <option>Ciências Sociais Aplicadas.</option>
      <option>Ciências Humanas.</option>
      </select>


             </div>
        </div>

      </div>

      <div class="row">
      <div class="col-sm-6">
      
      <div class="form-group">
          <label>Participantes</label>
            <textarea id="participantes" class="form-control" rows="3" placeholder="Participantes"></textarea>
        
      </div>
      </div>
      </div>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-primary" onclick="grava()">Gravar</button>
      </div>
          
      </form>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
require '../../php/footer.php';
?>
<script>

$.ajax({
			method: "POST",
			url: "../../php/back.php",
			data: { 
				op:'selectFiltro',
        tabela: "professores",
			 }
		})
		.done(function( response ) {
			let v = JSON.parse(response);
			//let v = response;
			console.log(v);
			if(v.length>1){
        //var p = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
        var professores = [];
        v.forEach(element => {
          professores.push(element.Nome);
        });

        autocomplete(document.getElementById("orientador"), professores);
			}
		});

  
</script>

<script>
  
  function grava(){
		var _titulo = document.getElementById('titulo').value;
		var _orientador = document.getElementById('orientador').value;
		var _area = document.getElementById('area').value;
		var _participantes = document.getElementById('participantes').value;


		$.ajax({
			method: "POST",
			url: "../../php/back.php",
			data: { 
				op:'insert',
        dados:{
          titulo: _titulo,
          orientador: _orientador,
          area: _area,
          participantes: _participantes,
        }
			 }
		})
		.done(function( response ) {
			let v = JSON.parse(response);
			//let v = response;
			console.log(v);
			if(v.message=="ok"){
				Swal.fire({
					title: 'Sucesso!',
					text: 'Projeto cadastrado com sucesso',
					icon: 'success',
					confirmButtonText: 'Ok'
				})
			}else{
				Swal.fire({
					title: 'Erro!',
					text: 'Tente novamente. '+ v.message,
					icon: 'error',
					confirmButtonText: 'Ok'
				})
			}
		});
	}	

</script>