$(document).ready(function(){

	loadData();
})

var error = "Ocurrió un error insesperado en el sitio, por favor intentelo mas tarde o pongase en contacto con su administrador.";
var success = "La accion se ralizó con exito";
var datosIncorrectos = "Datos incorrectos, vuelve a intentarlo.";


function loadData(){

	var filtro = $('#select_status').val();

	$.ajax({
		url:'routes/routePersonas.php',
		type:'POST',
		data: {info: filtro, action: "read"},
		dataType:'JSON',
		beforeSend: function(){
			showSpinner();
		},
		error: function(error){
			console.log(error);
			toast1("Error!", error, 8000, "error");
			removeSpinner();
		},
		success: function(data){
			console.log(data);
			removeSpinner();

			if(data != ""){
				var headers = ["NO.", "NOMBRE", "DIRECCION", "TELEFONO", "ESTATUS", "OPCIONES"];
				jQueryTable("tableContainer", headers, data, 8, "450px", "Persona");
			  //jQueryTable(id_container, headers, data, LimitRow, maxHeight, NameFunc);
			}
			else{
				$('tbody').empty();
				toast1("Atencion!", "No hay clientes para mostrar", 8000, "error");
			}
		}
	});
}

function editPersona(id){

}

function deletePersona(id){

}

$(document).on('change', '#select_status', function(e){
	loadData();
});

$(document).on('click', '#btn_new', function(e){
	
});