<?php
ini_set('date.timezone', 'Asia/Shanghai'); error_reporting(E_ERROR); require_once '../lib/WxPay.Api.php'; require_once '../lib/WxPay.Notify.php'; require_once 'log.php'; $spf26d26 = new CLogFileHandler('../logs/' . date('Y-m-d') . '.log'); $sp10de36 = Log::Init($spf26d26, 15); class PayNotifyCallBack extends WxPayNotify { public function Queryorder($spc91986) { $sp63ca0e = new WxPayOrderQuery(); $sp63ca0e->SetTransaction_id($spc91986); $spfe67da = WxPayApi::orderQuery($sp63ca0e); Log::DEBUG('query:' . json_encode($spfe67da)); if (array_key_exists('return_code', $spfe67da) && array_key_exists('result_code', $spfe67da) && $spfe67da['return_code'] == 'SUCCESS' && $spfe67da['result_code'] == 'SUCCESS') { return true; } return false; } public function NotifyProcess($sp2bb3bd, &$spfb4ab0) { Log::DEBUG('call back:' . json_encode($sp2bb3bd)); $spb1ec91 = array(); if (!array_key_exists('transaction_id', $sp2bb3bd)) { $spfb4ab0 = '输入参数不正确'; return false; } if (!$this->Queryorder($sp2bb3bd['transaction_id'])) { $spfb4ab0 = '订单查询失败'; return false; } return true; } } Log::DEBUG('begin notify'); $sp58471a = new PayNotifyCallBack(); $sp58471a->Handle(false);