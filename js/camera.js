function Camera(cnv) {
  this.x = 0;
  this.y = 0;
  this.width = cnv.width;
  this.height = cnv.height;
  this.movcamera = function(jogadorX,jogadorY,jogadorheight,jogadorwidth) {
    if ((jogadorX + (jogadorwidth/2)) !== (this.width/2)) {
      this.x = (jogadorX + (jogadorwidth/2)) - (this.width/2);
    }
    if ((jogadorY + (jogadorheight/2)) !== (this.height/2)) {
      this.y = (jogadorY + (jogadorheight/2)) - (this.height/2);
    }
  }
}
