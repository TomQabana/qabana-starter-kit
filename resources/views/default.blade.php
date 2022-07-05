@extends('_layout')

@section('body')
    <div class="container d-flex justify-content-center align-content-center" style="min-height: 100vh">
        <div class="m-auto">
            {!! $page->content !!}
        </div>
    </div>
@endsection
