<nav class="navbar navbar-expand-lg navbar-light w-100 border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{route('admin.dashboard')}}" style="font-size: 1.8rem">Admin</a>
        <!-- Hamburger Menu Icon for Mobile View -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.categories')}}" style="font-size: 1.1rem">Categories</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.list-blogs')}}" style="font-size: 1.1rem">List of blog's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.blog-users')}}" style="font-size: 1.1rem">User's</a>
                </li>
            </ul>
        </div>
        <form method="post" action="{{route('admin.logout')}}">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
