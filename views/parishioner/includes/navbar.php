<style>
	/* Style the navbar */
#navbar {
  overflow: hidden;
  background-color: #C5AC97;
}

/* Navbar links */
#navbar a {
  color: #f2f2f2;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

/* Add some top padding to the page content to prevent sudden quick movement (as the navigation bar gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 60px;
}
</style>

<div id="navbar">
	<div class="col">
	  <a href="" class="d-flex justify-content-end">Logout</a>
	</div>
</div>