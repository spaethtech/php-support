# Patterns

Class Patterns



* Full name: `\SpaethTech\Support\Patterns`
* This class is marked as **final** and can't be subclassed



## Constants

| Constant | Type | Value |
|:---------|:-----|:------|
|`\SpaethTech\Support\Patterns::PATTERN_JSON`||&quot;/(\\{.*})/&quot;|
|`\SpaethTech\Support\Patterns::PATTERN_ARRAY`||&quot;/(\\[.*])/&quot;|

## Methods

### isJSON

Checks to see whether the provided string value is a JSON literal and optionally mutates the literal value
to an associative array from the decoded JSON.

```php
public static Patterns::isJSON(string|null& $value = null, bool $mutate = true): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `value` | **string|null** | The string to validate as JSON.  When mutated, this value becomes an associative array. |
| `mutate` | **bool** | When TRUE, the original value is mutated from the decoded JSON.  Defaults to TRUE. |


**Return Value:**

Returns TRUE, when the provided string is a valid JSON literal.



---
### isArray

Checks to see whether the provided string value is a PHP array literal and optionally mutates the literal
value to an actual array.

```php
public static Patterns::isArray(string|null& $value = null, bool $mutate = true): bool
```

Examples:<br>
<small>`(String) "[ 'key' => 'value' ]"` becomes `(Array) [ 'key' => 'value' ]`</small><br>
<small>`(String) "[ 'apples', 'bananas' ]"` becomes `(Array) [ 'apples', 'bananas' ]`</small><br>

* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `value` | **string|null** | The string to validate as a PHP array.  When mutated, this value becomes an array. |
| `mutate` | **bool** | When TRUE, the original value is mutated from interpreted array.  Defaults to TRUE. |


**Return Value:**

Returns TRUE, when the provided string is a valid JSON literal.



---
### interpolateUrl



```php
public static Patterns::interpolateUrl(string $pattern, array $params, string $token = &quot;:&quot;): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `pattern` | **string** |  |
| `params` | **array** |  |
| `token` | **string** |  |


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
