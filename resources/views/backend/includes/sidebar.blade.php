<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="dashboard" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
          <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
        </svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold">D-Techy</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <!-- Apps & Pages -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>
    <li class="menu-item  {!! request()->is('sds/usercontacts') ? 'active ' : '' !!}">
      <a href="{{ route('backend.usercontacts') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-mail"></i>
        <div data-i18n="contact">User Contact</div>
      </a>
    </li>
    <li class="menu-item {!! request()->is('sds/servicemessage') ? 'active' : '' !!}">
      <a href="{{ route('servicemessage') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-messages"></i>
        <div data-i18n="servicemessage">User Message</div>
      </a>
    </li>



    <!-- FAQ -->
    <li class="menu-item {!! request()->is('sds/addfaq') ? 'open' : '' !!} {!! request()->is('sds/faqListing') ? 'open' : '' !!}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-book"></i>
        <div data-i18n="Frequently Ask Question">Frequently Ask Question</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {!! request()->is('sds/addfaq') ? 'active' : '' !!}">
          <a href="{{ route('addfaq') }}" class="menu-link">
            <div data-i18n="Add FAQ">Add FAQ</div>
          </a>
        </li>
        <li class="menu-item {!! request()->is('sds/faqListing') ? 'active' : '' !!}">
          <a href="{{ route('faqlisting') }}" class="menu-link">
            <div data-i18n="Listing FAQ">Listing FAQ</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Blog -->
    <li class="menu-item {!! request()->is('sds/blog') ? 'open' : '' !!} {!! request()->is('sds/bloglisting') ? 'open' : '' !!}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-book"></i>
        <div data-i18n=" Blog"> Blog</div>
        <!-- <div class="badge bg-label-danger rounded-pill ms-auto">4</div> -->
      </a>
      <ul class="menu-sub">
        <li class="menu-item {!! request()->is('sds/blog') ? 'active' : '' !!}">
          <a href="{{ route('blog') }}" class="menu-link">
            <div data-i18n="Add Blog">Add Blog</div>
          </a>
        </li>
        <li class="menu-item {!! request()->is('sds/bloglisting') ? 'active' : '' !!}">
          <a href="{{ route('blog.bloglist') }}" class="menu-link">
            <div>Listing Blog</div>
          </a>
        </li>
      </ul>
    </li>






    <!-- Projects -->

    <li class="menu-item {!! request()->is('sds/project') ? 'open' : '' !!}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Projects">Projects</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {!! request()->is('sds/project') ? 'active' : '' !!}">
          <a href="{{ route('project.index') }}" class="menu-link">
            <div data-i18n="Add Projects">Add Projects</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Listing Projects">Listing Projects</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item  {!! request()->is('sds/account') ? 'open' : '' !!} {!! request()->is('sds/security') ? 'open' : '' !!}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Account Settings">Account Settings</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {!! request()->is('sds/account') ? 'active' : '' !!}">
          <a href="{{ route('account') }}" class="menu-link">
            <div data-i18n="Account">Account</div>
          </a>
        </li>
        <li class="menu-item {!! request()->is('sds/security') ? 'active' : '' !!}">
          <a href="{{ route('security.index') }}" class="menu-link">
            <div data-i18n="Security">Security</div>
          </a>
        </li>
      </ul>
    </li>



  </ul>
</aside>