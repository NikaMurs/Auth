@extends('layouts.app')

@section('content')
<div class="container">
<div id="app">
      <div class="container">
        <p class="user-data">
          {{ __('name: ') }} {{ Auth::user()->name }}
        </p>
        <p class="user-data">
          {{ __('email: ') }} {{ Auth::user()->email }}
        </p>
        <p class="user-data">
        {{ __('id: ') }} {{ Auth::user()->id }}
        </p>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <br>
            <a class="dropdown-item" href="{{ route('home') }}">
                {{ __('Home') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
      </div> 
</div>
@endsection
