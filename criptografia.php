<?php
$senha = "StringParaCriptografar";
echo "<p>".$senha."</p>";
$md5 = md5($senha);
echo "<p>MD5: ".$md5."</p>";
$sha1 = sha1($senha);
echo "<p>SHA1: ".$sha1."</p>";
$base64encode = base64_encode($senha);
echo "<p>Base 64 Encode: ".$base64encode."</p>";
$base64decode = base64_decode("dmlkYSBsb25nYSBlIHByb3NwZXJh");
echo "<p>Base 64 Decode: ".$base64decode."</p>";

$email    = "josearnaldo.net@gmail.com";
$emailcri = md5($email);
$criptogr = "36f355c19539146d756b8eda3844d802";
echo "O email ".$email." virou ".md5($email);
echo ($emailcri === $criptogr) ? "<p>Acertou!</p>" :  "<p>Errou!</p>";

$string = 'jose@josearnaldo.net';
$cripMetodo = 'aes128';
$cripSenha = 'dmlkYSBsb25nYSBlIHByb3NwZXJh';

echo "<p>".openssl_encrypt ($string, $cripMetodo, $cripSenha)."</p>";
echo "<p>".openssl_decrypt ("z3XJBUBknUpdmOHbd2C5HrYIwgUrffUiNbgxf3+uYn4=", $cripMetodo, $cripSenha)."</p>";
//var_dump( openssl_get_cipher_methods() );
//file_put_contents ('./file.encrypted', openssl_encrypt ($string, $method, $pass));