<!DOCTYPE html>
<html>
<head><title>Messages for Dr. Timeless</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-100 p-8">
<h1 class="text-3xl font-bold">Messages for Dr. Timeless ({{ count($contacts) }})</h1>
<div class="mt-6 grid gap-4">
@foreach($contacts as $c)
<div class="bg-white p-4 rounded shadow">
<p><b>Name:</b> {{ $c->name }} | <b>Email:</b> {{ $c->email }}</p>
<p class="mt-2">{{ $c->message }}</p>
<a href="/delete/{{ $c->id }}" class="text-red-500 text-sm">Delete</a>
</div>
@endforeach
</div>
</body>
</html>