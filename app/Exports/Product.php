<?php 
namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Product implements FromView
{
	public function View(): View {
		return view('exports.products', ['products' => \App\Product::all() ]);
	}
}

?>