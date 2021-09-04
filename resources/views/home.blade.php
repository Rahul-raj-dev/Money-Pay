@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> User Profile
<a class="btn btn-primary" href="/users/{{$user->id}}/transactions/history">History</a></div>

                <div class="card-body">

         <div>    <strong>  Name: </strong> {{$user->name}}</div>
                            <strong>     Email :</strong>{{$user->email}} <br>
                            <strong>  BALANCE : </strong> {{$user->balance}} <br>


                    <a  class="btn btn-primary" href="/users/{{$user->id}}/credit">CREDIT</a>
                    <a  class="btn btn-primary" href="/users/{{$user->id}}/debit">DEBIT</a>
                    <a  class="btn btn-primary" href="/users/{{$user->id}}/transfer">TRANSFER</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
