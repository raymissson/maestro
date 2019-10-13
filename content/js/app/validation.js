/*$('#form').submit(function(e) {
	e.preventDefault();

	let name = document.forms['form']['name'].value;
	let cpf = document.forms['form']['cpf'].value;
	let email = document.forms['form']['email'].value;
	let address = document.forms['form']['address'].value;
	let nAddress = document.forms['form']['nAddress'].value;
	let phone = document.forms['form']['phone'].value;

	let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(name == "")
		alert('Campo NOME vazio!');

	if(cpf == "")
		alert('Campo CPF vazio!');

	if(address == "")
		alert('Campo Endereço vazio!');

	if(nAddress == "")
		alert('Campo Nº do Endereço vazio!');

	if(phone ==  "")
		alert('Campo contato vazio!');

	rey = re.test(email);
	if(rey == false){
		alert('Preencha o campo E-MAIL corretamente');
		document.getElementById('email').value = '';
		email = '';
	}
});*/