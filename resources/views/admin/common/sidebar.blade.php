<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
            <!-- Sidebar Widget - Search (hidden) -->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                    <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                </div>
            </div>
        </header>

        <!-- Start: Sidebar Left Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt15"> Navigations</li>
            <li class="active">
                <a href="{{ url('admin/dashboard') }}">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="sidebar-title">Dashboard</span>
                </a>
            </li>
            @if((Auth::id() == 4))
                <li>
                    <a href="{{ url('type/posttype')}}">
                        <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                        Post Types
                    </a>
                </li>
            @endif
            @if(checkAuth(15))
                <li>
                    <a href="{{ url('admin/appointment') }}">
                        <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                        <span class="sidebar-title">Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/membership') }}">
                        <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                        <span class="sidebar-title">Donors</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/postcategory') }}">
                        <span class="fa fa-arrows"></span>
                        Post Categories
                    </a>
                </li>
            @endif

            @if(checkAuth(1))
                <li>
                    <a href="{{ url('admin/banner') }}">
                        <span class="fa fa-file-image-o text-info" aria-hidden="true"></span>
                        <span class="sidebar-title"> Banner & Popup</span>
                    </a>
                </li>
            @endif
            @if(checkAuth(2))
                <li>
                    <a class="accordion-toggle" href="avoid:javascript;">
                        <span class="fa fa-files-o text-info"></span>
                        <span class="sidebar-title"> Manage Posts </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        @if(Auth::id() == 1)
                            <li>
                                <a href="{{ url('type/posttype') }}">
                                    <span class="fa fa-arrows"></span>
                                    Post Types
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/postcategory') }}">
                                    <span class="fa fa-arrows"></span>
                                    Post Categories
                                </a>
                            </li>
                        @endif
                    <!-- Post Type List -->
                        @if($posttype)
                            @foreach($posttype as $row)
                                <li>
                                    <a href="{{ url('admin/'.$row->uri)}}">
                                        <span class="fa fa fa-arrows-h"></span>
                                        {{$row->post_type}}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            @endif
            @if(checkAuth(3))
                <li class="">
                    <a href="avoid:javascript;" class="accordion-toggle">
                        <span class="fa fa-files-o text-info" aria-hidden="true"></span>
                        <span class="sidebar-title"> Manage Trades </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <?php /*?>
              <li>
                <a href="{{ url('admin/portfoliocategory') }}">
                  <span class="fa fa fa-arrows-h"></span>
                  Portfolio Category
                </a>
              </li>
              <?php */?>
                        <li>
                            <a href="{{ url('admin/our-trades') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Trades
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(4))
                <li class="">
                    <a href="avoid:javascript;" class="accordion-toggle">
                        <span class="fa fa-file-image-o text-info"></span>
                        <span class="sidebar-title">  Manage Photo Gallery </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/imagecategory') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Gallery Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/imagegallery') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Photos
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(5))
                <li class="">
                    <a href="avoid:javascript;" class="accordion-toggle">
                        <span class="fa fa-file-video-o text-info"></span>
                        <span class="sidebar-title">  Manage Video Gallery </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/videocategory') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Video Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/videogallery') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Videos
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(6))
                <li class="">
                    <a href="{{ url('admin/circular') }}" class="accordion-toggle">
                        <span class="fa fa-files-o text-info"></span>
                        <span class="sidebar-title">Manage Circular </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/circulartype') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Circular Type
                            </a>
                        </li>
                        @if($circulartype)
                            @foreach($circulartype as $circular)
                                <li>
                                    <a href="{{ route('admin.circular.index',$circular->id) }}">
                                        <span class="fa fa fa-arrows-h"></span>
                                        {{ ucfirst($circular->circular_type) }}
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>
            @endif
            @if(checkAuth(7))
                <li class="">
                    <a href="#" class="accordion-toggle">
                        <span class="fa fa-files-o text-info"></span>
                        <span class="sidebar-title">  Manage Tender </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('tender.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Tender
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tender-category.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Tender Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('awarded-vender.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Awarded Venders
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(8))
                <li class="">
                    <a href="{{ url('admin/user') }}" class="accordion-toggle">
                        <span class="glyphicon glyphicon-user text-info"></span>
                        <span class="sidebar-title">Manage Members </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/member') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Members
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/department') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Department Setup
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('init.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Init Setting
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(9))
                <li class="">
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-user text-info"></span>
                        <span class="sidebar-title"> Manage Users </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('user.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('role.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                User Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('adminmenu.index') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Admin Menus
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(10))
                <li>
                    <a href="{{ url('newsletter/subcribers') }}">
                        <span class="fa fa-users text-info" aria-hidden="true"></span>
                        <span class="sidebar-title"> Newsletter Subcribers  </span>
                    </a>
                </li>
            @endif
            @if(checkAuth(11))
                <li>
                    <a href="{{ route('dwninfo.index') }}">
                        <span class="fa fa-download text-info"></span>
                        <span class="sidebar-title"> Download Info </span>
                    </a>
                </li>
            @endif
            @if(checkAuth(13))
                <li class="">
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-user text-info"></span>
                        <span class="sidebar-title">Manage Rightshare </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/rightshare_company') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                RightShare Company
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/rightshare_eligibility') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                RightShare Eligibility
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/rightshare_holderlist') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                RightShare Holderlist
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(14))
                <li class="">
                    <a class="accordion-toggle">
                        <span class="glyphicon glyphicon-user text-info"></span>
                        <span class="sidebar-title">Manage Taxliability </span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('admin/taxliability_company') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Taxliability Company
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/taxliability_eligibility') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Taxliability Eligibility
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/taxliability_holderlist') }}">
                                <span class="fa fa fa-arrows-h"></span>
                                Taxliability Holderlist
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            @if(checkAuth(12))
                <li>
                    <a href="{{ route('settings.index') }}">
                        <span class="fa fa-cogs text-info"></span>
                        <span class="sidebar-title"> Settings </span>
                    </a>
                </li>
            @endif


            <div class="sidebar-toggle-mini">
                <a href="avoid:javascript;">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
    </div>

</aside>
