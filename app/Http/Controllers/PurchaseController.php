<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Purchase;
use App\Product;
use App\Purchase_detail;
use PDF;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchase  = Purchase::with(['customer', 'detail'])->orderBy('created_at', 'DESC')->paginate(10);
        return view('purchase.index', compact('purchase'));
    }

    public function create()
    {
        $customers = Customer::orderBy('created_at', 'DESC')->get();
        return view('purchase.create', compact('customers'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required|exists:customers,id'
        ]);

        try {
            $purchase = Purchase::create([
                'customer_id' => $request->customer_id,
                'total' => 0
            ]);

            return redirect(route('purchase.edit', ['id' => $purchase->id]));
        } catch(\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $purchase = Purchase::with(['customer', 'detail', 'detail.product'])->find($id);
        $products = Product::orderBy('title', 'ASC')->get();
        return view('purchase.edit', compact('purchase', 'products'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer'
        ]);

        try {
            $purchase = Purchase::find($id);
            $product = Product::find($request->product_id);

            $purchase_detail = $purchase->detail()->where('product_id', $product->id)->first();
            if ($purchase_detail) {
                $purchase_detail->update([
                    'qty' => $purchase_detail->qty + $request->qty
                ]);
            } else {
                Purchase_detail::create([
                    'purchase_id' => $purchase->id,
                    'product_id' => $request->product_id,
                    'price' => $product->price,
                    'qty' => $request->qty
                ]);
            }
            
            return redirect()->back()->with(['success' => 'Product Telah Ditambahkan']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteProduct($id)
    {
        $detail = Purchase_detail::find($id);
        $detail->delete();
        return redirect()->back()->with(['success' => 'Product telah dihapus']);
    }

    public function destroy($id)
    {
        $purchase = Purchase::find($id);
        $purchase->delete();
        return redirect()->back()->with(['success' => 'Data telah dihapus']);
    }

    public function generatePurchase($id)
    {
        $purchase = Purchase::with(['customer', 'detail', 'detail.product'])->find($id);
        $pdf = PDF::loadView('purchase.print', compact('purchase'))->setPaper('a4', 'landscape');
        return $pdf->download('Laporan Purchase');
    }
}
