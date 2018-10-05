window.onload = function(){
	document.getElementById("tela").style.zIndex = "-1";
	var cnv =document.getElementById("tela");
	var	ctx = cnv.getContext("2d");
	var spriteSheet = new Image();
	spriteSheet.src = "imgs/imgmasc.png";
	var jogador = new Jogador(spriteSheet);
	var camera = new Camera(cnv);
	var scene = new Image();
	scene.src = "imgs/cenatotal.png";
	jogador.speed = 8;

	this.sprites = [];
	sprites.push(jogador);

	var gameworld = {
		img:scene,
		x: 0,
		y: 0,
		width: 4436,
		height: 2608
	};

	sprites.push(gameworld);





	teleport();
	paredes();
	Cseabrir();
	Provaabrir();

	window.addEventListener("keydown",keydownHandler,false);
	window.addEventListener("keyup",keyupHandler,false);
	jogador.posX = Math.max(0, Math.min(cnv.width - jogador.width, jogador.posX));
	jogador.posY = Math.max(0, Math.min(cnv.height - jogador.height, jogador.posY));
	function desenhaparedes(){
		for(var i in blocks){
			var spr = blocks[i];
			if(spr.visible){
				ctx.fillStyle = spr.color;
				ctx.fillRect(spr.posX, spr.posY, spr.width, spr.height);
			}
		}
		for(var i in blocks){
			var blk = blocks[i];
			if(blk.visible){
				blockRect(jogador, blk);
			}
		}

	}

	function keydownHandler(e){
			jogador.teclaapertada(e.keyCode);

	}

	function keyupHandler(e){
		jogador.teclaup(e.keyCode);
	}

	//Quando a imagem é carregada, o programa é iniciado
	spriteSheet.onload = function(){
		init();
		jogador.posX = 2233;
		jogador.posY = 1268;
	}

	function init(){
		loop();
	}
	function update(){
		jogador.move();
		camera.movcamera(jogador.posX,jogador.posY,jogador.height,jogador.width);
		desenhaparedes();
	}

	function draw(){
		ctx.save();
		ctx.translate(-camera.x,-camera.y);

		ctx.clearRect(0,0,cnv.width,cnv.height);
		ctx.drawImage(scene,0,0,4436,2608,0,0,4436,2608);
		jogador.draw(ctx);
		ctx.restore();



	}

	function desenhaTema(){
		// ctx.font = "30px";
		// ctx.fillStyle = "red";
		//
		// ctx.textAlign = "center";
		// ctx.fillText(sexo, 400, 300	);

	}


	function loop(){
		window,requestAnimationFrame(loop,cnv);
		update();
		draw();
		desenhaTema();
		teleportajogador(jogador,1126,672);
		funcaocse(jogador);
		funcaoprova(jogador);
		//	paredecolide();
	}



}

function validate() {
	if (document.formLog.user.value == "" || document.formLog.email.value == "" || document.formLog.pass.value == "") {
		alert("Preencha todos os campos!!");
		return false;
	}
	return true;
}

function validate2() {
	if (document.formLog.user.value == "" || document.formLog.pass.value == "") {
		alert("Preencha todos os campos!!");
		return false;
	}
	return true;
}
