<x-mail::message>
# Introduction

Name: {{ $nameMail }}
Text: {{ $messageMail }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
