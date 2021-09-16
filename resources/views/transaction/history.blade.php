@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Transaction History</div>

                    <div class="card-body">
                        <table class="text-center w-100 ">
                            <tr>
                                <th>Id</th>
                                <th>name</th>
                                <th>mode</th>
                                <th>amount</th>
                                <th>time</th>

                            </tr>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $transaction->credit == 0 ? 'debit' : 'credit' }}</td>
                                    <td class="{{ $transaction->credit ? 'text-success' : 'text-danger' }}"> <b>
                                            {{ $transaction->debit ?? $transaction->credit }}</b></td>
                                    <td>{{ $transaction->created_at }}</td>
                                </tr>
                            @endforeach
                        </table>
                        <a class="btn btn-primary" href="/home">Back</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
