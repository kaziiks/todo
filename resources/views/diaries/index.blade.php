<x-layout>
    <h1>dienasgramata</h1>
    <ul>
        @foreach ($diarys as $diary)
        <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
        @endforeach
    </ul>
</x-layout>