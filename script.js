/* nao faz nada */
let el= document.getElementById('link')

function ativador(){
    el.classList.add('ativado')
}

/*Função do botão de copiar e colar*/

var clipboard = new ClipboardJS('.btn');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);

    e.clearSelection();
    alert('copiado');
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});

/* fim da função copiar e colar*/ 

/* função para deixar o scroll suave*/
$('.mini-menu a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 0
	}, 500);
});

/* fim scroll suave */

function usuario(n){

    teste.style.display= "flex";
    $('#imgUser').attr('src',users[n].img);
    $('#pUser').html(users[n].descricao);
};
function fechar(){
    teste.style.display= "none";
}

$('.carousel').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  let linhaTabela = document.querySelector('#linhaTabela');
  let itemTabela = document.querySelector(".util");



function loadTabela(){
    fetch('http://localhost/site-gaga-salva/data.json').then(function(resultado){ //requisição do data.json
        return resultado.json();
    }).then(function(json){

        for(var k in json){
            $('#tabela').append(`<tr id="linha${k}"></tr>`)
            /*Object.values(json[k]).forEach(function(item){ // puxa todos os valores de forma automatica
            $(`#linha${k}`).append(`<td>${item}</td>`)
            })*/
            $(`#linha${k}`).append(`<td><a href="${json[k].url}" target="_blank">${json[k].name}</a></td>`)
            $(`#linha${k}`).append(`<td>${json[k].type}</td>`)
            $(`#linha${k}`).append(`<td>${json[k].size}</td>`)
            $(`#linha${k}`).append(`<td>${json[k].modified}</td>`)
        } 
        //console.log(json);
    }).catch(function(error){
        console.log("deu erro "+error);
    })
}

function abrirLogin(){
    $("#login").css("display","flex");
}

function fecharLogin(){
    
    setTimeout(function(){
        $("#login").css("display","none");
    },500)
}

function mostrarCadastro(){
    $(".login-contente").css("display","none");
    $(".userNovo").css("display","flex");
}

function mostrarLogin(){
    $(".userNovo").css("display","none");
    $(".login-contente").css("display","flex");
}

var checkbox = document.getElementById("olho");
function verSenha(){
    if(checkbox.checked){
        $("#login-senha").attr("type", "text");
        }
    else {
        $("#login-senha").attr("type", "password");
        }
};





  

 
