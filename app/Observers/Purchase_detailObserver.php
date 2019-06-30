<?php

namespace App\Observers;

use App\Purchase_detail;
use App\Purchase;

class Purchase_detailObserver
{
    /**
     * Handle the purchase_detail "created" event.
     *
     * @param  \App\Purchase_detail  $purchaseDetail
     * @return void
     */

    private function generateTotal($purchaseDetail)
    {
        $purchase_id = $purchaseDetail->purchase_id;
        $purchase_detail = Purchase_detail::where('purchase_id', $purchase_id)->get();
        $total = $purchase_detail->sum(function($i) {
            return $i->price * $i->qty;
        });
        $purchaseDetail->purchase()->update([
            'total' => $total
        ]);
    }

    public function created(Purchase_detail $purchaseDetail)
    {
        $this->generateTotal($purchaseDetail);
    }

    /**
     * Handle the purchase_detail "updated" event.
     *
     * @param  \App\Purchase_detail  $purchaseDetail
     * @return void
     */
    public function updated(Purchase_detail $purchaseDetail)
    {
        $this->generateTotal($purchaseDetail);
    }

    /**
     * Handle the purchase_detail "deleted" event.
     *
     * @param  \App\Purchase_detail  $purchaseDetail
     * @return void
     */
    public function deleted(Purchase_detail $purchaseDetail)
    {
        $this->generateTotal($purchaseDetail);
    }

    /**
     * Handle the purchase_detail "restored" event.
     *
     * @param  \App\Purchase_detail  $purchaseDetail
     * @return void
     */
    public function restored(Purchase_detail $purchaseDetail)
    {
        //
    }

    /**
     * Handle the purchase_detail "force deleted" event.
     *
     * @param  \App\Purchase_detail  $purchaseDetail
     * @return void
     */
    public function forceDeleted(Purchase_detail $purchaseDetail)
    {
        //
    }
}
