    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/back"><img src="/admin/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="/back"><img src="/admin/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/back"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                @permission(['Permission Update','All'])
                     <li>
                        <a href=" {{ url('/back/permission') }} "> <i class="menu-icon fa fa-laptop"></i>Permissions </a>
                    </li>
                @endpermission

                @permission(['Permission Update','All'])
                    <li>
                        <a href=" {{ url('/back/roles') }} "> <i class="menu-icon fa fa-laptop"></i>Roles </a>
                    </li>
                @endpermission

                @permission(['Permission Update','All'])
                    <li>
                        <a href=" {{ url('/back/author') }} "> <i class="menu-icon fa fa-laptop"></i>Authors </a>
                    </li>
                @endpermission

                @permission(['Category List','All'])
                    <li>
                        <a href=" {{ url('/back/categroies') }} "> <i class="menu-icon fa fa-laptop"></i>Categories </a>
                    </li>
                @endpermission
                @permission(['Post List','All'])
                    <li>
                        <a href=" {{ url('/back/posts') }} "> <i class="menu-icon fa fa-laptop"></i>Posts </a>
                    </li>
                @endpermission
                @permission(['Post List','All'])
                    <li>
                        <a href=" {{ url('/back/settings') }} "> <i class="menu-icon fa fa-laptop"></i>Settings </a>
                    </li>
                @endpermission

                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->