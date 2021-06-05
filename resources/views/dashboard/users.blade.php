@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-lg-4 text-center" >
                
                <img src="{{ $user->avatar != null ? asset("storage/".$user->avatar) : asset("storage/avatar/man.png")}} "  style="height: 150px;width:150px;" class="bd-placeholder-img rounded-circle">

                <h2 class="{{$user->is_admin ? 'text-primary' : ''}}"> @if($user->is_admin) <i class="bi bi-award-fill my-3 " title="admin"></i>@endif{{$user->name}}</h2>

                <p>{{$user->email}}</p>

                <p><a class="btn btn-secondary" href="{{route('dashboard.user.show',$user->id)}}">View details »</a></p>

            </div><!-- /.col-lg-4 -->
            @endforeach
        </div>
    </div>
</div>
@endsection
