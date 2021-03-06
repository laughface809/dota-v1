backup form identik

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mulai Sesi</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        h1  {
            font-family: 'Montserrat', sans-serif;
            }
        body{
            background-image: url("https://cdn.pixabay.com/photo/2018/02/18/20/29/computer-3163437_960_720.png");
            }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Mohon Cek kembali sebelum Simpan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="{{ action('formulircontroller@store')}}" method="POST">
            {{ csrf_field() }}
          <div class="form-group">
            <label>Perangkat Daerah</label>
            <select class="custom-select" name="perangkat_daerah">
                <option selected>Pilih</option>

                        <option value="Camat Denpasar Barat">	Camat Denpasar Barat	</option>
                        <option value="Camat Denpasar Timur">	Camat Denpasar Timur	</option>
                        <option value="Camat Denpasar Utara">	Camat Denpasar Utara	</option>
                        <option value="Camat Denpasar Selatan">	Camat Denpasar Selatan 	</option>
                        <option value="Direktur RSUD Wangaya">	Direktur RSUD Wangaya	</option>
                        <option value="Direktur PDAM Kota Denpasar">	Direktur PDAM Kota Denpasar	</option>
                        <option value="Direktur  PD Parkir Kota Denpasar">	Direktur  PD Parkir Kota Denpasar	</option>
                        <option value="Direktur PD Pasar Kota Denpasar">	Direktur PD Pasar Kota Denpasar	</option>
                        <option value="Inspektorat Kota Denpasar">	Inspektorat Kota Denpasar	</option>
                        <option value="Kepala Badan Perencanaan Pembangunan Kota Denpasar">	Kepala Badan Perencanaan Pembangunan Kota Denpasar	</option>
                        <option value="Kepala Badan Penelitian dan Pengembangan Kota Denpasar">	Kepala Badan Penelitian dan Pengembangan Kota Denpasar	</option>
                        <option value="Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Denpasar">	Kepala Badan Kepegawaian dan Pengembangan Sumber Daya Manusia Kota Denpasar	</option>
                        <option value="Kepala Badan Pendapatan Daerah Kota Denpasar">	Kepala Badan Pendapatan Daerah Kota Denpasar	</option>
                        <option value="Kepala Badan Pengelola Keuangan dan Aset Daerah Kota Denpasar">	Kepala Badan Pengelola Keuangan dan Aset Daerah Kota Denpasar	</option>
                        <option value="Kepala Badan Kesatuan Bangsa dan Politik Kota Denpasar">	Kepala Badan Kesatuan Bangsa dan Politik Kota Denpasar	</option>
                        <option value="Kepala Badan Penanggulangan Bencana Daerah Kota Denpasar">	Kepala Badan Penanggulangan Bencana Daerah Kota Denpasar	</option>
                        <option value="Kepala Dinas Pendidikan, Kepemudaan dan Olahraga Kota Denpasar">	Kepala Dinas Pendidikan, Kepemudaan dan Olahraga Kota Denpasar	</option>
                        <option value="Kepala Dinas Kesehatan Kota Denpasar">	Kepala Dinas Kesehatan Kota Denpasar	</option>
                        <option value="Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Denpasar">	Kepala Dinas Pekerjaan Umum dan Penataan Ruang Kota Denpasar	</option>
                        <option value="Kepala Dinas Perumahan, Kawasan Permukiman dan Pertanahan Kota Denpasar">	Kepala Dinas Perumahan, Kawasan Permukiman dan Pertanahan Kota Denpasar	</option>
                        <option value="Kepala Dinas Lingkungan Hidup dan Kebersihan Kota Denpasar">	Kepala Dinas Lingkungan Hidup dan Kebersihan Kota Denpasar	</option>
                        <option value="Kepala Deinas Kependudukan dan Pencataan Sipil Kota Denpasar">	Kepala Deinas Kependudukan dan Pencataan Sipil Kota Denpasar	</option>
                        <option value="Kepala Dinas Perhubungan Kota Denpasar">	Kepala Dinas Perhubungan Kota Denpasar	</option>
                        <option value="Kepala Dinas Pertanian Kota Denpasar">	Kepala Dinas Pertanian Kota Denpasar	</option>
                        <option value="Kepala Dinas Komunikasi, Informatika dan Statistik Kota Denpasar">	Kepala Dinas Komunikasi, Informatika dan Statistik Kota Denpasar	</option>
                        <option value="Kepala Dinas Tenaga Kerja dan Sertifikasi Kompetensi Kota Denpasar">	Kepala Dinas Tenaga Kerja dan Sertifikasi Kompetensi Kota Denpasar	</option>
                        <option value="Kepala Dinas Kebudayaan Kota Denpasar">	Kepala Dinas Kebudayaan Kota Denpasar	</option>
                        <option value="Kepala Dinas Pariwisata Kota Denpasar">	Kepala Dinas Pariwisata Kota Denpasar	</option>
                        <option value="Kepala Dinas Perindustrian dan Perdagangan Kota Denpasar">	Kepala Dinas Perindustrian dan Perdagangan Kota Denpasar	</option>
                        <option value="Kepala Dinas Koperasi, Usaha Mikro Kecil dan Menengah Kota Denpasar">	Kepala Dinas Koperasi, Usaha Mikro Kecil dan Menengah Kota Denpasar	</option>
                        <option value="Kepala Satuan Polisi Pamong Praja Kota Denpasar">	Kepala Satuan Polisi Pamong Praja Kota Denpasar	</option>
                        <option value="Kepala Dinas Perpustakaan dan Kearsipan Kota Denpasar">	Kepala Dinas Perpustakaan dan Kearsipan Kota Denpasar	</option>
                        <option value="Kepala Pemberdayaan dan Perlindungan anak, Pengendalian Penduduk dan Keluarga Berencana Kota Denpasar">	Kepala Pemberdayaan dan Perlindungan anak, Pengendalian Penduduk dan Keluarga Berencana Kota Denpasar	</option>
                        <option value="Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Denpasar">	Kepala Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Denpasar	</option>
                        <option value="Kepala Dinas Pemberdayaan Masyarakat dan Desa Kota Denpasar">	Kepala Dinas Pemberdayaan Masyarakat dan Desa Kota Denpasar	</option>
                        <option value="Kepala Dinas Sosial Kota Denpasar">	Kepala Dinas Sosial Kota Denpasar	</option>
                        <option value="Kepala Dinas Perikanan dan Ketahanan Pangan Kota Denpasar">	Kepala Dinas Perikanan dan Ketahanan Pangan Kota Denpasar	</option>
                        <option value="Kepala Bagian Pemerintahan dan Otonomi Daerah Setda Kota Denpasar">	Kepala Bagian Pemerintahan dan Otonomi Daerah Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Hukum dan Hak Asasi Manusia Setda Kota Denpasar">	Kepala Bagian Hukum dan Hak Asasi Manusia Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Organisasi Setda Kota Denpasar">	Kepala Bagian Organisasi Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Hubungan Masyarakat dan Protokol Setda Kota Denpasar">	Kepala Bagian Hubungan Masyarakat dan Protokol Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Administrasi Pembangunan Setda Kota Denpasar">	Kepala Bagian Administrasi Pembangunan Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Kerjasama Setda Kota Denpasar">	Kepala Bagian Kerjasama Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Perekonomian dan Sumber Daya Alam Setda Kota Denpasar">	Kepala Bagian Perekonomian dan Sumber Daya Alam Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Pengadaan Barang dan Jasa Setda Kota Denpasar">	Kepala Bagian Pengadaan Barang dan Jasa Setda Kota Denpasar	</option>
                        <option value="Kepala Bagian Umum Setda Kota Denpasar">	Kepala Bagian Umum Setda Kota Denpasar	</option>
                        <option value="Sekretaris Daerah Kota Denpasar">	Sekretaris Daerah Kota Denpasar	</option>
                        <option value="Sekretariat DPRD Kota Denpasar">	Sekretariat DPRD Kota Denpasar	</option>

            </select>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
            <label>Pangkat</label>
            <select class="custom-select" name="pangkat">
                <option selected>Pilih</option>
                      <option value="Pembina Utama">	Pembina Utama	</option>
                      <option value="Pembina Utama Muda">	Pembina Utama Muda </option>
                      <option value="Pembina Tingkat I">	Pembina Tingkat </option>
                      <option value="Pembina">	Pembina </option>
                      <option value="Penata Tingkat I">	Penata Tingkat </option>
                      <option value="Penata">	Penata </option>
                      <option value="Penata Muda Tingkat I">	Penata Muda Tingkat	</option>
                      <option value="Penata Muda">	Penata Muda </option>
                      <option value="Pengatur Tingkat I">	Pengatur Tingkat </option>
                      <option value="Pengatur">	Pengatur </option>
                      <option value="Pengatur Muda Tingkat I">	Pengatur Muda Tingkat I </option>
                      <option value="Pengatur Muda">	Pengatur Muda </option>
                      <option value="Juru Tingkat I">	Juru Tingkat I </option>
                      <option value="Juru">	Juru </option>
                      <option value="Juru Muda Tingkat I">	Juru Muda Tingkat I	</option>
                      <option value="Juru Muda">	Juru Muda	</option>
              </select>
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
          </div>
          <div class="form-group">
            <label>NIP</label>
            <input type="text" name="NIP" class="form-control" placeholder="NIP">
          </div>
          <div class="form-group">
            <label>NIK</label>
            <input type="text" name="NIK" class="form-control" placeholder="NIK">
          </div>
          <div class="form-group">
            <!--label>Foto KTP</label-->
            <input type="hidden" value="1" name="foto_ktp" class="form-control" placeholder="Foto KTP">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Add Modal --}}

  <!-- Modal -->

<center>

    <div class="container">
        @if(count($errors) > 0)

        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $errors)
        <li>{{$errors}}</li>
        @endforeach
      </ul>
        </div>
        @endif

        @if(\Session::has('success'))
          <div class="alert alert-success">
            <p>{{\Session::get('success')}}</p>
          </div>
          @endif

          <div class="card" style="width: 18rem;">
  <img src="http://1.bp.blogspot.com/-0Tp-YEKGBP0/T7dHzEbnSCI/AAAAAAAAGBc/gvotBJOBc1o/s1600/pancasila.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">Formulir</h1>
    <p class="card-text">Silahkan mulai untuk mengkonfirmasi data IDENTIK</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
      Mulai
    </button>
  </div>
</div>
    </div>

    <!-- Button trigger modal -->




</body>
</center>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
