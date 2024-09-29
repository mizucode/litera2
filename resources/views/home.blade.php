<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <!-- Header -->
        <header class="homepage-header">
            <div class="py-4 lg:py-6 flex justify-between items-center  px-4 lg:px-8">
                <div class="flex justify-between items-center text-white" id="logo">
                    <h1 class="font-bold text-2xl md:text-3xl lg:text-5xl">
                        <a href="#">Litera</a>
                    </h1>
                </div>
                <div class="lg:hidden">
                    <button id="hamburger-open" onclick="">
                        <i class="fa-solid fa-bars text-2xl md:text-3xl text-white" id="hamburger-open-bars"></i>
                    </button>
                </div>
                <nav class="absolute z-50 lg:static lg:flex justify-between items-center lg:top-0 w-full lg:w-auto h-[25rem] lg:h-auto nonactive left-0 bg-white lg:bg-transparent mx-auto lg:mx-0 transition-all duration-300 ease-in-out"
                    id="navbar-menu">
                    <div
                        class="px-8 lg:px-0 pt-16 lg:pt-0 font-medium text-black lg:flex justify-center gap-8 items-center">
                        <h3 class="opacity-40 lg:hidden">Litera Menu</h3>
                        <ul class="mt-2 lg:flex justify-around lg:justify-between gap-8 lg:gap-8 items-center lg:text-white lg:text-xl"
                            id="navbar-ul">
                            <li class="">
                                <a href="" class="flex justify-between items-center">Homepage
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-2 lg:mt-0">
                                <a href="" class="flex justify-between items-center">Koleksi
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-2 lg:mt-0">
                                <a href="" class="flex justify-between items-center">Repositori
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-2 lg:mt-0">
                                <a href="" class="flex justify-between items-center">Rekomendasi
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-2 lg:mt-0">
                                <a href="" class="flex justify-between items-center">Link
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <a href=""
                            class="bg-ungu lg:hidden w-full mt-12 lg:mt-0 lg:px-8 hover:bg-blue-400 rounded-md flex justify-center">
                            <span class="py-2">Login</span>
                        </a>
                        <button type="button" id="hamburger-close" class="lg:hidden">
                            <i class="fa-solid fa-xmark absolute top-6 text-xl right-8"></i>
                        </button>
                    </div>
                </nav>
                <div class="w-full overflow-auto lg:hidden h-screen z-40 absolute bg-black opacity-50 hidden top-0 left-0 transition-all duration-300 ease-in-out"
                    id="overlay"></div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Home Section -->
        <section id="home" class="pt-[5rem] lg:pt-[5rem] bg-putih w-full h-full lg:h-screen overflow-hidden ">
            <div class="">
                <div class="flex flex-wrap lg:flex-nowrap justify-center items-center  px-4  lg:gap-4">
                    <div class="w-full  lg:px-4 flex flex-wrap justify-center lg:justify-start lg:gap-4">
                        <h1
                            class="text-[2.8rem] md:text-6xl font-bold text-center lg:text-start text-dark lg:leading-[4rem] leading-[3rem]">
                            Aspirasi Mudah dengan <span class="text-dasar">Litera!</span>



                            <span
                                class="block font-medium pt-4 text-slate-500 text-base md:text-3xl lg:text-xl my-2 lg:whitespace-normal">Layanan
                                pengaduan serta aspirasi secara online. Tempat Anda Menyuarakan Aspirasi dan
                                Pengaduan dengan Mudah.</span>
                        </h1>
                        <div class="mt-6 w-full lg:flex
                         lg:gap-4">

                            <a href="/register"
                                class="text-white font-bold border-b-4 bg-dasar hover:bg-blue-500 hover:scale-95 transition-transform transform lg:w-48 w-full duration-300 lg:py-4 py-3 flex items-center justify-center text-center rounded-xl">
                                Login
                            </a>
                            <a href="/register"
                                class="text-dasar mt-3 lg:mt-0 font-medium border-b-4  bg-putih hover:bg-dasar hover:scale-95 hover:text-putih border-2 border-dasar transition-transform transform duration-300 lg:py-4 py-3 lg:w-48 w-full flex items-center justify-center text-center rounded-xl">
                                Gabung Sekarang
                            </a>



                        </div>
                    </div>

                    <div class="w-full mx-auto lg:pt-0 lg:scale-110 scale-125 mt-32 md:mt-20 lg:mt-0 pr-2  lg:pr-0">
                        <img src="{{ asset('images/hero-01.webp') }}" class="w-full h-full object-cover"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->



        <section class="pb-96"></section>

        <!-- Javascript -->
        <script>
            const navbarNav = document.querySelector("#navbar-menu");
            const hamburgerOpen = document.querySelector("#hamburger-open");
            const hamburgerClose = document.querySelector("#hamburger-close");
            const overlay = document.querySelector("#overlay");

            const toggleMenu = () => {
                hamburgerOpen.classList.toggle("active");
                hamburgerOpen.classList.toggle("nonactive");
                navbarNav.classList.toggle("active");
                navbarNav.classList.toggle("nonactive");
                overlay.classList.toggle("block");
                overlay.classList.toggle("hidden");
            };

            hamburgerOpen.addEventListener("click", toggleMenu);
            hamburgerClose.addEventListener("click", toggleMenu);

            window.addEventListener("scroll", function() {
                const header = document.querySelector("header");
                const fixedNav = header.offsetTop;
                const homepageBars = document.querySelector(
                    "#hamburger-open-bars"
                );
                const logo = document.querySelector("#logo");
                const navbarUl = document.querySelector("#navbar-ul");

                if (window.pageYOffset > fixedNav) {
                    header.classList.remove("homepage-header");
                    header.classList.add("navbar-fixed");
                    logo.classList.replace("text-white", "text-black");
                    homepageBars.classList.replace("text-white", "text-black");
                    navbarUl.classList.replace(
                        "lg:text-white",
                        "lg:text-black"
                    );
                } else {
                    header.classList.add("homepage-header");
                    header.classList.remove("navbar-fixed");
                    logo.classList.replace("text-black", "text-white");
                    homepageBars.classList.replace("text-black", "text-white");
                    navbarUl.classList.replace(
                        "lg:text-black",
                        "lg:text-white"
                    );
                }
            });

            const countingElements = document.querySelectorAll(".counting");
            const options = {
                threshold: 0.5,
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const targetValue = parseFloat(
                            entry.target.getAttribute("data-target")
                        );
                        let currentValue = 0;
                        const increment = targetValue / 100;

                        const updateValue = () => {
                            if (currentValue < targetValue) {
                                currentValue += increment;
                                if (targetValue === 803) {
                                    entry.target.innerText = `${Math.floor(
                                        currentValue
                                    )}K`;
                                } else {
                                    entry.target.innerText =
                                        targetValue % 1 === 0 ?
                                        Math.floor(currentValue) :
                                        currentValue.toFixed(1);
                                }
                                setTimeout(updateValue, 10);
                            } else {
                                if (targetValue === 803) {
                                    entry.target.innerText = `${targetValue}K`;
                                } else {
                                    entry.target.innerText =
                                        targetValue % 1 === 0 ?
                                        targetValue :
                                        targetValue.toFixed(1);
                                }
                            }
                        };

                        updateValue();
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            countingElements.forEach((element) => {
                observer.observe(element);
            });
        </script>
        <!-- End JS -->
    </div>
</x-layout>
