<body class="page-body page-left-in">
	<div class="page-container">
		<div class="sidebar-menu">
			<header class="logo-env">
				<div class="logo">
					<a href="index.html">
						<img src="<?php echo base_url('assets/admin/images/logo@2x.png'); ?>" width="120" alt="" />
					</a>
				</div>
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon with-animation">
						<i class="entypo-menu"></i>
					</a>
				</div>
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation">
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>
			<div class="sidebar-user-info">
				<div class="sui-normal">
					<a href="#" class="user-link">
						<img src="<?php printf("%scdn/user/profile/%s.jpg", base_url(''), $this->session->userdata('username')); ?>" alt="" class="img-circle" />
						<span>Welcome,</span>
						<?php foreach ($details as $row) $nama = $row->fname . ' ' . $row->lname; ?>
						<strong><?php echo $nama; ?></strong>
					</a>
				</div>
				<div class="sui-hover inline-links animate-in">		
					<a href="#">
						<i class="entypo-pencil"></i>
						New Page
					</a>
					<a href="mailbox.html">
						<i class="entypo-mail"></i>
						Inbox
					</a>
					<a href="extra-lockscreen.html">
						<i class="entypo-lock"></i>
						Log Off
					</a>
					<span class="close-sui-popup">&times;</span>
				</div>
			</div>	
			<ul id="main-menu" class="">
				<li id="search">
					<form method="get" action="">
						<input type="text" name="q" class="search-input" placeholder="Search something..."/>
						<button type="submit">
							<i class="entypo-search"></i>
						</button>
					</form>
				</li>
				<li class="opened active">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="layout-api.html">
						<i class="entypo-plus-squared"></i>
						<span>Tambah Data</span>
					</a>
					<ul>
						<li>
							<a href="layout-api.html">
								<span>Data User</span>
							</a>
						</li>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span>Data Rumah Kost</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span>Details</span>
					</a>
					<ul>
						<li>
							<a href="layout-api.html">
								<span>Data User</span>
							</a>
						</li>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span>Data Rumah Kost</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.html" target="_blank">
						<i class="entypo-monitor"></i>
						<span>Berita</span>
					</a>
				</li>
				<li>
					<a href="index.html" target="_blank">
						<i class="entypo-attention"></i>
						<span>Pengumuman</span>
					</a>
				</li>
				<li>
					<a href="mailbox.html">
						<i class="entypo-mail"></i>
						<span>Mailbox</span>
						<span class="badge badge-secondary">8</span>
					</a>
					<ul>
						<li>
							<a href="mailbox.html">
								<i class="entypo-inbox"></i>
								<span>Inbox</span>
							</a>
						</li>
						<li>
							<a href="mailbox-compose.html">
								<i class="entypo-pencil"></i>
								<span>Compose Message</span>
							</a>
						</li>
						<li>
							<a href="mailbox-message.html">
								<i class="entypo-attach"></i>
								<span>View Message</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>	
		</div>
		<div class="main-content">
			<div class="row">
				<div class="col-md-6 col-sm-8 clearfix">
					<ul class="user-info pull-left pull-none-xsm">
						<ul class="user-info pull-left pull-right-xs pull-none-xsm">
							<li class="notifications dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<i class="entypo-attention"></i>
									<span class="badge badge-info">6</span>
								</a>
								<ul class="dropdown-menu">
									<li class="top">
										<p class="small">
											<a href="#" class="pull-right">Mark all Read</a>
											You have <strong>3</strong> new notifications.
										</p>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller">
											<li class="unread notification-success">
												<a href="#">
													<i class="entypo-user-add pull-right"></i>
													<span class="line">
														<strong>New user registered</strong>
													</span>
													<span class="line small">
														30 seconds ago
													</span>
												</a>
											</li>
											<li class="unread notification-secondary">
												<a href="#">
													<i class="entypo-heart pull-right"></i>
													<span class="line">
														<strong>Someone special liked this</strong>
													</span>
													<span class="line small">
														2 minutes ago
													</span>
												</a>
											</li>
											<li class="notification-primary">
												<a href="#">
													<i class="entypo-user pull-right"></i>
													<span class="line">
														<strong>Privacy settings have been changed</strong>
													</span>
													<span class="line small">
														3 hours ago
													</span>
												</a>
											</li>
											<li class="notification-danger">
												<a href="#">
													<i class="entypo-cancel-circled pull-right"></i>
													<span class="line">
														John cancelled the event
													</span>
													<span class="line small">
														9 hours ago
													</span>
												</a>
											</li>
											<li class="notification-info">
												<a href="#">
													<i class="entypo-info pull-right"></i>
													<span class="line">
														The server is status is stable
													</span>
													<span class="line small">
														yesterday at 10:30am
													</span>
												</a>
											</li>
											<li class="notification-warning">
												<a href="#">
													<i class="entypo-rss pull-right"></i>
													<span class="line">
														New comments waiting approval
													</span>
													<span class="line small">
														last week
													</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="external">
										<a href="#">View all notifications</a>
									</li>
								</ul>
							</li>
							<!-- Message Notifications -->
							<li class="notifications dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<i class="entypo-mail"></i>
									<span class="badge badge-secondary">10</span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<ul class="dropdown-menu-list scroller">
											<li class="active">
												<a href="#">
													<span class="image pull-right">
														<img src="<?php echo base_url('assets/admin/images/thumb-1.png'); ?>" alt="" class="img-circle" />
													</span>
													<span class="line">
														<strong>Luc Chartier</strong>
														- yesterday
													</span>
													<span class="line desc small">
														This ain’t our first item, it is the best of the rest.
													</span>
												</a>
											</li>
											<li class="active">
												<a href="#">
													<span class="image pull-right">
														<img src="<?php echo base_url('assets/admin/images/thumb-2.png'); ?>" alt="" class="img-circle" />
													</span>
													<span class="line">
														<strong>Salma Nyberg</strong>
														- 2 days ago
													</span>
													<span class="line desc small">
														Oh he decisively impression attachment friendship so if everything. 
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="image pull-right">
														<img src="<?php echo base_url('assets/admin/images/thumb-3.png'); ?>" alt="" class="img-circle" />
													</span>
													<span class="line">
														Hayden Cartwright
														- a week ago
													</span>
													<span class="line desc small">
														Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="image pull-right">
														<img src="<?php echo base_url('assets/admin/images/thumb-4.png'); ?>" alt="" class="img-circle" />
													</span>
													<span class="line">
														Sandra Eberhardt
														- 16 days ago
													</span>
													<span class="line desc small">
														On so attention necessary at by provision otherwise existence direction.
													</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="external">
										<a href="mailbox.html">All Messages</a>
									</li>
								</ul>	
							</li>
							<!-- Task Notifications -->
							<li class="notifications dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<i class="entypo-list"></i>
									<span class="badge badge-warning">1</span>
								</a>
								<ul class="dropdown-menu">
									<li class="top">
										<p>You have 6 pending tasks</p>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller">
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">Procurement</span>
														<span class="percent">27%</span>
													</span>
													<span class="progress">
														<span style="width: 27%;" class="progress-bar progress-bar-success">
															<span class="sr-only">27% Complete</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">App Development</span>
														<span class="percent">83%</span>
													</span>
													<span class="progress progress-striped">
														<span style="width: 83%;" class="progress-bar progress-bar-danger">
															<span class="sr-only">83% Complete</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">HTML Slicing</span>
														<span class="percent">91%</span>
													</span>
													<span class="progress">
														<span style="width: 91%;" class="progress-bar progress-bar-success">
															<span class="sr-only">91% Complete</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">Database Repair</span>
														<span class="percent">12%</span>
													</span>
													<span class="progress progress-striped">
														<span style="width: 12%;" class="progress-bar progress-bar-warning">
															<span class="sr-only">12% Complete</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">Backup Create Progress</span>
														<span class="percent">54%</span>
													</span>
													<span class="progress progress-striped">
														<span style="width: 54%;" class="progress-bar progress-bar-info">
															<span class="sr-only">54% Complete</span>
														</span>
													</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="task">
														<span class="desc">Upgrade Progress</span>
														<span class="percent">17%</span>
													</span>
													<span class="progress progress-striped">
														<span style="width: 17%;" class="progress-bar progress-bar-important">
															<span class="sr-only">17% Complete</span>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="external">
										<a href="#">See all tasks</a>
									</li>
								</ul>
							</li>
						</ul>
					</ul>
				</div>
				<!-- Raw Links -->
				<div class="col-md-6 col-sm-4 clearfix hidden-xs">
					<ul class="list-inline links-list pull-right">
						<li>
							<a href="extra-login.html">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<hr />
			<script type="text/javascript">
				jQuery(document).ready(function($) 
				{
					$('.pie').sparkline('html', {
						type: 'pie',
						borderWidth: 0, 
						sliceColors: ['#3d4554', '#ee4749','#00b19d']
					});


					$(".chart").sparkline([1,2,3,1], {
						type: 'pie',
						barColor: '#485671',
						height: '110px',
						barWidth: 10,
						barSpacing: 2});
					
					var map = $("#map");
					
					map.vectorMap({
						map: 'europe_merc_en',
						zoomMin: '3',
						backgroundColor: '#00a651',
						focusOn: { x: 0.5, y: 0.8, scale: 3 }
					});
					
					// Rickshaw
					var seriesData = [ [], [] ];
					
					var random = new Rickshaw.Fixtures.RandomData(50);
					
					for (var i = 0; i < 90; i++) 
					{
						random.addData(seriesData);
					}
					
					var graph = new Rickshaw.Graph( {
						element: document.getElementById("rickshaw-chart-demo-2"),
						height: 217,
						renderer: 'area',
						stroke: false,
						preserve: true,
						series: [{
								color: '#359ade',
								data: seriesData[0],
								name: 'Page Views'
							}, {
								color: '#73c8ff',
								data: seriesData[1],
								name: 'Unique Users'
							}, {
								color: '#e0f2ff',
								data: seriesData[1],
								name: 'Bounce Rate'
							}
						]
					} );
					
					graph.render();
					
					var hoverDetail = new Rickshaw.Graph.HoverDetail( {
						graph: graph,
						xFormatter: function(x) {
							return new Date(x * 1000).toString();
						}
					} );
					
					var legend = new Rickshaw.Graph.Legend( {
						graph: graph,
						element: document.getElementById('rickshaw-legend')
					} );
					
					var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
						graph: graph,
						legend: legend
					} );
					
					setInterval( function() {
						random.removeData(seriesData);
						random.addData(seriesData);
						graph.update();
					
					}, 500 );
					
				});
			</script>
