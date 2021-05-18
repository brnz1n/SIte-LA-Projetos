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





  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome Completo: </b>$nome</p>
      <p><b>CPF: </b>$cpf</p>
      <p><b>Data de Nascimento: </b>$dataNascimento</p>
      <p><b>Email: </b>$email</p>
      <p><b>Telefone para contato: </b>$telefone</p>
      <p><b>Profissão: </b>$profissao</p>
      <p><b>È casado(a)? </b>$radiosCasado</p>
      <p><b>Nome completo do(a) parceiro(a): </b>$nomeConjuge</p>
      <p><b>CPF do(a) parceiro(a): </b>$cpfConjuge</p>
      <p><b>Data de nascimento do(a) parceiro(a): </b>$dataNascimentoConjugue</p>
      <p><b>Profissão do(a) parceiro(a): </b>$profissaoConjuge</p>
      <p><b>Renda Bruta Familiar (Mensal ou Anual): </b>$renda</p>
      <p><b>Local do imóvel onde deseja morar: </b>$localImovel</p>
      <p><b>Possui 3 anos (somados) trabalhando sob regime de FGTS?: </b>$radiosFGTS</p>
      <p><b>Número do PIS ou Valor na conta do FGTS (caso não possua deixar em branco): </b>$numeroPisValor</p>
      <p><b>Já foi beneficiado com imóvel ou objeto de financiamento com subsídio concedido pelo FGTS/UNIÃO?: </b>$radiosFGTSUNIAO</p>
      <p><b>Existe mais de um comprador ou dependente na proposta?: </b>$radiosComprador</p>
      <p><b>Você possui terreno próprio com RGI e gostaria de construir nele?: </b>$radiosRGI</p>
      <p><b>Possui imóvel escriturado na região nas regiões limitrofes a sua atual residência ou local de trabalho?: </b>$radiosEscritura</p>
      <p><b>Possui alguma restrição cadastral? (SPC, Serasa): </b>$radiosRestricao</p>
      
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