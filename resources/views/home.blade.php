@extends('layouts.app')

@section('content')
    <section id="comics-list">
        <div class="content-bg debug">
            <div class="container py-4 px-0 debug">
                <div class="d-flex flex-wrap justify-content-between gap-3 ms-4">
                    @foreach ($comics as $comic)
                        <div class="comic-box d-flex flex-column ms-2 mt-2">
                            <div class="comic">
                                <img src="{{$comic['thumb']}}">
                            </div>
                            <div class="mt-3">
                                <span class="text-white text-uppercase small">{{$comic['title']}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection




{{--

<div class="comic-box d-flex flex-column ms-2 mt-2">
    <div class="comic">
        <img :src="">
    </div>
    <div class="mt-3">
        <span class="text-white text-uppercase small"></span>
    </div> --}}
