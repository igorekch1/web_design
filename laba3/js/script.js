var canvas = document.querySelector("#canvas");
var ctx = canvas.getContext('2d');
var raf;

var ball = {
  x: 50,
  y: 50,
  vx: 10,
  vy: 1,
  radius: 25,
  color: 'black',
  draw: function() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fillStyle = this.color;
    ctx.fill();
  }
};

function clear() {
  ctx.fillStyle = 'rgba(255, 255, 255, 0.1)';
  ctx.fillRect(0,0,canvas.width,canvas.height);
}

function draw() {
  clear()
  //ctx.fillStyle = 'rgba(255, 255, 255, 0.1)';
  //ctx.fillRect(0, 0, canvas.width, canvas.height);
  ball.draw();
  ball.x += ball.vx;
  ball.y += ball.vy;
  // ball.vy *= .99;
  // ball.vy += .25;

  if (ball.y + ball.vy > canvas.height ||
      ball.y + ball.vy < 0) {
    ball.vy = -ball.vy;
  }
  if (ball.x + ball.vx > canvas.width ||
      ball.x + ball.vx < 0) {
    ball.vx = -ball.vx;
  }

  raf = window.requestAnimationFrame(draw);
}

canvas.addEventListener('click', function(e) {
  raf = window.requestAnimationFrame(draw);
});

canvas.addEventListener('mouseover', function(e) {
  window.cancelAnimationFrame(raf);
});

ball.draw();

let color = document.querySelector("#color");
let resize = document.querySelector("#size");
let speed = document.querySelector("#speed");

function control(){
  color.onchange = function(e){
    ball.color = e.target.value;
  }

  resize.oninput = function(e){
    ball.radius = e.target.value;
  }

  speed.onchange = function(e){
    ball.vx = e.target.value;
  }
}

control();

// Mouse control
/** canvas.addEventListener('mousemove', function(e) {
  if (!running) {
    clear();
    ball.x = e.clientX;
    ball.y = e.clientY;
    ball.draw();
  }
});

canvas.addEventListener('click', function(e) {
  if (!running) {
    raf = window.requestAnimationFrame(draw);
    running = true;
  }
});

canvas.addEventListener('mouseout', function(e) {
  window.cancelAnimationFrame(raf);
  running = false;
});

ball.draw(); **/