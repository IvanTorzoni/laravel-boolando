@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row g-3">
                @foreach ($products as $card)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="ms_card h-100">
                            <img src="{{ Vite::asset('resources/img/' . $card['frontImage']) }}"" alt="">
                            <div class="ms_card-body">
                                <p>
                                    {{ $card['name'] }}
                                </p>
                                <p>
                                    {{ $card['brand'] }}
                                </p>
                                <p>
                                    {{ $card['price'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
