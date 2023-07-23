@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/bulltecycle.jpg') }}" class="img-fluid rounded img-thumbnail">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/drone1.jpg') }}" class="img-fluid rounded img-thumbnail">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/iphone1.webp') }}" class="img-fluid rounded img-thumbnail">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/lenovo1.webp') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/macbook.jpg') }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/vr.webp') }}" class="img-fluid rounded">
        </div>
       
    </div>
@endsection
