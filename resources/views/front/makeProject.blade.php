<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-2 bg-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 " >
            <div class="bg-purple-200 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-purple-200 border-b border-gray-200">

                    <!-- Card -->
                    <div
                        class="shadow-md rounded-md overflow-hidden mx-auto text-center bg-white"
                        style="width: 70%;">
                        <div class="py-3 px-5 bg-gray-100">
                            <img
                                class="logo"
                                alt="WEGO"
                                src="/image/HatchfulExport-All/logo_transparent.png"></div>

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

                                        


                                        <div>
                                            <div class="form-group">
                                                <label for="peopleid">최대 참여 인원 선택</label>
                                                <select class="form-control" name="people" id="peopleid" onchange="peopleDiv()">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>


                                        

                                        <div class="add_people">
                                            <!-- 팀원추가 -->
                                            <label for="exampleFormControlInput1" onclick="team_email_Plus()">
                                                팀원추가
                                            </label>

                                            <div class="form-group" id="add_people"></div>

                                        </div>
                                        <br>

                                            <div>
                                                <!-- 프로젝트 개요 -->
                                                <div class="form-group">
                                                    <label for="exampleFormControlTextarea1">프로젝트 개요</label>
                                                    <textarea
                                                        class="form-control"
                                                        name="outline"
                                                        id="exampleFormControlTextarea1"
                                                        rows="5"></textarea>
                                                </div>
                                                <br>
                                                    <!-- 첨부파일 -->
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Example file input</label>
                                                        <input
                                                            type="file"
                                                            name="files[]"
                                                            class="form-control-file"
                                                            id="exampleFormControlFile1"></div>
                                                    </div>

                                                    <div>
                                                        <!-- 기대 효과 -->
                                                        <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">기대효과</label>
                                                            <textarea
                                                                class="form-control"
                                                                name="expectation"
                                                                id="exampleFormControlTextarea1"
                                                                rows="3"></textarea>
                                                        </div>
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
                                                                px-4
                                                                py-2
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
                                                        Button
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