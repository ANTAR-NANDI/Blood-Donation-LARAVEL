<!DOCTYPE html>
<html lang="en">

<head>
  @include('User.includes.head')
</head>

<body>

  @include('User.includes.header')
  
  @yield('abc')

  @include('User.includes.footer')

</body>

</html>
