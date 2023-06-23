# Directories

A collection of helper functions for directory manipulation.



* Full name: `\SpaethTech\Support\Directories`
* This class is marked as **final** and can't be subclassed



## Methods

### rmdir



```php
public static Directories::rmdir(string $dir, bool $recursive = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** |  |
| `recursive` | **bool** |  |


**Return Value:**





---
### scanDirMap



```php
public static Directories::scanDirMap(string $root, callable|null $func = null): array|false
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `root` | **string** |  |
| `func` | **callable|null** |  |


**Return Value:**





---
### scanDirFilter



```php
public static Directories::scanDirFilter(string $root, callable|null $func = null): array|false
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `root` | **string** |  |
| `func` | **callable|null** |  |


**Return Value:**





---
### scanDir



```php
public static Directories::scanDir(string $root): array|false
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `root` | **string** |  |


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
