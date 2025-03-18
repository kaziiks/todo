<x-layout>
    <x-slot:title>edit</x-slot:title>
    <h1>redigesana</h1>
    <form method="POST" action="/todos/{{ $todos->id }}">
    @csrf
    @method('PUT')
    <label for="content">Saturs:</label>
  <input type="text" name="title" value="{{ $todos->content }}"/>
  <input type="submit" value="rediget"/><br><br>

</form>
<a href="/todos/{{ $todos->id }}">atpakal</a>
</x-layout>