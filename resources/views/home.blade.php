@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="text-center">
                        <div class="card-header text-center h3"> Account Details</div>
                        <div class="card-body">
                            <div class="mt-4"> <strong> Name: </strong> {{ $user->name }}</div>

                            <div class="mt-4"> <strong> Email :</strong>{{ $user->email }}</div>

                            <div class="mt-4"> <strong> BALANCE : </strong> {{ $user->balance }} <br>

                                <div class="mt-5">
                                    <a class="btn btn-success" href="/users/{{ $user->id }}/credit">CREDIT</a>
                                    <a class="btn btn-danger " href="/users/{{ $user->id }}/debit">DEBIT</a>
                                    <a class="btn btn-secondary " href="/users/{{ $user->id }}/transfer">TRANSFER</a>
                                    <a class="btn btn-info"
                                        href="/users/{{ $user->id }}/transactions/history">History</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
