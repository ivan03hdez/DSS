@extends('layouts.admin')
@section('title', 'HOLAAA')

@section('sidebar')
   @parent   
   @section('sidebar-element')
      @parent
      @section('sidebar-yield', 'ELEMENTO 1')
   @endsection
   
@endsection
