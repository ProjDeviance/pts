<!doctype html>

<!-- CODE REVIEW:  remove unncessary files -->

<html>
	<head>
		<meta charset="utf-8">
		<title>Procurement Tracking System</title>
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/bootstrap-theme.min.css') }}
		{{ HTML::style('css/theme.css') }}
		{{ HTML::style('css/signin.css') }}
		{{ HTML::style('css/custom.css') }}
		{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}

		{{ HTML::script('js/jquery.chained.min.js') }}
		{{ HTML::style('css/template.css')}}

	</head>
	<body role="document"  >
		 <div class="container theme-showcase" role="main">
			@yield('content')
		</div>
		<div class="container" style="width: 100%">
        <p class="text-muted" style="text-align: center; font-size: 11px;padding-top: 60px;">Developed by Project Deviance.<br/>
           
        </p>
    </div>
	</body>
</html>