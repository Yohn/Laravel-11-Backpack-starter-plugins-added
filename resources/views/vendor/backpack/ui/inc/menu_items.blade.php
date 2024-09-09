{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>


<x-backpack::menu-dropdown title="Users and Roles" icon="la la-puzzle-piece">
    <!--<x-backpack::menu-dropdown-header title="Authentication" />-->
    <x-backpack::menu-dropdown-item title="Users" icon="la la-user" :link="backpack_url('user')" />
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-group" :link="backpack_url('role')" />
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')" />
</x-backpack::menu-dropdown>
<x-backpack::menu-item title="Translation Manager" icon="la la-stream" :link="backpack_url('translation-manager')" />

<x-backpack::menu-item title='Settings' icon='la la-cog' :link="backpack_url('setting')" />
<x-backpack::menu-item title='Pages' icon='la la-file-o' :link="backpack_url('page')" />
"<x-backpack::menu-item title='Menu' icon='la la-list' :link="backpack_url('menu-item')" />

<!-- we need to find how to put this on the right side of the navbar here.. -->
@include('backpack.language-switcher::language-switcher', [
    'flags' => false, // true by default, change it to hide flags
    'main_label' => true, // false by default, it may also be a string, for instance "Language"
])
