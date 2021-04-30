
<style>
html {
  height: 100%;
}

body {  
  height: 100%;
  background: url("./views/images/Astronaut.jpg") no-repeat left top;
  background-size: cover;  
  overflow: hidden;
	
  display: flex;
  flex-flow: column wrap;
  justify-content: center;
  align-items: center;
}

.text h1{
  color: #011718;
	margin-top: -200px;
  font-size: 15em;
	text-align: center;
	text-shadow: -5px 5px 0px rgba(0,0,0,0.7), -10px 10px 0px rgba(0,0,0,0.4), -15px 15px 0px rgba(0,0,0,0.2);
	font-family: monospace;
  font-weight: bold;
}

.text h2{
  color: black;
  font-size: 5em;
	text-shadow: -5px 5px 0px rgba(0,0,0,0.7);
	text-align: center;
	margin-top: -150px;
	font-family: monospace;
  font-weight: bold;
}
.text h3{
  color: white;
	margin-left: 30px;
  font-size: 2em;
	text-shadow: -5px 5px 0px rgba(0,0,0,0.7);
	margin-top: -40px;
	font-family: monospace;
  font-weight: bold;
}
.torch {
  margin: -150px 0 0 -150px;
  width: 400px;
  height: 400px;
  box-shadow: 0 0 0 9999em #000000f7;
	opacity: 1;
  border-radius: 50%;
  position: absolute;
	background: rgba(0,0,0,0.3);
}
  .torch::after {
    content: '';
    display: block;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    box-shadow: inset 0 0 40px 2px #000,
			0 0 20px 4px rgba(13,13,10,0.2);  
  }

</style>
<body>
<div class="text">
  <h1>404</h1>

  <a href="home.php"><h3>Sorry we cant find what you are looking for Click me to go back</h3></a>
</div>
<a href="home" class="torch"></a>
<script>
    // document.querySelector("body").addEventListener("mouseover",function(){
    //     document.querySelector("body > div.torch").style.left=event.clientX+"px";
    //     document.querySelector("body > div.torch").style.top=event.clientY+"px";
    // })
      var torch = document.querySelector("body > a.torch")
      
    var onMouseMove = (e) => {
      torch.style.left = e.pageX + 'px';
      torch.style.top = e.pageY + 'px';
        }
        document.addEventListener('mousemove', onMouseMove);
        

</script>
</body>
</html>