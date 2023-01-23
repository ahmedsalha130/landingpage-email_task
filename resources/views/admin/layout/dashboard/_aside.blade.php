<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dashboard_files/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li><a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-home"></i><span>@lang('site.dashboard')</span></a>

            </li>




            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa-envira"></i>
                    <span>القسم الرئيسي</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active {{ (request()->is('admin/main_section')) ? 'active' : '' }}">
                    <li><a href="{{route('main_section.index')}}"><i class="fa fa-circle"></i><span>القسم الرئيسي</span></a></li>

                </ul>

                <li class="treeview ">
                    <a href="#" >
                        <i class="fa fa-map"></i>
                        <span>من نحن</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu active {{ (request()->is('admin/about_us')) ? 'active' : '' }}">
                        <li><a href="{{route('about_us.index')}}"><i class="fa fa-circle"></i><span>من نحن</span></a></li>

                    </ul>
                </li>


            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa-product-hunt"></i>
                    <span>@lang('site.services')</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active {{ (request()->is('admin/services')) ? 'active' : '' }}">
                    <li><a href="{{route('services.index')}}"><i class="fa fa-circle"></i><span>@lang('site.services')</span></a></li>
{{--                    <li><a href="{{route('sub_category.index')}}"><i class="fa fa-circle"></i><span>@lang('site.sub.categories')</span></a></li>--}}

                </ul>
            </li>










            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa fa-comment"></i>
                    <span>المدونة</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active {{ (request()->is('admin/blogs')) ? 'active' : '' }}">
                    <li><a href="{{route('blogs.index')}}"><i class="fa fa-circle"></i><span>المدونة</span></a></li>


                </ul>
            </li>

            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa fa-gears"></i>
                    <span>@lang('site.settings')</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active ">
                    <li><a href="{{route('settings.index')}}"><i class="fa fa-circle"></i><span>@lang('site.settings')</span></a></li>


                </ul>
            </li>



            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa fa-mobile-phone"></i>
                    <span>@lang('site.contacts')</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active ">
                    <li><a href="{{route('contacts.index')}}"><i class="fa fa-circle"></i><span>@lang('site.contacts')</span></a></li>


                </ul>
            </li>



            <li class="treeview ">
                <a href="#" >
                    <i class="fa fa-inbox "></i>
                    <span>ارسال الايميلات</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu active ">
                    <li><a href="{{route('admin.emails')}}"><i class="fa fa-circle"></i><span>البريد الاكتروني </span></a></li>


                </ul>
            </li>
        </ul>

    </section>

</aside>

