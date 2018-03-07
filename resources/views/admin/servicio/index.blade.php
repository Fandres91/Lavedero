@extends('admin.layout')
@section('content')

<div id="app_vue">
@include('admin.servicio.vistas') 
</div>
<script>

	const items = [
  { isActive: true, age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
  { isActive: false, age: 21, first_name: 'Larsen', last_name: 'Shaw' },
  { isActive: false, age: 89, first_name: 'Geneva', last_name: 'Wilson' },
  { isActive: true, age: 38, first_name: 'Jami', last_name: 'Carney' }
]
	var app= new Vue({
		el:'#app_vue',
		data:
		{
			@include('admin.servicio.variables')
		},
		methods:
		{
			@include('admin.servicio.codigo')
		},
		watch:
		{
		@include('admin.servicio.watch')
		},
		mounted:function()
		{
			@include('admin.servicio.mounted')
		}
	});
</script>
@endsection
