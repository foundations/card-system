<?php
require_once 'alipay_core.function.php'; require_once 'alipay_md5.function.php'; class AlipaySubmit { var $alipay_config; var $alipay_gateway_new = 'https://mapi.alipay.com/gateway.do?'; function __construct($spa44e81) { $this->alipay_config = $spa44e81; } function AlipaySubmit($spa44e81) { $this->__construct($spa44e81); } function buildRequestMysign($sp6ee5b2) { $sp985ba1 = createLinkString($sp6ee5b2); $sp8c6344 = ''; switch (strtoupper(trim($this->alipay_config['sign_type']))) { case 'MD5': $sp8c6344 = md5Sign($sp985ba1, $this->alipay_config['key']); break; default: $sp8c6344 = ''; } return $sp8c6344; } function buildRequestPara($sp93f5cb) { $sp874f21 = paraFilter($sp93f5cb); $sp6ee5b2 = argSort($sp874f21); $sp8c6344 = $this->buildRequestMysign($sp6ee5b2); $sp6ee5b2['sign'] = $sp8c6344; $sp6ee5b2['sign_type'] = strtoupper(trim($this->alipay_config['sign_type'])); return $sp6ee5b2; } function buildRequestParaToString($sp93f5cb) { $sp74c3ab = $this->buildRequestPara($sp93f5cb); $spa18a6a = createLinkStringUrlEncode($sp74c3ab); return $spa18a6a; } function buildRequestForm($sp93f5cb, $sp76360a, $spfbec9e) { $sp74c3ab = $this->buildRequestPara($sp93f5cb); $spee702c = '<form id=\'alipaysubmit\' name=\'alipaysubmit\' action=\'' . $this->alipay_gateway_new . '_input_charset=' . trim(strtolower($this->alipay_config['input_charset'])) . '\' method=\'' . $sp76360a . '\'>'; foreach ($sp74c3ab as $spc95936 => $spfa4469) { $spee702c .= '<input type=\'hidden\' name=\'' . $spc95936 . '\' value=\'' . $spfa4469 . '\'/>'; } $spee702c = $spee702c . '<input type=\'submit\'  value=\'' . $spfbec9e . '\' style=\'display:none;\'></form>'; $spee702c = $spee702c . '<script>document.forms[\'alipaysubmit\'].submit();</script>'; return $spee702c; } function query_timestamp() { $spadfef0 = $this->alipay_gateway_new . 'service=query_timestamp&partner=' . trim(strtolower($this->alipay_config['partner'])) . '&_input_charset=' . trim(strtolower($this->alipay_config['input_charset'])); $spdbd605 = ''; $sp5e019e = new DOMDocument(); $sp5e019e->load($spadfef0); $spf9b778 = $sp5e019e->getElementsByTagName('encrypt_key'); $spdbd605 = $spf9b778->item(0)->nodeValue; return $spdbd605; } }