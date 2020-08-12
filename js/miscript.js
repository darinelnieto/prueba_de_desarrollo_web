// variables
let objet;
let departamento = document.getElementById('departamento');
let ciudad = document.getElementById('ciudad');


if(window.XMLHttpRequest){
	ajax = new XMLHttpRequest();
	// para navegadores como chrome etc.
	 ajax.overrideMimeType("application/json");

} else {
	// para navegadores de internet explore
	ajax = new ActiveXOject('Miscrosoft.XMLHTTP');
}
// coneccion api
function departamentosCiudades(){
	if(ajax.readyState == 4 && ajax.status == 200){
		 var llamado = ajax.responseText;
		 departamento.innerHTML += llamado;
		 ciudad.innerHTML += llamado;
		 // pasando datos recibidos a json
		 resultadosJson = JSON.parse(llamado);
		// insertando html al imput type selet
		departamento.innerHTML = '<option value="seleccione">seleccione</option>';
		// iterando con el array json e imprimiendolo en el input type selet de departamentos
	for(let Departamentos in resultadosJson){
		departamento.innerHTML += `<option value="${Departamentos}">${Departamentos}</option>`;
	}
	// funcion para, digamos que hacer dependiente el imput type select ciudad de el valor del departamento 
	departamento.addEventListener('change', function muestraCiudades(){
		ciudad.innerHTML = '';
			let valor = this.value;
			// condicional para iterar con los datos de las ciudades
			if(valor != 'seleccione'){
				// iterando con el array json e imprimiendolo en el input type selet de ciudad, dependiendo del valor del imput departamento
				for(let Ciudad in resultadosJson[valor]){
					ciudad.innerHTML += `<option value="${resultadosJson[valor][Ciudad]}">${resultadosJson[valor][Ciudad]}</option>`;
				};
			}else{
				// mantiene el input de ciudad limpio, si en el input de departamento el valor es 'seleccione'
				ciudad.innerHTML  = `<option value=""></option>`;
			}
	});
	}
}
// esto pertenece a la face de conección con la api
ajax.onreadystatechange = departamentosCiudades;
ajax.open( "GET", 'resultados.json', true );
ajax.send();

// animando y cerrando el modal que aparece con el mensaje que retorna al enviar el formulario correctamente
$('.cerrarModal').click(function(e){
	$('#modal').slideUp(1000);
	e.preventDefault();
});