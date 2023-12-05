
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
 <!-- Main content -->
 <section class="content">
      <div id="cardProjeto" class="card card-warning ">
        <div class="card-header">
          <h3 class="card-title">Projeto de Pesquisa</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
            </button>
          </div>
        </div>

      <div class="card-body">
      <form>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Título</label>
            <input id="id" type="text" >
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

      <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Arraste seus arquivos para este local</h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-6">
                    <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Adicionar arquivos</span>
                      </span>
                      <!--button type="submit" class="btn btn-primary col start">
                        <i class="fas fa-upload"></i>
                        <span>Start upload</span>
                      </button-->
                      <button type="reset" class="btn btn-warning col cancel">
                        <i class="fas fa-times-circle"></i>
                        <span>Cancelar upload</span>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table table-striped files" id="previews">
                  <div id="template" class="row mt-2">
                    <div class="col-auto">
                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                    </div>
                    <div class="col d-flex align-items-center">
                        <p class="mb-0">
                          <span class="lead" data-dz-name></span>
                          (<span data-dz-size></span>)
                        </p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                        </div>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                      <div class="btn-group">
                        <button class="btn btn-primary start">
                          <i class="fas fa-upload"></i>
                          <span>Iniciar</span>
                        </button>
                        <!--button data-dz-remove class="btn btn-warning cancel">
                          <i class="fas fa-times-circle"></i>
                          <span>Cancel</span>
                        </button-->
                        <button data-dz-remove class="btn btn-danger delete">
                          <i class="fas fa-trash"></i>
                          <span>Deletar</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Os arquivos serão enviados automaticamente
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>


      </div>
      <div class="card-footer">
        <button id="btnGravar" type="button" class="btn btn-primary" onclick="grava()">Gravar</button>
        <button id="btnGravarAlt" type="button" class="btn btn-warning" onclick="gravaAlt()" hidden="hidden">Gravar Alterações</button>
      </div>
          
      </form>
      </div>
    </section>
    <!-- /.content -->

    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Salas de referência e projetos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
   
         
          <p id="projetos"></p>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
