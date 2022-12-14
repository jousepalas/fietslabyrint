@extends('layouts.app')

@section('content')
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<div class="container">
    <div class="row justify-content-center">

 <div class="mx-4">
<table>
    <thead>
        <tr>
        <th>#Photo#</th>
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
        <tr>
        <th>
        <img src={{$customer->photo ? asset('storage/' . $customer->photo) :
    asset('storage/photos/no-image.jpg')}} width="70" height="70"/>
        </th>
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
            </th>
        </tr>
    </thead>
</table>

 </div>
</div>
</div>

 @endsection