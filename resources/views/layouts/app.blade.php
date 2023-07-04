<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}

    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-pro-6.4.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-5.3.min.css')}}">

</head>
<body style="background: #f5f7f9; overflow-x: hidden">
<nav class="collapse navbar-collapse d-none position-fixed vh-100 d-flex flex-column bg-white z-1 d-md-none"
     id="navbarSupportedContent">
    <div class="d-flex flex-column w-100 nav-items">
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Airplane Ticket
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Hotel
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Packages
        </span>
        </a>
        <a class="pointer-event w-100 mt-1 p-4">
        <span>
            Services
        </span>
        </a>
    </div>
</nav>
<div class="vw-100 position-relative d-flex flex-column">
    <header class="position-relative bg-white">
        <div class="container h-100">
            <nav class="navbar navbar-expand-lg navbar-light h-100">
                <div class="d-flex d-lg-none justify-content-between w-100 mobile-nav">
                    <button class="navbar-toggler border-2" type="button" data-bs-toggle="collapse"
                            href="#navbarSupportedContent">
                        <i class="fa-solid fa-bars-sort fa-flip-vertical"></i>
                    </button>

                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" style="max-height: 24px;">
                    </a>

                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <i class="fa-light fa-user"></i>
                    </button>
                </div>
                <nav class="d-none justify-content-between d-lg-flex w-100 desktop-navbar">
                    <div class="d-lg-flex py-lg-2">
                        <div class="text-center justify-content-center">
                            <a class="" href="#">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo" style="max-height: 24px;">
                            </a>
                            <a class="" href="#">
                                Airplane Ticket
                            </a>
                            <a class="" href="#">
                                Hotel
                            </a>
                            <a class="" href="#">
                                Tour
                            </a>
                            <a class="" href="#">
                                Package
                            </a>
                            <a class="" href="#">
                                Services
                            </a>
                            <a class="" href="#">
                                Magazine
                            </a>
                        </div>
                    </div>
                    <div class="d-flex text-center">
                        <button class="bg-white">
                            <span>Login/Register</span>
                        </button>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
</div>
<div class="main mx-3 overflow-x-hidden">
    @yield('content')
</div>
<footer class="bg-white">
    <div class="container my-3 py-3">
        <div class="row">
            <div class="col-6 col-lg-4">
                <p>About Us</p>
                <p>London Flights</p>
                <p>Manchester Flights</p>
            </div>
            <div class="col-6 col-lg-4">
                <p>About Us</p>
                <p>London Hotels</p>
                <p>Manchester Hotels</p>
            </div>
            <div class="col-12 col-lg-4">
                <p style="font-size: 14px;">
                    Address: 60 Lancaster Street, Birmingham, England
                </p>
                <p>
                    Social Media:
                </p>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <i class="fa-brands fa-instagram fa-xl" style="color: #FD4175;"></i>
                    </div>
                    <div class="col-4">
                        <i class="fa-brands fa-telegram fa-xl" style="color: #FD4175;"></i>
                    </div>
                    <div class="col-4">
                        <i class="fa-brands fa-whatsapp fa-xl" style="color: #FD4175;"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<script src={{asset('assets/js/font-awesome-pro-6.4.0.min.js')}}></script>
