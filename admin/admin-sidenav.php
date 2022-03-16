
<style>

.sidebar-container {
  position: fixed;
  width: 300px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: red;
  text-align: center;
}

.content-container {
  padding-top: 20px;
}



.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 30px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: white;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #ff0006;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.5s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
  padding-left: 220px;
}
</style>

<div class="sidebar-container">
  
  <ul class="sidebar-navigation">
    <li><a href="admin-dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="admin-inbox.php"><i class="fa fa-envelope fa-lg"></i> Inbox</a></li>
	<li><a href="admin-search-donor.php"><i class="fa fa-search fa-lg"></i>Search Donors</a></li>
	<li><a href="admin-donor-details.php"><i class="fa fa-users "></i> Donors Details</a></li>
	<li><a href=""><i class="fa fa-bed fa-lg"></i> Need Blood</a></li>
	<hr>
	<li><a href="#add" data-toggle="collapse" ><i class="fa fa-cogs fa-lg"></i> Settings</a></li>
	<ul class="nav collapse" id="add">
		<li><a href="admin_country.php"><i class="fa fa-plus fa-lg"></i> Add Country</a>
		<li><a href="admin_state.php"><i class="fa fa-plus fa-lg"></i> Add State</a></li>
		<li><a href="admin_city.php"><i class="fa fa-plus fa-lg"></i> Add City</a></li>
		<li><a href="admin_area.php"><i class="fa fa-plus fa-lg"></i> Add Area</a></li>
		
	</ul>
  </ul>
  <hr>
</div>





