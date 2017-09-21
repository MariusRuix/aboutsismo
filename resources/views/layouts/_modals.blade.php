<!-- Modal -->
<div id="modal-source-{{ $article->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg container">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>{{ $article->title }}</h3>
            </div>
            <div class="modal-body">
                {!! $article->video !!}
            </div>
        </div>
  </div>
</div>
