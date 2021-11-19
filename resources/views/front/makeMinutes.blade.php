<x-app-layout>
    <x-slot name="header">
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
         여기는 회의록 작성 페이지에요~
         <img
         class="logo"
         alt="사진없어여"
         src="{{ '/storage/images/logo.png' }}">
     <form
         action="/wego/minuteStore"
         method="post"
         enctype="multipart/form-data"
         onkeydown="return event.key !='Enter';">
         @csrf

         <div class="form-group">
             <label for="exampleFormControlSelect1">프로젝트 명을 선택해 주세요.</label>
             <select class="form-control" name="pname" id="exampleFormControlSelect1">
                @foreach ($projects as $project)
                    <option>{{ $project->name }}</option>
                @endforeach
             </select>
         </div>

         <br>

         <div>
             <div class="form-group">
                 <label for="exampleFormControlTextarea1">오늘 회의 할 내용</label>
                 이전 회의록의 다음 회의할 회의 내용을 받아와서 출력
             </div>
             <br>
                <!-- 회의내용 -->
                <div class="form-group">
                 <label for="exampleFormControlTextarea1">회의 내용</label>
                 <textarea
                     class="form-control"
                     name="todo"
                     id="exampleFormControlTextarea1"
                     rows="3"></textarea>
             </div>


             <!-- 다음 회의할 내용 -->
             <div class="form-group">
                 <label for="exampleFormControlTextarea1">다음 회의 내용</label>
                 <textarea
                     class="form-control"
                     name="nexttodo"
                     id="exampleFormControlTextarea1"
                     rows="3"></textarea>
             </div>

             <!-- 첨부파일 -->
             <div class="form-group">
                 <label for="exampleFormControlFile1">Example file input</label>
                 <input
                     type="file"
                     name="file"
                     class="form-control-file"
                     id="exampleFormControlFile1">
             </div>

             
             <br>
             <button type="submit" class="btn btn-primary">저장</button>
             </form>

         </div>

         <button type="submit" class="btn btn-primary">저장 후 팀원들에게 회의록 보내기</button>
     </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


