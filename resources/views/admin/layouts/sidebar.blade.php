<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src="{{asset('argon/assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="examples/dashboard.html">
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" id="dropdown">
            <a data-toggle="collapse" class="nav-link" href="#dropdown-lvl1">
              <i class="ni ni-planet text-orange"></i>
              <span class="nav-link-text">Manage</span>
              <span class="caret"></span>
            </a>
            <!-- Manage Dropdown -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a class="nav-link" href="{{route('product.index')}}">Products</a></li>
                  <li><a class="nav-link" href="#">Categories</a></li>
                  <li><a class="nav-link" href="#">Orders</a></li>
                  <li><a class="nav-link" href="#">Customers</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item" id="dropdown">
            <a data-toggle="collapse" class="nav-link" href="#importdropdown">
              <i class="ni ni-cloud-upload-96 text-green"></i>
              <span class="nav-link-text">Import / Export</span>
              <span class="caret"></span>
            </a>
            <!-- Manage Dropdown -->
            <div id="importdropdown" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a class="nav-link" href="#">Import</a></li>
                  <li><a class="nav-link" href="#">Export</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/map.html">
              <i class="ni ni-shop text-blue"></i>
              <span class="nav-link-text">Shop</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/profile.html">
              <i class="ni ni-chat-round text-info"></i>
              <span class="nav-link-text">Inbox</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/tables.html">
              <i class="ni ni-diamond text-red"></i>
              <span class="nav-link-text">Plans</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/login.html">
              <i class="ni ni-notification-70 text-info"></i>
              <span class="nav-link-text">Notification</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="examples/register.html">
              <i class="ni ni-circle-08 text-pink"></i>
              <span class="nav-link-text">Users</span>
            </a>
          </li>
          <li class="nav-item" id="dropdown">
            <a data-toggle="collapse" class="nav-link" href="#settingdropdown">
              <i class="ni ni-settings-gear-65"></i>
              <span class="nav-link-text">Setting</span>
              <span class="caret"></span>
            </a>
            <!-- Manage Dropdown -->
            <div id="settingdropdown" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a class="nav-link" href="#">Profile</a></li>
                  <li><a class="nav-link" href="#">Admin</a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
      </div>
    </div>
  </div>
</nav>