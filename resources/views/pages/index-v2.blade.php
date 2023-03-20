@extends('includes.layout')

@section('main-content')
<div class="home-2">
    @include('components.slider.slidertwo')

    @include('components.section.create.createtwo')

    @include('components.section.liveauctions.liveauctionstwo')

    @include('components.section.collection.collectiontwo')

    @include('components.section.topseller.topsellertwo')

    @include('components.section.todaypick.todaypicktwo')
</div>
@endsection