   <div class="text-end no-print">
        <a href="{{ route('inovasi.pdf') }}" class="btn btn-danger mb-3">Download PDF</a>
    </div>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat Izin Permohonan Data</title>
        <style>
            @page {
                size: A4;
                margin-top: 0.8cm;
                margin-left: 2.30cm;
                margin-right: 2.30cm;
                margin-bottom: 0.8cm;
            }

            body {
                font-family: Arial, sans-serif;
            }

            .kop-table {
                width: 100%;
                border-bottom: 3px solid black;
                border-collapse: collapse;
            }

            .kop-table td {
                vertical-align: middle;
                text-align: center;
            }

            .kop-logo {
                width: 100px;
                text-align: left;
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

            .kop-text .alamat {
                font-size: 11pt;
            }

            .content {
                margin-top: 20px;
            }

            .content p {
                font-size: 12pt;
            }

            /* Format rapi untuk tabel informasi */
            .info-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            .info-table td {
                padding: 5px 10px;
                vertical-align: top;
            }

            .info-table .label {
                width: 25%;
                /* font-weight: bold; */
            }

            .info-table .separator {
                width: 5%;
                text-align: center;
            }

            .info-table .value {
                width: 70%;
            }

            /* Tabel tanda tangan */
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
        <!-- KOP SURAT -->
        <table class="kop-table">
            <tr>
                <td class="kop-logo"><img src="assets/brida-logo2.png" alt="Logo" width="80"></td>
                <td class="kop-text">
                    <h2>PEMERINTAH KABUPATEN SUMENEP</h2>
                    <h1>BADAN RISET DAN INOVASI DAERAH</h1>
                    <p class="alamat">Jl. Trunojoyo No. 139 Sumenep</p>
                    <p>Email: brida@sumenepkab.go.id | Website: brida.sumenepkab.go.id</p>
                </td>
            </tr>
        </table>

        <!-- KONTEN SURAT -->
        <div class="content">
            @foreach ($inovasis as $key => $inovasi)
                <table class="info-table">
                    <tr>
                        <td class="label">Nomor</td>
                        <td class="separator">:</td>
                        <td class="value">070/{{ $key + 1 }}.BRIDA/III/2025</td>
                    </tr>
                    <tr>
                        <td class="label">Perihal</td>
                        <td class="separator">:</td>
                        <td class="value">Laporan</td>
                    </tr>
                    <tr>
                        <td class="label">Dasar</td>
                        <td class="separator">:</td>
                        <td class="value">Surat Izin</td>
                    </tr>
                </table>

                <p>Mengingat:</p>
                <ol>
                    <li>Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 07 Tahun 2014 tentang Perubahan atas
                        Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 64 Tahun 2011 tentang Pedoman Penerbitan
                        Rekomendasi Penelitian.</li>
                    <li>Peraturan Wali Kota Surakarta Nomor 13 Tahun 2023 tentang Kedudukan, Susunan Organisasi, Tugas dan
                        Fungsi Serta Tata Kerja Badan Daerah.</li>
                </ol>

                <p>Diizinkan Kepada:</p>
                <table class="info-table">
                    <tr>
                        <td class="label">Nama</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->nama }}</td>
                    </tr>
                    <tr>
                        <td class="label">Tahapan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->tahapan }}</td>
                    </tr>
                    <tr>
                        <td class="label">Jenis INovasi</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->jenis_inovasi }}</td>
                    </tr>
                    <tr>
                        <td class="label">Bentuk Inovasi</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->bentuk_inovasi }}</td>
                    </tr>
                    <tr>
                        <td class="label">Waktu Ujicoba</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->waktu_ujicoba }}</td>
                    </tr>
                    <tr>
                        <td class="label">Waktu Penerapan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->waktu_penerapan }}</td>
                    </tr>
                    <tr>
                        <td class="label">Perancangan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->rancangan }}</td>
                    </tr>
                    <tr>
                        <td class="label">Tujuan</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->tujuan }}</td>
                    </tr>
                    <tr>
                        <td class="label">Manfaat</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->manfaat }}</td>
                    </tr>
                    <tr>
                        <td class="label">Hasil</td>
                        <td class="separator">:</td>
                        <td class="value">{{ $inovasi->hasil }}</td>
                    </tr>
                </table>
            @endforeach

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
            </table>
        </div>
    </body>

    </html>
