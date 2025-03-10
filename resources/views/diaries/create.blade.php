<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot dienasgramatas ierakstu</h1>

<form method="POST" action="/diaries">
@csrf
  <input name="title" placeholder="title"/><br><br>
  <input name="body" placeholder="body"/><br><br>
  <input type="date" name="date" placeholder="date"/><br><br>
  <button>Saglabāt</button>
</form>

@error("title")
  <p>{{ $message }}</p>
@enderror

@error("body")
  <p>{{ $message }}</p>
@enderror

@error("date")
  <p>{{ $message }}</p>
@enderror

</x-layout>