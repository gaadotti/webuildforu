function mostrarCadastro(){
	$('#logar').css('display', 'none');
	$('#cadastrar').css('display', 'block');

	// Use display:none optionn to hide the element once the scale animation is complete.
	$("#cadastrar").velocity(
	  { 
	    scale: 0
	  },
	  { 
	    duration: 400,
	    display: "none"
	  });

	// Use the display:block option to show the element before the new scale animation starts.
	$("#cadastrar").velocity(
	  { 
	    scale: 1
	  },
	  { 
	    duration: 400,
	    display: "block"
	  });
}