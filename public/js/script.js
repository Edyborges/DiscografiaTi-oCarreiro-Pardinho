function mostrarNotificacao(cabecalho, conteudo) {
    var content = '<div class="janela-base">' +
        '<div class="janela-titulo">' +
        '<span id="titulo">' + cabecalho + '</span>' +
        '</div>' +
        '<div class="janela-corpo">' +
        '<div id="corpo">' + conteudo +
        '</div>' +
        '</div>';

    $('.conteudo').append(content);
    $('.janela-base').addClass('visivel').removeClass('fechar');
    setTimeout(function() {
        $('.janela-base').first().remove();
    }, 10000);
}

function fechar() {
    var x = document.getElementById("janela-base");
    x.classList.remove("visivel");
    x.classList.add("fechar");
}