
guardar_tipo:function()
{
	
var ruta = "/admin/servicio/store2"
	        var vector = {};
	        vector.id = this.id;
	        vector.nombre_tipo = this.nombre_tipo;
	        
	        
	        
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
},
guardar:function()
{
	
var ruta = "/admin/servicio/store"
	        var vector = {};
	        vector.id = this.id;
	        vector.nombre_servicio = this.nombre_servicio;
	        vector.valor = this.valor;
	        vector.id_tipo_servicio = this.id_tipo_servicio;
	        
	        
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