require '../../php/footer.php';
?>
<script>
  var v;
  var qualTabela = "Projeto";
  function lista(){
			document.getElementById('projetos').innerHTML="";
			$.ajax({
				method: "POST",
				url: "../../php/back.php",
				data: { 
					op:'select',
				}
			})
		.done(function( response ) {
		  v = JSON.parse(response);
			//let v = response;
			console.log(v);

			if(v.length>0){
				var tabela = "";
				tabela +=  '<table class="table table-striped projects">';
        tabela +=  '<thead>';
        tabela +=  '<tr>';
        tabela +=  '<th style="width: 3%" class="text-center">';
        tabela +=  '  Nº';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 18%" class="text-center">';
        tabela +=  ' Nome Do Projeto';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 16%" class="text-center">';
        tabela +=  ' Participantes';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 12%" class="text-center">';
        tabela +=  ' Orientador';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 8%" class="text-center">';
        tabela +=  ' Área';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 8%" class="text-center">';
        tabela +=  ' Status';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 20%">Operações';
        tabela +=  '</th>';
        tabela +=  '</tr>';
        tabela +=  '</thead>';
        tabela +=  '<tbody>';
        var i=0;
				v.forEach(element => {
					//var botaoEditar = '<button type="button" class="btn btn-warning" onclick="editar('+element.id+')">Editar</button>';
					//var botaoApagar = '<button type="button" class="btn btn-danger" onclick="apagar('+element.id+')">Apagar</button>';
          var botaoVer = '<a class="btn btn-primary btn-sm" href="#" onclick="ver('+i+')">';
          botaoVer += '<i class="fas fa-folder"></i>Ver</a>';
          var botaoEditar ='<a class="btn btn-info btn-sm" href="#" onclick="editar('+i+')">';
          botaoEditar +='<i class="fas fa-pencil-alt"></i>Editar</a>';
          var botaoApagar ='<a class="btn btn-danger btn-sm" href="#" onclick="deletar('+element.id+')">';
          botaoApagar +='<i class="fas fa-trash"></i>Deletar</a>';

          tabela += '<tr><td style="width: 3%" class="text-center">'+element.id+'</td>';
					tabela += '<td style="width: 18%" class="text-center">'+element.titulo+'</td>';
					tabela += '<td style="width: 16%" class="text-center">'+element.participantes+'</td>';
					tabela += '<td style="width: 12%" class="text-center">'+element.orientador+'</td>';
					tabela += '<td style="width: 8%" class="text-center">'+element.area+'</td>';
          tabela += '<td style="width: 8%" class="text-center">...</td>';
					tabela += '<td style="width: 20%">'+botaoVer+' '+botaoEditar+' '+botaoApagar+'</td></tr>';
          i++;
				});
				tabela +='</tbody>';
				tabela +='</table>';
				document.getElementById('projetos').innerHTML = tabela;

			}
			if(v.message=="ok"){
				//alert('sucesso');
				Swal.fire({
					title: 'Sucesso!',
					text: 'Do you want to continue',
					icon: 'success',
					confirmButtonText: 'Cool'
				})
			}else{
				//alert("Seu cep não foi localizado, por favor digite o endereço");
			}
		});
	}	

  function ver(id_){
    console.log('id_ '+id_);
    console.log(v[id_]);
    document.getElementById('titulo').value=v[id_].titulo;
		document.getElementById('orientador').value=v[id_].orientador;
		document.getElementById('area').value=v[id_].area;
		document.getElementById('participantes').value=v[id_].participantes;
		document.getElementById('id').value=v[id_].id;
    var state = document.getElementById('cardProjeto').className;
    //desativar botão gravar
    document.getElementById('btnGravar').disabled = true;
    //ocultar botão gravar alterações
    document.getElementById('btnGravarAlt').hidden = 'hidden';

    if(state.includes('collapsed'))
      $('#cardProjeto').CardWidget('toggle');
	}
  function editar(id_){
    console.log('id_ '+id_);
    console.log(v[id_]);
    document.getElementById('titulo').value=v[id_].titulo;
		document.getElementById('orientador').value=v[id_].orientador;
		document.getElementById('area').value=v[id_].area;
		document.getElementById('participantes').value=v[id_].participantes;
    document.getElementById('id').value=v[id_].id;

    var state = document.getElementById('cardProjeto').className;
    //desativar botão gravar
    document.getElementById('btnGravar').disabled = true;

    //mostrar botão gravar alterações
    document.getElementById('btnGravarAlt').disabled = false;
    document.getElementById('btnGravarAlt').hidden = '';

    if(state.includes('collapsed'))
      $('#cardProjeto').CardWidget('toggle');
	}
  function gravaAlt(){
    var _titulo = document.getElementById('titulo').value;
		var _orientador = document.getElementById('orientador').value;
		var _area = document.getElementById('area').value;
		var _participantes = document.getElementById('participantes').value;
    var _id = document.getElementById('id').value;

		$.ajax({
			method: "POST",
			url: "../../php/back.php",
			data: { 
				op:'update',
        dados:{
          titulo: _titulo,
          orientador: _orientador,
          area: _area,
          participantes: _participantes,
        },
        id: _id
			 }
		})
		.done(function( response ) {
			let v = JSON.parse(response);
			//let v = response;
			console.log(v);
			if(v.message=="ok"){
				Swal.fire({
					title: 'Sucesso!',
					text: qualTabela+' editado com sucesso',
					icon: 'success',
					confirmButtonText: 'Ok'
				})
        lista();
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
  function deletar(id_){
    const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger"
			},
			buttonsStyling: false
			});
			swalWithBootstrapButtons.fire({
			title: "Tem certeza que deseja apagar?",
			text: "Esta operação não pode ser revertida",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Sim, deletar!",
			cancelButtonText: "Não, cancelar!",
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				swalWithBootstrapButtons.fire({
				title: "Deletado!",
				text: qualTabela+" deletado.",
				icon: "success"
				});
				$.ajax({
					method: "POST",
					url: "../../php/back.php",
					data: { 
						op:'delete',
						id: id_
						}
					})
				.done(function( response ) {
					let v = JSON.parse(response);
					console.log(v);
					if(v.message=="ok"){
						Swal.fire({
							title: 'Sucesso!',
							text: qualTabela+' deletado com sucesso',
							icon: 'success',
							confirmButtonText: 'Ok'
						})
						lista();
					}else{
						Swal.fire({
							title: 'Erro!',
							text: qualTabela+' não localizado',
							icon: 'error',
							confirmButtonText: 'Cancelar'
						})
					}
				});
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire({
				title: "Cancelado",
				text: "Sue "+qualTabela+" está ativo",
				icon: "error"
				});
			}
			});
  }
  lista();

</script>

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

<!-- dropzonejs -->
<script>
  //  Dropzone.options.imageUpload = {
  //       maxFilesize:1,
  //       acceptedFiles: ".jpeg,.jpg,.png,.gif"
  //   };
 // DropzoneJS Demo Code Start
 Dropzone.autoDiscover = false
// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template")
previewNode.id = ""
var previewTemplate = previewNode.parentNode.innerHTML
previewNode.parentNode.removeChild(previewNode)

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "../../php/backUpload.php", // Set the url
  thumbnailWidth: 80,
  thumbnailHeight: 80,
  parallelUploads: 20,
  previewTemplate: previewTemplate,
  autoQueue: true, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
})

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
})

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
})

myDropzone.on("sending", function(file) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1"
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
})

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0"
})

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
}
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true)
}
// DropzoneJS Demo Code End
</script>
