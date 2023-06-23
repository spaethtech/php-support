# Arrays

Class Arrays



* Full name: `\SpaethTech\Support\Arrays`
* This class is marked as **final** and can't be subclassed



## Constants

| Constant | Type | Value |
|:---------|:-----|:------|
|`\SpaethTech\Support\Arrays::COMBINE_MODE_OVERWRITE`||1|
|`\SpaethTech\Support\Arrays::COMBINE_MODE_MERGE`||2|

## Methods

### isNull

Determines whether an array is NULL.

```php
public static Arrays::isNull(array|null $array): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |


**Return Value:**

TRUE if the array is NULL.



---
### isEmpty

Determines whether an array is empty.

```php
public static Arrays::isEmpty(array|null $array): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |


**Return Value:**

TRUE if the array is empty, but not NULL.



---
### isNullOrEmpty

Determines whether an array is null or empty.

```php
public static Arrays::isNullOrEmpty(array|null $array): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |


**Return Value:**

TRUE if the array is either NULL or empty.



---
### isAssociative

Determines whether an array has any string keys.

```php
public static Arrays::isAssociative(array|null $array): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |


**Return Value:**

TRUE if the array has any string keys.



---
### isIndexed

Determines whether an array has only integer keys.

```php
public static Arrays::isIndexed(array|null $array): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |


**Return Value:**

TRUE if the array has only integer keys.



---
### isSequential

Determines whether an array has sequential keys.

```php
public static Arrays::isSequential(array|null $array, callable|null $fn = null): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array|null** | The array upon which to operate. |
| `fn` | **callable|null** | An optional callback to convert the keys. |


**Return Value:**

TRUE if the array has sequential keys, otherwise FALSE.



---
### first



```php
public static Arrays::first(?array $array): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **?array** |  |


**Return Value:**





---
### last



```php
public static Arrays::last(?array $array): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **?array** |  |


**Return Value:**





---
### firstOrDefault



```php
public static Arrays::firstOrDefault(?array $array, mixed $default): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **?array** |  |
| `default` | **mixed** |  |


**Return Value:**





---
### lastOrDefault



```php
public static Arrays::lastOrDefault(?array $array, mixed $default): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **?array** |  |
| `default` | **mixed** |  |


**Return Value:**





---
### combineResults



```php
public static Arrays::combineResults(array $array, string $name, mixed $value, int $mode = self::COMBINE_MODE_OVERWRITE): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array** |  |
| `name` | **string** |  |
| `value` | **mixed** |  |
| `mode` | **int** |  |


**Return Value:**





---
### array_path



```php
public static Arrays::array_path(array $array, string $path): array|mixed
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array** |  |
| `path` | **string** |  |


**Return Value:**





---
### accessible

Determine whether the given value is array accessible.

```php
public static Arrays::accessible(mixed $value): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `value` | **mixed** |  |


**Return Value:**





---
### exists

Determine if the given key exists in the provided array.

```php
public static Arrays::exists(\ArrayAccess|array $array, string|int $key): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **\ArrayAccess|array** |  |
| `key` | **string|int** |  |


**Return Value:**





---
### get

Get an item from an array using "dot" notation.

```php
public static Arrays::get(\ArrayAccess|array $array, string|int|null $key, mixed $default = null, string $delimiter = &quot;.&quot;): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **\ArrayAccess|array** |  |
| `key` | **string|int|null** |  |
| `default` | **mixed** |  |
| `delimiter` | **string** |  |


**Return Value:**





---
### has

Check if an item or items exist in an array using "dot" notation.

```php
public static Arrays::has(\ArrayAccess|array $array, string|array $keys, string $delimiter = &quot;.&quot;): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **\ArrayAccess|array** |  |
| `keys` | **string|array** |  |
| `delimiter` | **string** |  |


**Return Value:**





---
### set

Set an array item to a given value using "dot" notation.

```php
public static Arrays::set(array& $array, string|int|null $key, mixed $value, string $delimiter = &quot;.&quot;): array
```

If no key is given to the method, the entire array will be replaced.

* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array** |  |
| `key` | **string|int|null** |  |
| `value` | **mixed** |  |
| `delimiter` | **string** |  |


**Return Value:**





---
### path



```php
public static Arrays::path(array& $array, string $path, string $delimiter = &quot;/&quot;, mixed|null $value = null): array|mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `array` | **array** | The array for which to traverse. |
| `path` | **string** | The path to use during traversal. |
| `delimiter` | **string** | The delimiter to use when parsing the path, defaults to &quot;/&quot;. |
| `value` | **mixed|null** | An optional value that makes this function behave as a setter rather than a getter. |


**Return Value:**

Returns the



---
### array_map_recursive



```php
public static Arrays::array_map_recursive(callable $callback, array $array): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `callback` | **callable** | The callback function to execute on every iteration of the traversal. |
| `array` | **array** | An input array for which to traverse, recursively. |


**Return Value:**

Returns the mapped array.



---
### array_filter_recursive



```php
public static Arrays::array_filter_recursive(array $input, callable|null $callback = null): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `input` | **array** | An input array for which to traverse, recursively. |
| `callback` | **callable|null** | An optional callback function, if none then simply filter our null values. |


**Return Value:**

Returns the filtered array.



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
