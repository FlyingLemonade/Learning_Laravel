@extends('base.base')

@section('content')
<div>
    <h1>Haii Ini di About Page</h1>
    <p>
        Nama: {{ $param1 }}
        <br>
        Usia: {{ $param2 }}    
    </p>    
</div>    

@endsection