<?php
require('Password.php');

$senha = 'minhaSenha';
$senhaEncriptada = Password::crypt($senha);

echo '<p>Senha: ' . $senha . '</p>';
echo '<p>Senha encriptada: ' . $senhaEncriptada . '</p>';

echo '<hr>';

$outraSenha = 'outraSenha';
$verificacao = Password::verify($outraSenha, $senhaEncriptada);

echo '<p>Senha a ser testada: ' . $outraSenha . '</p>';
echo '<p>Resultado da verificação: ' . $verificacao . '</p>';