@extends('includes.layoutthree')
    
@section('main-content')

<div class="home-3">
    @include('components.slider.sliderthree')

    @include('components.section.create.createtwo')

    @include('components.section.liveauctions.liveauctionsthree')

    @include('components.section.topseller.topsellerthree')

    @include('components.section.todaypick.todaypickthree')

    @include('components.section.collection.collectionthree')
</div>
@endsection