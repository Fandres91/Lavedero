@extends('admin.layout')
@section('content')

<div id="app_vue">
@include('admin.servicio.vistas') 
</div>
<script>
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
