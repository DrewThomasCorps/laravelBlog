@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>

            <p class="lead">{{$post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="card card-body bg-light">
                <dl class="row">
                    <dt class="col text-md-right">Url:</dt>
                    <dd class="col"><a href="{{url('blog/'.$post->slug)}}">{{url('blog/' .$post->slug)}}</a></dd>
                </dl>
                <dl class="row">
                    <dt class="col text-md-right">Created At:</dt>
                    <dd class="col">{{date('M j, Y g:ia', strtotime($post->created_at))}}</dd>
                </dl>

                <dl class="row">
                    <dt class="col text-md-right">Last Updated:</dt>
                    <dd class="col">{{date('M j, Y g:ia', strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        {{Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-dark btn-block btn-h1-spacing'])}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection