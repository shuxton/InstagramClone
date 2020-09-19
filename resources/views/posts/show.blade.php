@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-8">
<img class="w-100" src="/storage/{{$post->image}}" alt="">
</div>
<div class="col-4">
<div class="d-flex">
<div>
<div>
<img style="max-width:50px" class="rounded-circle w-100" src="/storage/{{$post->user->profile->image}}" alt="">
</div>
</div>
<h3>{{$post->user->username}}</h3>
<p>{{$post->caption}}</p>
</div>
</div>
</div>
</div>
@endsection