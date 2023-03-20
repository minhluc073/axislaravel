@extends('includes.layoutfour')

@section('main-content')
    <div class="home-6">
        @include('components.slider.slidersix')

        @include('components.section.liveauctions.liveauctionsseven')

        @include('components.section.topseller.topsellerfive')

        @include('components.section.todaypick.todaypick')

        @include('components.section.collection.collectionfive')

        @include('components.section.create.create')
    </div>
    
@endsection