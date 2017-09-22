<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Título del video'] ) !!}
        </div><!-- .form-group -->

        <div class="form-group">
            {!! Form::label('video', 'Url del video', ['class' => 'control-label lead pull-left textarea-title']) !!}
            {!! Form::text('video', $value = null, ['class' => 'form-control', 'placeholder' => 'Url del video'] ) !!}
        </div><!-- .form-group -->

        <div class="form-group">
            {!! Form::label('body', 'Extracto', ['class' => 'control-label lead pull-left textarea-title']) !!}<div class="clearfix"></div>
            {!! Form::textarea('body', $value = null, ['class' => 'form-control wysiwyg', 'rows' => 10] ) !!}
        </div><!-- .form-group -->

    </div><!-- col-md-8 -->

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Publicar</h3>
            </div><!-- .panel-heading -->
            <div class="panel-body" id="published_at__container">
                <input id="published_at__button--submit" class="btn btn-primary btn-block" type="submit" value="{{ $btn or 'Publicar' }}">
            </div><!-- .panel-body -->
        </div><!-- .panel -->

        <!-- Imagen Destacada -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Imagen Destacada</h3>
            </div>
            <div class="panel-body">
                <div class="image-container">
                    @if( isset($article) AND $article->hasMedia('featured_image') )
                        <img src="{{ asset($article->present()->featured_image) }}" class="img-responsive" style="border: 1px solid #ddd;">
                    @endif
                </div>
                {!! Form::file('featured_image', null, ['class' => 'form-control', 'accept' => 'image/*', 'multiple' => false]) !!}
            </div><!-- .panel-body -->
        </div><!-- .panel -->

    </div><!-- .col-md-4 -->
</div><!-- .row -->
