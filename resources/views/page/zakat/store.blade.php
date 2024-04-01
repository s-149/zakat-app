@extends('layout.main')

@section('container')

				<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="/zakat" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama">Nama</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="nama" name="nama" placeholder=" Nama.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="alamat">Alamat</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="15" placeholder="Isikan Alamat..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="jumlah_jiwa">Jumlah Jiwa</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="jumlah_jiwa" name="jumlah_jiwa" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="harga_beras_dikonsumsi">Harga Beras Perliter</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="harga_beras_dikonsumsi" name="harga_beras_dikonsumsi" placeholder=" Harga Beras Perliter.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tagihan">Tagihan</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="tagihan" name="tagihan" placeholder=" Tagihan.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="pembayaran">Pembayaran</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="pembayaran" name="pembayaran" placeholder=" Pembayaran.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kembalian">Kembalian</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="kembalian" name="kembalian" placeholder=" Kembalian.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button> or
                                                    <a class="btn btn-danger" href="/zakat">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        // Fungsi untuk menghitung tagihan
        function hitungTagihan() {
            // Mendapatkan nilai dari input jumlah_jiwa
            var jumlah_jiwa = parseInt($('#jumlah_jiwa').val());

            // Mendapatkan nilai dari input harga_beras_dikonsumsi
            var harga_beras_dikonsumsi = parseFloat($('#harga_beras_dikonsumsi').val());

            // Menghitung tagihan (jumlah_jiwa * harga_beras_dikonsumsi)
            var tagihan = jumlah_jiwa * harga_beras_dikonsumsi * 3.5;

            // Menampilkan hasil perhitungan pada input tagihan
            $('#tagihan').val(tagihan);

            // Panggil fungsi hitungKembalian saat nilai input pembayaran atau tagihan berubah
            hitungKembalian();
        }

        // Fungsi untuk menghitung kembalian
        function hitungKembalian() {
            // Mendapatkan nilai dari input pembayaran
            var pembayaran = parseFloat($('#pembayaran').val());

            // Mendapatkan nilai dari input tagihan
            var tagihan = parseFloat($('#tagihan').val());

            // Menghitung kembalian (pembayaran - tagihan)
            var kembalian = pembayaran - tagihan;

            // Menampilkan hasil perhitungan pada input kembalian
            $('#kembalian').val(kembalian);
        }

        // Panggil fungsi hitungTagihan saat nilai input jumlah_jiwa atau harga_beras_dikonsumsi berubah
        $('#jumlah_jiwa, #harga_beras_dikonsumsi').change(function(){
            hitungTagihan();
        });

        // Panggil fungsi hitungKembalian saat nilai input pembayaran atau tagihan berubah
        $('#pembayaran, #tagihan').change(function(){
            hitungKembalian();
        });

        // Panggil fungsi hitungTagihan saat dokumen telah dimuat
        hitungTagihan();
    });
</script>


@endsection
