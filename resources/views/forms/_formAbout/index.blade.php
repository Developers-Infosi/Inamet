<div class="col-md-12">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($aboutInamet->title) ? $aboutInamet->title : '' }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo do Sobre a Reunião</h5>
            <p>Digite o corpo do Sobre a Reunião</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($aboutInamet->body) ? $aboutInamet->body : '' }}
        </textarea>
        </div>
    </div>
</div>
