<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 bg-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-purple-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-purple-200 border-b border-gray-200">

                    <!-- Card -->
                    <div
                        class="shadow-md rounded-md overflow-hidden mx-auto text-center bg-white"
                        style="width: 70%;">
                        <div class="py-3 px-5 bg-gray-100">
                            <img
                                class="logo w-1/12 mx-auto"
                                alt="WEGO"
                                src="{{'/storage/images/logo.png' }}"></div>

                            <div class="p-5">

                                <div class="card mx-auto">
                                    <!-- 프로젝트 명 -->

                                    <div>
                                        <div
                                            name="projectTitle"
                                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                            프로젝트 명 출력 해야 함</div>

                                        <div
                                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">

                                            <div
                                                >
                                                팀원
                                            </div>
                                            <div class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                                이메일 받아와서 출력 하나 씩
                                            </div>
                                        </div>

                                        <label for="">프로젝트 개요</label>
                                        <div
                                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                            여기다 들어와야된다잉
                                        </div>

                                        <label>
                                            첨부파일
                                        </label>
                                        <div
                                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                            여기다 들어와야된다잉
                                        </div>


                                        <label for="">기대효과</label>
                                        <div
                                            class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                            여기다 들어와야된다잉
                                        </div>
                                            
                                    </div>

                                    <div class="py-3 px-5 bg-gray-100">
                                        <button
                                            class="
                                                                bg-purple-500
                                                                text-white
                                                                active:bg-purple-600
                                                                font-bold
                                                                uppercase
                                                                text-xs
                                                                px-6
                                                                py-4
                                                                rounded
                                                                shadow
                                                                hover:shadow-md
                                                                outline-none
                                                                focus:outline-none
                                                                mr-1
                                                                mb-1
                                                                ease-linear
                                                                transition-all
                                                                duration-150
                                                                "
                                            type="button">
                                            목록보기
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>