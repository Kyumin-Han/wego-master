<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-2 bg-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
              참여한 프로젝트

                </div>
                @foreach ($projects as $project)
                    <div class="p-6 bg-white border-b border-gray-200">
                        프로젝트 이름: <a href="{{ route('showProject', ['id'=>$project->id, 'page'=>$projects->currentPage()]) }}">{{ $project->name }}</a> <br>
                        프로젝트 개요: {{ $project->outline }}<br>
                        기대효과: {{ $project->explanation }}<br>
                        팀장: {{ $project->user->name }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5">
        {{ $projects->links() }}
    </div>

    <div class="py-2 bg-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
              생성한 프로젝트

                </div>
                @foreach ($ownprojects as $ownproject)
                    <div class="p-6 bg-white border-b border-gray-200">
                        프로젝트 이름: <a href="{{ route('showProject', ['id'=>$ownproject->id, 'page'=>$ownprojects->currentPage()]) }}">{{ $ownproject->name }}</a> <br>
                        프로젝트 개요: {{ $ownproject->outline }}<br>
                        기대효과: {{ $ownproject->explanation }}<br>
                        팀장: {{ $ownproject->user->name }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5">
        {{ $ownprojects->links() }}
    </div>
</x-app-layout>
