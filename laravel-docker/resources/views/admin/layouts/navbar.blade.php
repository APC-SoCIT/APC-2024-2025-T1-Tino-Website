<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>
							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<span class="text-dark">{{ Auth::user()->name }}</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<form method="POST" action="{{ route('logout') }}">
									@csrf

									<a href="{{ route('logout') }}" class="dropdown-item"
										onclick="event.preventDefault();
												this.closest('form').submit();">
										<i class="align-middle" data-feather="log-out"></i> Log out
									</a>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</nav>