function readCookie(name) 
{
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) 
	{
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function send_data()
{
	$.ajax(
	{
		url: "voto.php?usuario=" + usuario + "&codReceita=" + codRec,
		type: 'POST',
		success: function(result) 
		{
			// use the result as you wish in your html here
			hue=result;
			switchCase(hue);
		}
	});
}

function switchCase(data)
{
	switch(data)
	{
		case 1:
		{
			alert("É necessário estar logado para votar!")
			break;
		}
		case 2:
		{
			alert("Já votou nessa receita!");
			break;
		}
		case 3:
		{
			alert("Voto cadastrado com sucesso!");
			break;
		}
		case 4:
		{
			alert("Ocorreu algum erro!");
			break;
		}
		default:
		{
			alert("banana");
			break;
		}
	}
}