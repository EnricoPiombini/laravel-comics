{{-- @dump($card) --}}

@extends('layouts.app')

@section('page_title', $card['title'] . ' - Movie informations')

@section('main_content')



    <div class="container">

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="content mx-auto">
                    <h3 class="text-uppercase"> {{ $card['title'] }} </h3>

                    <div class="bg-success p-1 d-flex justify-content-between">
                        <div class="left">
                            <p> U.S Price {{ $card['price'] }} </p>
                        </div>
                        <div class="right">
                            <p>AVAILABLE Check Availability</p>
                        </div>
                    </div>
                    <div class="description">
                        <p> {{ $card['description'] }} </p>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="content">
                    <img src="../images/adv.jpg" alt="" class="w-100">

                </div>
            </div>

        </div>

        <div class="row gap-2">
            <div class="col-5">
                <div class="content">
                    <h5>
                        Talent
                    </h5>
                </div>

                <hr>
                <div class="d-flex">
                    <div class="title me-5">
                        <h6>Art by:</h6>
                    </div>

                    <div class="artist ms-5">
                        @foreach ($card['artists'] as $artist)
                            <a href="#">{{ $artist }}</a>
                        @endforeach
                    </div>

                </div>
                <hr>
                <div class="d-flex">
                    <div class="title">
                        <h6>Written by:</h6>
                    </div>

                    <div class="artist ms-5">
                        @foreach ($card['writers'] as $writer)
                            <a href="#">{{ $writer }}</a>
                        @endforeach
                    </div>

                </div>



            </div>
            <div class="col-5">
                <div class="content">
                    <div class="title">
                        <h5>Specs</h5>
                    </div>
                    <hr>
                    <div>
                        <span>Series:</span>
                        <span class="ms-5">ACTION COMICS</span>
                    </div>
                    <hr>
                    <div>
                        <span>U.S Price:</span>
                        <span class="ms-5"> {{ $card['price'] }} </span>
                    </div>
                    <hr>
                    <div>
                        <span>On Sale Date:</span>
                        <span class="ms-5"> {{ $card['sale_date'] }} </span>
                    </div>
                    <hr>
                </div>


            </div>

        </div>








    @endsection
