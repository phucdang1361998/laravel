@php
    $route = $route ?? '';
    $id = $id ?? '';
@endphp
<a style="color: #ea4335" href="{{route($route, $id)}}"><i class="fas fa-fw fa-trash"></i></a>
<script src="https://kit.fontawesome.com/ae9b8d6537.js" crossorigin="anonymous"></script>
