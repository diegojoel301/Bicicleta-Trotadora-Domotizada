<!DOCTYPE html>
<html>
	<head>
		<title>Trotadora</title>
		<style type="text/css">
			@import url('https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');
			*
			{
			  margin: 0;
			  padding: 0;
			}

			body
			{
			  font-family: 'Lato', sans-serif;
			  font-size: 14px;
			  color: #999999;
			  word-wrap:break-word;
			}

			p
			{
			  margin: 0 0 10px;
			}

			ul
			{
			  list-style: none;
			}
			button {
			  border-radius: 50%;
			  padding: 0.5em;
			  width: 60px;
			  height: 60px;
			  border: 2px solid #A5ADB0;
			  color: #A5ADB0 ;
			  position: relative;
			}
			#button_home_2 {
                          border-radius: 50%;
                          padding: 0.5em;
                          width: 20px;
                          height: 20px;
                          border: 2px solid #A5ADB0;
                          color: #A5ADB0 ;
                          position: relative;
                        }
			button:hover {
			  border: 2px solid #A5ADB0;
			  background-color: #8F9496;
			  color: #ffffff;
			}
			.container {
			  height: 200px;
			  position: relative;
			}
			.center {
			  display: flex;
			  justify-content: center;
			  align-items: center;
			  height: 200px;
			}
			/*
			button::before {
			  content: " ";
			  position: absolute;
			  display: block;
			  background-color: #727778 ;
			  width: 2px;
			  left: 12px;
			  top: 5px;
			  bottom: 3px;
			  transform: rotate(45deg);
			}
			button::after {
			  content: " ";
			  position: absolute;
			  display: block;
			  background-color: #727778 ;
			  height: 2px;
			  top:12px;
			  left: 5px;
			  right: 5px;
			  transform: rotate(45deg);
			}
			*/
			.container {
			  width: 100%;
			  margin: auto;
			  font-weight: 900;
			  text-transform: uppercase;
			  text-align: center;
			  padding: 0 0 30px;
			}

			/*.take-input {
			  margin: 50px 0 0;
			}

			.take-input input {
			  width: 400px;
			  height: 35px;
			  padding: 0 10px;
			  border-radius: 5px;
			  border: 1px solid #ececec;
			  margin: 0 15px 0 0;
			  font-size: 15px;
			}*/

			a, a:link, a:visited {
			  text-decoration: none;
			  padding: 9px 15px;
			  border: 1px solid #A5ADB0;
			  border-radius: 5px;
			  color: gray;
			}

			.animate {
			  font-size: 100px;
			  margin: 100px 0 0;
			  border-bottom: 2px solid #A5ADB0;
			  font-weight: 90;
			}

			.animate span {
			  display: inline-block;
			}

			a.repeat {
			  display: inline-block;
			  font-size: 12px;
			  text-transform: none;
			  text-decoration: none;
			  color: orange;
			  padding: 5px 12px;
			  border: 1px solid rgba(0, 0, 0, 0.15);
			  font-weight: normal;
			  margin: 0 0 0 50px;
			  border-radius: 3px;
			  position: relative;
			  bottom: 15px;
			}

			a.repeat:hover {
			  background: rgba(0, 0, 0, 0.7);
			  color: white;
			}

			.animate span:nth-of-type(2) {
			  animation-delay: .05s;
			}
			.animate span:nth-of-type(3) {
			  animation-delay: .1s;
			}
			.animate span:nth-of-type(4) {
			  animation-delay: .15s;
			}
			.animate span:nth-of-type(5) {
			  animation-delay: .2s;
			}
			.animate span:nth-of-type(6) {
			  animation-delay: .25s;
			}
			.animate span:nth-of-type(7) {
			  animation-delay: .3s;
			}
			.animate span:nth-of-type(8) {
			  animation-delay: .35s;
			}
			.animate span:nth-of-type(9) {
			  animation-delay: .4s;
			}
			.animate span:nth-of-type(10) {
			  animation-delay: .45s;
			}
			.animate span:nth-of-type(11) {
			  animation-delay: .5s;
			}
			.animate span:nth-of-type(12) {
			  animation-delay: .55s;
			}
			.animate span:nth-of-type(13) {
			  animation-delay: .6s;
			}
			.animate span:nth-of-type(14) {
			  animation-delay: .65s;
			}
			.animate span:nth-of-type(15) {
			  animation-delay: .7s;
			}
			.animate span:nth-of-type(16) {
			  animation-delay: .75s;
			}
			.animate span:nth-of-type(17) {
			  animation-delay: .8s;
			}
			.animate span:nth-of-type(18) {
			  animation-delay: .85s;
			}
			.animate span:nth-of-type(19) {
			  animation-delay: .9s;
			}
			.animate span:nth-of-type(20) {
			  animation-delay: .95s;
			}

			/* Animation Seven */


			.seven span {
			  color: #A5ADB0;
			  opacity: 0;
			  transform: translate(-150px, 0) scale(.3);
			  animation: leftRight .5s forwards;
			}


			@keyframes leftRight {
			  40% {
			    transform: translate(50px, 0) scale(.7);
			    opacity: 1;
			    color: #A5ADB0;
			  }

			  60% {
			    color: #A5ADB0;
			  }

			  80% {
			    transform: translate(0) scale(2);
			    opacity: 0;
			  }

			  100% {
			    transform: translate(0) scale(1);
			    opacity: 1;
			  }
			}
		</style>
	</head>

	<body>
		<div class="container">
		    <div class="animate seven">
		    	<span>T</span><span>R</span><span>O</span><span>T</span><span>A</span><span>D</span><span>O</span><span>R</span><span>A</span>
		    </div>
		</div>
		<div class="container">
		  <div class="center">
			<button type="button" id="button_music">☼</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" id="button_steps">☼</button>
		  </div>
                </div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<iframe id="music_section"
		    title="Seccion de musica"
		    width="500"
		    height="400"
		    src="http://localhost/music.html">
		</iframe><button type="button" id="button_home_1">☼</button>
		<br><br><br><br>
		<iframe id="steps_section"
                    title="Seccion de la tabla de pasos"
                    width="700"
                    height="455"
                    src="http://localhost/sensor.php">
                </iframe><button type="button" id="button_home_2">☼</button>
  <script type="text/javascript">
		document.getElementById("button_music").onclick = function()
		{
			location.href = '#music_section';
		};
		document.getElementById("button_steps").onclick = function()
                {
                        location.href = '#steps_section';
                };
		document.getElementById("button_home_1").onclick = function()
                {
                        location.href = '#';
                };
		document.getElementById("button_home_2").onclick = function()
                {
                        location.href = '#';
                };
		$(function(){
		  $('.repeat').click(function(){
		      var classes =  $(this).parent().attr('class');
		        $(this).parent().attr('class', 'animate');
		        var indicator = $(this);
		        setTimeout(function(){
		          $(indicator).parent().addClass(classes);
		        }, 20);
		    });
		});
  </script>

	</body>
</html>
