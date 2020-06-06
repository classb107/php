@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/trangchu.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>day la trang chu</h1>
                <image src="{{asset('images/hinh1.jpg')}}">
            </div>
        </div>
    </div>
</div>
@endsection
