<x-layout>
  <h1>Visi veicamie uzdevumi</h1>
    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo->content }}</li>
        @endforeach
    </ul>
</x-layout>