@isset($publication)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Cover</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $publication->cover }}");background-position:center;background-size:cover;height:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($publication->title) ? $publication->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Data de Publicação</label>
        <input type="date" name="published_at" id="published_at" value="{{ isset($publication->published_at) ? $publication->published_at : old('published_at') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <label for="author">Autor</label>
        <input type="text" name="author" id="author"
            value="{{ isset($publication->author) ? $publication->author : old('author') }}"
            class="form-control border-secondary" placeholder="Autor" required>
    </div>
</div>


<div class="col-md-6">
    <div class="form-group">
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category"
            value="{{ isset($publication->category) ? $publication->category : old('category') }}"
            class="form-control border-secondary" placeholder="Categoria" required>
    </div>
</div> <!-- /.col -->
<!-- /.col -->

<div class="col-md-3">
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">

            @if(isset($publication->status))
                <option selected class="text-dark" value="{{ $publication->status }}">{{ $publication->status }}</option>
            @else
                <option selected>Selecione um status</option>
                <option value="RECEBIDO">RECEBIDO</option>
                <option value="APROVADO">APROVADO</option>
                
            @endif
          
        </select>
    </div>
</div> <!-- /.col -->
<!-- /.col -->
<div class="col-md-3">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione o Documento</label>
            <input type="file" class="form-control" name="document" value="{{ old('document') }}" id="document">

        </div>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="cover" value="{{ old('cover') }}" id="cover">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Publicação</h5>
            <p>Digite o corpo da Publicação</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($publication->body) ? $publication->body : old('body')}}
            </textarea>
        </div>
    </div>
</div>
