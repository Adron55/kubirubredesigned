<div class="sidebar" data-image="Menu.png">
    <div class="sidebar-wrapper">
        <div class="logo">
            <img  src="{{asset('dj-dash/img/loogo.svg')}}" alt="">
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('home')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.home')}}">
                    <i class="pe-7s-user"></i>
                    <p>Home</p>
                </a>
            </li>
            <li class="disabled">
                <a>
                    <i class="pe-7s-mail"></i>
                    <p>Inbox</p>
                </a>
            </li>
            <li>
                <a href="{{route('dashboard.discounts')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Discounts</p>
                </a>
            </li>
            <li class="disabled">
                <a>
                    <i class="pe-7s-map-marker"></i>
                    <p>Feedbacks</p>
                </a>
            </li>
            <li class="disabled">
                <a>
                    <i class="pe-7s-bell"></i>
                    <p>Customers</p>
                </a>
            </li>
            <li class="disabled">
                <a>
                    <i class="pe-7s-rocket"></i>
                    <p>Chat Room</p>
                </a>
            </li>
            <li class="disabled">
                <a >
                    <i class="pe-7s-note2"></i>
                    <p>Calendar</p>
                </a>
            </li>
            <li >
                <a href="{{route('support')}}">
                    <i class="pe-7s-headphones"></i>
                    <p>Help Center</p>
                </a>
            </li>
            <li class="disabled">
                <a >
                    <i class="pe-7s-settings"></i>
                    <p>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<style type="text/css">
    .btn-disable
    {
        cursor: not-allowed;
        pointer-events: none;

        /*Button disabled - CSS color class*/
        color: #c0c0c0;
    }
</style>
