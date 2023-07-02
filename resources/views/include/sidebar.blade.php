<div class="border-end border-warning h-100">
<div class="text-center">
    <img src="{{asset('images/profile.png')}}" alt="" class="img-fluid rounded-circle mt-5">
    <h3 class="text-white mt-3 st-font">Muhammad Maskeen</h3>
</div>
<nav class="nav flex-column text-center mt-4 ">
    <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home')? 'active' : '' }}">Home</a>
    <a href="{{ asset('services') }}" class="nav-link {{ Request::routeIs('services')? 'active' : '' }}">Services</a>
    <a href="{{ asset('skills') }}" class="nav-link {{ Request::routeIs('skills')? 'active' : '' }}">Skills</a>
    <a href="{{ asset('contact') }}" class="nav-link {{ Request::routeIs('contact')? 'active' : '' }}">Contact</a>
</nav>
</div>
