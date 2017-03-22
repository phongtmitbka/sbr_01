<div class="container">
    <div class="col-md-9">
        <h2>{{ trans('app.number_result') }} {{ $members->count() }}</h2>
        
        @foreach ($members as $member)

            @include ('layouts.member')

        @endforeach

    </div>
</div>
