<footer>    
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area text-center text-muted">
        <div class="container">
            <div class="footer-border pt-20 pb-20">
                <div class="row d-flex mb-15">
                    <div class="col-12">
                        <ul class="list-inline font-small text-uppercase">
                            <li class="list-inline-item"><a href="{{ route('homepage') }}">HOME</a></li>
                            @foreach (App\Models\Category::getFooterCategories() as $category)
                                <li class="list-inline-item"><a href="{{ route('category',$category->slug) }}">{{ $category->category_name }}</a></li>
                            @endforeach
                            <li class="list-inline-item"><a href="{{ route('contact') }}">CONTACT </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="footer-copy-right">
                            <p class="font-small text-muted">© <script>document.write(new Date().getFullYear());</script> - {{ env('APP_NAME') }} | All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<div class="dark-mark"></div>