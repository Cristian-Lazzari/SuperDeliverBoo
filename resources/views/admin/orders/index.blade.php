@extends('admin.layouts.base')

@section('contents')

<div class="container-order container">
    <div class=" pt-4 ">
        <a class="btn btn-warning text-white me-3 fs-5" href="{{ route('admin.dashboard') }}">&larr;</a>
        <h2 class="mt-4 text-center text-white-Dashboard  fs-1">Ordini</h2>

        <div class="mt-5 container">
            <div class="row">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Order n°</th>
                            <th scope="col">Customer Info</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Dishes</th>
                            <th scope="col">Customer Notes</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->reverse() as $index => $order)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>
                                    <span class="d-block fw-bolder">{{ $order->name }}</span>
                                    <span class="d-block"><span class="text-decoration-underline">Cell</span>:
                                        {{ $order->surname }}</span>
                                    <span class="d-block"><span class="text-decoration-underline">Mail</span>:
                                        {{ $order->phone }}</span>
                                    <span class="d-block"><span class="text-decoration-underline">Address</span>:
                                        {{ $order->address }}</span>
                                </td>
                                <td>{{ $order->total_price }} &euro;</td>
                                <td> {{--
                                     @foreach ($order->items as $item)
                                        <li>{{ $item->name }} <span
                                                class="fw-bold">x{{ $item->pivot->qt_item }}</span></li>
                                    @endforeach 
                                </td> --}}  
                                <td>{{ $order->time }}</td>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    

@endsection


