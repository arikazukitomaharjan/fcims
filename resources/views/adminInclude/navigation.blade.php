


<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">

				<a class="navbar-brand" href="{{ url('/') }}" target="_blank">Home </a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						{!! redirect('auth/login')!!}
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
<body>