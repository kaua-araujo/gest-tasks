<div>
        {{-- Card principal --}}
        <div class="container mx-auto bg-gray-100 p-10">
            <div class='max-w-md mx-auto space-y-6'>
                {{-- cards tasks --}}
                <div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover">
                    @foreach ($tasks as $task)    
                        <div class="bg-white border border-white shadow-lg  rounded-3xl p-4 m-4">
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
                                            <p class=""> {{ date( 'd/m/Y' , strtotime($task->start_date)) }} </p>
                                        </div>
                                        @switch($task->status)
                                            @case('approved')
                                                <div class=" pl-6 plr-6  flex-1 inline-flex items-center">
                                                    <div class="bg-emerald-300 rounded-lg">
                                                        <p class="p-1">Aprovado</p>
                                                        
                                                    </div>
                                                </div>
                                                @break
                                            @case('progress')
                                                <div class=" pl-6 plr-6  inline-flex items-center">
                                                    <div class="bg-yellow-300 rounded-lg ">
                                                        <p class="p-1">Em progresso</p>
                                                        
                                                    </div>
                                                </div>
                                                @break
                                            @case('canceled')
                                                <div class=" pl-6 plr-6 flex-1 inline-flex items-center">
                                                    <div class="bg-rose-500 rounded-lg">
                                                        <p class="p-1">Cancelado</p>
                                                    </div>
                                                </div>
                                                @break
                                        @endswitch
                                        
                                        <button  class="flex-no-shrink bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300">
                                            <i class="fa-solid fa-eye"></i>
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


        {{-- <form action="">
            <label for="title">Titulo</label>
            <br>
            <input type="text" placeholder="Informe o titulo da terefa">
            <br>
            <label for="description">Descrição</label>
            <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <label for="status">Status</label>
            <br>
            <select name="status" id="status">
                <option value="completed">Concluido</option>
                <option value="progress">Em progresso</option>
                <option value="canceled">Cancelado</option>
            </select>
            <label for="start_date">Data de inicio</label>
            <br>
            <input type="date">
            <br>
            <label for="end_date">Data de Término</label>
            <br>
            <input type="date">
            <br>
            <label for="categorie_id">Categoria</label>
            <br>
            <select name="categorie_id" id="categorie_id">
                
            </select>
            <br>
        </form> --}}

    {{-- @foreach ($tasks as $task)
        {{ $task->title }} - {{ $task->categorie->title }}
        <br>
    @endforeach --}}
</div>
