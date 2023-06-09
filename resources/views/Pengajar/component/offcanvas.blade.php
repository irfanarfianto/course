<!-- Left sidebar START -->
<div class="col-xl-3">
    <!-- Responsive offcanvas body START -->
    <div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <!-- Offcanvas header -->
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar"
                aria-label="Close"></button>
        </div>
        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-xl-0">
            <div class="bg-dark border rounded-3 pb-0 p-3 w-100">
                <!-- Dashboard menu -->
                <div class="list-group list-group-dark list-group-borderless">
                    <a class="list-group-item {{ request()->is('instructor-dashboard*') ? 'active' : '' }}"
                        href="{{ url('instructor-dashboard') }}"><i
                            class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
                    <a class="list-group-item {{ request()->is('pengajar/courses*') ? 'active' : '' }}"
                        href="{{ url('pengajar/courses') }}"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
                    <a class="list-group-item {{ request()->is('instructor-earning*') ? 'active' : '' }}"
                        href="{{ url('instructor-earning') }}"><i class="bi bi-graph-up fa-fw me-2"></i>Earnings</a>
                    <a class="list-group-item {{ request()->is('instructor-studentlist*') ? 'active' : '' }}"
                        href="{{ url('instructor-studentlist') }}"><i class="bi bi-people fa-fw me-2"></i>Students</a>
                    <a class="list-group-item {{ request()->is('instructor-order*') ? 'active' : '' }}"
                        href="{{ url('instructor-order') }}"><i class="bi bi-folder-check fa-fw me-2"></i>Orders</a>
                    <a class="list-group-item {{ request()->is('instructor-review*') ? 'active' : '' }}"
                        href="{{ url('instructor-review') }}"><i class="bi bi-star fa-fw me-2"></i>Reviews</a>
                    <a class="list-group-item {{ request()->is('instructor-edit-profile*') ? 'active' : '' }}"
                        href="{{ url('instructor-edit-profile') }}"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit
                        Profile</a>
                    <a class="list-group-item {{ request()->is('instructor-payout*') ? 'active' : '' }}"
                        href="{{ url('instructor-payout') }}"><i class="bi bi-wallet2 fa-fw me-2"></i>Payouts</a>
                    <a class="list-group-item {{ request()->is('instructor-setting*') ? 'active' : '' }}"
                        href="{{ url('instructor-setting') }}"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
                    <a class="list-group-item {{ request()->is('instructor-delete-account*') ? 'active' : '' }}"
                        href="{{ url('instructor-delete-account') }}"><i class="bi bi-trash fa-fw me-2"></i>Delete
                        Profile</a>
                    <a class="list-group-item text-danger bg-danger-soft-hover" href="{{ url('sign-in') }}"><i
                            class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Responsive offcanvas body END -->
</div>
<!-- Left sidebar END -->
