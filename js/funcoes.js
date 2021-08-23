function validaCampos(){
	if (document.fmContato.txtNome.value == "") {
		alert("Por favor, preencha um nome!");
		document.fmContato.txtNome.focus();
		return false;
	}
	if (document.fmContato.txtEmail.value == "") {
		alert("Por favor, preencha um E-mail!");
		document.fmContato.txtEmail.focus();
		return false;
	}
	if (document.fmContato.txtMensagem.value == "") {
		alert("Por favor, preencha uma mensagem!");
		document.fmContato.txtMensagem.focus();
		return false;
	}
}