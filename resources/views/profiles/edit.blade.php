@extends('layouts.app')

@section('content')
<div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
   @csrf
   @method('patch')
    <div class="row">
     <div class="col-8 offset-2">
     <div class="row">
     <h1>Edit Profile</h1>
     </div>
     <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">Title</label>

                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')?? $user->profile->title }}"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
      </div>

      <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label ">Url</label>

                                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url')?? $user->profile->url }}"  autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

      <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">Bio</label>

                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description')?? $user->profile->description }}"  autocomplete="title" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>


     <div class="row">
     <label for="image" class="col-md-4 col-form-label">Profile Image</label>
     <input type="file" class="form-control-file" id="name" name="image"></div>
     @error('image')
         <strong>{{ $message }}</strong>
                                @enderror
    
     <div class="row pt-3">
     <button class="btn btn-primary">Save Profile</button>
     </div>
     </div>
    </div>
    </form>
</div>
@endsection
