 <?php $a =1 ; ?>

 @extends('layout.main')

 @section('container')

                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="col-lg-3">
                                    <a href="/zakatstore" class="btn btn-primary">Create</a>
                                </div>
                                <br>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tgl Transaksi</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Jumlah Jiwa</th>
                                                    <th>Harga Beras Dikonsumsi</th>
                                                    <th>Tagihan</th>
                                                    <th>Pembayaran</th>
                                                    <th><center>Action Delete</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($zakat as $zakat)
                                                <tr>
                                                    <td>{{ $a++ }}</td>
                                                    <td>{{ $zakat->created_at }}</td>
                                                    <td>{{ $zakat->nama }}</td>
                                                    <td>{{ $zakat->alamat }}</td>
                                                    <td>{{ $zakat->jumlah_jiwa }}</td>
                                                    <td>{{ $zakat->harga_beras_dikonsumsi }}</td>
                                                    <td>{{ $zakat->tagihan }}</td>
                                                    <td>{{ $zakat->pembayaran }}</td>

                                                    <td>
                                                        <a href="zakatdelete/{{$zakat->id}}" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ini.?')">Delete</a>
                                                    </td>
                                                </tr>
                                                @endForeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
