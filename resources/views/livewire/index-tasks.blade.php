<div>

    <form action="" method="post" wire:submit.prevent="create">
        <input wire:model="title" type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-450 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Titulo" />
        @error('title')
            {{$message}}
        @enderror

        <button type="submit">Criar Categoria</button>

    </form>
</div>
