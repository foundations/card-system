<?php
class AlipayTrustUserZminfoPairGetRequest { private $applyUserInfo; private $ownerUserInfo; private $zmInfoType; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setApplyUserInfo($spa65eb5) { $this->applyUserInfo = $spa65eb5; $this->apiParas['apply_user_info'] = $spa65eb5; } public function getApplyUserInfo() { return $this->applyUserInfo; } public function setOwnerUserInfo($sp02f1c9) { $this->ownerUserInfo = $sp02f1c9; $this->apiParas['owner_user_info'] = $sp02f1c9; } public function getOwnerUserInfo() { return $this->ownerUserInfo; } public function setZmInfoType($spbf17dc) { $this->zmInfoType = $spbf17dc; $this->apiParas['zm_info_type'] = $spbf17dc; } public function getZmInfoType() { return $this->zmInfoType; } public function getApiMethodName() { return 'alipay.trust.user.zminfo.pair.get'; } public function setNotifyUrl($sp57a09c) { $this->notifyUrl = $sp57a09c; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp076915) { $this->returnUrl = $sp076915; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($sp77cff5) { $this->terminalType = $sp77cff5; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spb66900) { $this->terminalInfo = $spb66900; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp7cadc0) { $this->prodCode = $sp7cadc0; } public function setApiVersion($sp06df85) { $this->apiVersion = $sp06df85; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp47bfc8) { $this->needEncrypt = $sp47bfc8; } public function getNeedEncrypt() { return $this->needEncrypt; } }