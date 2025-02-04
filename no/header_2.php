<style>

		#menu {
			height: 100%;
			position: fixed;
			background-color: #FED057;
			width: 300px;
			transition: 1000ms all cubic-bezier(0.19, 1, 0.22, 1);
			transform: translateX(-100%);
			left: 60px;
		}

		#menu.expanded {
			transform: translateX(0%);
			left: 0px;
		}

		.menu-inner {
			width: 100%;
			height: 100%;
			position: relative;
		}

		#blob {
			top: 0;
			z-index: -1;
			right: 60px;
			transform: translateX(100%);
			height: 100%;
			position: absolute;
		}

		#blob-path {
			height: 100%;
			fill:  #FED057;
		}

		.hamburger {
			right: 20px;
			position: absolute;
			width: 20px;
			height: 20px;
			margin-top: -10px;	
		}

		.hamburger .line {
			width: 100%;
			height: 4px;
			background-color: #fff;
			position: absolute;
		}

		.hamburger .line:nth-child(2) {
			top: 50%;
			margin-top: -2px;
		}

		.hamburger .line:nth-child(3) {
			bottom: 0;
		}

		h1 {
			position: fixed;
			right: 0;
			margin: 0;
		}

		ul {
			padding: 0;
			list-style: none;
			width: 80%;
			margin-left: 10%;
			position: absolute;
			top: 10px;
		}

		ul li {
			color: #fff;
			font-family: sans-serif;
			padding: 20px 0;
		}

		h2 {
			position: absolute;
		   left: 50%;
      color: #fff;
			margin: 0;
      font-size: 16px;
      font-family: sans-serif;
      font-weight: 100;
		}


	
</style>
<div id="menu">
		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="menu-inner">
			
			<ul>
				<li>Menu Item</li>
				<li>Menu Item</li>
				<li>Menu Item</li>
				<li>Menu Item</li>
				<li>Menu Item</li>
				<li>Menu Item</li>
			</ul>
		</div>
  
  
		
		<svg version="1.1" id="blob"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<path id="blob-path" d="M60,500H0V0h60c0,0,20,172,20,250S60,900,60,500z"/>
		</svg>
	</div>


<h2> hover close to the menu </h2>


