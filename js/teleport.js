function teleport() {
  ////////////////////////////////
  //pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY
  this.teleportaArray = [];
  var teleportcorredorprova = new Porta(2088,2100,1123,1187,1126,672);
  this.teleportaArray.push(teleportcorredorprova);
  var teleportprovacorredor = new Porta(1166,1182,610,739,2110,1150);
  this.teleportaArray.push(teleportprovacorredor);
  var teleportcorredorbiblioteca = new Porta(2406,2422,1227,1370,3259,1277);
  this.teleportaArray.push(teleportcorredorbiblioteca);
  var teleportbibliotecacorredor = new Porta(3224,3240,1231,1347,2389,1300);
  this.teleportaArray.push(teleportbibliotecacorredor);
  var teleportcorredoraula = new Porta(2090,2108,1360,1454,1152,1278);
  this.teleportaArray.push(teleportcorredoraula);
  var teleportaulacacorredor = new Porta(1168,1183,1180,1339,2116,1413);
  this.teleportaArray.push(teleportaulacacorredor);

}
function teleportajogador(jogador){
  for (var i in teleportaArray){
    var porta = teleportaArray[i];
    if ((jogador.posX > porta.esquerda && jogador.posX < porta.direita) && (jogador.posY > porta.cima && jogador.posY < porta.baixo)) {
      jogador.posX = porta.posDestinoX;
      jogador.posY = porta.posDestinoY;
    }
  }
}
function Porta(pEsquerda, pDireita, pCima, pBaixo, pPosDestinoX, pPosDestinoY){
  this.esquerda = pEsquerda,
  this.direita = pDireita,
  this.cima = pCima,
  this.baixo = pBaixo,
  this.posDestinoX = pPosDestinoX,
  this.posDestinoY = pPosDestinoY
}
