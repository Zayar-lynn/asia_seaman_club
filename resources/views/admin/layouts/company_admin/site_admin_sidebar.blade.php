<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" class="simple-text logo-normal">
            {{$company_name}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @if($url=="dashboard") active @endif">
                <a class="nav-link" href="{{url('company_dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- <li class="nav-item @if($url=="company_profile") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/company_profile')}}">
                    <i class="material-icons">person</i>
                    <p>Manage Website</p>
                </a>
            </li>
            <li class="nav-item @if($url=="company_photo") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/company_photo')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Company Photo</p>
                </a>
            </li> --}}
            {{--  <li class="nav-item @if($url=="company_list") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/company_list')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Company List</p>
                </a>
            </li>  --}}
            {{--  <li class="nav-item @if($url=="category") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/category')}}">
                    <i class="material-icons">library_books</i>
                    <p>Manage Category</p>
                </a>
            </li>  --}}
            {{--  <li class="nav-item @if($url=="blog") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/blog')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Manage Blog</p>
                </a>
            </li>
            <li class="nav-item @if($url=="feedback") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/feedback')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Manage Feedback</p>
                </a>
            </li>  --}}
            <li class="nav-item @if($url=="jobpost") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/jobpost')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Job Post</p>
                </a>
            </li>
            <li class="nav-item @if($url=="normal_post") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/normalpost')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Normal Post</p>
                </a>
            </li>
            <li class="nav-item @if($url=="training_post") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/training_post')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Training Post</p>
                </a>
            </li>
            <li class="nav-item @if($url=="gallery") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/gallery')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Gallery</p>
                </a>
            </li>
            <li class="nav-item @if($url=="sub_company") active @endif">
                <a class="nav-link" href="{{url('company_dashboard/sub_company')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Sub Company</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">
                    <i class="material-icons">notifications</i>
                    <p>Logout</p>
                </a>
            </li>
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./notifications.html">--}}
                    {{--<i class="material-icons">notifications</i>--}}
                    {{--<p>Notifications</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./rtl.html">--}}
                    {{--<i class="material-icons">language</i>--}}
                    {{--<p>RTL Support</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active-pro ">--}}
                {{--<a class="nav-link" href="./upgrade.html">--}}
                    {{--<i class="material-icons">unarchive</i>--}}
                    {{--<p>Upgrade to PRO</p>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>