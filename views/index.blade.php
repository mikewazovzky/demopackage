<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="/vendor/mikewazovzky/css/styles.css"></head>
<body>

	<h1>List of Items</h1>
	<ul>
		{{ $items->count() }}
		@foreach($items as $item)
			<li><a href="#">{{ $item->name }}</a> {{ $item->description }}</li>
		@endforeach	
	</ul>

<script src="/vendor/mikewazovzky/js/scripts.js"></script>
</body>
</html>