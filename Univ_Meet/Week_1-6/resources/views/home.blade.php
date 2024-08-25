@extends('base.base')

@section('content')
<div>
    <h1>Hi, ini dari Controller!</h1>
    <p>
        Param1: {{ $param1 }}
        <br>
        Param2: {{ $param2 }}    
    </p>    
</div>    

@endsection