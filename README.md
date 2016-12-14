# Password
Abstração para encriptação e verificação poderosa em PHP >= 5.5

Para guardar senha do usuário no banco
---
Receba a entrada do usuário e ultilize-o da seguinte forma:
```
$senha = $_POST['senha'];
$senhaEncryptada = Password::crypt($senha);
gravaSenhaNoBanco($db, $senha);
```


Para verificar uma senha
---
Primeiro busque a senha do usuário no banco, em seguida faça a verificação, desta maneira:
```
$senha = $_POST['senha'];
$senhaDoBanco = buscaSenhaNobanco($db, $idDoUsuario);
$statusDaVerificacao = Password::verify($senha, $senhaDoBanco);
echo $statusDaVerificacao; //'true' ou 'false'
```
