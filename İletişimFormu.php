<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>İLETİŞİM FORMU</title>
	<style>
.tasarim1{
margin: 10px auto;
width: 300px;
padding: 20px;
border-radius: 20px;
}
.tasarim1 label{
    display: block;
    letter-spacing: 2px;
    margin-top: 10px;
}
 
.tasarim1 input[type="text"]{
    width: 260px;
    padding: 3px 5px;
    color: #555;
    box-sizing: border-box;
}
 
.tasarim1 input[type="text"]:focus{
    color: #fff;
    background:  url(Pencil-128.png) no-repeat #882a32;
    background-size: 25px 25px;
    outline: solid 1px #fff;
    padding-left: 30px;
}
 
.tasarim1 input[type="submit"]{
    margin-top: 20px;
    background: #ff7373;
    border: 2px solid #9b2a32;
    padding: 5px 10px;
    color: #fff;
}
 
	</style>
</head>
<body>
    <form class="tasarım1" action="https://www.yazilimkodlama.com/web/html-css-iletisim-formu-olusturma/" method="post">
	    <label for="ad">Adınız</label>
        <input type="text" name="ad" id="ad">
        <label for="sad">Soyadınız</label>
        <input type="text" name="sad" id="sad">
		<label for="sad">E-Posta</label>
        <input type="text" name="eposta" id="eposta">
        <label></label>
        <input type="submit" name="kaydet" id="kaydet" value="Kaydı Tamamla">
	</form>
</body>
</html>