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
