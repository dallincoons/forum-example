<div class="card-header">
    {{$reply->owner->name}} said {{$reply->created_at->diffForHumans()}}
</div>
<div class="card">
    <div class="card-body">
        <div class="body">{{$reply->body}}</div>
    </div>
</div>
