<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout._meta')
    @include('layout._style')
</head>

<body class="sidebar-collapse">

@yield('content')

@include('layout._script')

</body>
<?php include('/stats/stl.php'); ?>
</html>
