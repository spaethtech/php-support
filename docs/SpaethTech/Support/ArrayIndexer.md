# ArrayIndexer





* Full name: `\SpaethTech\Support\ArrayIndexer`



## Methods

### __construct



```php
public ArrayIndexer::__construct(array $container): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `container` | **array** |  |


**Return Value:**





---
### getByDotNotation



```php
public ArrayIndexer::getByDotNotation(string $path, null $default = null): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** | The path to use during traversal, represented by dot-notation. |
| `default` | **null** | The value to return on a non-existent path, or when omitted, throws an Exception. |


**Return Value:**

Returns the value at the successfully traversed index or the specified default on failure.



---
### setByDotNotation



```php
public ArrayIndexer::setByDotNotation(string $path, mixed $value): void
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** |  |
| `value` | **mixed** |  |


**Return Value:**





---
### toArray



```php
public ArrayIndexer::toArray(): array
```









**Return Value:**





---
### arrayPath



```php
private static ArrayIndexer::arrayPath(array& $array, array $path, mixed $value = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array** |  |
| `path` | **array** |  |
| `value` | **mixed** |  |


**Return Value:**





---


---
> Automatically generated from source code comments on 2023-06-15 using
> [phpDocumentor](http://www.phpdoc.org/) for [spaethtech/php-monorepo](https://github.com/spaethtech/php-monorepo)

<style>
/* Remove padding and background in <code> used in the structs title */
h2 code,
h3 code,
h4 code,
h5 code {
    background: none !important;
    padding: 0 !important;
}

table {
    width: 100%;
    display: table;
}

thead > tr > th {
    text-align: left;
}

thead > tr > th:first-child {
    width: 20%;
}

/* Remove padding and background in <code> used in the tables */
td code,
th code {
    background: none;
    padding: 0;
}
</style>
