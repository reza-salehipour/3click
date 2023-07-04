@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <style>
        .fast-travel-container__destination {
            box-shadow: 0px 0px 4px 0px;
            border-radius: 9px;
        }

        .pink {
            background-color: #FD4175;
        }

        .fast-travel-container__destination__item {
            border-bottom: 1px solid #ccc;
        }
    </style>
    <div class="d-flex text-center w-100 flex-column position-relative flight-box-container">
        <img src="{{asset('assets/images/flight-bg.webp')}}" alt=""
             class="position-absolute w-100 d-none d-lg-flex flight-box-container__image">
        <div class="container-fluid my-3 p-0"
             style="background-color: #FAFBFD; box-shadow: 0 0 8px 0 rgba(0,0,0,.16)">
            <div
                class="d-flex flex-nowrap overflow-x-auto thing-to-do text-start overflow-y-hidden p-2 align-items-center"
                style="background-color: #F4F5F7;border-radius: 12px;height: 105px; box-shadow: inherit">
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
                        <i class="fa-light fa-hotel"></i>
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
            <div class="flight-box-container__search-box p-3">
                <div class="row align-items-center my-lg-4">

                    <div class="col-12 col-md-6 col-lg-3 d-inline">
                        <div class="form-group my-3"
                             style="background-color: #FEFEFE;border: 2px solid #fc4174;border-radius: 12px;">
                            <span class="form-arrow"><i class="bx bx-chevron-down"></i></span>
                            <select name="country" id="country" class="dropdown">
                                <option disabled>Select your country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua Barbuda">Antigua Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-inline">
                        <div class="form-group my-3"
                             style="background-color: #FEFEFE;border: 2px solid #fc4174;border-radius: 12px;">
                            <span class="form-arrow"><i class="bx bx-chevron-down"></i></span>
                            <select name="country" id="country" class="dropdown">
                                <option disabled>Select your country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua Barbuda">Antigua Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-inline">
                        <div class="form-group my-3 d-inline"
                             style="background-color: #FEFEFE;border: 2px solid #fc4174;border-radius: 12px;">
                            <input class="px-3" type="date" height="100px" width="100"
                                   style="width: 100%;min-height: 48px;border-radius: inherit;border: inherit"/>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-inline my-3">
                        <div class="form-group my-3 d-inline"
                             style="background-color: #FEFEFE;border: 2px solid #fc4174;border-radius: 12px;">
                            <button class="px-3"
                                    style="color:white;background-color: #FD4175;width: 100%;min-height: 48px;border-radius: inherit;">

                                <span>Search</span>
                                <i class="fa-solid fa-chevrons-right"></i>

                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="container quick-flight-access">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3 justify-content-start px-4 my-3" style="border-radius: 14px">
                <div class="row container__destination bg-white" style="border-radius: 14px">
                    <div class="pink text-start p-2" style="border-radius: 14px">
                        <b class="text-white m-4">From London</b>
                    </div>
                    <ul class="w-100 overflow-auto" style="max-height: 200px">

                        <a href="/flights/search/THR/MHD/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Birmigham
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/IFN/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Manchester
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/KIH/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Portmouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/TBZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Bristol
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/BND/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Liverpool
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/SYZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Cambridge
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/AWZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Plymouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/GSM/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Coventry
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/ABD/1402-04-07">
                            <li class="selection-item checked flex lastfast-travel-container__destination__item">
                                <div class="m-1">
                                    Southampton
                                </div>

                            </li>
                        </a>


                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 justify-content-start px-4 my-3" style="border-radius: 14px">
                <div class="row container__destination bg-white" style="border-radius: 14px">
                    <div class="pink text-start p-2" style="border-radius: 14px">
                        <b class="text-white m-4">From Manchester</b>
                    </div>
                    <ul class="w-100 overflow-auto" style="max-height: 200px">

                        <a href="/flights/search/THR/MHD/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    London
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/IFN/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Birmigham
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/KIH/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Portmouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/TBZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Bristol
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/BND/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Liverpool
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/SYZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Cambridge
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/AWZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Plymouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/GSM/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Coventry
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/ABD/1402-04-07">
                            <li class="selection-item checked flex lastfast-travel-container__destination__item">
                                <div class="m-1">
                                    Southampton
                                </div>

                            </li>
                        </a>


                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 justify-content-start px-4 my-3" style="border-radius: 14px">
                <div class="row container__destination bg-white" style="border-radius: 14px">
                    <div class="pink text-start p-2" style="border-radius: 14px">
                        <b class="text-white m-4">From Liverpool</b>
                    </div>
                    <ul class="w-100 overflow-auto" style="max-height: 200px">

                        <a href="/flights/search/THR/MHD/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    London
                                </div>

                            </li>
                        </a>

                        <a href="/flights/search/THR/MHD/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Birmigham
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/IFN/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Manchester
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/KIH/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Portmouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/TBZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Bristol
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/SYZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Cambridge
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/AWZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Plymouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/GSM/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Coventry
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/ABD/1402-04-07">
                            <li class="selection-item checked flex lastfast-travel-container__destination__item">
                                <div class="m-1">
                                    Southampton
                                </div>

                            </li>
                        </a>


                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 justify-content-start px-4 my-3" style="border-radius: 14px">
                <div class="row container__destination bg-white" style="border-radius: 14px">
                    <div class="pink text-start p-2" style="border-radius: 14px">
                        <b class="text-white m-4">From Birmigham</b>
                    </div>
                    <ul class="w-100 overflow-auto" style="max-height: 200px">

                        <a href="/flights/search/THR/MHD/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    London
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/IFN/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Manchester
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/KIH/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Portmouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/TBZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Bristol
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/BND/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Liverpool
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/SYZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Cambridge
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/AWZ/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Plymouth
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/GSM/1402-04-07">
                            <li class="selection-item checked flex fast-travel-container__destination__item">
                                <div class="m-1">
                                    Coventry
                                </div>

                            </li>
                        </a>
                        <a href="/flights/search/THR/ABD/1402-04-07">
                            <li class="selection-item checked flex lastfast-travel-container__destination__item">
                                <div class="m-1">
                                    Southampton
                                </div>

                            </li>
                        </a>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 px-4 my-2">
                <div class="row border-1 bg-white p-3"
                     style="box-shadow: 0 1px 7px 0 rgba(0,0,0,.03);border-radius: 16px;">
                    <div class="col-3 icon-holder px-lg-0 py-lg-2" style="padding-top: 0.2rem">
                        <i class="fa-light fa-plane-departure text-dark"
                           style="color: #FD4175 !important;font-size: 40px; width: 40px;height: 40px"></i>
                    </div>
                    <div class="col-9 icon-text-holder">
                        <div class="row">
                            <h3 class="text-start m-0 p-0">Flights</h3>
                        </div>
                        <div class="row">Perfect prices from all airlines</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 px-4 my-2">
                <div class="row border-1 bg-white p-3"
                     style="box-shadow: 0 1px 7px 0 rgba(0,0,0,.03);border-radius: 16px;">
                    <div class="col-3 icon-holder px-lg-0 py-lg-2" style="padding-top: 0.2rem">
                        <i class="fa-light fa-hotel" style="color: #FD4175 !important;font-size: 40px; width: 40px;height: 40px;"></i>
                    </div>
                    <div class="col-9 icon-text-holder">
                        <div class="row">
                            <h3 class="text-start m-0 p-0">Flights</h3>
                        </div>
                        <div class="row">Perfect prices from all airlines</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 px-4 my-2">
                <div class="row border-1 bg-white p-3"
                     style="box-shadow: 0 1px 7px 0 rgba(0,0,0,.03);border-radius: 16px;">
                    <div class="col-3 icon-holder px-lg-0 py-lg-2" style="padding-top: 0.2rem">
                        <i class="fa-light fa-plane-departure text-dark"
                           style="color: #FD4175 !important;font-size: 40px; width: 40px;height: 40px;"></i>
                    </div>
                    <div class="col-9 icon-text-holder">
                        <div class="row">
                            <h3 class="text-start m-0 p-0">Flights</h3>
                        </div>
                        <div class="row">Perfect prices from all airlines</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 px-4 my-2">
                <div class="row border-1 bg-white p-3"
                     style="box-shadow: 0 1px 7px 0 rgba(0,0,0,.03);border-radius: 16px;">
                    <div class="col-3 icon-holder px-lg-0 py-lg-2" style="padding-top: 0.2rem">
                        <i class="fa-light fa-hotel" style="color: #FD4175 !important;font-size: 40px; width: 40px;height: 40px;"></i>
                    </div>
                    <div class="col-9 icon-text-holder">
                        <div class="row">
                            <h3 class="text-start m-0 p-0">Flights</h3>
                        </div>
                        <div class="row">Perfect prices from all airlines</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media only screen and (min-width: 992px) {
            .quick-flight-access {
                margin-top: 130px;
            }
            .icon-text-holder{
                padding-left: 23px;
            }
        }

        .form-group {
            position: relative;
        }

        .form-arrow {
            position: absolute;
            top: 0.65rem;
            right: 0.5rem;
            z-index: 10;
            font-size: 1.35rem;
            line-height: inherit;
            color: hsl(0, 0%, 20%);
        }

        .dropdown {
            position: relative;
            border-radius: inherit;
        }

        .dropdown-select {
            position: relative;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            cursor: pointer;
            user-select: none;
            width: 100%;
            height: auto;
            padding: 0.75rem 1.25rem;
            border: none;
            outline: none;
            border-radius: inherit;
            color: hsl(0, 0%, 10%);
            background-clip: padding-box;
            background-color: hsl(0, 0%, 100%);;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
            0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease-in-out;
        }

        .dropdown-menu {
            position: absolute;
            display: none;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 10;
            border-radius: 0.25rem;
            background-color: hsl(0, 0%, 100%);;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
            0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease-in-out;
            padding: 2px 0px;
        }

        .dropdown-menu-inner {
            max-height: 16rem;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .dropdown-menu::-webkit-scrollbar {
            width: 5px;
            height: auto;
        }

        .dropdown-menu::-webkit-scrollbar-thumb {
            border-radius: 0.25rem;
            background-color: hsl(0, 0%, 80%);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }


        .dropdown-menu-item {
            font-family: inherit;
            font-size: 1rem;
            font-weight: normal;
            line-height: inherit;
            cursor: pointer;
            user-select: none;
            padding: 0.65rem 1.25rem;
            background-color: hsl(0, 0%, 100%);;
            transition: all 0.2s ease-in-out;
        }

        .dropdown-menu-item:hover {
            color: hsl(0, 0%, 10%);
            background-color: hsl(0, 0%, 80%);
        }

        .dropdown-menu-item.is-select,
        .dropdown-menu-item.is-select:hover {
            color: hsl(0, 0%, 100%);;
            background-color: hsl(217, 91%, 60%);;
        }


        .dropdown-menu-search {
            display: block;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            width: 100%;
            height: auto;
            padding: 0.65rem 1.25rem;
            border: none;
            outline: none;
            color: hsl(0, 0%, 10%);
            background-clip: padding-box;
            background-color: hsl(0, 0%, 96%);
        }

        input::-webkit-datetime-edit-text {
            color: red;
            padding: 0 0.3em;
        }

        input::-webkit-calendar-picker-indicator {
            background: pink;
        }

        input::-webkit-clear-button {
            background: pink;
            color: rgb(220, 113, 119);
        }

        input::-webkit-clear-button {
            color: rgb(220, 113, 119);
        }

    </style>

@endsection
