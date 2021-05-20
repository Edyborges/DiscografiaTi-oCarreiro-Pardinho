console.log("Está funcionando")

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

var e = document.getElementById("ddlViewBy");

function show() {
    var as = document.forms[0].ddlViewBy.value;
    var strUser = e.options[e.selectedIndex].value;
    console.log(as, strUser);
}
e.onchange = show;
show();

function mostrarNotificacao(cabecalho, conteudo) {
    var content = '<div class="janela-base">' +
        '<div class="janela-titulo">' +
        '<span id="titulo">' + cabecalho + '</span>' +
        '</div>' +
        '<div class="janela-corpo">' +
        '<div id="corpo">' + conteudo +
        '<button id="btn-fechar" onclick="fechar()">fechar</button>' +
        '</div>' +
        '</div>';

    $('.conteudo').append(content);
    $('.janela-base').addClass('visivel').removeClass('fechar');
    setTimeout(function() {
        $('.janela-base').first().remove();
    }, 10000);
}

function mostrarNotificacaoAlerta(cabecalho, conteudo) {
    var content = '<div class="janela-base">' +
        '<div class="janela-titulo">' +
        '<span id="titulo">' + cabecalho + '</span>' +
        '</div>' +
        '<div class="janela-corpo">' +
        '<div id="corpo">' + conteudo +
        '<button id="btn-fechar" onclick="fechar()">fechar</button>' +
        '</div>' +
        '</div>';

    $('.conteudo').append(content);
    $('.janela-base').addClass('visivel').removeClass('fechar');
    setTimeout(function() {
        $('.janela-base').first().remove();
    }, 10000);
}

function mostrarNotificacaoSucesso(conteudo) {
    var content = '<div class="janela-base">' +


        '<div class="janela-corpo1">' +
        '<div id="corpo"> ' + conteudo +

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