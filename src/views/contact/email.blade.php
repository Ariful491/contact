<x-mail::message>
    <h1>
        {{$name}}
    </h1>
{{$message}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>


