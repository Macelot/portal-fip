
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
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 3%" class="text-center">
                          Nº
                      </th>
                      <th style="width: 6%" class="text-center">
                        Sala
                     </th>
                     <th style="width: 9%" class="text-center">
                      Horario
                     </th>
                      <th style="width: 18%" class="text-center">
                          Nome Do Projeto
                      </th>
                      <th style="width: 16%" class="text-center">
                          Participantes
                      </th>
                      <th style="width: 12%" class="text-center">
                          Orientador
                      </th>
                      <th style="width: 8%" class="text-center">
                        Área
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                        
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="text-center">
                          1
                      </td>
                      <td class="text-center">
                        222
                      </td>
                      <td class="text-center">
                        8:00
                      </td>
                      <td class="text-center">
                          <a>
                              A Inteligencia artificial
                          </a>
                          <br/>
                          <small>
                              Seu impacto na sociedade
                          </small>
                      </td>
                      <td class="text-center">
                          <small>
                            Hiago Brizola,Pedro Schons e Laura Favero
                          </small>
                      </td>
                      <td class="text-center">
                          <a>
                              Marcelo
                          </a>
                      </td>
                      <td class="text-center">
                        Ciências da natureza
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Enviado</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              Ver
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Deletar
                          </a>
                      </td>
                  </tr>
              </tbody>
          </table>

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
			let v = JSON.parse(response);
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
        tabela +=  '<th style="width: 6%" class="text-center">';
        tabela +=  'Sala';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 9%" class="text-center">';
        tabela +=  'Horario';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 18%" class="text-center">';
        tabela +=  ' Nome Do Projeto';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 16%" class="text-center">
        tabela +=  'Participantes';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 12%" class="text-center">';
        tabela +=  'Orientador';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 8%" class="text-center">';
        tabela +=  'Área';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 8%" class="text-center">';
        tabela +=  'Status';
        tabela +=  '</th>';
        tabela +=  '<th style="width: 20%">';                    
        tabela +=  '</th>';
        tabela +=  '</tr>';
        tabela +=  '</thead>';
        tabela +=  '<tbody>';

				v.forEach(element => {
					var botaoEditar = '<button type="button" class="btn btn-warning" onclick="editar('+element.id+')">Editar</button>';
					var botaoApagar = '<button type="button" class="btn btn-danger" onclick="apagar('+element.id+')">Apagar</button>';
					tabela += '<tr><td>'+element.descricao+'</td>';
					tabela += '<td>'+element.preco+'</td>';
					tabela += '<td>'+element.fabricante+'</td>';
					tabela += '<td>'+element.marca+'</td>';
					tabela += '<td>'+element.datafabricacao+'</td>';
					tabela += '<td>'+element.origem+'</td>';
					tabela += '<td>'+botaoEditar+' '+botaoApagar+'</td></tr>';

				});
				tabela +='</tbody>';
				tabela +='</table>';
				document.getElementById('produtos').innerHTML += tabela;

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

</script>