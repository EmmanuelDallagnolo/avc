function abrirProvaCadastrada() {
  ////////////////////////////////
  //pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY
  this.provascadastradas = [];
  var provacadastrada = new Provacadastrada(678,830,1002,1080);
  this.provascadastradas.push(provacadastrada);

}
function funcaoprovacadastrada(jogador){
  for (var i in provascadastradas){
    var avccse = provascadastradas[i];
    if ((jogador.posX > avccse.esquerda && jogador.posX < avccse.direita) && (jogador.posY > avccse.cima && jogador.posY < avccse.baixo)) {
      var c = confirm("Realizar prova!!!");
      if (c == true) {
        debugger;
        document.getElementById("codigoprovabotao").style.visibility = "visible";
        document.getElementById("codigoprova").style.visibility = "visible";
        document.getElementById("provacadastrada").style.visibility="visible";
        jogador.posX = 800;
        jogador.posY = 1160;
        jogador.mvRight = false;
        jogador.mvLeft = false;
        jogador.mvUp = false;
        jogador.mvDown = false;
      }else {

        jogador.posX = 868;
        jogador.posY = 1236;
        jogador.mvRight = false;
        jogador.mvLeft = false;
        jogador.mvUp = false;
        jogador.mvDown = false;
      }



    }
  }

}

function Provacadastrada(pEsquerda, pDireita, pCima, pBaixo){
  this.esquerda = pEsquerda,
  this.direita = pDireita,
  this.cima = pCima,
  this.baixo = pBaixo

}
