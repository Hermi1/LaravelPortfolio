@extends('layouts.layout')

@section('title')
Resume
@stop

@section('body')
@foreach($qualifications as $qualification)
		<li>{{$qualification->resumeDetails}}</li>
@endforeach
@stop