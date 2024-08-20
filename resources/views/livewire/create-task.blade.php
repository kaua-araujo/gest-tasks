<div>
    <div class="flex items-center justify-center md:p-12">
        <div class="md:block mx-auto rounded-lg bg-gray-100 md:p-5 shadow-2xl w-full">
            <div class="mx-auto w-full bg-white shadow-2xl">
                <div class="py-6 px-9">
                    <a href="{{route('home')}}">
                        <button class="middle none center mr-3 rounded-lg border border-yellow-400 py-3 px-6 font-sans text-xs font-bold uppercase text-yellow-500 transition-all hover:opacity-75 focus:ring focus:ring-yellow-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Voltar
                        </button>
                    </a>
                </div>
                <div class=" flex items-center justify-center">
                    <div class=" text-2xl font-semibold text-[#07074D]">
                        Cadastrar Tarefa
                    </div>
                </div>

                <form class="py-6 px-9" action="" method="POST">
                    <div class="mb-5">
                        <label for="title" class="mb-3 block text-xl font-semibold text-[#07074D]">
                            Titulo:
                        </label>
                        <input type="text" name="title" id="title" placeholder="Informe o titulo da tarefa" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                    </div>
            
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Descrição da tarefa:
                        </label>
                        <div class="mb-8">
                            <textarea name="description" id="description" cols="30" rows="10" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Informe a descrição" ></textarea>
                        </div>

                        <label for="start_date" class="mb-5 block text-xl font-semibold text-[#07074D]">Data de inicio</label>
                        <div class="relative mb-5">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input type="date" name="start_date" id="start_date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        </div>

                        <label for="end_date" class="mb-5 block text-xl font-semibold text-[#07074D]">Data de Término</label>
                        <div class="relative mb-5">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-2 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input type="date" name="end_date" id="end_date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                        </div>
                    
                        <label for="categorie_id" class="mb-5 block text-xl font-semibold text-[#07074D]">Categoria</label>
                        <select name="categorie_id" id="categorie_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                            <option value="" class="">Selecione a categoria</option>
                            @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}"> {{$categorie->title}} </option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="flex content-center justify-center">
                        <button class="hover:shadow-form md:w-6/12 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none hover:drop-shadow[#6A64F1] focus:opacity-[0.85]  hover:bg-[#4d47c5]">
                            Cadastrar Tarefa
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
</div>
