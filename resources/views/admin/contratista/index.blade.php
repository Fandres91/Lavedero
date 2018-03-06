@extends('admin.layout')
@section('content')

<div id="app_vue">
@include('admin.contratista.vistas') 
</div>
<script>
	var app= new Vue({
		el:'#app_vue',
		data:
		{
			@include('admin.contratista.variables')
		},
		methods:
		{
			@include('admin.contratista.codigo')
		},
		watch:
		{
		@include('admin.contratista.watch')
		},
		mounted:function()
		{
			@include('admin.contratista.mounted')
		}
	});
</script>
@endsection
