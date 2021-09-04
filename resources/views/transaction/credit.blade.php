@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> CREDIT </div>

<form action="/users/{{$user->id}}/credit" method="post">
    @csrf

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
