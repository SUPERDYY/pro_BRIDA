<?php

namespace App\Http\Controllers;

use App\Models\Inovasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class InovasiController extends Controller
{

    public function index()
    {
        $inovasis = Inovasi::all();
        $no = 1;
        return view('admin.inovasi.inovasi', compact('inovasis', 'no'));
    }

    public function create()
    {
        $data['inovasis'] = Inovasi::all();
        return view('admin.inovasi.inovasi_create', $data);
    }

    public function create_action(Request $request)
    {
        $user_id = str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT);
        $kategori = $request->kategori;
        $nama = $request->nama;
        $tahapan = $request->tahapan;
        $inisiator = $request->inisiator;
        $jenis_inovasi = $request->jenis_inovasi;
        $bentuk_inovasi = $request->bentuk_inovasi;
        $tematik = $request->tematik;
        $urusan = $request->urusan;
        $waktu_ujicoba = $request->waktu_ujicoba;
        $waktu_penerapan = $request->waktu_penerapan;
        $rancangan = $request->rancangan;
        $tujuan = $request->tujuan;
        $manfaat = $request->manfaat;
        $hasil = $request->hasil;
        $status = $request->status;

        $data = [

            'user_id' => $user_id,
            'nama' => $nama,
            'kategori' => $kategori,
            'tahapan' => $tahapan,
            'inisiator' => $inisiator,
            'jenis_inovasi' => $jenis_inovasi,
            'bentuk_inovasi' => $bentuk_inovasi,
            'tematik' => $tematik,
            'urusan' => $urusan,
            'waktu_ujicoba' => $waktu_ujicoba,
            'waktu_penerapan' => $waktu_penerapan,
            'rancangan' => $rancangan,
            'tujuan' => $tujuan,
            'manfaat' => $manfaat,
            'hasil' => $hasil,
            'status' => $status,
        ];

        Inovasi::create($data);
        return redirect('/inovasi')->with(['success' => 'Berhasil Menambah Data Inovasi']);
    }


    public function edit($id)
    {
        $data['detail'] = Inovasi::where('id', $id)->first();
        return view('admin.inovasi.inovasi_edit', $data);
    }


    public function edit_action($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'tahapan' => 'required',
            'inisiator' => 'required',
            'jenis_inovasi' => 'required',
            'tematik' => 'required',
            'urusan' => 'required',
            'waktu_ujicoba' => 'required',
            'waktu_penerapan' => 'required',
            'rancangan' => 'required',
            'tujuan' => 'required',
            'manfaat' => 'required',
            'hasil' => 'required',
            'status' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'tahapan' => $request->tahapan,
            'inisiator' => $request->inisiator,
            'jenis_inovasi' => $request->jenis_inovasi,
            'tematik' => $request->tematik,
            'urusan' => $request->urusan,
            'waktu_ujicoba' => $request->waktu_ujicoba,
            'waktu_penerapan' => $request->waktu_penerapan,
            'rancangan' => $request->rancangan,
            'tujuan' => $request->tujuan,
            'manfaat' => $request->manfaat,
            'hasil' => $request->hasil,
            'status' => $request->status,
        ];

        inovasi::where('id', $id)->update($data);
        return redirect('/inovasi')->with(['success' => 'berhasil mengedit Data Inovasi']);
    }




    public function delete($id)
    {
        Inovasi::where('id', $id)->delete();
        return redirect('/inovasi')->with(['succes' => 'berhasil Menghapus Data ']);
    }


    public function generatePDF()
{
    // Ambil semua data inovasi dari database
    $inovasis = Inovasi::all();

    // Cek apakah ada data, jika kosong kembalikan error
    if ($inovasis->isEmpty()) {
        return redirect()->back()->with('error', 'Tidak ada data inovasi tersedia.');
    }

    // Generate PDF dengan semua data
    $pdf = PDF::loadView('admin.pdf.inovasi_pdf', compact('inovasis'));

    // Unduh PDF dengan nama file khusus
    return $pdf->download("laporan-inovasi.pdf");
}

}
