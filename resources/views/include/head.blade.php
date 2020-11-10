<div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="{{url('/')}}">  SAP SAP CLEANING. <span>L'Aplication qui vous rend propre</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>armellenanema1@gmail.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>TEL</span>
						    	<span>+22621127401</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="{{ route('login') }}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>LOGIN</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{url('/')}}" class="nav-link pl-0">Acceuil</a></li>
	        	<li class="nav-item dropdown">
					<!-- <a href="about.html" class="nav-link">Pressing</a> -->
					<a class="nav-link dropdown-toggle" href="{{url('pressingpropo')}}">Pressing</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
					  <a class="dropdown-item" href="{{url('pressingpropo')}}">A propos</a>
					  <a class="dropdown-item" href="{{url('pressingdereference')}}">Nos pressing de reference</a>
					  <a class="dropdown-item" href="{{url('trouvezpressing')}}">Trouvez votre pressing</a>

					</div>
				</li>
	        	<li class="nav-item dropdown">
					<!-- <a href="courses.html" class="nav-link">Care wash</a> -->
					<a class="nav-link dropdown-toggle" href="{{url('carepropo')}}">Care wash</a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
					  <a class="dropdown-item" href="{{url('carepropo')}}">A propos</a>
					  <a class="dropdown-item" href="{{url('carereference')}}">Nos cares wash de reference</a>
					  <a class="dropdown-item" href="{{url('trouvezcare')}}">Trouvez votre care wash</a>

					</div>
				</li>
	        	<li class="nav-item"><a href="{{url('aidemenagere')}}" class="nav-link">Aide Ménagère</a></li>
	        	<li class="nav-item"><a href="{{url('apropos')}}" class="nav-link">A propos</a></li>
	          <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
