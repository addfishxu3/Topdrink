<!-- resources/views/child.blade.php -->
 
@extends('layouts.app')
 
@section('title', 'Test Page')
 
@section('sidebar')
    @parent
 
    <p>Test</p>
@endsection
 
@section('content')
    <p>Test</p>
@endsection