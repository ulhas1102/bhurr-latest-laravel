<nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{url('driver-admin-dashboard')}}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Drivers</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul>
                          <li class="nav-item"><a class="nav-link" href="{{url('drivers-list')}}">All Driver</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('online-drivers-list')}}">Online Drivers</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('offline-drivers-list')}}">Offline Drivers</a></li>
                      </ul>
                  </div>
              </li>
              <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Fare Management</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="/hours-list">Hours</a></li>
                          <li class="nav-item"><a class="nav-link" href="/day-list">Day</a></li>
                          <li class="nav-item"><a class="nav-link" href="/package-list">Package</a></li>
                       
                      </ul>
                  </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="{{url('carclass-list')}}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Car Class</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Enquiry</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <!-- <li class="nav-item"><a class="nav-link" href="{{url('add-enquiry')}}">Add Enquiry</a></li> -->
                          <!-- <li class="nav-item"><a class="nav-link" href="/add-customer-enquiry">Customer Enquiry</a></li> -->
                          <li class="nav-item"><a class="nav-link" href="{{url('all-driver-enquiries')}}">All Enquiry</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('contractual-enquiries')}}">Contractual Enquiry</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('confirmed-enquiries')}}">Confirmed Enquiry</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('cancelled-enquiries')}}">Cancelled Enquiry</a></li>
                       
                      </ul>
                  </div>
              </li>

              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Fare Management</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="{{url('local-fare-list')}}">Local Fare</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('outstation-fare-list')}}">Outstation Fare</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('commission')}}">Commission</a></li>

                         <!-- <li class="nav-item"><a class="nav-link" href="{{url('one-way-fare-list')}}">One Way Fare</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{url('driver-rate')}}">Driver Rate</a></li> -->

                       
                      </ul>
                  </div>
              </li>
				
				 <li class="nav-item">
                  <a href="{{url('document-update-requests')}}" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Document Update Request</span>
                    <i class="menu-arrow"></i>
                  </a>
                
              </li>

            
           
              <!-- <li class="nav-item">
                <a class="nav-link" href="{{url('view-admin-profile')}}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Profile</span>
                </a>
              </li> -->
            </ul>
        </div>
      </nav>