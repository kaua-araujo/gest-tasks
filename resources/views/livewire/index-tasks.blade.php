<div>
    
    

    <hr>

    @foreach ($categories as $categorie)
        {{ $categorie->title }}
        <br>
    @endforeach


    <form action="" method="post" wire:submit.prevent="create">
        <div class="bg-white p-4 rounded-lg">
            <div class="relative bg-inherit">
                <input type="text" id="title" name="title" class="peer bg-transparent h-10 w-72 rounded-lg text-gray-200 placeholder-transparent ring-2 px-2 ring-gray-500 focus:ring-sky-600 focus:outline-none focus:border-rose-600" placeholder="Type inside me"/><label for="username" class="absolute cursor-text left-0 -top-3 text-sm text-gray-500 bg-inherit mx-1 px-1 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-placeholder-shown:top-2 peer-focus:-top-3 peer-focus:text-sky-600 peer-focus:text-sm transition-all">Type inside me</label>
            </div>
        </div>
        @error('title')
            {{$message}}
        @enderror

        <button type="submit">Criar Categoria</button>

    </form>
</div>
