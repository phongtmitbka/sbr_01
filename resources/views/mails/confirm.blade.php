Hi {{ $name }},

<p>{{ trans('app.confirm_message') }}</p>

{{ route('confirmation', $token_confirm) }}
