<x-app-layout>
    <x-slot name="header"></x-slot>

</x-app-layout>

<!-- component -->
<link
    rel="stylesheet"
    href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link
        rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

        <main class="profile-page">
            <section class="relative py-16 bg-blueGray-200">
                <div class="container mx-auto px-4 py-2 bg-purple-200">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                        <div class="px-6">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
                                    <div class="relative">
                                        @if( auth()->user()->image != null )
                                        <img
                                            class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                                            src="{{ auth()->user()->imagePath() }}"
                                            alt="프로필 사진">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"></div>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-1">
                                        <div class="flex justify-center py-4 lg:pt-4 pt-8"></div>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                        {{ auth()->user()->name }}
                                    </h3>
                                    <div class="mb-2 text-blueGray-600 mt-10">
                                        <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>{{ auth()->user()->tech }}
                                    </div>
                                    <div class="mb-2 text-blueGray-600">
                                        <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>{{ auth()->user()->address }}
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full lg:w-9/12 px-4">
                                            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                                {{ auth()->user()->introduce }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </main>