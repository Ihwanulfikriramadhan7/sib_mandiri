@php
//komentar php
$nama = 'Joko';
$nilai = 100;
 @endphp
 @if ($nilai >= 80)
 @php $ket = "Lulus"; @andphp
 @else
 @php $ket = "Gagal"; @endphp
 @endif
 <p>Siswq {{$nama}}</p>
 <p>Dengan Nilai {{$nilai}}</p>
 <p>Dinyatakan {{$ket}}</p>
 <!-- komentar html -->
 {{--kode comentar--}}