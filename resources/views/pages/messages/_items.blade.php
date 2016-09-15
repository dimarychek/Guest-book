<div class="messages">

    @if( ! $messages->isEmpty() )
        @foreach( $messages as $message )
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>
                            #{!! $message->id !!}
                            @unless( empty($message->email) )
                                <a href="mailto:{{ $message->email }}">{{ $message->name }}</a>
                            @else
                                {{ $message->name }}
                            @endunless
                        </span>
                        <span class="pull-right label label-info">
                            {{ $message->created_at }}
                        </span>
                    </h3>
                </div>

                <div class="panel-body">
                    {{ $message->message }}
                    <div class="pull-right">
                        <a href="/message/{{ $message->id }}/edit" class="btn btn-info">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <a href="/message/{{ $message->id }}/delete" class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                    </div>
                </div>

            </div>
        @endforeach

        <div class="text-center">
            {!! $messages->render() !!}
        </div>

    @endif

</div>