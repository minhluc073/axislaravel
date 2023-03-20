@extends('includes.layout')

@section('main-content')
    <div class="home-1">

    @include('components.slider.sliderone')

    @include('components.section.liveauctions.liveauctions')

    @include('components.section.topseller.topseller')

    @include('components.section.todaypick.todaypick')

    @include('components.section.collection.collection')

    @include('components.section.create.create')
    
    </div>
    
@endsection