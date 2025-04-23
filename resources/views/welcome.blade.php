<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
<body>
    <h1>Welcome to the ToDo App</h1>
    <p>This is a simple application to manage your tasks and diary entries. Please log in or register to get started.</p>
    <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
</body>
</x-layout>
