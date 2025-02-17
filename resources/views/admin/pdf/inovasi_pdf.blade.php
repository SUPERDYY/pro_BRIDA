<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Izin Permohonan Data</title>
    <style>
        @page {
            size: A4;
            margin: 3.5cm 2.3cm 2.3cm 2.3cm; /* Lebih besar agar tidak menutupi konten */
            header: myHeader;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12pt;
        }

        /* HEADER KOP SURAT */
        .kop {
            position: fixed;
            top: -3cm;
            left: 0;
            right: 0;
            width: 100%;
            text-align: center;
            z-index: 1000;
        }

        .kop-table {
            width: 100%;
            text-align: center;
            border-bottom: 3px solid black;
            margin-bottom: 10px;
        }

        .kop-logo img {
            width: 80px;
        }

        .kop-text h1 {
            font-size: 18pt;
            margin: 0;
        }

        .kop-text h2 {
            font-size: 13pt;
            margin: 0;
        }

        .kop-text p {
            font-size: 12pt;
            margin: 2px 0;
        }

        /* TABEL DATA */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        thead {
            display: table-header-group; /* Header tabel tetap muncul di halaman baru */
        }

        tbody tr {
            page-break-inside: avoid; /* Menghindari pemotongan baris di tengah halaman */
        }

        .page-break {
            page-break-before: always; /* Memastikan header muncul di halaman baru */
        }

        .signature-table {
            width: 100%;
            margin-top: 40px;
            text-align: center;
        }

        .signature-table td {
            width: 50%;
            vertical-align: top;
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- HEADER KOP SURAT (TERAPKAN DI SETIAP HALAMAN) -->
<div class="kop">
    <table class="kop-table">
        <tr>
            <td class="kop-logo"><img src="{{ public_path('logo1.png') }}" alt="Logo"></td>
            <td class="kop-text">
                <h2>PEMERINTAH KABUPATEN SUMENEP</h2>
                <h1>BADAN RISET DAN INOVASI DAERAH</h1>
                <p>Jl. Trunojoyo No. 139 Sumenep</p>
                <p>Email: brida@sumenepkab.go.id | Website: brida.sumenepkab.go.id</p>
            </td>
        </tr>
    </table>
</div>

<!-- HEADER UNTUK SETIAP HALAMAN -->
<htmlpageheader name="myHeader">
    <div class="kop">
        <table class="kop-table">
            <tr>
                <td class="kop-logo"><img src="{{ public_path('logo1.png') }}" alt="Logo"></td>
                <td class="kop-text">
                    <h2>PEMERINTAH KABUPATEN SUMENEP</h2>
                    <h1>BADAN RISET DAN INOVASI DAERAH</h1>
                    <p>Jl. Trunojoyo No. 139 Sumenep</p>
                    <p>Email: brida@sumenepkab.go.id | Website: brida.sumenepkab.go.id</p>
                </td>
            </tr>
        </table>
    </div>
</htmlpageheader>

<!-- KONTEN -->
<div class="content">
    <p>Berikut adalah data inovasi yang telah diverifikasi:</p>

    <table class="data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Inovasi</th>
                <th>Bentuk Inovasi</th>
                <th>Tujuan</th>
                <th>Manfaat</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($inovasis as $inovasi)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $inovasi->nama }}</td>
                    <td>{{ $inovasi->jenis_inovasi }}</td>
                    <td>{{ $inovasi->bentuk_inovasi }}</td>
                    <td>{{ $inovasi->tujuan }}</td>
                    <td>{{ $inovasi->manfaat }}</td>
                </tr>
                @if($loop->iteration % 10 == 0)
                    <tr class="page-break"></tr> <!-- Setiap 10 baris, buat halaman baru -->
                @endif
            @endforeach
        </tbody>
    </table>
{{--
    <p>Telah Diverifikasi Oleh:</p>
    <table class="signature-table">
        <tr>
            <td>
                <p>Kepala</p><br>
                <p><strong>NAMA</strong></p>
                <p>NIP: 19700207 199311 2 001</p>
            </td>
            <td>
                <p>Kepala Bidang Riset</p><br>
                <p><strong>NAMA</strong></p>
                <p>NIP: 19670805 199603 1 006</p>
            </td>
        </tr>
    </table> --}}
</div>

</body>
</html>
