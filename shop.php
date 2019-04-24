<?php require_once 'head.php';?>
	<title>Buy Cat products</title>
<?php require_once 'header.php';?>


		<main>
			<style>


	    .panels {
	      min-height: 100vh;
	      overflow: hidden;
	      display: flex;
	    }
	    .panel {
	      background: #6B0F9C;
	      box-shadow: inset 0 0 0 5px rgba(255,255,255,0.1);
	      color: white;
	      text-align: center;
	      align-items: center;
	      /* Safari transitionend event.propertyName === flex */
	      /* Chrome + FF transitionend event.propertyName === flex-grow */
	      transition:
	        font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
	        flex 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
	        background 0.2s;
	      font-size: 20px;
	      background-size: cover;
	      background-position: center;
	      flex: 1;
	      justify-content: center;
	      display: flex;
	      flex-direction: column;
	    }
	    .panel1 { background-image:url("images/cattoys.jpg"); }
	    .panel2 { background-image:url("images/catfood.jpg"); }
	    .panel3 { background-image:url("images/kitten3.jpg"); }
	    .panel4 { background-image:url("images/kitten4.jpg"); }
	    .panel5 { background-image:url("images/catscratch.jpg"); }
	    /* Flex Items */
	    .panel > * {
	      margin: 0;
	      width: 100%;
	      transition: transform 0.5s;
	      flex: 1 0 auto;
	      display: flex;
	      justify-content: center;
	      align-items: center;
	    }
	    .panel > *:first-child { transform: translateY(-100%); }
	    .panel.open-active > *:first-child { transform: translateY(0); }
	    .panel > *:last-child { transform: translateY(100%); }
			.panel > *:last-child:hover {font-weight: bold; color: blue;}
	    .panel.open-active > *:last-child { transform: translateY(0); }
	    .panel p {
	      text-transform: uppercase;
	      font-family: 'Amatic SC', cursive;
	      text-shadow: 0 0 4px rgba(0, 0, 0, 0.72), 0 0 14px rgba(0, 0, 0, 0.45);
	      font-size: 2em;
	    }

	    .panel p:nth-child(2) {
	      font-size: 4em;
	    }
	    .panel.open {
	      flex: 5;
	      font-size: 40px;
	    }

	    @media only screen and (max-width: 600px) {
	      .panel p {
	        font-size: 1em;
	      }
	    }
		  </style>
			<h2>Shop</h2>
			<p class="text-center">Curated for you and your furry friend, here are some of the best kitty items the web has to offer</p>

		  <div class="panels">
		    <div class="panel panel1">
		      <p>Hey</p>
		      <p>Toys</p>
		      <p>View products</p>
		    </div>
		    <div class="panel panel2">
		      <p>Give</p>
		      <p>Food</p>
		      <p>View products</p>
		    </div>
		    <div class="panel panel3">
		      <p>Experience</p>
		      <p>Catios</p>
		      <p>View products</p>
		    </div>
		    <div class="panel panel4">
		      <p>Give</p>
		      <p>Litter</p>
		      <p>View products</p>
		    </div>
		    <div class="panel panel5">
		      <p>Life</p>
		      <p>Scratchposts</p>
		      <p>View products</p>
		    </div>
		  </div>

		  <script>
		    const panels = document.querySelectorAll('.panel');
		    function toggleOpen() {
		      console.log('Hello');
		      this.classList.toggle('open');
		    }
		    function toggleActive(e) {
		      console.log(e.propertyName);
		      if (e.propertyName.includes('flex')) {
		        this.classList.toggle('open-active');
		      }
		    }
		    panels.forEach(panel => panel.addEventListener('click', toggleOpen));
		    panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
		  </script>
		</main>

		<?php require_once 'scripts.php';?>
	</body>
</html>
