<?php

namespace Takashato\VietQr;

class VietQr
{
    public function make(): VietQrCode
    {
        return new VietQrCode();
    }
}
