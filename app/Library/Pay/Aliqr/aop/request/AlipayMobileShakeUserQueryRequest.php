<?php
class AlipayMobileShakeUserQueryRequest { private $dynamicId; private $dynamicIdType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setDynamicId($sp6e73cb) { $this->dynamicId = $sp6e73cb; $this->apiParas['dynamic_id'] = $sp6e73cb; } public function getDynamicId() { return $this->dynamicId; } public function setDynamicIdType($sp63e723) { $this->dynamicIdType = $sp63e723; $this->apiParas['dynamic_id_type'] = $sp63e723; } public function getDynamicIdType() { return $this->dynamicIdType; } public function getApiMethodName() { return 'alipay.mobile.shake.user.query'; } public function setNotifyUrl($sp57a09c) { $this->notifyUrl = $sp57a09c; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp076915) { $this->returnUrl = $sp076915; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp77cff5) { $this->terminalType = $sp77cff5; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spb66900) { $this->terminalInfo = $spb66900; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp7cadc0) { $this->prodCode = $sp7cadc0; } public function setApiVersion($sp06df85) { $this->apiVersion = $sp06df85; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp47bfc8) { $this->needEncrypt = $sp47bfc8; } public function getNeedEncrypt() { return $this->needEncrypt; } }