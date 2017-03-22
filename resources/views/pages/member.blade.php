<div class="panel panel-default">
    <div class="panel-heading">
        <h3>
            <a href="">
                {{ $member->name }}
                <small> 
                    {{ $member->new_reviews }}
                </small>
            </a>
        </h3>
        <h4>
            {{ trans('app.number_review') }} {{ $member->reviews->count() }}
        </h4>
    </div>
    <div class="panel-body">
        <div>
            <div class="col-md-4">
                <a href="">
                    <img class="img-thumbnail" src="{{ $member->avatar }}" class="avatar" alt="{{ $member->name }}">
                </a>
            </div>
            <div class="col-md-8">
                <h3>{{ trans('app.about') }} {{ $member->name }}</h3>
                <p>
                    {{ $member->about }} 
                </p>
            </div>                          
        </div>
    </div>
</div>
