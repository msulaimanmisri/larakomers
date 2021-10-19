@extends('layouts.app')
@section('content')
<div class="container mt-5">

    {{-- Product Category Table --}}
    <div class="col-lg-8 mx-auto">
        @include('components.product-category.table')
        @include('components.product-category.pagination')
    </div>



</div>
@endsection