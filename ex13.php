```php
<?php

function listarCacheAPCu(): array
{
    $resultado = [];

    $iterator = new APCUIterator();

    while ($iterator->valid()) {
        $resultado[] = [
            'chave' => $iterator->key(),
            'valor' => $iterator->current(),
        ];

        $iterator->next();
    }

    return $resultado;
}

// Exemplo de uso
$cache = listarCacheAPCu();

echo '<pre>';
print_r($cache);
echo '</pre>';
```


// Esse código serve para listar os dados que estão armazenados no cache APCu do PHP.