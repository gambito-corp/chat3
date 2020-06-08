window.livewire.on('mensajeEnviado', function(){
    $('#avisoSuccess').removeClass('.collapse');

    $('#avisoSuccess').fadeIn('slow');
    setTimeout(function(){$('#avisoSuccess').fadeOut('slow');}, 3000);
});
