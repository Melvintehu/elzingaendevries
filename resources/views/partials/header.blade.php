
<div style="height:10px;" class="container-fluid bg-accent divider"></div>


<div  class="navbar-background bg-main">
	<div class="container reset-padding">
		<nav  class="navbar navbar-default">
		  <div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">

		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		      	<li> <img style="width: 30px;position:relative; top: 12px; right: 20px;" src="/images/logo-elzingaendevries.png"> </li>
				<li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="/">Home</a></li>
				<li class="{{ Request::path() == 'over-ons' ? 'active' : '' }}"><a href="/over-ons">Over ons</a></li>
				<li class="{{ Request::path() == 'projecten' ? 'active' : '' }}"><a href="/projecten"> Projecten </a></li>
				<li class="{{ Request::path() == 'betimmering-interieur' ? 'active' : '' }}"><a href="/betimmering-interieur">Interieur</a></li>
				<li class="{{ Request::path() == 'betimmering-exterieur' ? 'active' : '' }}"><a href="/betimmering-exterieur">Exterieur</a></li>
				<li class="{{ Request::path() == 'betimmering-schepen' ? 'active' : '' }}"><a href="/betimmering-schepen">Schepen</a></li>
				<li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="/contact">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</div>