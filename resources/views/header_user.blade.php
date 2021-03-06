 <header id="header">
    <div class="container">
      <div class="header-row">
        <div class="header-column justify-content-start"> 
          
          <!-- Logo
          ============================================= -->
          <div class="logos">
            {!!GeneralHelper::getLogo()!!}
          </div>
          <!-- Logo end --> 
          
        </div>
        <div class="header-column justify-content-end"> 
          
          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu navbar navbar-expand-lg">
            <div id="header-nav" class="collapse navbar-collapse">
              <ul class="navbar-nav">
            
               
                <li class="dropdown" style="padding:1px;height: 50px; font-weight: bold"> <a class="" href="#" style="padding: 5px;">Balance:&nbsp;<i class="fas fa-rupee-sign"></i>{{GeneralHelper::getWalletBalance()}}</a><li>
                <li class="login-signup ml-lg-2 dropdown">
                  <a class="pl-lg-4 pr-0 dropdown-toggle" href="#" title="Retailer Login">Welcome, {{ Auth::user()->name }}
                    <span class="d-none d-lg-inline-block"><i class="fas fa-user"></i></span>
                  </a>
                  <!--User Profile Menu Start Here-->
                  @include('userProfileMenu')
                  <!--User Profile Menu Start Here-->
            </div>
          </nav>
          <!-- Primary Navigation end --> 
          
        </div>
        
        <!-- Collapse Button
        ============================================= -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
      </div>
    </div>
  </header>