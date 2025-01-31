  <!-- Content Wrapper. Contains page content -->
  <aside id="sidebar" class="js-sidebar">
      <!-- Content For Sidebar -->
      <div class="h-100">
          <div class="sidebar-logo">
              <a href="#">Seller Portal</a>
          </div>
          <ul class="sidebar-nav">
              <li class="sidebar-header">
                  Actions
              </li>
              <li class="sidebar-item">
                  <a href="{{url('broker/portal/dashboard')}}" class="sidebar-link @yield('dashboard_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      Dashboard
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-th"></i>
                      Properties
                  </a>
                  <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{url('broker/portal/ListAllProperty')}}" class="sidebar-link @yield('allproperties_selected')">My Listings</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{url('broker/portal/addProperty')}}" class="sidebar-link @yield('addproperty_selected')">Add New Listings</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed " data-bs-target="#posts" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-copy"></i>
                      Offers & Negotiations
                  </a>
                  <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{url('broker/portal/offers')}}" class="sidebar-link @yield('offers_selected')">Offers</a>
                      </li>
                  </ul>
              </li>
              <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse"
                      aria-expanded="false"><i class="nav-icon fas fa-copy"></i>
                      Messages & Notifications
                  </a>
                  <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                      <li class="sidebar-item">
                          <a href="{{url('broker/portal/messages/chats')}}" class="sidebar-link @yield('chats_selected')">Messages</a>
                      </li>
                      <li class="sidebar-item">
                          <a href="{{url('broker/portal/notifications')}}" class="sidebar-link @yield('notifications_selected')">Notifications</a>
                      </li>
                  </ul>

              </li>
              <li class="sidebar-header">
                  Stats
              </li>
              <li class="sidebar-item">
                  <a href="{{url('broker/portal/history')}}" class="sidebar-link @yield('history_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      History
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{url('broker/portal/propertyAnalytics')}}" class="sidebar-link @yield('propertyAnalytics_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      Property Analytics
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{url('broker/portal/accountSettings')}}" class="sidebar-link @yield('accountsettings_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      Account Settings
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{url('broker/portal/supportResources')}}" class="sidebar-link @yield('SAR_selected')">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      Support & Resources
                  </a>
              </li>
          </ul>
      </div>
  </aside>