function om()
{
  document.getElementById("hom").style.borderBottom="4px solid red ";
}

document.getElementById("hom").addEventListener("mouseout",out);

function out() {
  document.getElementById("hom").style.borderBottom = "";
}

var a = document.getElementById("Services");
a.addEventListener("mouseover",serve);
a.addEventListener("mouseout",serveout);
function serve()
{
   document.getElementById("Services").style.borderBottom="4px solid red ";
   document.getElementById("hom").style.borderBottom=""
}
function serveout()
{
  document.getElementById("Services").style.borderBottom = "";
}

var b = document.getElementById("About");
b.addEventListener("mouseover",abouton);
b.addEventListener("mouseout",aboutoff);
function abouton()
{
    document.getElementById("About").style.borderBottom="4px solid red ";
}
function aboutoff()
{
    document.getElementById("About").style.borderBottom="";
}

var c = document.getElementById("Contact");
c.addEventListener("mouseover",contacton);
c.addEventListener("mouseout",contactoff);

function contacton()
{
   document.getElementById("Contact").style.borderBottom="4px solid red ";
}

function contactoff()
{
   document.getElementById("Contact").style.borderBottom="";
}

var d = document.getElementById("Logout");
d.addEventListener("mouseover",logouton);
d.addEventListener("mouseout",logoutoff);

function logouton()
{
   document.getElementById("Logout").style.borderBottom="4px solid red ";
}

function logoutoff()
{
   document.getElementById("Logout").style.borderBottom="";
}

window.addEventListener("load", function(){
  typewrite("catchy", "We have Strategy for Serving Things Right.");
  });


  function typewrite (target, text, loop, speed) {

  setTimeout(function() {

  target = document.getElementById(target);
  if (speed === undefined) { speed = 50; }
  if (loop === undefined) { loop = false; }


  let pointer = 0;
  let timer = setInterval(function(){
    pointer++;
    if (pointer <= text.length) {
      target.innerHTML = text.substring(0, pointer);
    } else {
      if (loop) { pointer = 0; }
      else { clearInterval(timer); }
    }
  }, speed);
},1700)
}

var item = document.getElementById("button");
item.addEventListener("mouseover",function(){
  item.style.backgroundColor = "orangered";
})
item.addEventListener("mouseout",function() {
  item.style.backgroundColor = "purple";
})

window.addEventListener("scroll",function(event) {
var scroll = this.scrollY;
if (scroll>0 && scroll<760)
{
  var s = document.getElementById("hom");
  s.style.borderBottom="4px solid red ";
}
else {
  document.getElementById("hom").style.borderBottom="";
}
})

window.addEventListener("scroll",function(event)
{
  var scroll = this.scrollY;
  if(scroll >= 750)
  {
    document.getElementById("servicetag").id = "servicetag1";
    document.getElementById("tagur").id = "tag1";
    document.getElementById("card0").id = "cardanim0";
    document.getElementById("card-1").id = "cardanim1";
    document.getElementById("card-2").id = "cardanim2";
  }
})

var button = document.getElementById("btn1");
button.addEventListener("mouseover", function()
{
  button.style.backgroundColor = "orangered";
})
button.addEventListener("mouseout", function()
{
  button.style.backgroundColor = "";
})

var button1 = document.getElementById("btn2");
button1.addEventListener("mouseover", function()
{
  button1.style.backgroundColor = "orangered";
})
button1.addEventListener("mouseout", function()
{
  button1.style.backgroundColor = "";
})

var button2 = document.getElementById("btn3");
button2.addEventListener("mouseover", function()
{
  button2.style.backgroundColor = "orangered";
})
button2.addEventListener("mouseout", function()
{
  button2.style.backgroundColor = "";
})

window.addEventListener("scroll",function(event)
{
  var scroll = this.scrollY;
  if (scroll >= 1220)
  {
    document.getElementById("logoabout").id = "logoabout1";
    document.getElementById("aboutus").id = "aboutus1";
  }
})

window.addEventListener("scroll",function(event)
{
  var scroll = this.scrollY;
  if(scroll >= 1560)
  {
    document.getElementById("image").id = "image1";
    document.getElementById("tagabout").id = "tagabout1";
    document.getElementById("textabout").id = "textabout1";
  }
})

window.addEventListener("scroll",function(event)
{
  var scroll = this.scrollY;
  if(scroll >= 1756)
  {
    document.getElementById("image2").id = "image22";
    document.getElementById("text2").id = "text22";
  }
})

window.addEventListener("scroll",function(event)
{
  var scroll = this.scrollY;
  if(scroll >= 2120)
  {
    document.getElementById("image3").id = "image33";
    document.getElementById("text3").id = "text33";
  }
})
