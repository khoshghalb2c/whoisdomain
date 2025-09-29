# WhoisDomain
In PHP, use this code to query domains.

## How to use?
1. Download the [`whoisdomain.php`](whoisdomain.php) file and place it in your project.
2. Write the `whoisdomain.php` file in your php code as `require_once`.
3. You just need to call the `queryDomain($domain)` function.
> [!TIP]
> To query, replace `$domain` with your domain name.

## Example Usage
``` php
<?php
	$domain = "khoshghalb2c.ir"; // you domain name for query
	require_once 'whoisdomain.php'; // require library.
	echo str_replace("\n", "<br/>", queryDomain($domain)); // print query result
?>
````

## What servers are supported?
<table>
    <tr><td colspan="4"><b>Supported Whois Server</b></td></tr>
    <tr><td>.biz</td><td>.cl</td><td>.ac</td><td>.to</td></tr>
    <tr><td>.com</td><td>.cn</td><td>.ae</td><td>.tv</td></tr>
    <tr><td>.us</td><td>.cz</td><td>.at</td><td>.ru</td></tr>
    <tr><td>.coop</td><td>.de</td><td>.au</td><td>.org</td></tr>
    <tr><td>.info</td><td>.fr</td><td>.be</td><td>.aero</td></tr>
    <tr><td>.name</td><td>.hu</td><td>.bg</td><td>.nl</td></tr>
    <tr><td>.net</td><td>.ie</td><td>.br</td><td>.uk</td></tr>
    <tr><td>.gov</td><td>.il</td><td>.bz</td><td>.us</td></tr>
    <tr><td>.edu</td><td>.in</td><td>.ca</td><td>.travel</td></tr>
    <tr><td>.mil</td><td>.ir</td><td>.cc</td><td>.gov</td></tr>
    <tr><td>.int</td><td>.mc</td><td>.ch</td><td>.it</td></tr>
</table>

## Licence
```
Copyright © 2022-2025 khoshghalb2c.ir. All Rights Reserved.
```
