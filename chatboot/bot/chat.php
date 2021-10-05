<?php

include "Bot.php";
$bot = new Bot;


include "Cep.php";
include "Cotacao.php";

#$questions = [
#   "bolo de chocolate" => "É uma linguagem de programação server side.",
#  "linux" => "É um sistema operacional criado por Linus Torvald.",
#    "qual o seu nome" => "Meu nome é " . $bot->getName()
#];

// carregando dados de um arquivo json
$obj = json_decode(file_get_contents('regras.json'), True);
$questions = array();
foreach ($obj as $values) {
    foreach ($values as $key => $value) {
        $questions[$key] = $value;
    }
}

# recebe uma mensagem enviada pelo usuário
if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;        

            
        $generics = ['receitas'];
        if (in_array($msg, $generics)) {
            $botty->reply('Digite a Receita Desejada:<br><br>');
            $botty->reply('Bolo de Chocolate<br>');
            $botty->reply('Bolo Sobremesa<br>');
            $botty->reply('Gelado Caramelizado<br>');
            $botty->reply('Pave Delicia<br>');
            $botty->reply('Rocombole de Coco<br>');
        } elseif ($botty->ask($msg, $questions) == '') {
            $botty->reply("Desculpe, não entendi. Verifique a Escrita!");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}