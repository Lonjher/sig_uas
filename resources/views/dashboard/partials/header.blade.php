

<!-- ========== HEADER ========== -->

    <nav class=" w-ful flex items-center justify-between" aria-label="Global">
            <ul class="icon-nav flex items-center gap-4">
                <li class="relative xl:hidden">
                    <a class="text-xl  icon-hover cursor-pointer text-heading"
                        id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
                        aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
                        <i class="ti ti-menu-2 relative z-1"></i>
                    </a>
                </li>

            <li class="relative">
                @include("dashboard.partials.headerComponents.notification")
            </li>
            </ul>
        <div class="flex items-center gap-4">
          <a href="#" class="btn text-base font-medium hover:bg-blue-700" aria-current="page">Upgrade to Pro</a>
            @include("dashboard.partials.headerComponents.profile")
        </div>
    </nav>

  <!-- ========== END HEADER ========== -->