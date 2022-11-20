
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
table, th, td {
    
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<div class="container">
    <div class="row justify-content-center">
      
<h1>Customers List</h1>
<div class="col-md-6 offset-md-4">
<p class="text-center">Centered nav:</p>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/customer/new" class="btn btn-info btn-lg">
                  <span class="glyphicon glyphicon-plus"></span> Create </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/softDeleted">Soft Deleted</a>
    </li>
  </ul>
        </div>
<div class="mx-4">
<table>
    <thead>
        <tr>
        <th></th>
            <th>#</th>
            <th></th>
            <th> id </th>
            <th>Company Name</th>
            <th>Street</th>
            <th>Street Nr</th>
            <th>Zip</th>
            <th>City</th>
            <th>Contatct Person</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Added On</th>
            <th>Last Update</th>
        </tr>

    @foreach($customers as $customer)
    <tr>
        <th></th>
        <th>
        <img src={{$customer->photo ? asset('storage/' . $customer->photo) :
    asset('storage/photos/no-image.jpg')}} width="70" height="70"/>
        </th>
        <th>{{$customer->photo}}</th>
        <th>{{$customer->id}}</th>
        <th>{{$customer->company_name}}</th>
        <th>{{$customer->street}}</th>
        <th>{{$customer->street_nr}}</th>
        <th>{{$customer->zip}}</th>
        <th>{{$customer->city}}</th>
        <th>{{$customer->contact_person}}</th>
        <th>{{$customer->email}}</th>
        <th>{{$customer->phone}}</th>
        <th>{{$customer->created_at}}</th>
        <th>{{$customer->updated_at}}</th>
        <th class="mt-4 p-2 flex space-x-6">
                <a href="/customer/edit/{{$customer->id}}">
                <i class="fa-solid fa-pencil">Edit</i>
                </a>
            
            <form method="POST" action="customer/delete/submit/{{$customer->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>    
         
            <form method="GET" action="/show/{{$customer->id}}">
                <button class="text-red-500"><i class="fa-solid fa-eye"></i>Show</button>
            </form>
            </th>
            <th>
            <form method="POST" action="customer/destroy/submit/{{$customer->id}}">
                @csrf
                @method('POST')
                <button class="text-red-500"><i class="fa-solid fa-trash"></i>Destroy</button>

            </form>
            </th>

    </tr>
    
    @endforeach
    </thead>

</table>

 </div>
 </div>
 </div>
 @endsection

 