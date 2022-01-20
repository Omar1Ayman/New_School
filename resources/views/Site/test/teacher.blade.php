@extends('Site.layout')


@section('content')
    <h1>Hello && Welcome</h1>
    <a href="{{route("teacher.create")}}" class="btn btn-primary">Create</a>
    <table class="table table-hover mt-3">
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
        @foreach ($teacher as $te )
        <tr>
            <td>{{$te->id}}</td>
            <td>{{$te->name}}</td>
        </tr>
        @endforeach
    </table>
@endsection