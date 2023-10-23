@extends('layouts.plantilla')

@section('title','Index')

@section('content')

        <h1>Este es el Index</h1>
        <h3>Esto es lo que mandó el controlador: </h3>
        
        {{$courses}}

        <p></p>
        

@endsection

@section('anotherContent','No se porque a mi no se me ve de colores mi VS code')

<div>
        <a class=" add-course-button" href="{{ route('courses.create') }}">Add new course</a>

        @foreach ($courses as $course) 
        <ul>
                <li>{{ $course -> title }}</li>
                <li>{{ $course -> description }}</li>
                <li>{{ $course -> language }}</li>
                <li>{{ $course -> difficulty }}</li>
                <li>{{ $course -> instructor }}</li>
                <li> {{ $course -> email }}</li>
                
        </ul>
        @endforeach
</div>

@push('styles')

        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

@endpush