<?php
  //Variáveis
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $dataNascimento = $_POST['dataNascimento'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $profissao = $_POST['profissao'];
  $radiosCasado = $_POST['radiosCasado'];
  $nomeConjuge = $_POST['nomeConjuge'];
  $cpfConjuge = $_POST['cpfConjuge'];
  $dataNascimentoConjugue = $_POST['dataNascimentoConjugue'];
  $profissaoConjuge = $_POST['profissaoConjuge'];
  $renda = $_POST['renda'];
  $localImovel = $_POST['localImovel'];
  $radiosFGTS = $_POST['radiosFGTS'];
  $numeroPisValor = $_POST['numeroPisValor'];
  $radiosFGTSUNIAO = $_POST['radiosFGTSUNIAO'];
  $radiosComprador = $_POST['radiosComprador'];
  $radiosRGI = $_POST['radiosRGI'];
  $radiosEscritura = $_POST['radiosEscritura'];
  $radiosRestricao = $_POST['radiosRestricao'];

  $dataNascimentoInvetida = inverteData($dataNascimento);
  function inverteData($dataNascimento){
    if(count(explode("/",$dataNascimento)) > 1){
        return implode("-",array_reverse(explode("/",$dataNascimento)));
    }elseif(count(explode("-",$dataNascimento)) > 1){
        return implode("/",array_reverse(explode("-",$dataNascimento)));
    }
  };

  $dataNascimentoConjugueInvetida = inverteDataConjugue($dataNascimentoConjugue);
  function inverteDataConjugue($dataNascimentoConjugue){
    if(count(explode("/",$dataNascimentoConjugue)) > 1){
        return implode("-",array_reverse(explode("/",$dataNascimentoConjugue)));
    }elseif(count(explode("-",$dataNascimentoConjugue)) > 1){
        return implode("/",array_reverse(explode("-",$dataNascimentoConjugue)));
    }
  };

  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
  <html>
  
  <style>
    table{
      width: 90%;
      margin: 2rem auto 5rem;
    }
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse:collapse;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      padding: 20px;
      text-align: center;
    }
    th{
      font-size: 1.1rem;
      background-color: #222831;
      color: white;
    }
    td{
      font-size: 1rem;
      color: #271e0f;
      background-color: #8a8a8a21;
    }
    </style>
    
    <body>
    <table>
      <tr>
        <th>Nome Completo</th>
        <th>CPF</th>
      </tr>
      <tr>
        <td>$nome</td>
        <td>$cpf</td>
      </tr>
      <tr>
        <th>Data de nascimento</th>
        <th>Email</th>
      </tr>
      <tr>
        <td>$dataNascimentoInvetida</td>
        <td>$email</td>
      </tr>
      <tr>
        <th>Telefone para contato</th>
        <th>Profissão</th>
      </tr>
      <tr>
        
        <td>$telefone</td>
        <td>$profissao</td>
      </tr>
      <tr>
        <th>È casado(a)?</th>
        <th>Nome completo do(a) parceiro(a)</th>
      </tr>
      <tr>
        <td>$radiosCasado</td>
        <td>$nomeConjuge</td>
      </tr>
      <tr>
        <th>Data de nascimento do(a) parceiro(a)</th>
        <th>Profissão do(a) parceiro(a)</th>
      </tr>
      <tr>
        <td>$dataNascimentoConjugueInvetida</td>
        <td>$profissaoConjuge</td>
      </tr>
      <tr>
        <th>Renda Bruta Familiar (Mensal ou Anual)</th>
        <th>Local do imóvel onde deseja morar</th>
      </tr>
      <tr>
        <td>$renda</td>
        <td>$localImovel</td>
      </tr>
      <tr>
        <th>Possui 3 anos (somados) trabalhando sob regime de FGTS?</th>
        <th>Número do PIS ou Valor na conta do FGTS?</th>
      </tr>
      <tr>
        <td>$radiosFGTS</td>
        <td>$numeroPisValor</td>
      </tr>
      <tr>
        <th>Já foi beneficiado com imóvel ou objeto de financiamento com subsídio concedido pelo FGTS/UNIÃO?</th>
        <th>Existe mais de um comprador ou dependente na proposta?</th>
      </tr>
      <tr>
        <td>$radiosFGTSUNIAO</td>
        <td>$radiosComprador</td>
      </tr>
      <tr>
        <th>Você possui terreno próprio com RGI e gostaria de construir nele?</th>
        <th>Possui imóvel escriturado na região nas regiões limitrofes a sua atual residência ou local de trabalho?</th>
      </tr>
      <tr>
        <td>$radiosRGI</td>
        <td>$radiosEscritura</td>
      </tr>
      <tr>
        <th>Possui alguma restrição cadastral? (SPC, Serasa)</th>
        <th></th>
      </tr>
      <tr>
        <td>$radiosRestricao</td>
        <td></td>
      </tr>
  
    </table>
    <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
  </body>
  
  </html>
  
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "contato@laconstrutech.com";
  $assunto = "Contato por laconstrutech.com";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= 'Content-Type: text/html; utf-8';
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='1;URL=sucesso.html'>";
?>