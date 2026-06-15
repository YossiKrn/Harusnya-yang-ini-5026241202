<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class penggajianDBController extends Controller
{
    public function index()
    {
        $data = DB::table('penggajian')->paginate(10);
        return view('EAS.penggajian', ['data' => $data]);
    }

    public function tambah()
    {
    // Mengambil semua isi kolom NIP yang sudah ada di database
    $nips = DB::table('penggajian')->pluck('nip');

    // Melempar data NIP tersebut ke form tambah
    return view('EAS.tambah', ['nips' => $nips]);
    }

    public function store(Request $request)
    {
        // Proses pengecekan data kembar pada Primary Key manual sebelum di-insert
        $cek_data = DB::table('penggajian')->where('nip', $request->nip)->first();

        if ($cek_data) {
            // Jika data sudah ada, batalkan perintah dan kembali ke form bawa pesan error
            return redirect()->back()->with('error', 'Gagal! Kode/ID tersebut sudah terdaftar di sistem.');
        }

        // Jika lolos pengecekan (unik), proses insert dijalankan seperti biasa
        DB::table('penggajian')->insert([
            'nip' => $request->nip,
            'gajipokok'   => $request->gajipokok,
            'potongan'   => $request->potongan
        ]);

        return redirect('/penggajian')->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request)
    {
        DB::table('penggajian')->where('nip', $request->nip)->update([
            'gajipokok' => $request->gajipokok,
            'potongan' => $request->potongan
        ]);

        return redirect('/penggajian')->with('success', 'Data berhasil diupdate!');
    }
}
