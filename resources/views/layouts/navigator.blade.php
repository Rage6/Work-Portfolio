<nav class="mainNav">
  <div class="mainMenu">
    MENU
  </div>
  <div class="mainBttns">
    <div>
      <a href="{{ route('welcome') }}">
        HOME
      </a>
    </div>
    <div>
      <a href="{{ route('welcome') }}">
        PROJECTS
      </a>
    </div>
    <div>
      <a href="{{ route('welcome') }}">
        ABOUT
      </a>
    </div>
    <div>
      <a href="{{ route('contact') }}">
        CONTACT
      </a>
    </div>
    @guest
      <div>
        <a href="{{ route('login') }}">{{ __('LOGIN') }}</a>
      </div>
    @else
      <div>
        <a href="{{ route('home') }}">{{ __('ACCOUNT') }}</a>
      </div>
    @endif
  </div>
</nav>
