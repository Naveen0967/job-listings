<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet"/>
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet"/>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/argon/argon-design-system.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/custom_theme.css') }}" rel="stylesheet"/>

    @yield('styles')
</head>

<body>
@include('partials/header')
<div class="wrapper">
    <section class="section section-lg section-shaped">
        <div class="shape shape-style-1 shape-default">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-md">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-6">
                    <h3 class="display-3 text-white">{{ trans('panel.site_title') }}<span class="text-white">completed with examples</span>
                    </h3>
                    <p class="lead text-white">The greatest thing in this world is not so much where we stand, as in
                        what direction we are moving.
                    </p>
                </div>
                <div class="col-lg-5 mb-lg-auto">
                    <div class="transform-perspective-right">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-white text-center border-0">
                                <h4>Job Listing</h4>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                                <div class="text-center text-muted mb-4"></div>
                                @yield("content")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0"
                 viewBox="0 0 2560 100"
                 preserveAspectRatio="none"
                 version="1.1"
                 xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white"
                         points="2560 0 2560 100 0 100">
                </polygon>
            </svg>
        </div>
    </section>
</div>
@yield('scripts')
</body>

</html>
