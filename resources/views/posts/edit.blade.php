@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
    {!! Form::model($post, ['route'=> ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-row">

        <div class="col-md-8">
            {{Form::label('title', 'Title:')}}
            {{Form::text('title', null, ["class"=>'form-control-lg form-control'])}}

            {{Form::label('slug','Slug:', ['class'=>'form-spacing-top'])}}
            {{Form::text('slug', null, ['class'=>'form-control'])}}

            {{Form::label('body', "Body:", ["class" => "form-spacing-top"])}}
            {{Form::textarea('body', null, ["class" => 'form-control'])}}
        </div>
        <div class="col-md-4">
            <div class="card card-body bg-light">
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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes', ['class'=>'btn btn-success btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop