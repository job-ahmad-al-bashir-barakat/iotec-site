<div class="copyright {{ $class ?? 'pull-center' }}">
    @if(isset($made) && $made == true)
        Copyright &#xA9; {{ date('Y') }}, <a href="https://www.iotec.me" target="_blank">IOTec IT Solutions</a> All Rights Reserved.
    @else
        Copyright &#xA9; {{ date('Y') }}, <a href="{{ url('/') }}">IOTec</a> Team All Rights Reserved.
    @endif
</div>
