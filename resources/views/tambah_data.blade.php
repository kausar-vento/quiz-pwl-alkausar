@extends('layouts.navbar')

@section('navbar-alka')

@foreach ($posts as $data)
<article class=" mb-5 border-bottom pb-3">
    <h2>
        <a href="/baca-selengkapnya/{{ $data->slug }}" class="text-decoration-none">{{ $data->tittle }}</a>
    </h2>
    <p><a href="" class="text-decoration-none">By: {{ $data->user->name}}</a> ||<a href="/categories/{{ $data->category->slug }} " class="text-decoration-none"> {{ $data->category->name }}</a></p>

    <p>{{ $data->excerpt }}</p>

    <a href="/baca-selengkapnya/{{ $data->slug }}" class="text-decoration-none">Read More</a>
</article>
@endforeach

@endsection
