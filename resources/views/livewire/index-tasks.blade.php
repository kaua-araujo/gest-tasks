<div>

    <form action="" method="post" wire:submit.prevent="create">
        @error('title')
            {{$message}}
        @enderror

        <button type="submit">Criar Categoria</button>

    </form>
</div>
