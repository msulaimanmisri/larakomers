@extends('layouts.app')
@section('content')

@include('components.profile.status')
@include('components.profile.qr')
@include('components.profile.two-factor')
@include('components.profile.profile')

@endsection