<?PHP

function generateUUID() {
    $uuid = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));
    return $uuid;
}

?>