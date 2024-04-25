


@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <div class="alert-body">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
</div>
@elseif($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
    <div class="alert-body">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">×</button>
    </div>
</div>
@endif
<div class="content-wrapper container-xxl p-0">
<div class="content-header row">
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2> Berita</h2>
        </div>
    </div>
</div>
</div>
<div class="content-body">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header header-bottom">
                <h4>Edit Berita</h4>
            </div>
            <div class="card-body">
                <form action=" {{route('berita.update', $berita->id)}} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="basicInput">nama</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"/>
                                <span class="text-danger" style="font-size: 10px">Kosongkan jika tidak ingin mengubah.</span>
                                @error('nama')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="basicInput">Foto</label> <span class="text-danger">*</span>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"/>
                                <span class="text-danger" style="font-size: 10px">Kosongkan jika tidak ingin mengubah.</span>
                                @error('foto')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="basicInput">Status</label> <span class="text-danger">*</span>
                                <select name="is_active" class="form-control @error('is_active') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    <option value="0" {{$berita->is_active == '0' ? 'selected' : ''}} >Aktif</option>
                                    <option value="1" {{$berita->is_active == '1' ? 'selected' : ''}} >Tidak Aktif</option>
                                </select>
                                @error('is_active')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="basicInput">Deskripsi</label> <span class="text-danger">*</span>
                                <textarea name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" cols="30" rows="10">{{$berita->deskripsi}}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                      
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{route('berita.index')}}" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection