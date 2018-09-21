class Jogador extends Sprite {
  constructor(img,posX, posY, width, height,color){
    super(img,posX, posY, width, height);
    this.LEFT = 37;
    this.UP = 38;
    this.RIGHT = 39;
    this.DOWN = 40;
    this.posX = this.posY = 0;
    this.width = 24;
    this.height = 36;

  }

  teclaapertada(pKey){
    switch(pKey){
      case this.RIGHT:
      this.mvRight = true;
      this.mvLeft = false;
      this.mvUp = false;
      this.mvDown = false;
      break;
      case this.LEFT:
      this.mvRight = false;
      this.mvLeft = true;
      this.mvUp = false;
      this.mvDown = false;
      break;
      case this.UP:
      this.mvRight = false;
      this.mvLeft = false;
      this.mvUp = true;
      this.mvDown = false;
      break;
      case this.DOWN:
      this.mvRight = false;
      this.mvLeft = false;
      this.mvUp = false;
      this.mvDown = true;
      break;
    }
  }

  teclaup(pKey2){
    switch(pKey2){
      case this.RIGHT:
      this.mvRight = false;
      break;
      case this.LEFT:
      this.mvLeft = false;
      break;
      case this.UP:
      this.mvUp = false;
      break;
      case this.DOWN:
      this.mvDown = false;
      break;
    }
  }
  draw(ctx){
    ctx.drawImage(	this.img,	//Imagem de origem
      //Captura da imagem
      this.srcX,	//Origem da captura no eixo X
      this.srcY,	//Origem da captura no eixo Y
      this.width,	//Largura da imagem que será capturada
      this.height,//Altura da imagem que será capturada
      //Exibição da imagem
      this.posX,	//Posição no eixo X onde a imagem será exibida
      this.posY,	//Posição no eixo Y onde a imagem será exibida
      this.width,	//Largura da imagem a ser exibida
      this.height	//Altura da imagem a ser exibida
    );
    this.animation();
  }

  //Move a figura
  move(){
    if(this.mvRight){
      this.posX += this.speed;
      this.srcY = this.height * 3;
    } else
    if(this.mvLeft){
      this.posX -= this.speed;
      this.srcY = this.height * 2;
    } else
    if(this.mvUp){
      this.posY -= this.speed;
      this.srcY = this.height * 1;
    } else
    if(this.mvDown){
      this.posY += this.speed;
      this.srcY = this.height * 0;
    }
  }

  //Anima a figura
  animation(){
    if(this.mvLeft || this.mvUp || this.mvRight || this.mvDown){
      //Caso qualquer seta seja pressionada, o contador de animação é incrementado
      this.countAnim++;
      if(this.countAnim >= 20){
        this.countAnim = 0;
      }
      this.srcX = Math.floor(this.countAnim / 5) * this.width;
    } else {
      //Caso nenhuma tecla seja pressionada, o contador de animação é zerado e a imagem do personagem parado é exibida
      this.srcX = 0;
      this.countAnim = 0;
    }
  }
  move(){
    if(this.mvRight){
      this.posX += this.speed;
      this.srcY = this.height * 3;
    } else
    if(this.mvLeft){
      this.posX -= this.speed;
      this.srcY = this.height * 2;
    } else
    if(this.mvUp){
      this.posY -= this.speed;
      this.srcY = this.height * 1;
    } else
    if(this.mvDown){
      this.posY += this.speed;
      this.srcY = this.height * 0;
    }
  }

  //Anima a figura


}
