<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        {{-- dashboar --}}
        <li class="nav-item"> <a class="nav-link " href="index.html"> <i class="bi bi-grid"></i> <span>Dashboard</span> </a>
        </li>
        <li class="nav-item"> <a class="nav-link collapsed" href="users-profile.html"> <i class="bi bi-person"></i>
                <span>Profile</span> </a></li>
        {{-- component --}}
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i
                    class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{ route('category.create') }}"> <i class="bi bi-circle"></i><span>Add</span> </a></li>
                <li> <a href="{{ route('category.index') }}"> <i class="bi bi-circle"></i><span>View</span> </a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-navOne" data-bs-toggle="collapse" href="#">  <i class="bi bi-view-list"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-navOne" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{ route('product.create') }}"> <i class="bi bi-circle"></i><span>Add</span> </a></li>
                <li> <a href="{{ route('product.index') }}"> <i class="bi bi-circle"></i><span>View</span> </a></li>
            </ul>
        </li>
    </ul>
</aside>
