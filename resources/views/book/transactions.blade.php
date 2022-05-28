@extends('templates.master')

@section('content')
    <!-- Content -->
    <h3 class="display-6 pt-5">Reviews</h3>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
            <!-- Individual Reviews -->
                @foreach ($transactions as $transaction)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $transaction->title }}</td>
                        <td>{{ date_format($transaction->created_at, "d F Y") }}</td>
                        <td>{{ number_format($transaction->price, 0, '.', '.') }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection
