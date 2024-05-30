{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Blogs" icon="la la-question" :link="backpack_url('blog')" />
<x-backpack::menu-item title="Form models" icon="la la-question" :link="backpack_url('form-model')" />
<x-backpack::menu-item title="Salary models" icon="la la-question" :link="backpack_url('salary-model')" />
<x-backpack::menu-item title="User models" icon="la la-question" :link="backpack_url('user-model')" />