guardar:function()
{
	
var ruta = "/admin/perfil/store"
	        var vector = {};
	        vector.id = this.id;
	        vector.nombre = this.nombre;
	        vector.nit = this.nit;
	        vector.telefono = this.telefono;
	        vector.razon_social = this.razon_social;
	        vector.direccion = this.direccion;
	       
	        
	        
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