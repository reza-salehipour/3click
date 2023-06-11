@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="d-flex text-center w-100 flex-column position-relative flight-box-container">
        <img src="{{asset('assets/images/flight-bg.webp')}}" alt=""
             class="position-absolute w-100 d-none d-lg-flex flight-box-container__image">
        <div class="container-fluid my-3 p-0"
             style="background-color: #fafafb; box-shadow: 0 0 8px 0 rgba(0,0,0,.16)">
            <div
                class="d-flex flex-nowrap overflow-x-auto thing-to-do text-start overflow-y-hidden p-2 align-items-center"
                style="background-color: #f5f5f6;border-radius: 12px;height: 105px; box-shadow: inherit">
                {{--                    fix name here--}}
                <a class="d-inline-block" href="">
                    <div class="text-center" style="padding: 10px">
                        <i class="fa-light fa-plane-departure text-dark"
                           style=""></i>
                        <div class="text-center text-dark pt-2">
                            Plane
                        </div>
                    </div>

                </a>

                <a class="d-inline-block" href="">
                    <div class="text-center" style="padding: 10px">
                        <i class="fa-light fa-globe text-dark"></i>
                        <div class="text-center text-dark pt-2">
                            Hotel
                        </div>
                    </div>

                </a>

                <a class="d-inline-block" href="">
                    <div class="text-center" style="padding: 10px">
                        <i class="fa-light fa-plane-departure text-dark"></i>
                        <div class="text-center text-dark pt-2">
                            Tour
                        </div>
                    </div>

                </a>

                <a class="d-inline-block" href="">
                    <div class="text-center" style="padding: 10px">
                        <i class="fa-light fa-passport text-dark"></i>
                        <div class="text-center text-dark pt-2">
                            Service
                        </div>
                    </div>

                </a>

            </div>
            <div class="flight-box-container__search-box">
                <div class="p-2 my-2">
                    <div class="d-flex">
                        <label for="oneWay" class="form-check-label align-items-center flex-wrap"
                               style="cursor: pointer">
                            <input type="radio" class="form-check-input" value="one" id="oneWayRadio" style="border-radius: 50%; min-height: 1.3rem; min-width: 1.3rem;     margin-top: 0.125rem;
    margin-right: 0.5rem;">
                            One Way
                        </label>

                        <label for="oneWay" class="form-check-label align-items-center flex-wrap mx-3"
                               style="cursor: pointer">
                            <input type="radio" class="form-check-input" value="one" id="oneWayRadio" style="border-radius: 50%; min-height: 1.3rem; min-width: 1.3rem;     margin-top: 0.125rem;
    margin-right: 0.5rem;">
                            Two Way
                        </label>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
