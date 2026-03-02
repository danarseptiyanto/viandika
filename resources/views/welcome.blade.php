<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta-Story Demo</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-pagination-bullet {
            height: 8px;
            width: 100%;
            border-radius: 200px;
            background: rgba(255, 255, 255, 0.3);
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #fff;
        }

        /* Custom "Progress Bar" Look */
        .swiper-pagination {
            bottom: 30px !important;
            top: auto !important;
            display: flex;
            padding: 0 20px;
            gap: 2px;
        }
    </style>
</head>

<body class="bg-black p-0 h-dvh w-full overflow-hidden flex items-center justify-center">

    <div class="relative w-full h-full max-w-[400px] bg-zinc-900 shadow-2xl overflow-hidden md:svh">

        <div class="swiper mySwiper h-full w-full">
            <div class="swiper-wrapper">
                <div class="swiper-slide relative bg-[#F2F2F2] flex items-center justify-center">
                    <div class="pt-10 text-center">
                        <div>
                            <p class="font-serif text-lg text-[#767676] font-semibold"> - Dear - </p>
                            <p class="text-xl font-bold">Firda Yuliana Sari</p>
                            <p class="text-lg text-[#767676] text-[14px]">(PT Adalah Itulah)</p>
                        </div>
                        <p class="font-serif text-2xl font-semibold max-w-[220px] mx-auto pt-5">You’re Invited To The Wedding Of</p>
                        <img src="/img/nama.svg" class="w-auto px-5 mx-auto">

                    </div>
                    <img src="/img/foto1.png" class="md:-bottom-10 absolute w-max right-0 -bottom-5">
                </div>

                <div
                    class="swiper-slide relative bg-gradient-to-tr from-pink-500 to-orange-400 flex items-center justify-center p-8">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold mb-4">Visuals</h2>
                        <p class="opacity-80">Smooth transitions using Swiper.js and Tailwind.</p>
                    </div>
                </div>

                <div
                    class="swiper-slide relative bg-gradient-to-tr from-green-400 to-cyan-500 flex items-center justify-center p-8">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold mb-4">Interaction</h2>
                        <p class="opacity-80">Swipe, click the buttons, or use your keyboard.</p>
                    </div>
                </div>

                <div class="swiper-slide relative bg-red-300 flex items-center justify-center p-8">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold mb-4">The End</h2>
                        <button onclick="restartStory()"
                            class="mt-6 px-6 py-2 bg-white text-black rounded-full font-semibold active:scale-95 transition-transform">
                            Restart
                        </button>
                    </div>
                </div>
                <div class="swiper-slide relative bg-white flex items-center justify-center p-8">
                    <div class="text-white text-center">
                        <h2 class="text-4xl font-bold mb-4">The End</h2>
                        <button onclick="restartStory()"
                            class="mt-6 px-6 py-2 bg-white text-black rounded-full font-semibold active:scale-95 transition-transform">
                            Restart
                        </button>
                    </div>
                </div>

            </div>
            <button
                class="prev-el absolute left-6 bottom-10 -translate-y-1/2 z-20 bg-white/40 px-5 py-1.5 rounded-full backdrop-blur-md text-black hover:bg-white/40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 aspect-square" width="24" height="24"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                class="next-el absolute right-6 bottom-10 -translate-y-1/2 z-20 bg-white/40 px-5 py-1.5 rounded-full backdrop-blur-md text-black hover:bg-white/40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 aspect-square" width="24" height="24"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <div class="swiper-pagination"></div>

            <div class="absolute bottom-0 z-1 left-0 bg-linear-to-t from-black/50 to-transparent h-40 w-full"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper(".mySwiper", {
            // Instagram "Cube" or "Slide" effect
            effect: "slide",
            speed: 400,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".next-el",
                prevEl: ".prev-el",
            },
            // Enable touch swipe
            grabCursor: true,
            keyboard: {
                enabled: true,
            },
        });



        function restartStory() {
            swiper.slideTo(0);
        }
    </script>
</body>

</html>