<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    @include('components.admin-navbar')
    <div>
        <div class="bg-secondary p-5 container">
            <h1>Hello admin!</h1>
            
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, molestias!</h4>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-4">
                    <div class="list-group">
                        <a href="/admin/add-foods">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/add-foods') ? 'active' : '' }}" aria-current="true">
                                Add food
                              </button>
                        </a>
                        <a href="/admin/view-foods">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/view-foods') ? 'active' : '' }}">
                                View all foods
                            </button>
                        </a>
                        
                        <a href="/admin/order-history">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/order-history') ? 'active' : '' }}">
                                Order history
                            </button>
                        </a>

                        <a href="/admin/pending-orders">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/pending-orders') ? 'active' : '' }}">
                                Pending orders
                            </button>
                        </a>

                        <a href="/admin/all-students">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/all-students') ? 'active' : '' }}">
                                All students
                            </button>
                        </a>

                        <a href="/admin/all-admins">
                            <button type="button" class="list-group-item list-group-item-action {{ request()->is('admin/all-admins') ? 'active' : '' }}">
                                All admins
                            </button>
                        </a>
                        
                      </div>
                </div>
                <div class="col-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>