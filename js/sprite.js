	function Sprite(img,posX, posY, width, height,color){
		//Atributos ****************
		this.mvLeft = this.mvUp = this.mvRight = this.mvDown = false;

		//Origem para captura da imagem a ser exibida
		this.srcX = this.srcY = 0;
		//Posição no canvas onde a figura será exibida
		this.posX = posX;
		this.posY = posY;
		this.width = width;
		this.height = height;
		this.color = color;
		this.visible = true;
		this.speed = 1;
		this.img = img;
		this.countAnim = 0;
		this.visible = true;

		//Métodos *****************
		//Desenha a figura
		Sprite.prototype.halfWidth = function(){
			return this.width/2;
		}
		//Retorna a metade da altura
		Sprite.prototype.halfHeight = function(){
			return this.height/2;
		}
		//Retorna a posição do centro do objeto no eixo X
		Sprite.prototype.centerX = function(){
			return this.posX + this.halfWidth();
		}
		//Retorna a posição do centro do objeto no eixo Y
		Sprite.prototype.centerY = function(){
			return this.posY + this.halfHeight();
		}
	}
