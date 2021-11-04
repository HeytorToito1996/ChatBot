<?php include('connect.php'); ?>

<?php
//recebendo a mensagem do usuário através do Ajax
$getMessage = mysqli_real_escape_string($conexao, $_POST['text']);

//Checando a pergunta do usuário

$checkData = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMessage%'";
//echo $checkData;exit;

$runQuery = mysqli_query($conexao,$checkData) or die ("Problema Ao Realizar a Consulta");
//Se A Pergunta do Usuário Bater com as informações do banco , a resposta será exibida 
if(mysqli_num_rows($runQuery) > 0){
    $fetchData = mysqli_fetch_assoc($runQuery);
    //salvando a Resposta em uma Variável que será exibida ao usuário
    $replay = $fetchData['replies'];
    echo $replay;
}

else {
    echo "Não Consigo Entender !!!, Poderia Repetir por Favor ?";
}
?>