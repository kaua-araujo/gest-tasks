<div>
    <div class="flex items-center justify-center md:p-12">
        <div class="md:block mx-auto rounded-lg bg-gray-100 md:p-5 shadow-2xl w-full">
            <div class="mx-auto rounded w-full bg-white shadow-2xl">
                @if ($errors->any())
                    <div class="error hidden">
                        {{ $errors->first() }}
                    </div>
                @endif
                    
                <div class="flex justify-between">
                    <div class="py-6 px-9">
                        <a href="{{route('home')}}">
                            <button class="middle none center mr-3 rounded-lg border border-yellow-400 py-3 px-6 font-sans text-xs font-bold uppercase text-yellow-500 transition-all hover:opacity-75 focus:ring focus:ring-yellow-200 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                                Voltar
                            </button>
                        </a>
                    </div>
                    <div class="py-6 px-9">
                        <a href="{{route('formCreateCategorie')}}">
                            <button class="middle none center w-full md:w-auto h-10 mr-3 rounded-lg bg-cyan-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-cyan-500/20 transition-all hover:shadow-lg hover:shadow-cyan-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" data-ripple-light="true">
                                Cadastrar Categoria
                                <i class="fa-solid fa-plus p-1"></i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex justify-center text-2xl font-semibold text-[#07074D]">
                        Categorias Cadastradas:
                    </div>
                    <div class="inline-grid  grid-cols-2 lg:grid-cols-4 lg:gap-1 p-10">
                        @if (count($categories) < 1)
                            <div class=" font-semibold">
                                Nenhuma categoria encontrada!
                            </div>
                        @endif
                        @foreach ($categories as $categorie)
                                <div class="flex items-center justify-center bg-white border border-gray shadow-xl w-ful  rounded-3xl p-4 m-4">
                                    <div class="flex-none sm:flex">
                                        <div class="flex-auto justify-evenly">
                                            <div class="flex items-center justify-center sm:mt-2">
                                                <div class="flex items-center">
                                                    <div class="flex flex-col">
                                                        <div class="flex-none text-lg text-gray-800 font-bold leading-none">
                                                            {{ mb_strimwidth($categorie->title, 0, 9)}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex justify-center">
                                                <button id="{{$categorie->id}}" name={{$categorie->title}} class="deleteButtoncategorie flex-no-shrink mt-2 bg-rose-400 hover:bg-rose-500 px-5 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-rose-300 hover:border-rose-500 text-white rounded-full transition ease-in duration-300">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
