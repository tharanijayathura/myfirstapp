@extends('contact')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop