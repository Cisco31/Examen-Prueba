<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear Nuevo Libro
            </div>
            <div class="card-body">
                @include('livewire.libros.formulario')
            </div>
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                <a href="{{route("libros.index")}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
