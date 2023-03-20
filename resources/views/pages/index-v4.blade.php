@extends('includes.layouttwo')

@section('main-content')

<div class="home-4">
    @include('components.slider.sliderfour')

    @include('components.section.liveauctions.liveauctionsfour')

    @include('components.section.topseller.topsellertwo')

    @include('components.section.todaypick.todaypickfour')

    @include('components.section.collection.collection')

    @include('components.section.create.create')

</div>
@endsection