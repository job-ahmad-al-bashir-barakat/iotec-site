<footer class="footer">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ url('/') }}">
                        IOTec
                    </a>
                </li>
                <li>
                    <a href="{{ url('about-us') }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ url('blog') }}">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="{{ url('faq') }}">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="{{ url('terms-and-conditions') }}">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </nav>
        @include('_copyright',['class' => 'float-right'])
    </div>
</footer>