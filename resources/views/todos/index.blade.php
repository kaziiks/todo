<x-layout>
<h1>Visi veicamie uzdevumi</h1>
  <ul>
    @foreach($todos as $todo)
      <a class="content-index" href="/todos/{{ $todo->id }}">{{ $todo->content }} <br></a>
    @endforeach
  </ul>
</x-layout>