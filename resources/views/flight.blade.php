@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h5 class="d-inline-block">London to Manchester Ticket</h5>
                <p class="d-inline-block" style="color: #f44336;">Wednesday 27th of June </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row ticket-container bg-white" style="border-radius: 16px; font-size: 13px">
                    <div class="col-9 p-4">
                        <div class="container d-flex justify-content-between">
                            <div class="container">
                                <img src="{{asset('assets/images/rayanair.png')}}" class="d-inline-block" alt="rayanair"
                                     style="width: 40px;height: 40px">
                            </div>
                            <div class="container">
                                <div>Economy</div>
                                <div>6221</div>
                            </div>
                            <div class="container">
                                <div
                                    style="color: #3a3a3a;font-size: 22px;line-height: 22px;font-weight: 700;width: fit-content;margin: auto auto 8px;">
                                    12:35
                                </div>
                                <div style="color: #8a8a8a;font-size: 14px;line-height: 14px;font-weight: 500;">
                                    London(LTD)
                                </div>
                            </div>
                            <div class="container">
                                <div style="font-size: 16px;font-weight: 600;">01:25</div>
                                <i class="fa-regular fa-plane-departure fa-lg"></i>
                            </div>
                            <div class="container">
                                <div class="d-inline-block"
                                     style="color: #3a3a3a;font-size: 22px;line-height: 22px;font-weight: 700;width: fit-content;margin: auto auto 8px;">
                                    14:00
                                </div>
                                <div style="color: #8a8a8a;font-size: 14px;line-height: 14px;font-weight: 500;">
                                    London(LTD)
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-3 p-4">
                        <div class="row my-2">
                            <div class="col-12 d-flex justify-content-between align-items-center">
                                <div class="d-inline-block"
                                     style="color: #999;font-size: 14px;line-height: 14px;font-weight: 700;">
                                    Adult Price:
                                </div>
                                <div class="d-inline-block" style="color: #fc4174">
                                    5 Seats Left
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 d-flex justify-content-center align-items-center"
                                 style="color: #4b7ed6;font-size: 24px;line-height: 26px;font-weight: 700;">
                                200 &pound;
                            </div>
                        </div>
                        <div class="row my-2">
                            <button class="p-0 align-items-center"
                                    style="height: 44px;line-height: 44px;border-radius: 12px;color: #fff;background-color: #fc4174;font-size: 14px;font-weight: 800;">
                                Choose
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>

@endsection
