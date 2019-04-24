<?php require_once 'head.php';?>
	<title>CATOPOLIS - a place for cat-lovers</title>
<?php require_once 'header.php';?>
		<!-- to do - landing page, welcome about site, tour -->
		<main>

			<div id="carouselExampleControls" class="carousel slide" style="max-width: 1200px; margin: auto;" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <div class="jumbotron" style="width: 100%; height: 500px; background-position: 80%; background-image: url(images/kitten2.jpg); background-size: cover;" alt="Second slide">
						  <h1 class="display-4">Welcome, cat-lovers!</h1>
						  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						  <hr class="my-4">
						  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
						  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
						</div>
			    </div>

			    <div class="carousel-item">
			      <div class="jumbotron" style="width: 100%; height: 500px; background-position: 80%; background-image: url(images/kitten3.jpg); background-size: cover;" alt="Third slide">
						  <h1 class="display-4">Hello, world!</h1>
						  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						  <hr class="my-4">
						  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
						  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
						</div>
					</div>

					<div class="carousel-item">
			      <div class="jumbotron text-center" style="width: 100%; height: 500px; background-position: 10%; background-image: url(images/kitten1.jpg); background-size: cover;" alt="First slide">
							<h1 class="display-4">Hello, world!</h1>
							<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
						  <hr class="my-4">
						  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
						  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
						</div>
					</div>

			  </div>

			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>


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
	    .panel1 { background-image:url("images/kitten1.jpg"); }
	    .panel2 { background-image:url("images/kitten2.jpg"); }
	    .panel3 { background-image:url("images/kitten3.jpg"); }
	    .panel4 { background-image:url("images/kitten4.jpg"); }
	    .panel5 { background-image:url("images/kitten5.jpg"); }
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


		  <div class="panels">
		    <div class="panel panel1">
		      <p>Hey</p>
		      <p>Let's</p>
		      <p>Dance</p>
		    </div>
		    <div class="panel panel2">
		      <p>Give</p>
		      <p>Take</p>
		      <p>Receive</p>
		    </div>
		    <div class="panel panel3">
		      <p>Experience</p>
		      <p>It</p>
		      <p>Today</p>
		    </div>
		    <div class="panel panel4">
		      <p>Give</p>
		      <p>All</p>
		      <p>You can</p>
		    </div>
		    <div class="panel panel5">
		      <p>Life</p>
		      <p>In</p>
		      <p>Motion</p>
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
