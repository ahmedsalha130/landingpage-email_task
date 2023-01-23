<?php

use App\Models\PurchaseOrder;
use App\Models\PurchaseOrderReturn;
use App\Models\Receipt;
use App\Models\SupplierStocks;
use Illuminate\Support\Facades\Config;


// function upload file
function uploadImage($folder, $image)
{
  $extension = strtolower($image->extension());
  $filename = time() . rand(100, 999) . '.' . $extension;
  $image->getClientOriginalName = $filename;
  $image->move($folder, $filename);
  return $filename;
}
// function check execute delete or not



