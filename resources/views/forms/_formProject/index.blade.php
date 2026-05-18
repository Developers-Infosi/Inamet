@isset($project)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">image</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $project->image }}");background-position:center;background-size:image;height:500px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{ isset($project->title) ? $project->title : old('title') }}"
            class="form-control border-secondary" placeholder="Titulo" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-4">
    <div class="form-group">
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category"
            value="{{ isset($project->category) ? $project->category : old('category') }}"
            class="form-control border-secondary" placeholder="Categoria" required>
    </div>
</div> <!-- /.col -->
<!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control">

            @if(isset($project->status))
                <option selected class="text-dark" value="{{ $project->status }}">{{ $project->status }}</option>
            @else
                <option selected>Selecione um status</option>
                <option value="EM DESENVOLVIMENTO">EM DESENVOLVIMENTO</option>
                <option value="CONCLUIDO">CONCLUIDO</option>
                <option value="EM PAUSA">EM PAUSA</option>
                
            @endif
          
        </select>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Selecione a Capa</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image">
        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Publicação</h5>
            <p>Digite o corpo da Publicação</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%" >
                {{ isset($project->description) ? $project->description : old('description')}}
            </textarea>
        </div>
    </div>
</div>
