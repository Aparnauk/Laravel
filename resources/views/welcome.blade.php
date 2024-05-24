@extends('layouts.master')

@section('title','Home')

@section('content')


<h1>Welcome to Laravel Routing</h1>
<h2>Users</h2>

<!--

@php $name = 'Akhil'; @endphp

<h3>Hello</h3>

<h3>{{$newName}}</h3>


<h1>Welcome to Blade Template</h1>
<h2>My Name is {{$newName}}</h2>
<h2>Current Date is {{date('d-M-Y')}}</h2>

@if($age == 30)
<h2>You are allowed</h2>
@else
<h2>You are not allowed</h2>
@endif


@unless ($age == 30)
<h2>You are not allowed</h2>
@endunless


@isset($record)
<h3>colour getting</h3>
@endisset


@empty($record)
<h3>colour no empty</h3>
@endempty


@switch($status)
@case(1)
<h2>status is 1</h2>
@break

@case(2)
<h2>status is 2</h2>
@break

@default
<h2>status is default</h2>
@endswitch

 
@for($i = 1; $i < 10; $i++) <h3>The Value is {{$i}}</h3>

    @endfor

    @foreach ($colors as $color)  -->

    <!-- to find class of an array -->
    <!-- <h3 @if($loop->first) class="first" @elseif($loop->last) class="last" @endif> -->


        <!-- {{$loop->index}} --- to find index of array (start with 0) -->
        <!-- {{strtoupper($color)}}
    </h3>
    @endforeach -->

    <a href="{{route('create.user')}}" class="btn btn-sm btn-primary" style="float: right;">New</a>


    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>

                </td>
            </tr>
           
        </tbody>
        @endforeach
    </table>

    @endsection