
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h2> barang</h2>
        </div>
    </div>
</div>
</div>
<div class="content-body">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header header-bottom">
                <h4>Tambah barang</h4>
            </div>
            <div class="card-body">
                <form action=" {{route('barang.store')}} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="basicInput">nama</label> <span class="text-danger">*</span>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="nama barang" />
                                @error('nama')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                      
                        <div class="col-12">
                            <div class="form-group">
                                <label for="basicInput">Deskripsi</label> <span class="text-danger">*</span>
                                <textarea name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" cols="30" rows="10"></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                      
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                    <a href="{{route('barang.index')}}" class="btn btn-warning">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>




