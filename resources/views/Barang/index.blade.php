
    

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
                    <h2> Email</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <section>
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Data Email <a href=" {{route('barang.create')}} " class="btn btn-primary">Tambah</a> </h4>
                                    </div>
                                    <div class="card-datatable">
                                        <table class="dt-responsive table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>tanggal</th>
                                                    <th>Foto</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                                @foreach ($barang as $key => $barangs)
                                                    <tr>
                                                        <td></td>
                                                        <td> {{$key+1}} </td>
                                                        <td> {{$barangs->nama}} </td>
                                                        
                                                        <td> {{$barangs->deskripsi}} </td>
                                                       
                                                        <td>
                                                          
                                                              
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>                                   
                                        </table>
                                    </div>
                                </div>
                            </div>
                     
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
