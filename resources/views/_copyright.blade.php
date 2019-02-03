<div class="copyright {{ $class ?? 'pull-center' }}">
    @if(isset($made) && $made == true)
        Copyright &#xA9;
        <script>
            document.write(new Date().getFullYear())
        </script>
        , made with <i class="material-icons">favorite</i> by <a href="https://twitter.com/Abasheerb" target="_blank">Ahmad Al Bashir Barakat</a>.
    @else
        Copyright &#xA9;
        <script>
            document.write(new Date().getFullYear())
        </script> <a href="{{ url('/') }}">IOTec</a> Team All Rights Reserved.
    @endif
</div>