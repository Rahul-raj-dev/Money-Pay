@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> CREDIT </div>

<form action="/users/{{$user->id}}/transfer" method="post">
    @csrf
    <div class="form-group">
        <label for="receiver_id">receiver_id

        <input type="receiver_id" name="receiver_id"class="form-control" id="exampleInputreceiver_id" aria-describedby="receiver_idHelp" placeholder="Enter receiver_id">
        <small id="receiver_idHelp"></small>

               @error('receiver_id')
                         <small class="text-danger">{{$message}}</small>
               @enderror

       </label>
    </div>
                <div class="form-group">
                    <label for="amount">amount

                    <input type="amount" name="amount"class="form-control" id="exampleInputamount" aria-describedby="amountHelp" placeholder="Enter amount">
                    <small id="amountHelp"></small>

                           @error('amount')
                                     <small class="text-danger">{{$message}}</small>
                           @enderror

                   </label>
                </div>
                <button class="btn btn-primary" type="submit" >Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection
