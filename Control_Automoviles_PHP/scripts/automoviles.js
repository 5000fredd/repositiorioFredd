var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	listarI();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})

	//Cargamos los items al select categoria
	$.post("../ajax/automoviles.php?op=selectCategoria", function(r){
	            $("#idcategoria").html(r);
	            $('#idcategoria').selectpicker('refresh');

	});
	$("#imagenmuestra0").hide();
	$("#imagenmuestra1").hide();
	$("#imagenmuestra2").hide();
	$("#imagenmuestra3").hide();

}

//Función limpiar
function limpiar()
{

	$("#clase").val("");
	$("#modelo").val("");
	$("#marca").val("");
	$("#chasis").val("");
	$("#tipo").val("");
	$("#ubicacion").val("");
	
	$("#imagenmuestra0").attr("src","");
	$("#imagenactual0").val("");
	$("#imagenmuestra1").attr("src","");
	$("#imagenactual1").val("");
	$("#imagenmuestra2").attr("src","");
	$("#imagenactual2").val("");
	$("#imagenmuestra3").attr("src","");
	$("#imagenactual3").val("");

	$("#motorI").val("");
	$("#plaquetaI").val("");
	$("#chasisI").val("");
	$("#autoI").val("");
	
	$("#idautomoviles").val("");

}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
		$("#btnre").hide();
		
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
		$("#btnre").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/automoviles.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 4,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función Listardo del escritorio
function listarI()
{
	tabla=$('#tbllistado1').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            
		        ],
		"ajax":
				{
					url: '../ajax/automoviles.php?op=listarI',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 1,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}

//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/automoviles.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          listar();
	    }

	});
	limpiar();
}

function mostrar(idautomoviles)
{
	$.post("../ajax/automoviles.php?op=mostrar",{idautomoviles : idautomoviles}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#idcategoria").val(data.idcategoria);
		$('#idcategoria').selectpicker('refresh');
		$("#clase").val(data.clase);
		$("#modelo").val(data.modelo);
		$("#marca").val(data.marca);
		$("#chasis").val(data.chasis);
		$("#tipo").val(data.tipo);
		$("#ubicacion").val(data.ubicacion);
		
		
		$("#imagenmuestra0").show();
		$("#imagenmuestra0").attr("src","../files/motor/"+data.motorI);
		$("#imagenactual0").val(data.motorI);

		$("#imagenmuestra1").show();
		$("#imagenmuestra1").attr("src","../files/plaqueta/"+data.plaquetaI);
		$("#imagenactual1").val(data.plaquetaI);

		$("#imagenmuestra2").show();
		$("#imagenmuestra2").attr("src","../files/chasis/"+data.chasisI);
		$("#imagenactual2").val(data.chasisI);

		$("#imagenmuestra3").show();
		$("#imagenmuestra3").attr("src","../files/autos/"+data.autoI);
		$("#imagenactual3").val(data.autoI);
		
 		$("#idautomoviles").val(data.idautomoviles);
 		 

 	})
}

//Función para desactivar registros
function desactivar(idautomoviles)
{
	bootbox.confirm("¿Está Seguro de desactivar el automovil?", function(result){
		if(result)
        {
        	$.post("../ajax/automoviles.php?op=desactivar", {idautomoviles : idautomoviles}, function(e){
        		bootbox.alert(e);
	            listar();
        	});	
        }
	})
}

//Función para activar registros
function activar(idautomoviles)
{
	bootbox.confirm("¿Está Seguro de activar el automovil?", function(result){
		if(result)
        {
        	$.post("../ajax/automoviles.php?op=activar", {idautomoviles : idautomoviles}, function(e){
        		bootbox.alert(e);
	            listar();
        	});	
        }
	})
}


init();