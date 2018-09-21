function blockRect(r1, r2) {
  //r1 -> bloqueado
  //r2 -> parede
  //catetos
  var catX = r1.centerX() - r2.centerX();
  var catY = r1.centerY() - r2.centerY();

  //soma das metades
  var sumHalfWidth = r1.halfWidth() + r2.halfWidth();
  var sumHalfHeight = r1.halfHeight() + r2.halfHeight();

  if(Math.abs(catX) < sumHalfWidth && Math.abs(catY) < sumHalfHeight){




    var overlapX = sumHalfWidth - Math.abs(catX);
    var overlapY = sumHalfHeight - Math.abs(catY);

    if(overlapX >= overlapY){//colisao por cima ou por baixo
      if(catY > 0){//por cima
        r1.posY += overlapY;
      } else {//por baixo
        r1.posY -= overlapY;
      }
    }else {//colisao direita ou esquerda
      if (catX > 0) {//direita
        r1.posX += overlapX;
      }else {//esquerda
        r1.posX -= overlapX;
      }
    }
  }

}
