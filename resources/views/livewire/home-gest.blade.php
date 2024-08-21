<div>
    @if ($errors->any())
        <div class="error hidden">
            {{ $errors->first() }}
        </div>
    @endif
    <div class="flex items-center justify-center  content-center p-10">
        {{-- Card principal --}}
        <div class="mx-auto rounded-lg bg-gray-100 p-10 shadow-2xl">
            <div class="flex items-center justify-center">
                <div class="text-6xl font-semibold text-black">
                    GestTask
                </div>
            </div>
            <div class="pt-10 items-center md:flex md:justify-center sm:flex sm:flex-col">
                <div class="flex flex-col md:flex-row md:">
                    <a href="{{ route('indexCategories') }}">
                        <button class="middle none center w-full md:w-auto h-10 mr-3 rounded-lg bg-cyan-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-cyan-500/20 transition-all hover:shadow-lg hover:shadow-cyan-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                            Categorias
                            <i class="fa-solid fa-list"></i>
                        </button>
                    </a>
                    <a href="{{ route('formCreateTask') }}" class="pt-5 md:pt-0">
                        <button class="middle none center w-full  md:w-auto h-10 mr-3 rounded-lg bg-emerald-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-emerald-500/20 transition-all hover:shadow-lg hover:shadow-emerald-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                            Nova Tarefa
                            <i class="fa-solid fa-plus p-1"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class='max-w-md mx-auto space-y-6'>
                {{-- cards tasks --}}
                <div class="pt-10 flex flex-col items-center bg-center bg-cover">
                    @if (count($tasks) < 1)
                        <div class=" font-semibold">
                            Nenhuma task encontrada!
                        </div>
                    @endif
                    @foreach ($tasks as $task)
                        <div class="bg-white border border-white shadow-lg w-full rounded-3xl p-4 m-4">
                            <div class="flex-none sm:flex">
                                <div class="flex-auto sm:ml-5 justify-evenly">
                                    <div class="flex items-center justify-between sm:mt-2">
                                        <div class="flex items-center">
                                            <div class="flex flex-col">
                                                <div class="w-full flex-none text-lg text-gray-800 font-bold leading-none">
                                                    {{ $task->title }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex pt-2  text-sm text-gray-500">
                                        <div class="flex-1 inline-flex items-center">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <p class="ml-1"> {{ date( 'd/m/Y' , strtotime($task->start_date)) }} </p>
                                        </div>
                                        @switch($task->status)
                                            @case('completed')
                                                <div class="flex items-center">
                                                    <div class="middle none center rounded-lg border border-emerald-300 py-1 px-1 font-sans text-xs font-bold uppercase text-emerald-500 transition-all hover:opacity-75 focus:ring focus:ring-emerald-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                        <p class="p-1">Concluido</p>

                                                    </div>
                                                </div>
                                                @break
                                            @case('progress')
                                                <div class=" flex items-center">
                                                    <div class="middle none center rounded-lg border border-yellow-300 py-1 px-1 font-sans text-xs font-bold uppercase text-yellow-500 transition-all hover:opacity-75 focus:ring focus:ring-yellow-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                        <p class="p-1">Em progresso</p>

                                                    </div>
                                                </div>
                                                @break
                                            @case('canceled')
                                                <div class="flex items-center">
                                                    <div class="middle none center rounded-lg border border-rose-300 py-1 px-1 font-sans text-xs font-bold uppercase text-rose-500 transition-all hover:opacity-75 focus:ring focus:ring-rose-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                                        <p class="p-1">Cancelado</p>
                                                    </div>
                                                </div>
                                                @break
                                        @endswitch

                                    </div>
                                    <div class="flex items-center content-center justify-center">
                                        <div class="mt-2 middle none center mr-3 rounded-lg py-3 px-2 font-sans text-xs font-bold uppercase text-gray-500 transition-all hover:opacity-75 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                            Categoria: {{ $task->categorie->title }}
                                        </div>
                                        <a href="{{ route('showTask', $task->id) }}">
                                            <button  class="flex-no-shrink mt-2 bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300">
                                                <i class="fa-solid fa-pen"></i>
                                            </button>
                                        </a>
                                       
                                        <button id="{{$task->id}}" name={{$task->title}} class="deleteButtonTask flex-no-shrink mt-2 bg-rose-400 hover:bg-rose-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-rose-300 hover:border-rose-500 text-white rounded-full transition ease-in duration-300">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- fim cards tasks --}}
            </div>
        </div>
    </div>
</div>
