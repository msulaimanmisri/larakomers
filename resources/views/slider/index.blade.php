@extends('layouts.app')
@section('content')
<div class="container mt-5">

    <div class="col-lg-8 mx-auto">
        <h3 class="mb-4">Slider</h3>
        @include('components.slider.form')
        @include('components.slider.table')
    </div>

</div>
@endsection