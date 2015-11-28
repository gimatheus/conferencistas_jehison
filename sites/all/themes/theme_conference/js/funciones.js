jQuery(document).ready(function(){

	jQuery('#login').click(function(){
		abrirAlerta('<p>Contenido Login</p>');
	});

	jQuery('#register').click(function(){
		abrirAlerta('<p>Contenido Registro</p>');
	});

	jQuery('.abrirMore').click(function(){
		TweenMax.to(jQuery('.infografia'),0.5, {marginTop:"0", display:'block', ease:Power4.easeOut});
	});

	jQuery('.infografia .cerrar').click(function(){
		TweenMax.to(jQuery('.infografia'),0.5, {marginTop:"-450", display:'none', ease:Power4.easeOut});
	});


});

function abrirAlerta (contenidoDiv) {
	var contenido = '<div class="lightbox"><div class="contenedorLightbox"><div class="cerrar"></div><div class="contenidoLightbox"></div></div></div>'
	jQuery('body').append(contenido);
	jQuery('.contenidoLightbox').append(contenidoDiv);

	jQuery('.cerrar').click(function(){
		jQuery('.lightbox').remove();
	});
}