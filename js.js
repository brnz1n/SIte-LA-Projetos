String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  var mascara = "##.###.###,##".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    if (mascara.charAt(x) != '#') {
      resultado += mascara.charAt(x);
      x++;
    } else {
      resultado += valor.charAt(y);
      y++;
      x++;
    }
  }
  campo.value = resultado.reverse();
}

function funcao_pdf() {
  var pegar_dados = document.getElementById('dados').innerHTML;
  var janela = window.open('  ', '  ', '');
  janela.document.write('<html><head>');
  janela.document.write('<title>PDF</title></head>');
  janela.document.write('<body>');
  janela.document.write(pegar_dados);
  janela.document.write('</body></html>');
  janela.document.close();
  janela.print();
}