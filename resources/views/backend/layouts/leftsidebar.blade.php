<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a  class="active" href="/admin/dashboard/" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>

					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>Restaurent<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="{{route('specialist.index')}}">All Restaurent</a>
							</li>
							<li>
								<a href="{{route('specialist.create')}}">Add New Restaurent</a>
							</li>
							<li>

						</ul>
					</li>

                    <li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#fr_list"><i class="icon-basket-loaded mr-10"></i>Offer<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="fr_list" class="collapse collapse-level-1">
							<li>
								<a href="{{route('doctor.index')}}">All Offer</a>
							</li>
							<li>
								<a href="{{route('doctor.create')}}">Add New Offer</a>
							</li>
							<li>

						</ul>
					</li>

                    <li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#fra_list"><i class="icon-basket-loaded mr-10"></i>Appointment<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="fra_list" class="collapse collapse-level-1">
							<li>
								<a href="{{route('appointment.index')}}">All Appointment</a>
							</li>

							<li>
								<a href="{{route('appointment.create')}}">New Appointment</a>
							</li>

						</ul>
					</li>

                    <li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#fran_list"><i class="icon-basket-loaded mr-10"></i>Departments<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="fran_list" class="collapse collapse-level-1">
							<li>
								<a href="{{route('department.index')}}">All Department</a>
							</li>

							<li>
								<a href="{{route('department.create')}}">All Department</a>
							</li>

						</ul>
					</li>


				</ul>
			</div>
