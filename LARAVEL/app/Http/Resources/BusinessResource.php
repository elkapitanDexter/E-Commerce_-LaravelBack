<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusinessResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'b_id' => $this->businessID,
            'b_ownID' => $this->businessOwnerID,
            'b_name' => $this->businessName,
            'b_backG' => $this->businessBackground,
            'b_addr' => $this->businessAddress,
            'b_cont1' => $this->businessContactNo1,
            'b_cont2' => $this->businessContactNo2,
            'b_vIDname' => $this->validIDname,
            'b_idN' => $this->idNumber,
            'b_idDateExp' => $this->idDateExpiry,
            'b_idIMGname' => $this->idImageName,
            'b_idIMGpath' => $this->idImagePath,
            'b_email' => $this->businessEmail,
            'b_fb' => $this->businessFBLink,
        ];
    }
}
