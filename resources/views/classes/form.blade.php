@extends('layout.base')
@section('page_title', isset($rec) ? 'Cập nhật lớp: '.$rec->name : 'Add Class')
@section('slot')
<form id="form" class="text-start" method="POST"
    action="{{isset($rec) ? route('classes.update', ['id' => $rec->id]) : route('classes.create')}}">
    {{ csrf_field() }}
    <label class="form-label mt-3">Name class *</label>
    <div class="input-group input-group-outline">
        <input type="text" name="name" class="form-control" required value="{{$rec->name ?? old('name') ?? ''}}">
    </div>

    <input type="submit" class="btn bg-gradient-primary my-4 mb-2" value="{{ isset($rec) ? 'Cập nhật' : 'Submit'}}">
</form>
@stop 
