<x-layout>
    <h1></h1>
    <ul>
        @foreach ($diarys as $diary)
        <li>{{ $diary->title }}</li>
        <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        @endforeach
    </ul>
</x-layout>