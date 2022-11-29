<head>
	<title>{{ $title ?? config('app.name') }}</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
{{ $slot }}
</head>