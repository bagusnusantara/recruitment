@extends('admin.lowongan.layoutresume.base')

@section('title', 'PDF Preview')

@section('styles')
	<link rel="stylesheet" href="{{ asset('resume-pdf.css') }}">
@stop

@section('content')
	@include('admin.lowongan.section.basic')
	@include('admin.lowongan.section.pendidikan')
	@include('admin.lowongan.section.pendidikannonformal')
	@include('admin.lowongan.section.pendidikanbahasa')
	@include('admin.lowongan.section.riwayatpekerjaan')
	@include('admin.lowongan.section.minat')
	@include('admin.lowongan.section.pengalamanorganisasi')
	@include('admin.lowongan.section.riwayatpenyakit')
	
	
@stop