<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
              여기는 진행중인 프로젝트 리스트 보는 페이지에요 하이~

                </div>
                @foreach ($projects as $project)
                    @if (auth()->user()->id == $project->user->id)
                        <div class="p-6 bg-white border-b border-gray-200">
                            프로젝트 이름: {{ $project->name }} <br>
                            프로젝트 개요: {{ $project->outline }}<br>
                            기대효과: {{ $project->explanation }}<br>
                            팀장: {{ $project->user->name }}
                        </div>
                    {{-- @elseif (auth()->user()->id == ) --}}
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5">
        {{ $projects->links() }}
    </div>
</x-app-layout>
