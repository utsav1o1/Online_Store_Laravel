@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
<div class="card-header">
Admin Panel - Home Page
</div>
<div class="card-body">
<img src="{{ asset('img/tech.webp') }}" class="img-fluid" alt="Responsive image">
</div>
</div>
@endsection