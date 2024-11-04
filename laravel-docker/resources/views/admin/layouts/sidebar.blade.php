<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{ url('/dashboard') }}">
          			<span class="align-middle">Admin Panel</span>
            	</a>

				<ul class="sidebar-nav">
					
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('dashboard') }}">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item {{ Route::currentRouteName() == 'view_appointment' ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('view_appointment') }}">
							<i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Appointment</span>
						</a>
					</li>

					<li class="sidebar-item {{ request()->is('create_product') || request()->is('view_product') ? 'active' : '' }}">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link {{ request()->is('create_product') || request()->is('view_product') ? 'collapsed' : '' }}" aria-expanded="{{ request()->is('create_product') || request()->is('view_product') ? 'true' : 'false' }}">
							<i class="align-middle" data-feather="package"></i> <span class="align-middle">Products</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse {{ request()->is('create_product') || request()->is('view_product') ? 'show' : '' }}" data-bs-parent="#sidebar">
							<li class="sidebar-item {{ request()->is('create_product') ? 'active' : '' }}">
								<a class="sidebar-link" href="{{ url('create_product') }}">
									<i class="align-middle me-2" data-feather="chevron-right"></i>Add Product
								</a>
							</li>
							<li class="sidebar-item {{ request()->is('view_product') ? 'active' : '' }}">
								<a class="sidebar-link" href="{{ url('view_product') }}">
									<i class="align-middle me-2" data-feather="chevron-right"></i>View Products
								</a>
							</li>
						</ul>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
              				<i class="align-middle" data-feather="users"></i> <span class="align-middle">Subscribers</span>
            			</a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="#">
              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            			</a>
					</li> -->

					

				</ul>
			</div>
		</nav>