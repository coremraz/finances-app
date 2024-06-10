@props(['error'])

@error("$error")
<p class="text-red-500 font-semibold text-xs p-3">{{$message}}</p>
@enderror
