@extends('front.layouts.master')

@section('title',$article->title)

@section('content')
<!-- Post Content -->
            <div class="col-md-9 mx-auto">
                {!! $article->content !!}
                <span class="text-black-50">Okunma Sayısı : <b>{{$article->hit}}</b></span>
            </div>
@include('front.widgets.categoryWidget')
@endsection
