<div>
    <h5 class="mt-2"><strong>Lista de Mensajes</strong></h5>
    
    <br> --------------- <br>
    @forelse ($mensajes as $men)
    {{ $men['nombre'] }} - {{ $men['precio'] }} <br>
    @empty
        Nadie Pujo Todavia
    @endforelse

</div>
