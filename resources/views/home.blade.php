@extends('layouts.app')

@section('content')
    @include('components.about')
<!-- Start main content -->
<main role="main">
    @include('components.video')
    @include('events.20171125')
</main>
@endsection