@extends('layouts.app')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4 mx-auto card p-4">
            <form action="{{ route('admin.order.index') }}/{{ $invoice->id }}" method="POST" class="form-group">
                @csrf

                {{-- No Invoice --}}
                <label for="invoice" class="form-label">No Invoice</label>
                <input type="text" class="form-control mb-3" name="invoice" value="{{ $invoice->invoice }}">


                {{-- CTA --}}
                <a href="{{ route('admin.order.index') }}" class="btn btn-primary mt-4">Back to the list</a>
            </form>

        </div>
    </div>
</div>
@endsection