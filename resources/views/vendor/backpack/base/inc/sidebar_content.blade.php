{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

{{-- Create a folder --}}
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-language"></i> French</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('vocabulary') }}"><i class="nav-icon la la-book"></i> Vocabulary</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('word') }}"><i class="nav-icon la la-book"></i> Word</a></li>
    </ul>
</li>


