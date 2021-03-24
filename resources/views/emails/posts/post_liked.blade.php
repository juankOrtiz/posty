@component('mail::message')
# Tienes un like en tu post

{{ $liker->name }} le dio like a uno de tus posts

@component('mail::button', ['url' => route('posts.show', $post)])
Ver post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
