<!-- rewards heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <i class="fa fa-fw fa-video-camera"></i> Videos
            @if( isset($subtitle) )
                <small>{{ $subtitle }}</small>
            @endif
            @unless( app('request')->is('*/create') )
                <a href="{{ route('dashboard.videos.create') }}" class="btn btn-success pull-right">
                    <i class="fa fa-plus"></i> &nbsp;Agregar Nuevo Video
                </a>
            @endunless
            <a href="{{ route('dashboard.videos.trashed') }}" class="btn btn-default pull-right">
                <i class="fa fa-trash-o"></i> Papelera
            </a>
        </h1>
    </div>
</div><!-- .row -->
