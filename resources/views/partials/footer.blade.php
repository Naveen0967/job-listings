<footer class="footer">
    <div class="container">
        <div class="row row-grid align-items-center mb-5">
            <div class="col-lg-6">
                <h3 class="text-primary font-weight-light mb-2">{{ trans('panel.site_title') }}</h3>
                <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
            </div>
            <div class="col-lg-6 text-lg-center btn-wrapper">
                <button target="_blank"
                        class="btn btn-icon-only btn-dribbble rounded-circle">
                    <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
                </button>
                <button target="_blank"
                        class="btn btn-icon-only btn-github rounded-circle">
                    <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                </button>
            </div>
        </div>
        <hr>
        <div class="row align-items-center justify-content-md-between">
            <div class="col-md-6">
                <div class="copyright">
                    © 2020 <a href="" target="_blank">{{ trans('panel.site_title') }}</a>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="nav nav-footer justify-content-end">
                    <li class="nav-item">
                        <!-- <a href="" class="nav-link" target="_blank">Blog</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a href="" class="nav-link" target="_blank">License</a> -->
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('register?t=2') }}" class="nav-link" target="_blank">Register as Employer</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
