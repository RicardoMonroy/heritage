<div class="row align-items-center justify-content-xl-between">
    <div class="col-xl-6">
        <div class="copyright text-center text-xl-left text-muted">
            &copy; {{ now()->year }} <a href="#" class="font-weight-bold ml-1" target="_blank">Heritage</a> &amp;
            <a href="#" class="font-weight-bold ml-1" target="_blank">Tooring</a>
        </div>
    </div>
    <div class="col-xl-6">
        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
                <a href="{{ route('welcome') }}" class="nav-link">Heritage</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Tooring</a>
            </li>
            {{-- <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Blog</a>
            </li> --}}
        </ul>
    </div>
</div>
