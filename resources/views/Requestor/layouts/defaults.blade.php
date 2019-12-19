<!DOCTYPE html>
<html lang="en">

<head>
  @include('Requestor.includes.head')
</head>

<body>

  @include('Requestor.includes.header')
  
  @yield('abc')

  @include('Requestor.includes.footer')

</body>

</html>
