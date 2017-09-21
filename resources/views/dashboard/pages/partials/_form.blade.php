<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::text('title', $value = null, ['class' => 'form-control', 'placeholder' => 'Título de la página', 'disabled'] ) !!}
        </div><!-- .form-group -->

        <div class="form-group">
            {!! Form::label('content', 'Contenido', ['class' => 'control-label lead pull-left textarea-title']) !!}<div class="clearfix"></div>
            {!! Form::textarea('content', $value = null, ['class' => 'form-control wysiwyg', 'rows' => 20] ) !!}
        </div><!-- .form-group -->
    </div><!-- col-md-8 -->

    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                @if(isset($page->title))
                    <h3 class="panel-title">Actualizar</h3>
                @endif
            </div><!-- .panel-heading -->
            <div class="panel-body" id="published_at__container">
                @if(isset($page->title))
                    <input id="published_at__button--submit" class="btn btn-primary btn-block" type="submit" value="{{ $btn or 'Actualizar' }}">
                @endif
            </div><!-- .panel-body -->
        </div><!-- .panel -->
    </div><!-- .col-md-4 -->
</div><!-- .row -->
