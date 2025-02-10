  <!-- Content Wrapper. Contains page content -->
  <aside id="sidebar" class="js-sidebar">
      <!-- Content For Sidebar -->
      <div class="h-100">
          <div class="sidebar-logo">
              <a href="#">Jamal Admin</a>
          </div>
          <ul class="sidebar-nav">
              <li class="sidebar-header">
                  Actions
              </li>
              <li class="sidebar-item">
                  <a href="{{url('admin/dashboard')}}" class="sidebar-link @yield('dashboard_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      Dashboard
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-th"></i>
                      Customers
                  </a>
                  <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{url('admin/customer')}}" class="sidebar-link @yield('customer_selected')">View All Customers</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">VIP's Customers</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed " data-bs-target="#posts" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-copy"></i>
                      Brokers
                  </a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{url('admin/broker')}}" class="sidebar-link @yield('Broker_selected')">View All Brokers</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{url('admin/admin/broker/search')}}" class="sidebar-link @yield('searches_selected')">Broker Trends Searches</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{url('admin/admin/broker/deleted')}}" class="sidebar-link @yield('deleted_brokers_selected')">Brokers TrashBin</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-copy"></i>
                      Somthing new add here
                  </a>
                  <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">Login</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">Register</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link">Forgot Password</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-header">
                  Multi Level Menu
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
                      Multi Dropdown
                  </a>
                  <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1"
                              data-bs-toggle="collapse" aria-expanded="false">Level 1</a>
                          <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                              <li class="sidebar-item">
                                  <a href="#" class="sidebar-link">Level 1.1</a>
                              </li>
                              <li class="sidebar-item">
                                  <a href="#" class="sidebar-link">Level 1.2</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </aside>