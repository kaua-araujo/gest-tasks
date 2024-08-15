<div>
    
    

    <hr>

    @foreach ($categories as $categorie)
        {{ $categorie->title }}
        <br>
    @endforeach


    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="title" id="title" wire:model="title">
        @error('title')
            {{$message}}
        @enderror

        <button type="submit">Criar Categoria</button>

    </form>
</div>