<script src={{asset('assets/js/bootstrap-5.3.min.js')}}></script>
<script>
    const form = document.querySelector(".form");
    const dropdowns = document.querySelectorAll(".dropdown");

    // Check if Dropdowns are Exist
    // Loop Dropdowns and Create Custom Dropdown for each Select Element
    if (dropdowns.length > 0) {
        console.log('reza')
        dropdowns.forEach((dropdown) => {
            createCustomDropdown(dropdown);
        });
    }

    // Check if Form Element Exist on Page
    if (form !== null) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
        });
    }

    // Create Custom Dropdown
    function createCustomDropdown(dropdown) {
        // Get All Select Options
        // And Convert them from NodeList to Array
        const options = dropdown.querySelectorAll("option");
        const optionsArr = Array.prototype.slice.call(options);

        // Create Custom Dropdown Element and Add Class Dropdown
        const customDropdown = document.createElement("div");
        customDropdown.classList.add("dropdown");
        dropdown.insertAdjacentElement("afterend", customDropdown);

        // Create Element for Selected Option
        const selected = document.createElement("div");
        selected.classList.add("dropdown-select");
        selected.textContent = optionsArr[0].textContent;
        customDropdown.appendChild(selected);

        // Create Element for Dropdown Menu
        // Add Class and Append it to Custom Dropdown
        const menu = document.createElement("div");
        menu.classList.add("dropdown-menu");
        customDropdown.appendChild(menu);
        selected.addEventListener("click", toggleDropdown.bind(menu));

        // Create Search Input Element
        const search = document.createElement("input");
        search.placeholder = "Search...";
        search.type = "text";
        search.classList.add("dropdown-menu-search");
        menu.appendChild(search);

        // Create Wrapper Element for Menu Items
        // Add Class and Append to Menu Element
        const menuInnerWrapper = document.createElement("div");
        menuInnerWrapper.classList.add("dropdown-menu-inner");
        menu.appendChild(menuInnerWrapper);

        // Loop All Options and Create Custom Option for Each Option
        // And Append it to Inner Wrapper Element
        optionsArr.forEach((option) => {
            const item = document.createElement("div");
            item.classList.add("dropdown-menu-item");
            item.dataset.value = option.value;
            item.textContent = option.textContent;
            menuInnerWrapper.appendChild(item);

            item.addEventListener(
                "click",
                setSelected.bind(item, selected, dropdown, menu)
            );
        });

        // Add Selected Class to First Custom Select Option
        menuInnerWrapper.querySelector("div").classList.add("selected");

        // Add Input Event to Search Input Element to Filter Items
        // Add Click Event to Element to Close Custom Dropdown if Clicked Outside
        // Hide the Original Dropdown(Select)
        search.addEventListener("input", filterItems.bind(search, optionsArr, menu));
        document.addEventListener(
            "click",
            closeIfClickedOutside.bind(customDropdown, menu)
        );
        dropdown.style.display = "none";
    }

    // Toggle for Display and Hide Dropdown
    function toggleDropdown() {
        if (this.offsetParent !== null) {
            this.style.display = "none";
        } else {
            this.style.display = "block";
            this.querySelector("input").focus();
        }
    }

    // Set Selected Option
    function setSelected(selected, dropdown, menu) {
        // Get Value and Label from Clicked Custom Option
        const value = this.dataset.value;
        const label = this.textContent;

        // Change the Text on Selected Element
        // Change the Value on Select Field
        selected.textContent = label;
        dropdown.value = value;

        // Close the Menu
        // Reset Search Input Value
        // Remove Selected Class from Previously Selected Option
        // And Show All Div if they Were Filtered
        // Add Selected Class to Clicked Option
        menu.style.display = "none";
        menu.querySelector("input").value = "";
        menu.querySelectorAll("div").forEach((div) => {
            if (div.classList.contains("is-select")) {
                div.classList.remove("is-select");
            }
            if (div.offsetParent === null) {
                div.style.display = "block";
            }
        });
        this.classList.add("is-select");
    }

    // Filter the Items
    function filterItems(itemsArr, menu) {
        // Get All Custom Select Options
        // Get Value of Search Input
        // Get Filtered Items
        // Get the Indexes of Filtered Items
        const customOptions = menu.querySelectorAll(".dropdown-menu-inner div");
        const value = this.value.toLowerCase();
        const filteredItems = itemsArr.filter((item) =>
            item.value.toLowerCase().includes(value)
        );
        const indexesArr = filteredItems.map((item) => itemsArr.indexOf(item));

        // Check if Option is not Inside Indexes Array
        // And Hide it and if it is Inside Indexes Array and it is Hidden Show it
        itemsArr.forEach((option) => {
            if (!indexesArr.includes(itemsArr.indexOf(option))) {
                customOptions[itemsArr.indexOf(option)].style.display = "none";
            } else {
                if (customOptions[itemsArr.indexOf(option)].offsetParent === null) {
                    customOptions[itemsArr.indexOf(option)].style.display = "block";
                }
            }
        });
    }

    // Close Dropdown if Clicked Outside Dropdown Element
    function closeIfClickedOutside(menu, e) {
        if (
            e.target.closest(".dropdown") === null &&
            e.target !== this &&
            menu.offsetParent !== null
        ) {
            menu.style.display = "none";
        }
    }

</script>


</body>
</html>
