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

                                <form
                                    class="card mx-auto"
                                    style="width: 100%"
                                    action="/wego/projectStore"
                                    method="post"
                                    enctype="multipart/form-data"
                                    onkeydown="return event.key !='Enter';">
                                    @csrf
                                    <div>
                                        <!-- 프로젝트 명 -->

                                        <div>
                                            <input
                                                id=""
                                                name="projectTitle"
                                                type="text"
                                                required="required"
                                                class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                                placeholder="프로젝트 명을 입력해 주세요."></div>


                                            <div class="add_people">
                                                <!-- 팀원추가 -->
                                                <label for="exampleFormControlInput1" onclick="team_email_Plus()">
                                                    팀원추가
                                                </label>

                                            
                                                <div>
                                                    <label for="email-address" class="sr-only">Email address</label>
                                                    <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                                                  </div>

                                                  <div class="form-group" id="add_people"></div>

                                            </div>
                                            <br>

                                                <div>
                                                    <!-- 프로젝트 개요 -->

                                                    <label >
                                                        <span class="text-gray-700">프로젝트 개요</span>
                                                        <textarea
                                                            class="form-textarea mt-1 block w-full"
                                                            name="outline"
                                                            rows="5"
                                                            placeholder="프로젝트에 대한 개요를 써 주세요."></textarea>
                                                    </label>
                                                </div>

                                         <div>
                                            
                                        <label class="text-sm font-medium text-gray-900 block mb-2" for="user_avatar">첨부파일 선택</label>
                                        <input class="block w-full cursor-pointer bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none focus:border-transparent text-sm rounded-lg" aria-describedby="user_avatar_help" name="file" id="user_avatar" type="file">
                                        

                                         </div>

                                                <div>
                                                    <label >
                                                        <span class="text-gray-700">기대효과</span>
                                                        <textarea
                                                            class="form-textarea mt-1 block w-full mb-5"
                                                            name="expectation"
                                                            rows="3"
                                                            placeholder="프로젝트에 대한 기대효과를 써 주세요."></textarea>
                                                    </label>
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
                                                    type="submit">
                                                    저장하기
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- Card -->

                                </div>
                            </div>
                        </div>
                    </div>
                </x-app-layout>

                <script>

                    function peopleDiv() {
                        let num = $("select[name=people]").val();

                        $('#add_people').empty();

                        for (i = 0; i < num; i++) {

                            let temp_html = `
                        <input
                            type="email"
                            class="form-control"
                            id="emailInput"
                            placeholder="팀원의 이메일 주소를 적어 주세요">
        
                        `;
                            $('#add_people').append(temp_html)

                        }

                    }
                </script>