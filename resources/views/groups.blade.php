@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/waiting.css')}}" rel="stylesheet"/>
        <title>Laravel8</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="groups">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-special-black">
                <div class="container-fluid d-flex flex-wrap justify-content-around">
                
                <form method="POST" action="{{route('updateGroupId')}}">
                @csrf
                <h1>Users</h1>
                @foreach ($users as $user)
                    @if ($user->group_id === null && $user->role != 'admin')
                    <div class="d-flex flex-column">
                        <label>
                            <input type="checkbox"  value="{{$user->id}}" name="user[]">
                        </label>
                        <p>{{$user->name}}</p>
                    </div>
                    @endif
                @endforeach
                <h1>Groups</h1>
                @foreach ($groups as $group)
                        <p>{{$group->name}}</p>
                        <label>
                            <input type="checkbox" value="{{$group->id}}" name="group[]">
                        </label>
                        <a href="{{route('groupDelete',['id'=>$group->id])}}">remove group</a>

                        @foreach ($users as $user)
                            @if ($user->group_id == $group->id)
                            

                                <p>{{$user->name}}</p>
                                @if ($user->impostor == 1)
                                    <p class="text-warning">impostor</p>
                                @endif
                                <a href="{{route('removeGroupId',['id'=>$user->id])}}">remove</a>

                            @endif
                        @endforeach
                @endforeach
                <input type="submit" value="submit">
                </form>
                <hr>
                <form method="POST" action="{{ route('groupsCreate') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Group Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name"  required>
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-light">
                                    Create Group
                                </button>
                                
                            </div>
                        </div>
                    </form>
                    <a href="{{route('chooseTheImpostor')}}">Choose Impostor</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>