<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <a href="{{ route('dashboard') }}">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-setting" type="button"><i class="bi bi-gear"></i></button>
            </li>

        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAssets')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-setting">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Settings</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{ route('admin.category.create') }}" class="list-group-item"><i class="bi bi-envelope"></i>Category</a>
                    <a href="{{ route('admin.sub-category.create') }}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Sub Category</a>
                    <a href="{{ route('admin.brand.create') }}" class="list-group-item"><i class="bi bi-archive"></i>Brand</a>
                    <a href="{{ route('admin.supplier.create') }}" class="list-group-item"><i class="bi bi-check2-square"></i>Suppliers</a>
                    <a href="{{ route('admin.color.create') }}" class="list-group-item"><i class="bi bi-receipt"></i>Color</a>
                    <a href="{{ route('admin.size.create') }}" class="list-group-item"><i class="bi bi-receipt"></i>Size</a>
                    <a href="{{ route('admin.product.create') }}" class="list-group-item"><i class="bi bi-receipt"></i>Product</a>

                </div>
            </div>
        </div>
    </div>
</aside>
