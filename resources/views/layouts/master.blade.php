<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Admin Panel HTML template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin panel ui, user dashboard template, web application templates, premium admin templates, html css admin templates, premium admin templates, best admin template bootstrap 4, dark admin template, bootstrap 4 template admin, responsive admin template, bootstrap panel template, bootstrap simple dashboard, html web app template, bootstrap report template, modern admin template, nice admin template"/>
		@include('layouts.head')
	</head>

	<body class="app sidebar-mini dark-mode">
		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- End Global-loader-->
		<!-- Page -->
		<div class="page">
			<div class="page-main">
				@include('layouts.aside-menu')
				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">
						@include('layouts.header')
						@yield('page-header')
						@yield('content')
						@include('layouts.footer')
		</div><!-- End Page -->
			@include('layouts.footer-scripts')
             @stack('scripts')
            <script>
                (function () {
                    $(function () {
                        @if(count($errors) > 0)
                        @foreach($errors->all() AS $error)
                        $.growl.error({
                            title: "Error",
                            message: "{{$error}}"
                        });
                        @endforeach
                        @endif
                        @if(session('success'))
                        $.growl.notice({
                            title: "Success",
                            message: "{{session('success')}}"
                        });
                        @endif
                        @if(session('error'))
                        $.growl.error({
                            title: "Error",
                            message: " {{session('error')}}"
                        });
                        @endif

                    });
                }).call(this);

            </script>
	</body>
</html>
