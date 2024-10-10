<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="#">
          			<span class="align-middle">Tino</span>
            	</a>

				<ul class="sidebar-nav">
					
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.html">
              				<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Dashboard</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.html">
              				<i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Appointment</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
							<i class="align-middle" data-feather="package"></i> <span class="align-middle">Products</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
							<li class="sidebar-item"><a class="sidebar-link" href="{{url('add_product')}}"><i class="align-middle me-2" data-feather="chevron-right"></i>Add Product</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="/dashboard-ecommerce"><i class="align-middle me-2" data-feather="chevron-right"></i>View Products </a></li>
						</ul>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.html">
              				<i class="align-middle" data-feather="users"></i> <span class="align-middle">Subscribers</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.html">
              				<i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            			</a>
					</li>

					

				</ul>
			</div>
		</nav>