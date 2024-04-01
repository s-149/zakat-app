<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Zakat;

class ZakatController extends Controller
{
	// controller ui

	public function index()
	{
		return view('page.zakat.index', [
	        'title' => 'Data Zakat',
	        'zakat' => Zakat::all()
    	]);
	}

	public function detail($id)
	{
		return view('page.zakat.detail', [
			'title' => 'Detail Data Zakat',
			'zakat' => Zakat::find($id)
		]);
	}

	public function store(){
		return view('page.Zakat.store', [
			'title' => 'Tambah Data Zakat'
		]);
	}

	public function create(Request $request)
	{
		$this->validate($request, [
			"nama" => "required",
			"alamat" => "required",
			"jumlah_jiwa"=> "required",
			"harga_beras_dikonsumsi"=> "required",
			"tagihan"=> "required",
			"pembayaran"=> "required",
		]);

		$data = $request->all();
		$zakat = Zakat::create($data);

		return redirect('/zakat');
	}

	public function show($id)
	{
		return view('page.Zakat.update', [
			'title' => 'Update Data Zakat',
			'Zakat' => Zakat::find($id)
		]);
	}

	public function update(Request $request, $id)
	{
		$zakat = Zakat::find($id);
		if (!$zakat) {
			return redirect('/zakat');
		}

		$this->validate($request, [
			"nama" => "required",
			"alamat" => "required",
			"jumlah_jiwa"=> "required",
			"harga_beras_dikonsumsi"=> "required",
			"tagihan"=> "required",
			"pembayaran"=> "required",
		]);

		$data = $request->all();
		$zakat->fill($data);
		$zakat->save();

		return redirect('/zakat');
	}

	public function destroy($id)
	{
		$zakat = Zakat::find($id);

		if (!$zakat) {
			return redirect('/zakat');
		}

		$zakat->delete();

		return redirect('/zakat');
	}

}
