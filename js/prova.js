function Provaabrir() {
  ////////////////////////////////
  //pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY
  this.provas = [];
  var prova = new Prova(482,588,519,593);
  this.provas.push(prova);

}
function funcaoprova(jogador){
  for (var i in provas){
    var avccse = provas[i];
    if ((jogador.posX > avccse.esquerda && jogador.posX < avccse.direita) && (jogador.posY > avccse.cima && jogador.posY < avccse.baixo)) {
      var r = confirm("Realizar prova!!!");
      if (r == true) {
        document.getElementById("prova").style.visibility = "visible";
        jogador.posX = 924;
        jogador.posY = 660;
        jogador.mvRight = false;
        jogador.mvLeft = false;
        jogador.mvUp = false;
        jogador.mvDown = false;
      }else {

        jogador.posX = 530;
        jogador.posY = 644;
        jogador.mvRight = false;
        jogador.mvLeft = false;
        jogador.mvUp = false;
        jogador.mvDown = false;
      }



    }
  }

}

function Prova(pEsquerda, pDireita, pCima, pBaixo){
  this.esquerda = pEsquerda,
  this.direita = pDireita,
  this.cima = pCima,
  this.baixo = pBaixo

}
