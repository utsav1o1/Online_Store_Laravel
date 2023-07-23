@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Purchase Completed
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Congratulations, purchase completed. Order number is <b>#{{ $viewData['order']->getId() }}</b> and the remaning balance is $<b>{{ $viewData['balance'] }}</b>.
            </div>
        </div>
    </div>
@endsection
