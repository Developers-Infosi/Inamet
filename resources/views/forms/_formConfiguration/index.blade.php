
<div class="col-md-4">
    <div class="form-group">
        <label for="address">Endereço</label>
        <input type="text" name="address" id="address"
            value="{{ isset($configuration->address) ? $configuration->address : old('address') }}"
            class="form-control border-secondary" placeholder="Endereço" required>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"
            value="{{ isset($configuration->telefone) ? $configuration->telefone : old('telefone') }}"
            class="form-control border-secondary" placeholder="Telefone" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Link do email</label>
        <input type="text" name="email" id="email"
            value="{{ isset($configuration->email) ? $configuration->email : old('email') }}"
            class="form-control border-secondary" placeholder="Email" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" name="facebook" id="facebook"
            value="{{ isset($configuration->facebook) ? $configuration->facebook : old('facebook') }}"
            class="form-control border-secondary" placeholder="Facebook" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" name="instagram" id="instagram"
            value="{{ isset($configuration->instagram) ? $configuration->instagram : old('instagram') }}"
            class="form-control border-secondary" placeholder="instagram" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="twitter">Twitter</label>
        <input type="text" name="twitter" id="twitter"
            value="{{ isset($configuration->twitter) ? $configuration->twitter : old('twitter') }}"
            class="form-control border-secondary" placeholder="twitter" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="linkedin">Linkedin</label>
        <input type="text" name="linkedin" id="linkedin"
            value="{{ isset($configuration->linkedin) ? $configuration->linkedin : old('linkedin') }}"
            class="form-control border-secondary" placeholder="linkedin" required>
    </div>
</div>
