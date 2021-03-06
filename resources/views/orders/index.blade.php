@extends('layouts.app')

@push('head')
    <script src="{{ asset('js/components/indexOrders.js')}}"></script>
@endpush

@section('content')
     <section>
        <div class="orders-container">
            <div class="flex orders-head">
                <a href="/orders/create"><button class="btn order-create-btn">
                    Создать
                    </button>
                </a>
                <select name="sort" id="sort" class="orders-sort select">
                    <option value="">Все</option>
                    <option value="abolished">Отмененные</option>
                    <option value="1">Доставленные</option>
                    <option value="0">Недоставленные</option>
                </select>
            </div>


            <div class="orders">
                @forelse($orders as $order)
                    <div class="order-card" id="{{'order-card-' . $order->id}}">
                        <svg onclick="selfDelete({{$order->id}})" class="btn order-card_delete-btn" xmlns="http://www.w3.org/2000/svg" height="15"
                             viewBox="0 0 24 24"
                             width="15">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path fill="red" d="M14.59 8L12 10.59 9.41 8 8 9.41
                             10.59 12 8 14.59 9.41 16 12 13.41 14.59
                              16 16 14.59 13.41 12 16 9.41 14.59 8zM12
                               2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47
                                10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>

                        <div class="order-card_field order-card_name-field">
                            <a href="{{$order->path()}}">Название:{{$order->name}}</a>
                        </div>

                        <div class="order-card_field">
                            Цена:{{$order->price}}
                        </div>

                        <div class="order-card_field">
                            Статус:{{$order->textStatus}}
                        </div>
                    </div>
                @empty
                    no orders yet
                @endforelse
            </div>
        </div>

    </section>
@endsection
