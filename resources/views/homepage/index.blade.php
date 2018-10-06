@extends('layouts.master')

@section('content')
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-md-3">
            <div class="card p-30">
                <div class="media">
                    <div class="media-left media media-middle">
                        <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                    </div>
                    <div class="media-body media-text-right">
                        <h2>{{ $count }}</h2>
                        <p class="m-b-0">Count User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul id="tree1">
                            @foreach($users as $user)
                                <li>
                                    {{ $user->name }} - {{$user->position->position}}
                                    @if(count($user->childs))
                                        @include('homepage.child', ['childs' => $user->childs])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
