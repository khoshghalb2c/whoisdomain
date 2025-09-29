<?php
	// nic servers for each domain extension //
	$servers = array(
		"biz" => "whois.neulevel.biz", "com" => "whois.internic.net", "us" => "whois.nic.us",
		"coop" => "whois.nic.coop", "info" => "whois.nic.info", "name" => "whois.nic.name",
		"net" => "whois.internic.net", "gov" => "whois.nic.gov", "edu" => "whois.internic.net",
		"mil" => "rs.internic.net", "int" => "whois.iana.org", "ac" => "whois.nic.ac",
		"ae" => "whois.uaenic.ae", "at" => "whois.ripe.net", "au" => "whois.aunic.net",
		"be" => "whois.dns.be", "bg" => "whois.ripe.net", "br" => "whois.registro.br",
		"bz" => "whois.belizenic.bz", "ca" => "whois.cira.ca", "cc" => "whois.nic.cc",
		"ch" => "whois.nic.ch", "cl" => "whois.nic.cl", "cn" => "whois.cnnic.net.cn",
		"cz" => "whois.nic.cz", "de" => "whois.nic.de", "fr" => "whois.nic.fr",
		"hu" => "whois.nic.hu", "ie" => "whois.domainregistry.ie", "il" => "whois.isoc.org.il",
		"in" => "whois.ncst.ernet.in", "ir" => "whois.nic.ir", "mc" => "whois.ripe.net",
		"to" => "whois.tonic.to", "tv" => "whois.tv", "ru" => "whois.ripn.net",
		"org" => "whois.pir.org", "aero" => "whois.information.aero", "nl" => "whois.domain-registry.nl",
		"uk" => "whois.nic.uk", "us" => "whois.nic.us", "travel" => "whois.nic.travel",
		"gov" => "whois.dotgov.gov", "it" => "whois.nic.it"
	);

	function queryDomain($domain="khoshghalb2c.ir"){
		if(preg_match("/^(?:[-A-Za-z0-9]+\.)+[A-Za-z]{2,6}$/", $domain) && strlen($domain)>=4){
			$domain = strtolower(trim($domain));
			$domain = preg_replace('/^http:\/\//i', '', $domain);
			$domain = preg_replace('/^www\./i', '', $domain);
			$domain = explode('/', $domain);
			$domain = trim($domain[0]);
			$_domain = explode('.', $domain);
			$ext = $_domain[count($_domain)-1];
			global $servers;
			if(isset($servers[$ext])){
				if($conn = fsockopen($servers[$ext], 43)){
					$output = "";
					fwrite($conn, $domain."\r\n");
					while(!feof($conn)) $output .= fgets($conn, 128);
					fclose($conn);
				}else $output = "connection error.";
			}else $output = "nic server not found.";
		}else $output = "invalid domain name.";
		
		return $output??"ERROR";
	}
	
	/* #Licence
	 * Copyright © 2022-2025 khoshghalb2c.ir. All Rights Reserved.
	 */
?>
