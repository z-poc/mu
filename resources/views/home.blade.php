@extends('layouts.app')

@section('content')
    @include('components.about')
<!-- Start main content -->
<main role="main">
    @include('components.video')
    @include('components.reg')
</main>
@endsection