<?php
require_once __DIR__ . '/lib/WxPay.Api.php'; class NativePay { public function GetPrePayUrl($spaff239) { $spf5fac7 = new WxPayBizPayUrl(); $spf5fac7->SetProduct_id($spaff239); $sp9fe87f = WxpayApi::bizpayurl($spf5fac7); $spadfef0 = 'weixin://wxpay/bizpayurl?' . $this->ToUrlParams($sp9fe87f); return $spadfef0; } private function ToUrlParams($sp71df00) { $sp7fb8ad = ''; foreach ($sp71df00 as $spc20e8d => $spc86f28) { $sp7fb8ad .= $spc20e8d . '=' . $spc86f28 . '&'; } $sp7fb8ad = trim($sp7fb8ad, '&'); return $sp7fb8ad; } public function unifiedOrder($sp63ca0e) { return WxPayApi::unifiedOrder($sp63ca0e); } }