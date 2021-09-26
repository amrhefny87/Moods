@extends('layouts.app')

@section('groups')
    <div class="groups-container py-4">
        <div class="header-group mb-2">
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
        <div class="main">
            <div class="users-list my-2">
                <form id="form" method="POST" action="{{route('updateGroupId')}}">
                    @csrf
                        <h2>Jugadores</h2>
                            @foreach ($users as $user)
                                @if ($user->group_id === null && !$user->is_admin)
                                    <div class="d-flex justify-content-around">
                                        <div class="mx-2">
                                            <label>
                                                <input type="checkbox"  value="{{$user->id}}" name="user[]">
                                            </label>
                                        </div>
                                        <div class="users mt-1">
                                            <p class="users-text text-white">{{$user->name}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                
            </div>
            <div class="groups-list mt-2">
                        <div class="d-flex flex-row align-items-center">
                            <h2>Grupos</h2>
                            <h6 class="text-warning mr-3">Añade maximo 5 jugadores a cada grupo</h6>
                            <input class="btn btn-outline-light mr-2" type="submit" value="Añade jugdores" form="form">
                        </div>
                            @foreach ($groups as $group)
                                <div class="d-flex justify-content-around">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" value="{{$group->id}}" name="group[]">
                                        </label>
                                    </div>
                                    <div class="users ml-3 mr-2 mt-1">
                                        <p class="users-text text-white">{{$group->name}}</p>
                                    </div>
                                    <div class="d-flex flex-start">
                                        <a href="{{route('groupDelete',['id'=>$group->id])}}">Elimine Grupo</a>
                                    </div>
                                </div>
                                <div class="groups-users d-flex flex-column justify-content-around">
                                    @foreach ($users as $user)
                                        @if ($user->group_id == $group->id)
                                        <div class="d-flex flex-row flext-start">
                                            <div class="ml-3 mr-2 d-flex justifiy-content-left">
                                                <p class="users text-white">- {{$user->name}}</p>
                                            </div>
                                            <div class="impostor ml-3 mr-2 d-flex justifiy-content-left">
                                                @if ($user->impostor == 1)
                                                    <p class="users-text text-danger">Impostor</p>
                                                @endif
                                            </div>
                                            <div>
                                                <a href="{{route('removeGroupId',['id'=>$user->id])}}">Elimine</a>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endforeach
                </form>

            </div>
            
        </div>
        <div class="footer mt-2">
            <div>
                <a href="{{route('startGame')}}" class="btn btn-outline-light">Inicia El Juego</a>
                <a href="{{route('endGame')}}" class="btn btn-outline-light">Termina El Juego</a>
            </div>
        </div>
    </div>
@endsection

