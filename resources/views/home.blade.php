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
                                <a href="#tentanglitera" class="flex justify-between items-center">Tentang Kami
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="mt-2 lg:mt-0">
                                <a href="#fitur" class="flex justify-between items-center">Fitur Unggulan
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-right-long pt-2"></i>
                                    </div>
                                </a>
                            </li>


                        </ul>
                        <a href="/login"
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
        <section id="home" class="pt-[8rem] lg:pt-[5rem] bg-putih w-full h-full lg:h-screen overflow-hidden ">
            <div class="">
                <div class="flex flex-wrap lg:flex-nowrap justify-center items-center  px-4  lg:gap-4">
                    <div class="w-full  lg:px-4 flex flex-wrap justify-center lg:justify-start lg:gap-4">
                        <h1
                            class="text-[2.8rem] md:text-6xl font-bold text-center lg:text-start text-dark lg:leading-[4rem] leading-[3.5rem]">
                            Aspirasi Mudah dengan <span class="text-dasar">LITERA!</span>



                            <span
                                class="block font-medium pt-4 text-slate-500 text-base md:text-3xl lg:text-xl my-2 lg:whitespace-normal">Layanan
                                pengaduan serta aspirasi secara online. Tempat Anda Menyuarakan Aspirasi dan
                                Pengaduan dengan Mudah.</span>
                        </h1>
                        <div class="mt-6 w-full lg:flex
                         lg:gap-4">

                            <a href="/login"
                                class="text-white font-bold border-b-4 bg-dasar hover:bg-blue-500 hover:scale-95 transition-transform transform lg:w-48 w-full duration-300 lg:py-4 py-3 flex items-center justify-center text-center rounded-xl">
                                Login
                            </a>
                            <a href="/register"
                                class="text-dasar mt-3 lg:mt-0 font-medium border-b-4  bg-putih hover:bg-dasar hover:scale-95 hover:text-putih border-2 border-dasar transition-transform transform duration-300 lg:py-4 py-3 lg:w-48 w-full flex items-center justify-center text-center rounded-xl">
                                Gabung Sekarang
                            </a>



                        </div>
                    </div>

                    <div
                        class="w-full hidden lg:block mx-auto lg:pt-0 lg:scale-110 scale-125 mt-32 md:mt-20 lg:mt-0 pr-2  lg:pr-0">
                        <img src="{{ asset('images/hero-01.webp') }}" class="w-full h-full object-cover"
                            alt="" />
                    </div>
                    <div
                        class="w-full  lg:hidden mx-auto lg:pt-0 lg:scale-110 scale-125 mt-32 md:mt-20 lg:mt-0 pr-2  lg:pr-0">
                        <img src="{{ asset('images/hero-01.webp') }}" class="w-full h-full object-cover"
                            alt="" />
                    </div>
                </div>

            </div>
            <div class="" id="tentanglitera"></div>
        </section>
        <!-- End Home Section -->
        <Section class="container lg:h-screen mt-12  lg:px-8">
            <div>
                <h1 class="text-4xl lg:hidden font-bold">TENTANG <span class="text-dasar">LITERA</span></h1>
            </div>
            <div class="flex flex-col lg:flex-row gap-4 justify-center items-center">
                <div class="hidden lg:block">
                    <div class="w-full mx-auto lg:pt-0 lg:scale-100 scale-125 mt-32 md:mt-20 lg:mt-0 pr-2 lg:pr-0">
                        <img src="{{ asset('images/hero-01.webp') }}" class="w-full h-full object-cover"
                            alt="" />
                    </div>
                </div>
                <div class="flex gap-4 flex-col">
                    <div>
                        <h1 class="text-6xl hidden lg:block text-nowrap font-bold">TENTANG <span
                                class="text-dasar">LITERA</span>
                        </h1>
                    </div>
                    <p class="">Litera (Layanan Inovasi Terpadu dan Respon Aktif) adalah platform pengaduan dan
                        aspirasi masyarakat yang dirancang untuk memudahkan Anda menyampaikan masalah, usulan, atau
                        keluhan secara online. Kami berkomitmen untuk memberikan pelayanan yang cepat, transparan, dan
                        akuntabel, sehingga setiap suara dari masyarakat dapat ditindaklanjuti dengan tepat oleh pihak
                        berwenang.</p>
                    <p id="moreText" class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out">Dengan
                        Litera, Anda tidak hanya sekadar melaporkan, tetapi juga bisa memantau proses penyelesaian
                        setiap laporan secara real-time. Kami percaya bahwa dengan mendengarkan masyarakat, kita bisa
                        menciptakan perubahan positif bersama, menuju pelayanan publik yang lebih baik dan responsif.
                    </p>
                    <div class="mt-2 hidden lg:flex">
                        <button id="readMoreBtn" onclick="toggleText()"
                            class="text-dasar lg:mt-0 font-medium border-b-4 bg-putih hover:bg-dasar hover:scale-95 hover:text-putih border-2 border-dasar transition-transform transform duration-300 lg:py-4 py-3 lg:w-48 w-full flex items-center justify-center text-center rounded-xl">
                            Baca Selengkapnya
                        </button>
                    </div>
                </div>

            </div>
            <div class="lg:mt-2 mt-4">

                <button id="readMoreBtnMobile" onclick="toggleText()"
                    class="text-dasar lg:hidden lg:mt-0 font-medium border-b-4 bg-putih hover:bg-dasar hover:scale-95 hover:text-putih border-2 border-dasar transition-transform transform duration-300 lg:py-4 py-3 lg:w-48 w-full flex items-center justify-center text-center rounded-xl">
                    Baca Selengkapnya
                </button>
                <div id="fitur"></div>
            </div>

        </Section>

        <section class="mt-40 lg:mb-8 lg:mt-0 lg:py-10 lg:px-32">
            <div class="container">
                <div class="mb-8 text-center">
                    <h1 class=" text-4xl lg:text-6xl font-bold pb-4"><span class="text-dasar">FITUR</span> UNGGULAN KAMI
                    </h1>
                    <p>Our vast library of meticulously maintained packages means you're ready for anything. </p>
                </div>
                <div class="lg:flex flex-row-reverse gap-6 lg justify-center lg:mt-12">
                    <div class="flex flex-wrap  gap-5 overflow-hidden">
                        <div data-aos="fade-right"
                            class="w-full h-[10rem] rounded-xl bg-gradient-to-tr from-pink-300 to-pink-600">
                            <div class="w-full h-full flex justify-center items-center flex-col text-white">
                                <i class="fa-regular fa-face-smile text-4xl"></i>
                                <h1 class="font-medium text-2xl mt-4">Layanan Publik</h1>
                            </div>
                        </div>

                        <div data-aos="fade-left"
                            class="w-full h-[10rem] rounded-xl bg-gradient-to-r from-yellow-400 to-amber-200">
                            <div class="w-full h-full flex justify-center items-center flex-col text-white">
                                <i class="fa-solid fa-tablet-screen-button text-4xl"></i>
                                <h1 class="font-medium text-2xl mt-4">Respon Cepat</h1>
                            </div>
                        </div>
                        <div data-aos="fade-right"
                            class="w-full h-[10rem] rounded-xl bg-gradient-to-r from-sky-400 to-purple-300">
                            <div class="w-full h-full flex justify-center items-center flex-col text-white">
                                <i class="fa-solid fa-palette text-4xl"></i>
                                <h1 class="font-medium text-2xl mt-4">Inspirasi
                                </h1>
                            </div>
                        </div>
                        <div data-aos="fade-left"
                            class="w-full h-[10rem] rounded-xl bg-gradient-to-br from-red-500 to-red-200">
                            <div class="w-full h-full flex justify-center items-center flex-col text-white">
                                <i class="fa-solid fa-street-view text-4xl"></i>
                                <h1 class="font-medium text-2xl mt-4">Transparasi</h1>
                            </div>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-duration="1500" class="mt-8 lg:w-4/5">
                        <h1 class="font-bold text-4xl  md:text-5xl mb-2">
                            Kenapa harus Memilih Litera?
                        </h1>

                        <div class="flex gap-4 items-center">
                            <i class="fa-solid fa-check text-blue-400"></i>
                            <p class="text-text-abu text-base font-medium mt-2 lg:mt-4 md:text-xl">
                                Litera menawarkan platform yang user-friendly, sehingga Anda dapat dengan cepat
                                menyampaikan pengaduan atau aspirasi hanya dengan beberapa klik.
                            </p>
                        </div>
                        <div class="flex gap-4 items-center">
                            <i class="fa-solid fa-check text-blue-400"></i>
                            <p class="text-text-abu text-base font-medium mt-2 lg:mt-4 lg:text-xl">
                                Setiap laporan yang masuk akan diproses secara terbuka, dan Anda dapat memantau
                                perkembangan serta melihat respons langsung dari pihak terkait.
                            </p>
                        </div>
                        <div class="flex gap-4 items-center">
                            <i class="fa-solid fa-check text-blue-400"></i>
                            <p class="text-text-abu text-base font-medium mt-2 lg:mt-4 lg:text-xl">
                                Laporan Anda tidak akan hilang begitu saja. Anda bisa melacak status dan tindak lanjut
                                dari pengaduan yang sudah diajukan.
                            </p>
                        </div>
                        <div class="flex gap-4 items-center">
                            <i class="fa-solid fa-check text-blue-400"></i>
                            <p class="text-text-abu text-base font-medium mt-2 lg:mt-4 lg:text-xl">
                                Litera berkomitmen memberikan tanggapan cepat dari instansi terkait, memastikan setiap
                                laporan ditangani dengan serius dan efisien.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-12 py-8 lg:py-32 bg-dasar ">
            <div class="lg:flex justify-between items-center  lg:px-12">
                <div class="mb-8">
                    <h1 class="text-4xl font-bold pb-2 text-putih">Hubungi kami jika anda mengalami keluhan</h1>
                </div>
                <div class="bg-putih px-4 py-6 rounded-md lg:w-3/4 shadow-xl">
                    <form action="#" class="space-y-8">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                placeholder="Nama..." required>
                        </div>
                        <div>
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keluhan</label>
                            <input type="text" id="subject"
                                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                placeholder="Biarkan kami mengetahui keluhan kamu" required>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="py-3 px-5 text-sm  text-center text-dark font-bold rounded-lg bg-green-200 sm:w-fit hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-200 ">Kirim
                                Pesan</button>
                        </div>

                    </form>
                </div>
            </div>

        </section>

        {{-- Footer --}}

        <footer class="bg-slate-100 w-full pt-4 pb-8 lg:pb-2 ">
            <div class="container">
                <div class="lg:flex justify-start gap-8">
                    <a href="#" class="text-primary flex justify-center text-xs pb-2">Cretated with <span
                            class="text-red-600"> ❤ </span> Litera
                    </a>
                    <ul class="list-disc text-primary text-xs flex gap-4 justify-center flex-wrap">
                        <li><a href="#" class="lg:pr-4">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        {{-- End Footer --}}

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
        <script>
            function toggleText() {
                const moreText = document.getElementById('moreText');
                const readMoreBtn = document.getElementById('readMoreBtn');
                const readMoreBtnMobile = document.getElementById('readMoreBtnMobile');

                if (moreText.style.maxHeight === '0px' || !moreText.style.maxHeight) {
                    moreText.style.maxHeight = moreText.scrollHeight + 'px'; // Mengatur max-height ke tinggi konten
                    readMoreBtn.textContent = 'Tampilkan Sedikit';
                    readMoreBtnMobile.textContent = 'Tampilkan Sedikit';
                } else {
                    moreText.style.maxHeight = '0px'; // Menyembunyikan konten dengan transisi
                    readMoreBtn.textContent = 'Baca Selengkapnya';
                    readMoreBtnMobile.textContent = 'Baca Selengkapnya';
                }
            }
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- End JS -->
    </div>
</x-layout>
