# IniConfig

IniConfig



* Full name: `\SpaethTech\Support\Config\IniConfig`
* Parent class: [\SpaethTech\Support\Config\AbstractConfig](./AbstractConfig.md)



## Methods

### allowed

The abstract method that is called during file/folder iteration to exclude certain files.

```php
protected IniConfig::allowed(array $info): bool
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `info` | **array** |  |


**Return Value:**





---
### parse

The abstract method that is called when parsing the configuration file into an associative array.

```php
protected IniConfig::parse(): void
```









**Return Value:**





---


## Inherited methods

### __construct



```php
public AbstractConfig::__construct(string $path): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** |  |


**Return Value:**





---
### allowed

The abstract method that is called during file/folder iteration to exclude certain files.

```php
protected AbstractConfig::allowed(array $info): bool
```




* This method is **abstract**.



**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `info` | **array** |  |


**Return Value:**





---
### parse

The abstract method that is called when parsing the configuration file into an associative array.

```php
protected AbstractConfig::parse(): void
```




* This method is **abstract**.




**Return Value:**





---
### get

Gets the value of the configuration data at the given key.

```php
public AbstractConfig::get(string $key): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `key` | **string** | The key or &quot;.&quot; delimited path to use when indexing into the array. |


**Return Value:**

Returns the value at the given index.



---
### set

Sets the value of the configuration data at the given path.

```php
public AbstractConfig::set(string $key, mixed $value): array
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `key` | **string** | The key or &quot;.&quot; delimited path to use when indexing into the array. |
| `value` | **mixed** | The value to assign at the given index. |


**Return Value:**

Returns the same array, to provide method chaining.



---
### filter



```php
protected AbstractConfig::filter(string $extension, callable $handler): void
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `extension` | **string** |  |
| `handler` | **callable** |  |


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
