<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container" style="padding: 0;">
        <div class="navbar-header">
            <a href="/" class="navbar-brand" style="padding: 0;margin-right: 10px;"><img src="{{ asset("/images/logo.png")}}" style="width: 122px;" alt="Logo"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="/ideas/create">Ideas<span class="sr-only">(current)</span></a></li>
            <li><a href="/volunteering-business-enablers">Volunteer</a></li>
            <li><a href="/volunteering-business-enablers">Business Enabler</a></li>
            <li><a href="/security">Safety & Security</a></li>
            <li><a href="/map">Explore</a></li>
            <li><a href="/map">Govt Bridge</a></li>
            <li><a href="/map">Infrastructure</a></li>
            <li><a href="/map">Active Well-being</a></li>
            <li><a href="/map">Sustainablity</a></li>
            <!--<li><a href="/map">Youth Engagements</a></li>-->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            @include('_useraccountheader')
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>