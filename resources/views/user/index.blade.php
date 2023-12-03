<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>Home</title>
</head>
<body>
  <h1>User List:</h1>
  {{-- Directiva Selectiva if() --}}
  @if ($users->isEmpty())
      <p>The user list is empty</p>
  @else
  <ul>
    {{-- Directiva Interactiva @foreach --}}
    @foreach ($users as $user)
    <li>
      <h3>{{ $user->name }}</h3>
      <p>{{ $user->email }}</p>
    </li>
    @endforeach
  </ul>
  @endif
</body>
</html>