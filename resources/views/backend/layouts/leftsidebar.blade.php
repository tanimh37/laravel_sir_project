<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a  class="active" href="/admin/dashboard/" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>

					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Specialists<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="{{route('specialist.index')}}">All Specialists</a>
							</li>
							<li>
								<a href="{{route('specialist.create')}}">New Specialists</a>
							</li>
							<li>

						</ul>
					</li>

                    <li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dr_list"><i class="icon-basket-loaded mr-10"></i>Doctor<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="dr_list" class="collapse collapse-level-1">
							<li>
								<a href="{{route('doctor.index')}}">All Doctor</a>
							</li>
							<li>
								<a href="{{route('doctor.create')}}">New Doctor</a>
							</li>
							<li>

						</ul>
					</li>

				</ul>
			</div>
