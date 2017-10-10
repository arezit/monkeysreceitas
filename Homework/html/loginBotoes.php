<!DOCTYPE html>
<html>
<script type="text/javascript">
	function getCookie(login) {
    var name = login + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>
<head>
	<style type="../css/bootstrap.css"></style>
	<title></title>
</head>
<body class="" onload="getCookie();">
	<a href="../login.html" target="conteudo"><input type="button" name="login" value="logar"></a>
	<a href="../sign-up.html" target="conteudo"><input type="button" name="cadastrar" value="cadastrar"></a>
	<a href="../logout.php" target="conteudo"><input type="button" name="logout" value="sair"></a>

</body>
</html>