@extends('layouts.public')

@section('content')
<div>
  <form method="POST" action="{{ route('send') }}">
    @csrf
    <input type="text" name="name" placeholder="Your name" required>
    <input type="email" name="email" placeholder="Your email address" required>
    <input type="text" name="title" placeholder="Subject title" required>
    <textarea name="content" placeholder="Enter your content here"></textarea>
    <button>SEND EMAIL</button>
  </form>
</div>
@endsection
