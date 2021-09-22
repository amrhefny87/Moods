@extends('layouts.app');

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{asset('css/groups.css')}}" rel="stylesheet"/>
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
                color: black;
            }
        </style>
    </head>
    <body class="group-view">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-special-black">
                <div class="container-fluid d-flex flex-wrap justify-content-around">
                    <div class="create-group d-flex flex-row justify-content-center mb-3">
                        <form method="POST" action="{{ route('groupsCreate') }}">
                                @csrf

                                <div class="d-flex flex-row justify-content-center">
                                    

                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name"  placeholder="Entra el nombre del grupo" required>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-outline-light">
                                                Crea Grupo
                                        </button>      
                                    </div>
                                </div>
                        </form>
                        
                    </div>
                    <div class="d-flex flex-row justify-content-around form">
                        <div class="users m-3">
                            <form method="POST" action="{{route('updateGroupId')}}">
                            @csrf
                
                            <h2>Jugadores</h2>
                            @foreach ($users as $user)
                                @if ($user->group_id === null && !$user->is_admin)
                                <div class="d-flex justify-content-around">
                                    <div class="mt-1">
                                        <label>
                                            <input type="checkbox"  value="{{$user->id}}" name="user[]">
                                        </label>
                                    </div>
                                    <div class="users ml-3">
                                        <p class="users-text text-white">{{$user->name}}</p>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="groups m-3">
                        <h2>Grupos</h2>

                        @foreach ($groups as $group)
                        <div class="d-flex justify-content-around">
                            <div class="mt-2">
                                <label>
                                    <input type="checkbox" value="{{$group->id}}" name="group[]">
                                </label>
                                
                            </div>
                            <div class="ml-3 mr-2">
                                <p class="users-text text-white">{{$group->name}}</p>
                            </div>
                            <div>
                            <a href="{{route('groupDelete',['id'=>$group->id])}}">remove group</a>
                            </div>
                        
                            <div>   
                        
                                @foreach ($users as $user)
                                    @if ($user->group_id == $group->id)
                                
                                    <div class="ml-3 mr-2">
                                        <p class="users-text text-white">- {{$user->name}}</p>
                                    </div>
                                    <div class="ml-3 mr-2">
                                        @if ($user->impostor == 1)
                                            <p class="users-text text-danger">impostor</p>
                                        @endif
                                    </div>
                                    <div>
                                        <a href="{{route('removeGroupId',['id'=>$user->id])}}">remove</a>
                                    </div>
                                
                                    @endif
                                @endforeach
                                </div>
                        @endforeach
                        
                        
                        </div>
            
                        <div>
                            <input class="btn btn-outline-light" type="submit" value="Anade los jugadores">
                        </div>
                            
                        </div>
                
                    </form>
                
                    
                
                    
                </div>
                <div>
                        <a href="{{route('startGame')}}" class="btn btn-outline-light">Start Game</a>
                        <a href="{{route('endGame')}}" class="btn btn-outline-light">End Game</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>