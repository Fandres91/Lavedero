guardar:function()
{
	
var ruta = "/admin/contratista/store"
	        var vector = {};
	        vector.id = this.id;
	        vector.nombre = this.nombre;
	        vector.cedula = this.cedula;
	        vector.telefono = this.telefono;
	        vector.correo = this.correo;
	        
	       
	        
	        
	        $.ajax({
	            url: ruta,
	            headers: {
	                'X-CSRF-TOKEN': this.token,
	                'Access-Control-Allow-Origin': true
	            },
	            method: 'post',
	            dataType: 'json',
	            data: vector,
	            success: (res) => {
	                alert('Registro exitoso');
	            },
	            error: (msj) => {
	               
	            }
	        });
}