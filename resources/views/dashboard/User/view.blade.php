@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="container bootstrap snippet">

        <div class="row">
            <div class="col-sm-3"><!--left col-->
                  
    
            <div class="text-center">
                <img src="{{$user->avatar != null ? asset("storage/".$user->avatar) : asset("storage/avatar/man.png")}}" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6 class="mt-3"> <i class="bi bi-cloud-arrow-up"></i> Change Avatar</h6>
                <input disabled type="file" class="text-center center-block file-upload">
            </div>
            <hr>
            <br>
    
                   
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="bi bi-globe"></i> Website <i class="fa fa-link fa-1x"></i></div>
                <div class="panel-body ml-3"><a href="" class="text-muted"> <i class="bi bi-cursor-fill"></i> example.com</a></div>
            </div>
            
            
            <ul class="list-group my-3">
                <li class="list-group-item text-muted"> Activity <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
            </ul> 
                
            <div class="panel panel-default">
            <div class="panel-heading"> <i class="bi bi-share"></i> Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
            </div>
              
            </div><!--/col-3-->
            <div class="col-sm-9">

                <ul class="navbar-nav nav-tabs d-flex flex-row ">
                    <li class="nav-item mx-3 active"><a class='nav-link px-3' data-toggle="tab" href="#home">Home</a></li>
                    <li class="nav-item mx-3"><a class='nav-link px-3' data-toggle="tab" href="#messages">Menu 1</a></li>
                    <li class="nav-item mx-3"><a class='nav-link px-3' data-toggle="tab" href="#settings">Menu 2</a></li>
                </ul>
    
                  
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="{{route('dashboard.user.update',$user->id)}}" method="post" id="registrationForm">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                
                                <div class="col-xs-6">
                                    <label for="name"><h4>Name</h4></label>
                                    <input type="text" class="form-control" name="name" value="{{old('name') ?? $user->name}}" id="name" placeholder="first name" title="enter your first name if any.">
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h4>Phone</h4></label>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone') ?? $user->phone}}" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" value="{{old('email') ?? $user->email}}" id="email" placeholder="you@email.com" title="enter your email.">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h4>Location</h4></label>
                                    <input type="text" class="form-control" id="location" value="{{old('location') ?? $user->location}}" placeholder="somewhere" title="enter a location">
                                </div>
                            </div>

                            <div>
                                <p>Created_at: {{$user->created_at}}</p>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit"> Save</button>
                                    <button class="btn btn-lg" type="reset"> Reset</button>
                                </div>
                            </div>
                        </form>
                    
                        <hr>
                    
                    </div><!--/tab-pane-->

                    <div class="tab-pane" id="messages">
                    
                        <h2> Panel 2</h2>
                    
                    
                    </div><!--/tab-pane-->

                    <div class="tab-pane" id="settings">
                            
                        <h2> Panel 3</h2>
                    
                    </div><!--/tab-pane-->
                    
                </div><!--/tab-content-->
    
            </div><!--/col-9-->
        </div><!--/row-->

</div>

<script>
    $(document).ready(function() {

        
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function(){
            readURL(this);
        });
    });

</script>

@endsection
