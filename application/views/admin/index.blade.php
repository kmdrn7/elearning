<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="AFDeveloper">

    <title>Best Elearning On Earth | Admin | Dashboard</title>

    <link rel="apple-touch-icon" href="{{ assets('admin/img/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ assets('admin/img/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ assets('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/site.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ assets('admin/css/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/chartist/chartist.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/css/v1.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ assets('admin/fonts/material-design/material-design.min.css') }}">
    <link rel="stylesheet" href="{{ assets('admin/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <!--[if lt IE 9]>
    <script src="../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ assets('admin/js/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition dashboard">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('admin.layouts.navbar')
    
    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-category">General</li>
                        <li class="site-menu-item active">
                            <a class="animsition-link" href="index.html">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                                <span class="site-menu-title">Layouts</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/menu-collapsed.html">
                                        <span class="site-menu-title">Menu Collapsed</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/menu-expended.html">
                                        <span class="site-menu-title">Menu Expended</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/grids.html">
                                        <span class="site-menu-title">Grid Scaffolding</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/layout-grid.html">
                                        <span class="site-menu-title">Layout Grid</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/headers.html">
                                        <span class="site-menu-title">Different Headers</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/panel-transition.html">
                                        <span class="site-menu-title">Panel Transition</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/boxed.html">
                                        <span class="site-menu-title">Boxed Layout</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/two-columns.html">
                                        <span class="site-menu-title">Two Columns</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/bordered-header.html">
                                        <span class="site-menu-title">Bordered Header</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/menubar-flipped.html">
                                        <span class="site-menu-title">Menubar Flipped</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="layouts/menubar-native-scrolling.html">
                                        <span class="site-menu-title">Menubar Native Scrolling</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Page Aside</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="layouts/aside-left-static.html">
                                                <span class="site-menu-title">Left Static</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="layouts/aside-right-static.html">
                                                <span class="site-menu-title">Right Static</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="layouts/aside-left-fixed.html">
                                                <span class="site-menu-title">Left Fixed</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="layouts/aside-right-fixed.html">
                                                <span class="site-menu-title">Right Fixed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                                <span class="site-menu-title">Pages</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Errors</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/error-400.html">
                                                <span class="site-menu-title">400</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/error-403.html">
                                                <span class="site-menu-title">403</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/error-404.html">
                                                <span class="site-menu-title">404</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/error-500.html">
                                                <span class="site-menu-title">500</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/error-503.html">
                                                <span class="site-menu-title">503</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/faq.html">
                                        <span class="site-menu-title">FAQ</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/gallery.html">
                                        <span class="site-menu-title">Gallery</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/gallery-grid.html">
                                        <span class="site-menu-title">Gallery Grid</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/search-result.html">
                                        <span class="site-menu-title">Search Result</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Maps</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/map-google.html">
                                                <span class="site-menu-title">Google Maps</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/map-vector.html">
                                                <span class="site-menu-title">Vector Maps</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/maintenance.html">
                                        <span class="site-menu-title">Maintenance</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/forgot-password.html">
                                        <span class="site-menu-title">Forgot Password</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/lockscreen.html">
                                        <span class="site-menu-title">Lockscreen</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/login.html">
                                        <span class="site-menu-title">Login</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/register.html">
                                        <span class="site-menu-title">Register</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/login-v2.html">
                                        <span class="site-menu-title">Login V2</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/register-v2.html">
                                        <span class="site-menu-title">Register V2</span>
                                        <div class="site-menu-label">
                                            <span class="badge badge-info badge-round">new</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/login-v3.html">
                                        <span class="site-menu-title">Login V3</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/register-v3.html">
                                        <span class="site-menu-title">Register V3</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/user.html">
                                        <span class="site-menu-title">User List</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/invoice.html">
                                        <span class="site-menu-title">Invoice</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/blank.html">
                                        <span class="site-menu-title">Blank Page</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Email</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/email-articles.html">
                                                <span class="site-menu-title">Articles</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/email-welcome.html">
                                                <span class="site-menu-title">Welcome</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/email-post.html">
                                                <span class="site-menu-title">Post</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/email-thumbnail.html">
                                                <span class="site-menu-title">Thumbnail</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="pages/email-news.html">
                                                <span class="site-menu-title">News</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/code-editor.html">
                                        <span class="site-menu-title">Code Editor</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/profile.html">
                                        <span class="site-menu-title">Profile</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/profile-v2.html">
                                        <span class="site-menu-title">Profile V2</span>
                                        <div class="site-menu-label">
                                            <span class="badge badge-info badge-round">new</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/profile-v3.html">
                                        <span class="site-menu-title">Profile V3</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/site-map.html">
                                        <span class="site-menu-title">Sitemap</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="pages/project.html">
                                        <span class="site-menu-title">Project</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-category">Elements</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                                <span class="site-menu-title">Basic UI</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Panel</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-structure.html">
                                                <span class="site-menu-title">Panel Structure</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-actions.html">
                                                <span class="site-menu-title">Panel Actions</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-portlets.html">
                                                <span class="site-menu-title">Panel Portlets</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/buttons.html">
                                        <span class="site-menu-title">Buttons</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/cards.html">
                                        <span class="site-menu-title">Cards</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/dropdowns.html">
                                        <span class="site-menu-title">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/icons.html">
                                        <span class="site-menu-title">Icons</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/list.html">
                                        <span class="site-menu-title">List</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/tooltip-popover.html">
                                        <span class="site-menu-title">Tooltip &amp; Popover</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/modals.html">
                                        <span class="site-menu-title">Modals</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/tabs-accordions.html">
                                        <span class="site-menu-title">Tabs &amp; Accordions</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/images.html">
                                        <span class="site-menu-title">Images</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/badges.html">
                                        <span class="site-menu-title">Badges</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/progress-bars.html">
                                        <span class="site-menu-title">Progress Bars</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/carousel.html">
                                        <span class="site-menu-title">Carousel</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/typography.html">
                                        <span class="site-menu-title">Typography</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/colors.html">
                                        <span class="site-menu-title">Colors</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/utilities.html">
                                        <span class="site-menu-title">Utilties</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>
                                <span class="site-menu-title">Advanced UI</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item hidden-sm-down site-tour-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Tour</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/animation.html">
                                        <span class="site-menu-title">Animation</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/highlight.html">
                                        <span class="site-menu-title">Highlight</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/lightbox.html">
                                        <span class="site-menu-title">Lightbox</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/scrollable.html">
                                        <span class="site-menu-title">Scrollable</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/rating.html">
                                        <span class="site-menu-title">Rating</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/context-menu.html">
                                        <span class="site-menu-title">Context Menu</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/alertify.html">
                                        <span class="site-menu-title">Alertify</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/masonry.html">
                                        <span class="site-menu-title">Masonry</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/treeview.html">
                                        <span class="site-menu-title">Treeview</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/toastr.html">
                                        <span class="site-menu-title">Toastr</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/maps-vector.html">
                                        <span class="site-menu-title">Vector Maps</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/maps-google.html">
                                        <span class="site-menu-title">Google Maps</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/sortable-nestable.html">
                                        <span class="site-menu-title">Sortable &amp; Nestable</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="advanced/bootbox-sweetalert.html">
                                        <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                                <span class="site-menu-title">Structure</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/alerts.html">
                                        <span class="site-menu-title">Alerts</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/ribbon.html">
                                        <span class="site-menu-title">Ribbon</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/pricing-tables.html">
                                        <span class="site-menu-title">Pricing Tables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/overlay.html">
                                        <span class="site-menu-title">Overlay</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/cover.html">
                                        <span class="site-menu-title">Cover</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/timeline-simple.html">
                                        <span class="site-menu-title">Simple Timeline</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/timeline.html">
                                        <span class="site-menu-title">Timeline</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/step.html">
                                        <span class="site-menu-title">Step</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/comments.html">
                                        <span class="site-menu-title">Comments</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/media.html">
                                        <span class="site-menu-title">Media</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/chat.html">
                                        <span class="site-menu-title">Chat</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/testimonials.html">
                                        <span class="site-menu-title">Testimonials</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/nav.html">
                                        <span class="site-menu-title">Nav</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/navbars.html">
                                        <span class="site-menu-title">Navbars</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/blockquotes.html">
                                        <span class="site-menu-title">Blockquotes</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/pagination.html">
                                        <span class="site-menu-title">Pagination</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="structure/breadcrumbs.html">
                                        <span class="site-menu-title">Breadcrumbs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                                <span class="site-menu-title">Widgets</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/statistics.html">
                                        <span class="site-menu-title">Statistics Widgets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/data.html">
                                        <span class="site-menu-title">Data Widgets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/blog.html">
                                        <span class="site-menu-title">Blog Widgets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/chart.html">
                                        <span class="site-menu-title">Chart Widgets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/social.html">
                                        <span class="site-menu-title">Social Widgets</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="widgets/weather.html">
                                        <span class="site-menu-title">Weather Widgets</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                                <span class="site-menu-title">Forms</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/general.html">
                                        <span class="site-menu-title">General Elements</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/material.html">
                                        <span class="site-menu-title">Material Elements</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/advanced.html">
                                        <span class="site-menu-title">Advanced Elements</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/layouts.html">
                                        <span class="site-menu-title">Form Layouts</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/wizard.html">
                                        <span class="site-menu-title">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/validation.html">
                                        <span class="site-menu-title">Form Validation</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/masks.html">
                                        <span class="site-menu-title">Form Masks</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Editors</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="forms/editor-summernote.html">
                                                <span class="site-menu-title">Summernote</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="forms/editor-markdown.html">
                                                <span class="site-menu-title">Markdown</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="forms/editor-ace.html">
                                                <span class="site-menu-title">Ace Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/image-cropping.html">
                                        <span class="site-menu-title">Image Cropping</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="forms/file-uploads.html">
                                        <span class="site-menu-title">File Uploads</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                                <span class="site-menu-title">Tables</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/basic.html">
                                        <span class="site-menu-title">Basic Tables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/bootstrap.html">
                                        <span class="site-menu-title">Bootstrap Tables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/floatthead.html">
                                        <span class="site-menu-title">floatThead</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/responsive.html">
                                        <span class="site-menu-title">Responsive Tables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/editable.html">
                                        <span class="site-menu-title">Editable Tables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/jsgrid.html">
                                        <span class="site-menu-title">jsGrid</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/footable.html">
                                        <span class="site-menu-title">FooTable</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/datatable.html">
                                        <span class="site-menu-title">DataTables</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/jqtabledit.html">
                                        <span class="site-menu-title">Jquery Tabledit</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="tables/table-dragger.html">
                                        <span class="site-menu-title">Table Dragger</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                                <span class="site-menu-title">Chart</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/chartjs.html">
                                        <span class="site-menu-title">Chart.js</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/gauges.html">
                                        <span class="site-menu-title">Gauges</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/flot.html">
                                        <span class="site-menu-title">Flot</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/peity.html">
                                        <span class="site-menu-title">Peity</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/sparkline.html">
                                        <span class="site-menu-title">Sparkline</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/morris.html">
                                        <span class="site-menu-title">Morris</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/chartist.html">
                                        <span class="site-menu-title">Chartist.js</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/rickshaw.html">
                                        <span class="site-menu-title">Rickshaw</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/pie-progress.html">
                                        <span class="site-menu-title">Pie Progress</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="charts/c3.html">
                                        <span class="site-menu-title">C3</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="site-menu-category">Apps</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                                <span class="site-menu-title">Apps</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/contacts/contacts.html">
                                        <span class="site-menu-title">Contacts</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/calendar/calendar.html">
                                        <span class="site-menu-title">Calendar</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/notebook/notebook.html">
                                        <span class="site-menu-title">Notebook</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/taskboard/taskboard.html">
                                        <span class="site-menu-title">Taskboard</span>
                                    </a>
                                </li>
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Documents</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="apps/documents/articles.html">
                                                <span class="site-menu-title">Articles</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="apps/documents/categories.html">
                                                <span class="site-menu-title">Categories</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="apps/documents/article.html">
                                                <span class="site-menu-title">Article</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/forum/forum.html">
                                        <span class="site-menu-title">Forum</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/message/message.html">
                                        <span class="site-menu-title">Message</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/projects/projects.html">
                                        <span class="site-menu-title">Projects</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/mailbox/mailbox.html">
                                        <span class="site-menu-title">Mailbox</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/media/overview.html">
                                        <span class="site-menu-title">Media</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/work/work.html">
                                        <span class="site-menu-title">Work</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/location/location.html">
                                        <span class="site-menu-title">Location</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="apps/travel/travel.html">
                                        <span class="site-menu-title">Travel</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="site-menubar-section">
                        <h5>
                            Milestone
                            <span class="float-right">30%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                        </div>
                        <h5>
                            Release
                            <span class="float-right">60%</span>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-menubar-footer">
            <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
                data-original-title="Settings">
                <span class="icon md-settings" aria-hidden="true"></span>
            </a>
            <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
                <span class="icon md-eye-off" aria-hidden="true"></span>
            </a>
            <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
                <span class="icon md-power" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="site-gridmenu">
        <div>
            <div>
                <ul>
                    <li>
                        <a href="apps/mailbox/mailbox.html">
                            <i class="icon md-email"></i>
                            <span>Mailbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/calendar/calendar.html">
                            <i class="icon md-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/contacts/contacts.html">
                            <i class="icon md-account"></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/media/overview.html">
                            <i class="icon md-videocam"></i>
                            <span>Media</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/documents/categories.html">
                            <i class="icon md-receipt"></i>
                            <span>Documents</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/projects/projects.html">
                            <i class="icon md-image"></i>
                            <span>Project</span>
                        </a>
                    </li>
                    <li>
                        <a href="apps/forum/forum.html">
                            <i class="icon md-comments"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html">
                            <i class="icon md-view-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Page -->
    <div class="page">
        <div class="page-content container-fluid">
            <div class="row" data-plugin="matchHeight" data-by-row="true">
                <div class="col-xl-3 col-md-6">
                    <!-- Widget Linearea One-->
                    <div class="card card-shadow" id="widgetLineareaOne">
                        <div class="card-block p-20 pt-10">
                            <div class="clearfix">
                                <div class="grey-800 float-left py-10">
                                    <i class="icon md-account grey-600 font-size-24 vertical-align-bottom mr-5"></i>
                                    User
                                </div>
                                <span class="float-right grey-700 font-size-30">1,253</span>
                            </div>
                            <div class="mb-20 grey-500">
                                <i class="icon md-long-arrow-up green-500 font-size-16"></i> 15% From this yesterday
                            </div>
                            <div class="ct-chart h-50"></div>
                        </div>
                    </div>
                    <!-- End Widget Linearea One -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Widget Linearea Two -->
                    <div class="card card-shadow" id="widgetLineareaTwo">
                        <div class="card-block p-20 pt-10">
                            <div class="clearfix">
                                <div class="grey-800 float-left py-10">
                                    <i class="icon md-flash grey-600 font-size-24 vertical-align-bottom mr-5"></i>
                                    VISITS
                                </div>
                                <span class="float-right grey-700 font-size-30">2,425</span>
                            </div>
                            <div class="mb-20 grey-500">
                                <i class="icon md-long-arrow-up green-500 font-size-16"></i> 34.2% From this week
                            </div>
                            <div class="ct-chart h-50"></div>
                        </div>
                    </div>
                    <!-- End Widget Linearea Two -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Widget Linearea Three -->
                    <div class="card card-shadow" id="widgetLineareaThree">
                        <div class="card-block p-20 pt-10">
                            <div class="clearfix">
                                <div class="grey-800 float-left py-10">
                                    <i class="icon md-chart grey-600 font-size-24 vertical-align-bottom mr-5"></i>
                                    Total Clicks
                                </div>
                                <span class="float-right grey-700 font-size-30">1,864</span>
                            </div>
                            <div class="mb-20 grey-500">
                                <i class="icon md-long-arrow-down red-500 font-size-16"></i> 15% From this yesterday
                            </div>
                            <div class="ct-chart h-50"></div>
                        </div>
                    </div>
                    <!-- End Widget Linearea Three -->
                </div>
                <div class="col-xl-3 col-md-6">
                    <!-- Widget Linearea Four -->
                    <div class="card card-shadow" id="widgetLineareaFour">
                        <div class="card-block p-20 pt-10">
                            <div class="clearfix">
                                <div class="grey-800 float-left py-10">
                                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom mr-5"></i>
                                    Items
                                </div>
                                <span class="float-right grey-700 font-size-30">845</span>
                            </div>
                            <div class="mb-20 grey-500">
                                <i class="icon md-long-arrow-up green-500 font-size-16"></i> 18.4% From this yesterday
                            </div>
                            <div class="ct-chart h-50"></div>
                        </div>
                    </div>
                    <!-- End Widget Linearea Four -->
                </div>

                <div class="col-xxl-5 col-lg-6">
                    <!-- Panel Projects -->
                    <div class="panel" id="projects">
                        <div class="panel-heading">
                            <h3 class="panel-title">Projects</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>Projects</td>
                                        <td>Completed</td>
                                        <td>Date</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>The sun climbing plan</td>
                                        <td>
                                            <span data-plugin="peityPie" data-skin="red">7/10</span>
                                        </td>
                                        <td>Jan 1, 2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon md-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon md-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lunar probe project</td>
                                        <td>
                                            <span data-plugin="peityPie" data-skin="blue">3/10</span>
                                        </td>
                                        <td>Feb 12, 2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon md-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon md-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dream successful plan</td>
                                        <td>
                                            <span data-plugin="peityPie" data-skin="green">9/10</span>
                                        </td>
                                        <td>Apr 9, 2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon md-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon md-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Office automatization</td>
                                        <td>
                                            <span data-plugin="peityPie" data-skin="orange">5/10</span>
                                        </td>
                                        <td>May 15, 2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon md-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon md-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Open strategy</td>
                                        <td>
                                            <span data-plugin="peityPie" data-skin="brown">2/10</span>
                                        </td>
                                        <td>Jun 2, 2017</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon md-wrench" aria-hidden="true"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-default"
                                                data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon md-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Panel Projects -->
                </div>

                <div class="col-xxl-7 col-lg-6">
                    <!-- Panel Projects Status -->
                    <div class="panel" id="projects-status">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Projects Status
                                <span class="badge badge-pill badge-info">5</span>
                            </h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Project</td>
                                        <td>Status</td>
                                        <td class="text-left">Progress</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>619</td>
                                        <td>The sun climbing plan</td>
                                        <td>
                                            <span class="badge badge-primary">Developing</span>
                                        </td>
                                        <td>
                                            <span data-plugin="peityLine">5,3,2,-1,-3,-2,2,3,5,2</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>620</td>
                                        <td>Lunar probe project</td>
                                        <td>
                                            <span class="badge badge-warning">Design</span>
                                        </td>
                                        <td>
                                            <span data-plugin="peityLine">1,-1,0,2,3,1,-1,1,4,2</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>621</td>
                                        <td>Dream successful plan</td>
                                        <td>
                                            <span class="badge badge-info">Testing</span>
                                        </td>
                                        <td>
                                            <span data-plugin="peityLine">2,3,-1,-3,-1,0,2,4,5,3</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>622</td>
                                        <td>Office automatization</td>
                                        <td>
                                            <span class="badge badge-danger">Canceled</span>
                                        </td>
                                        <td>
                                            <span data-plugin="peityLine">1,-2,0,2,4,5,3,2,4,2</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>623</td>
                                        <td>Open strategy</td>
                                        <td>
                                            <span class="badge badge-default">Reply waiting</span>
                                        </td>
                                        <td>
                                            <span data-plugin="peityLine">4,2,-1,-3,-2,1,3,5,2,4</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Panel Projects Stats -->
                </div>

            </div>
        </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
        <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
        <div class="site-footer-right">
            Crafted with <i class="red-600 icon md-favorite"></i> by <a href="https://themeforest.net/user/creation-studio">Creation
                Studio</a>
        </div>
    </footer>
    <!-- Core  -->
    <script src="{{ assets('admin/js/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ assets('admin/js/jquery/jquery.js') }}"></script>
    <script src="{{ assets('admin/js/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ assets('admin/js/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ assets('admin/js/animsition/animsition.js') }}"></script>
    <script src="{{ assets('admin/js/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ assets('admin/js/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ assets('admin/js/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ assets('admin/js/ashoverscroll/jquery-asHoverScroll.js') }}"></script>
    <script src="{{ assets('admin/js/waves/waves.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ assets('admin/js/switchery/switchery.js') }}"></script>
    <script src="{{ assets('admin/js/intro-js/intro.js') }}"></script>
    <script src="{{ assets('admin/js/screenfull/screenfull.js') }}"></script>
    <script src="{{ assets('admin/js/slidepanel/jquery-slidePanel.js') }}"></script>
    <script src="{{ assets('admin/js/chartist/chartist.min.js') }}"></script>
    <script src="{{ assets('admin/js/chartist-plugin-tooltip/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ assets('admin/js/matchheight/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ assets('admin/js/peity/jquery.peity.min.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ assets('admin/js/Component.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin.js') }}"></script>
    <script src="{{ assets('admin/js/Base.js') }}"></script>
    <script src="{{ assets('admin/js/Config.js') }}"></script>

    <script src="{{ assets('admin/js/Section/Menubar.js') }}"></script>
    <script src="{{ assets('admin/js/Section/GridMenu.js') }}"></script>
    <script src="{{ assets('admin/js/Section/Sidebar.js') }}"></script>
    <script src="{{ assets('admin/js/Section/PageAside.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/menu.js') }}"></script>

    <script src="{{ assets('admin/js/config/colors.js') }}"></script>
    <script src="{{ assets('admin/js/config/tour.js') }}"></script>
    <script>
        Config.set('assets', '{{ assets("admin") }}');
    </script>

    <!-- Page -->
    <script src="{{ assets('admin/js/Site.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/switchery.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/matchheight.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/jvectormap.js') }}"></script>
    <script src="{{ assets('admin/js/Plugin/peity.js') }}"></script>

    <script src="{{ assets('admin/js/v1.js') }}"></script>
</body>

</html>