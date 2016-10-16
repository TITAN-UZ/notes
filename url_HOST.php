// Все возможные варианты параметров URL в одном
$url = 'http://username:password@www.hostname.tld/path?arg=value#anchor';

$parse =  parse_url($url);

print_r($parse['host']); // вернет www.hostname.tld

//Короткий путь: Вернет только host
print_r(parse_url($url, PHP_URL_HOST)); // вернет www.hostname.tld

// небольшая функция-фильтр, которая очистит лишнее.
function getHost($Address) { 
   $parseUrl = parse_url(trim($Address)); 
   return trim($parseUrl[host] ? $parseUrl[host] : array_shift(explode('/', $parseUrl[path], 2))); 
} 
