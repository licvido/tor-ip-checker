# Tor IP Checker

Checks if given IP is coming from Tor (exit) node.



## Installation

The best way to install Tor IP Checker is using  [Composer](http://getcomposer.org/):

```sh
$ composer require licvido/tor-ip-checker
```



## Usage

```php
// prepare required list
$exitNodeList = new ExitNodeList;
$fullNodeList = new FullNodeList;

$checker = new TorIpChecker($exitNodeList);

if ($checker->isInList($_SERVER['REMOTE_ADDR'])) {
	// TOR
} else {
	// standard way
}
```



## License

This library is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
