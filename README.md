openlss/func-format
====

Usage
----

```php
ld('func/format');

//Format bytes into an arbitrary divisor
echo format_bytes(1048576); //1MB

//Create list friendly IP's
echo format_ip('1.2.3.4'); //  1.  2.  3.  4
```

Reference
----

### (string) format_bytes($val,$force=null,$suf='B')
  * $val		The byte integer to be formatted
  * $force		Instead of auto-selected a divisor force one
   * ''			(blank)	force bytes
   * k			force kilobytes
   * m			force megabytes
   * g			force gigabytes
   * t			force terabytes
   * p			force petabytes
  * $suf		The suffix to be added example 'B' yields 100MB if blank 100M

### (string) format_ip($ip='0.0.0.0',$padding='',$web=false)
  * $ip			The IP address to be formatted in octect format
  * $padding	Padding to use between IPs
  * $web		When TRUE will change spaces to &nbsp;

