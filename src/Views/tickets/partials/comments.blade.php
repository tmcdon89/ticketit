@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        @if( !$u->isAgent() && !$u->isAdmin() && $comment->private == 1 )
            <?php continue; ?>
        @endif
        @if ($comment->private == 1)
            <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-default" !!}">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        {!! $comment->user->name !!} - {{ trans('ticketit::lang.private') }}
        @else
            <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-primary" !!}">
                <div class="panel-heading">
                     <h3 class="panel-title">
                        {!! $comment->user->name !!}
        @endif
                    <span class="pull-right"> {!! $comment->created_at->diffForHumans() !!} </span>
                </h3>
            </div>
            <div class="panel-body">
                <div class="content">
                    @if( $u->isAgent() || $u->isAdmin() )
                        @if( $comment->time_spent != NULL)
                        <span class="pull-right"><strong>{{ trans('ticketit::lang.time-spent') }}</strong>{{ trans('ticketit::lang.colon') }}
                            {{ $comment->time_spent }} Minutes</span>
                        @endif
                    @endif
                    <p> {!! $comment->html !!} </p>
                </div>
            </div>
        </div>
    @endforeach
@endif