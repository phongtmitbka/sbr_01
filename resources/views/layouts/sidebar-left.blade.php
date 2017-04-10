<div class="navbar-default sidebar">
    <div class="sidebar-nav">
        <ul class="nav" id="side-menu">
            <li>
                <a class="uppercase" href="javascript:void(0)">
                    <i class="fa fa-book fa-fw"></i>{{ trans('sidebar.categories') }}
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('book.show', $category->id) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a class="uppercase" href="javascript:void(0)">
                    <i class="fa fa-newspaper-o fa-fw"></i>{{ trans('sidebar.latest-stories') }}
                </a>
            </li>
            <li>
                <a class="uppercase" href="javascript:void(0)">
                    <i class="fa fa-heart fa-fw"></i>{{ trans('sidebar.most-popular') }}
                </a>
            </li>
            <li>
                <a class="uppercase" href="javascript:void(0)">
                    <i class="fa fa-phone fa-fw"></i>{{ trans('sidebar.request') }}
                </a>
            </li>
            <li>
                <a class="uppercase" href="javascript:void(0)">
                    <i class="fa fa-university fa-fw">{{ trans('sidebar.contact') }}</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
