<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 bg-purple-200" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div
                        class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                        <div class="max-w-md w-full space-y-8">
                            <div>
                                @if( auth()->user()->image != null )
                                <form action="{{ route('profileUpdate', ['id'=>auth()->user()->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <img
                                    class="mx-auto h-12 w-auto"
                                    src="{{ auth()->user()->imagePath() }}"
                                    alt="프로필 사진">
                                @else
                                <form action="{{ route('profileUpdate', ['id'=>auth()->user()->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                @endif
                                    <label
                                        class="
                                                w-30
                                                mt-5
                                                flex flex-col
                                                items-center
                                                px-10
                                                py-2
                                                bg-white
                                                rounded-md
                                                shadow-md
                                                tracking-wide
                                                uppercase
                                                border border-blue
                                                cursor-pointer
                                                hover:bg-purple-600 hover:text-white
                                                text-purple-600
                                                ease-linear
                                                transition-all
                                                duration-15
                                            ">
                                        <span class="mt-2 text-base leading-normal">프로필 이미지를 설정 하세요!</span>
<<<<<<< HEAD
                                        
=======
                                        <form action="{{ route('profileUpdate', ['id'=>auth()->user()->id]) }}">
                                            @csrf
>>>>>>> 8213e86aa5ca87dc31c4000c7548117cb7095111
                                            <input type="file" name="imageFile" class="hidden"/>
                                        
                                    </label>

                                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                        {{ auth()->user()->name }}
                                    </h2>

                                </div>
                                <form class="mt-8 space-y-6" action="{{ route('profileUpdate', ['id'=>auth()->user()->id]) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="remember" value="true">

                                        <div>
                                            <input
                                                id=""
                                                name="introduce"
                                                type="text"
                                                required="required"
                                                class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                placeholder="자신을 자유롭게 표현 해 보세요!"
                                                value="{{ old('introduce') ? old('introduce') : auth()->user()->introduce }}"></div>

                                            <div>
                                                <input
                                                    id=""
                                                    name="tech"
                                                    type="text"
                                                    required="required"
                                                    class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                    placeholder="자신이 사용할 수 있는 기술을 적어 주세요!"
                                                    value="{{ old('tech') ? old('tech') : auth()->user()->tech }}"></div>

                                                <div>
                                                    <input
                                                        id=""
                                                        name="address"
                                                        type="text"
                                                        required="required"
                                                        class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                        placeholder="이메일 주소나, 깃허브 주소등 연락처를 적어주세요!"
                                                        value="{{ old('address') ? old('address') : auth()->user()->address }}"></div>

                                                    <div>
                                                        <button
                                                            type="submit"
                                                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-white hover:text-purple-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            저장
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </x-app-layout>