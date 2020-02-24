@extends('layout')
@section('content')
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="title">Post Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Text Area:</label>
      <textarea class="form-control" name="desc" placeholder="Post Description"></textarea>
    </div>
    <div class="checkbox">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@endsection