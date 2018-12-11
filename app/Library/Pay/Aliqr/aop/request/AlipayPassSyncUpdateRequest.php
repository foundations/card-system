<?php
class AlipayPassSyncUpdateRequest { private $channelId; private $extInfo; private $pass; private $serialNumber; private $status; private $verifyCode; private $verifyType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setChannelId($sp54de42) { $this->channelId = $sp54de42; $this->apiParas['channel_id'] = $sp54de42; } public function getChannelId() { return $this->channelId; } public function setExtInfo($sp281b94) { $this->extInfo = $sp281b94; $this->apiParas['ext_info'] = $sp281b94; } public function getExtInfo() { return $this->extInfo; } public function setPass($sp07b0ac) { $this->pass = $sp07b0ac; $this->apiParas['pass'] = $sp07b0ac; } public function getPass() { return $this->pass; } public function setSerialNumber($spba5419) { $this->serialNumber = $spba5419; $this->apiParas['serial_number'] = $spba5419; } public function getSerialNumber() { return $this->serialNumber; } public function setStatus($sp5340de) { $this->status = $sp5340de; $this->apiParas['status'] = $sp5340de; } public function getStatus() { return $this->status; } public function setVerifyCode($spa03c18) { $this->verifyCode = $spa03c18; $this->apiParas['verify_code'] = $spa03c18; } public function getVerifyCode() { return $this->verifyCode; } public function setVerifyType($sp619ee3) { $this->verifyType = $sp619ee3; $this->apiParas['verify_type'] = $sp619ee3; } public function getVerifyType() { return $this->verifyType; } public function getApiMethodName() { return 'alipay.pass.sync.update'; } public function setNotifyUrl($sp57a09c) { $this->notifyUrl = $sp57a09c; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp076915) { $this->returnUrl = $sp076915; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp77cff5) { $this->terminalType = $sp77cff5; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spb66900) { $this->terminalInfo = $spb66900; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp7cadc0) { $this->prodCode = $sp7cadc0; } public function setApiVersion($sp06df85) { $this->apiVersion = $sp06df85; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp47bfc8) { $this->needEncrypt = $sp47bfc8; } public function getNeedEncrypt() { return $this->needEncrypt; } }