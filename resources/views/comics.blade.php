@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
    @include('components.jumbotron')

    @include('components.comics-list')

    @include('components.icon-section')
@endsection