@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="d-flex text-center w-100 flex-column position-relative flight-box-container">
        <img src="{{asset('assets/images/flight-bg.webp')}}" alt=""
             class="position-absolute w-100 d-none d-lg-flex flight-box-container__image">
        <div class="z-1 w-100"
             style="    width: calc(100% - 30px);border-radius: 12px;box-shadow: 0 0 8px 0 rgba(0,0,0,.16);">
            <div class="flight-box-container__actions w-100 position-absolute mt-3 mb-5" style="height: 100px;
    background-color: #f5f5f6;
    box-shadow: 0 0 8px 0 rgba(0,0,0,.16);">
                <div class="flight-box-container__actions__container py-3" style="overflow-y: hidden;;box-sizing: border-box;display: flex;justify-content: flex-start;align-items: center;">
                    <a class="flight-box-container__nav__item--active" style="color: rgb(0, 0, 0);"><div class="nav__item__inner"><i class="fa-light fa-plane-departure" style="font-size: 24px;"></i> <div  class="nav__item__inner__text">پرواز</div></div></a>
                </div>
            </div>
        </div>
    </div>
@endsection
