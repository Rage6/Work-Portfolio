@extends('layouts.public')

@section('content')
<div class="contactForm">
  <form method="POST" action="{{ route('send') }}">
    @csrf
    <input class="contactInput" type="text" name="name" placeholder="Your name" required>
    <input class="contactInput" type="email" name="email" placeholder="Your email address" required>
    <input class="contactInput" type="text" name="title" placeholder="Your topic title" required>
    <textarea class="contactInput" name="content" placeholder="Your details and questions"></textarea>
    <button>SEND</button>
  </form>
</div>
@endsection
