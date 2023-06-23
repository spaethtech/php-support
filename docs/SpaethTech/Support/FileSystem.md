# FileSystem

Our own custom FileSystem support functions.



* Full name: `\SpaethTech\Support\FileSystem`
* This class is marked as **final** and can't be subclassed



## Methods

### setVerbose



```php
public static FileSystem::setVerbose(bool $verbose = true): mixed
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `verbose` | **bool** |  |


**Return Value:**





---
### onWindows



```php
private static FileSystem::onWindows(): bool
```



* This method is **static**.





**Return Value:**





---
### path

Makes changes to a given path for consistency, replacing and trimming slashes as needed.

```php
public static FileSystem::path(string $path, string $separator = DIRECTORY_SEPARATOR): string
```

NOTE: This method does not rely upon the existence of the folder/file like realpath() and other functions.

* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** | The path upon which to operate. |
| `separator` | **string** |  |


**Return Value:**

Returns the modified path.



---
### uri



```php
public static FileSystem::uri(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** |  |


**Return Value:**





---
### execRemoveDirRecursive



```php
public static FileSystem::execRemoveDirRecursive(string $dir): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** |  |


**Return Value:**





---
### unlinkRetry

Calls unlink() repeatedly until the file is removed or the specified timeout is reached.

```php
public static FileSystem::unlinkRetry(string $path, float $timeout = 1.0, float $delay = 0.1): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** | The file upon which to operate. |
| `timeout` | **float** | The timeout (in seconds) to wait before aborting. |
| `delay` | **float** | The amount of time (in seconds) to &quot;sleep&quot; between each attempt. |


**Return Value:**

Returns TRUE once the file is removed, or FALSE if the file could not be removed.



---
### rmdirRetry

Calls rmdir() repeatedly until the directory is removed or the specified timeout is reached.

```php
public static FileSystem::rmdirRetry(string $path, float $timeout = 1.0, float $delay = 0.1): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** | The directory upon which to operate. |
| `timeout` | **float** | The timeout (in seconds) to wait before aborting. |
| `delay` | **float** | The amount of time (in seconds) to &quot;sleep&quot; between each attempt. |


**Return Value:**

Returns TRUE once the directory is removed, or FALSE if the directory could not be removed.



---
### rmdir

Deletes all content from a directory (recursively).

```php
public static FileSystem::rmdir(string $dir, bool $inclusive = true, array $exclusions = [], array& $counts = []): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** | The directory upon which to act. |
| `inclusive` | **bool** |  |
| `exclusions` | **array** | An optional array of exclusions, relative to $dir. |
| `counts` | **array** |  |


**Return Value:**

Returns TRUE on success (or if the $dir is non-existent), or FALSE on failure.



---
### loadJson



```php
public static FileSystem::loadJson(string $path): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** |  |


**Return Value:**





---
### saveJson



```php
public static FileSystem::saveJson(string $path, array $content, int $options = JSON_PRETTY_PRINT): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `path` | **string** |  |
| `content` | **array** |  |
| `options` | **int** |  |


**Return Value:**





---
### scan



```php
public static FileSystem::scan(string $dir, string $separator = DIRECTORY_SEPARATOR, bool $absolute = FALSE): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** |  |
| `separator` | **string** |  |
| `absolute` | **bool** |  |


**Return Value:**





---
### each



```php
public static FileSystem::each(string $dir, callable|null $func = NULL, string $separator = DIRECTORY_SEPARATOR, bool $absolute = FALSE): array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** |  |
| `func` | **callable|null** |  |
| `separator` | **string** |  |
| `absolute` | **bool** |  |


**Return Value:**





---
### copyDir



```php
public static FileSystem::copyDir(string $source, string $destination, bool $replace = FALSE, array& $counts = []): false|array
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `source` | **string** |  |
| `destination` | **string** |  |
| `replace` | **bool** |  |
| `counts` | **array** |  |


**Return Value:**





---
### gitClone



```php
public static FileSystem::gitClone(string $url, string $dir, bool $degit = FALSE): void
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `url` | **string** |  |
| `dir` | **string** |  |
| `degit` | **bool** |  |


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
