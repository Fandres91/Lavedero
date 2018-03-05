@extends('admin.layout')
@section('content')

<div id="app_vue">
@include('admin.perfil.vistas') 
</div>
<script>
	var app= new Vue({
		el:'#app_vue',
		data:
		{
			@include('admin.perfil.variables')
		},
		methods:
		{
			@include('admin.perfil.codigo')
		},
		watch:
		{
		@include('admin.perfil.watch')
		},
		mounted:function()
		{
			@include('admin.perfil.mounted')
		}
	});
</script>
@endsection
