
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">Personal Financial</a>-->
		  <img src="./source/img/Invoice-icon.png" style="width:34px; float:left; margin:5px 15px 5px 15px; " />
          <span class="navbar-brand">Personal Financial</span>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Input <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Income</a></li>
					<li><a href="#">Budget</a></li>
					<li><a href="#">Expense</a></li>
					<li class="divider"></li>
					<li><a href="#">Closing</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Report <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">2013</a></li>
					<li><a href="#">2014</a></li>
					<li class="divider"></li>
					<li><a href="logout">Logout</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo ucfirst($personname); ?> <b class="caret"></b></a>
				<ul role="menu" class="dropdown-menu">
					<li><a href="#">Settings</a></li>
					<li class="divider"></li>
					<li><a href="logout">Logout</a></li>
				</ul>
			</li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
	
	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          
