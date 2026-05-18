<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($inametPrincipal->name) ? $inametPrincipal->name : '' }}"
            class="form-control border-secondary" placeholder="Nome" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" >Selecione a Imagem do Director</label>
            <input type="file" class="form-control" name="photo" id="photo" >

        </div>
    </div>
</div> <!-- /.col -->


<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Biografia do Director</h5>
            <p>Digite a Biografia do Director</p>
            <!-- Create the editor container -->
            <textarea name="biograph" id="editor1" style="min-height:300px; min-width:100%">
       {{ isset($inametPrincipal->biograph) ? $inametPrincipal->biograph : '' }}
        </textarea>
        </div>
    </div>
</div>
