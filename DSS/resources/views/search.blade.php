@extends('layouts.admin')
@section('title','Información de la cesta')
@section('content')
<h1>Searcher</h1>
<div >

    <div class="">
        <p>tipo de producto</p>
        <select id="type">
            <option value="cascos">cascos</option>
            <option value="auriculares">auriculares</option>
            <option value="altavoces">Two service</option>
            <option value="microfonos">microfonos</option>
        </select>
    </div>

    <div class="">
        <select id="price">
            <option value="50">0-50</option>
            <option value="100">50-100</option>
            <option value="200">+100</option>
        </select>
    </div>
  
    <input id="search" placeholder="Search name">
  
</div>
@endsection