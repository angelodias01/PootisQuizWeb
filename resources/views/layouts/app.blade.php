<!DOCTYPE html>
<html lang="pt">
<head>
    @include('includes.head') <!-- Include your head section -->
</head>
<body class="flex flex-col min-h-screen">
@include('includes.header') <!-- Include your header -->

<div class="content">
    @yield('content') <!-- Content of specific pages will be injected here -->
</div>

@include('includes.footer') <!-- Include your footer -->
</body>
</html>
