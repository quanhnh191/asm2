<div id="scrollbar">
    <div class="container-fluid">
        <div id="two-column-menu">
        </div>

        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span>Menu</span></li>

            {{-- Dashboards --}}
            <li class="nav-item">
                <a class="nav-link menu-link {{ Request::RouteIs('admin.index') ? 'active' : '' }}"
                    href="{{ route('admin.index') }}">
                    <i class="ri-dashboard-2-line"></i> <span>Dashboards</span>
                </a>
            </li>

            {{-- Category  --}}
            <li class="nav-item">
                <a class="nav-link menu-link {{ Request::RouteIs(['admin.categories.index', 'admin.categories.create']) ? 'active' : '' }}" href="#categories" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="categories">
                    <i class="ri-layout-3-line"></i> <span data-key="t-categories">Category</span>
                </a>
                <div class="collapse menu-dropdown" id="categories">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link">List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.create') }}" class="nav-link">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Products  --}}
            <li class="nav-item">
                <a class="nav-link menu-link {{ Request::RouteIs(['admin.products.index', 'admin.products.create']) ? 'active' : '' }}" href="#products" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="products">
                    <i class="ri-layout-3-line"></i> <span data-key="t-products">Product</span>
                </a>
                <div class="collapse menu-dropdown" id="products">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.index') }}" class="nav-link">List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.create') }}" class="nav-link">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Users  --}}
            <li class="nav-item">
                <a class="nav-link menu-link {{ Request::RouteIs(['admin.users.index', 'admin.users.create']) ? 'active' : '' }}" href="#users" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="users">
                    <i class="ri-layout-3-line"></i> <span>Users</span>
                </a>
                <div class="collapse menu-dropdown" id="users">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link">List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.create') }}" class="nav-link">Create</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Managers  --}}
            <li class="nav-item">
                <a class="nav-link menu-link {{ Request::RouteIs(['admin.managers.index', 'admin.managers.create']) ? 'active' : '' }}" href="#managers" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="managers">
                    <i class="ri-layout-3-line"></i> <span>Managers</span>
                </a>
                <div class="collapse menu-dropdown" id="managers">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{ route('admin.managers.index') }}" class="nav-link">List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.managers.create') }}" class="nav-link">Create</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
