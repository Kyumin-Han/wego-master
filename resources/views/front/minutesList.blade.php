<x-app-layout>
    <x-slot name="header">
        
    </x-slot>

    <div class="py-2 bg-purple-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($minutes as $minute)
                    <div class="p-6 bg-white border-b border-gray-200">
                        프로젝트 이름 : {{ $minute->project->name }}<br>
                        회의 내용 : {{ $minute->todo }}<br>
                        다음 회의 내용 : {{ $minute->nexttodo }}<br>
                        @if($minute->file != null)
                        첨부된 파일 : {{ $minute->file }}
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
