<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Home</title>
</head>

<body>
  <h1>User List:</h1>
  <ul>
    {{-- Directiva Interactiva @foreach --}}
    @forelse($users as $user)
      <li>
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
      </li>
    @empty
      <li>List empty.</li>
    @endforelse
  </ul>
</body>

</html>
