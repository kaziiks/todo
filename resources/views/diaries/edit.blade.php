<!-- <x-layout>
  <x-slot:title>edit</x-slot:title>
  <h1>redigesana</h1>
  <p value="/todos/{{ $todos->id }}"></p>
  <form method="POST" action="/todos/{{ $todos->id }}">
    @csrf
    @method('PUT')

    <label for="content">Saturs:</label>
    <input type="text" name="content" value="{{ $todos->content }}" />
    
    @error("content")
    <p>{{ $message }}</p>
    @enderror
    
    <label>
      Izpildīts:
      <input name="completed" type="hidden" value="0">
      <input name="completed" type="checkbox" value="1" {{ $todos->completed ? 'checked' : '' }}>
    </label>
    <input type="submit" value="rediget" /><br><br>

  </form>
  <a href="/todos/{{ $todos->id }}">atpakal</a>

  @error("completed")
  <p>{{ $message }}</p>
  @enderror

</x-layout> -->