<div>
    <div class="flex items-center justify-center md:p-12">
        <div class="md:block mx-auto rounded-lg bg-gray-100 md:p-5 shadow-2xl w-full">
            <div class="mx-auto rounded w-full bg-white shadow-2xl">
                @if ($errors->any())
                    <div class="error hidden">
                        {{ $errors->first() }}
                    </div>
                @endif
        
                <div class="py-6 px-9">
                    <a href="{{route('indexCategories')}}">
                        <button class="middle none center mr-3 rounded-lg border border-yellow-400 py-3 px-6 font-sans text-xs font-bold uppercase text-yellow-500 transition-all hover:opacity-75 focus:ring focus:ring-yellow-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                            Voltar
                        </button>
                    </a>
                </div>
             
                <div class=" flex items-center justify-center">
                    <div class=" text-2xl font-semibold text-[#07074D]">
                        Cadastrar Categoria
                    </div>
                </div>

                <form class="py-6 px-9" action="" method="POST" wire:submit.prevent="create">
                    <div class="mb-5">
                        <label for="title" class="mb-3 block text-xl font-semibold text-[#07074D]">
                            Titulo:
                        </label>
                        <input type="text" name="title" id="title" wire:model.live="title" placeholder="Informe o titulo da categoria" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                    </div>
                    <div class="flex content-center justify-center">
                        <button type="submit" id="buttonSubmit" class="hover:shadow-form md:w-6/12 rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none hover:drop-shadow[#6A64F1] focus:opacity-[0.85]  hover:bg-[#4d47c5]">
                            Cadastrar Categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </div>
</div>
