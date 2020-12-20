
<div class="left side-menu">
            
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        

                            <li class="has_sub">
                                <a href="{{URL::to('/dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>
                        
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                <i class="zmdi zmdi-format-list-bulleted"></i> 
                                <span> Thể loại
                                 </span> 
                                <span class="menu-arrow">
                                </span>
                                </a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('theloai.index')}}">Danh sách thể loại</a></li>
                                    <li><a href="{{route('theloai.create')}}">Thêm thể loại</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Phim </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('phim.index')}}">Danh sách phim</a></li>
                                    <li><a href="{{route('phim.create')}}">Thêm phim</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Phòng </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('room.index')}}">Danh sách phòng</a></li>
                                    <li><a href="{{route('room.create')}}">Thêm phòng</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Combo </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('combo.index')}}">Danh sách combo</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Bình luận </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('comment.index')}}">Danh sách bình luận</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Rạp </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('theater.index')}}">Danh sách rạp</a></li>
                                    <li><a href="{{route('theater.create')}}">Thêm  rạp</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span>Liên hệ </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{route('contact_Ad.index')}}">Danh sách liên hệ</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Danh mục tin tức </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{URL::to('/add-category-new')}}">Thêm danh mục</a></li>
                                    <li><a href="{{URL::to('/all-category-new')}}">Danh mục tin tức</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tin tức </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{URL::to('/add-new')}}">Thêm bài viết</a></li>
                                    <li><a href="{{URL::to('/all-new')}}">Tất cả bài viết</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Banner </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                <li><a href="{{URL::to('/add-banner')}}">Thêm banner</a></li>
                                	<li><a href="{{URL::to('/manage-banner')}}">Liệt kê Banner</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> User </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{URL::to('/manage-user')}}">Quản lí user</a></li>
                                </ul>
                            </li>
                            <li class="text-muted menu-title">More</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="label label-success label-pill float-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>                            
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                                        <ul>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->