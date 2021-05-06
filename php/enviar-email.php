<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $celular = $_POST['celular'];
  $cpf = $_POST['cpf'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $radiosTerreno = $_POST['radiosTerreno'];
  $mensagem = $_POST['mensagem'];

  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Celular (Whatapp): </b>$celular</p>
      <p><b>CPF: </b>$cpf</p>
      <p><b>Cidade: </b>$cidade</p>
      <p><b>Estado: </b>$estado</p>
      <p><b>Possui Terreno?: </b>$radiosTerreno</p>
      <p><b>Soma da renda bruta Familiar: </b>$mensagem</p>
      
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "brnnz1n@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='1;URL=sucesso.html'>";
?>