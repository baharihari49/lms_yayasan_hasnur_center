@extends('dashboard.layouts.main')


@section('container')
    @include('dashboard.layouts.breadcump')

    <h1 class="text-2xl lg:text-3xl font-semibold my-4">{{$data->judul}}</h1>
    <hr class="mb-3">

    <p class="text-gray-600 mb-5">{{$data->deskripsi}}</p>

    <iframe class="w-full h-[40vh] lg:h-[70vh] {{($data->link_materi != null) ? '' : 'hidden'}}" src="{{$data->link_materi}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

@endsection
