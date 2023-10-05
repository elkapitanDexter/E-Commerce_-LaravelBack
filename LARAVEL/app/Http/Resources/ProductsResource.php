<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'prodID' => $this->prodID,
            'prodName' => $this->productName,
            'prodDesc' => Str::limit($this->productDescription, 75),
            'prodLeft' => $this->left,
            'prodPrice' => $this->price,
            'prodSupp' => $this->supplierName,
            'prodSuppAddr' => $this->supplierAddress,
            'prodEmail' => $this->Email,
            'prodDateSupp' => $this->dateSupplied,
        ];
    }
}
