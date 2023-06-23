# Strings





* Full name: `\SpaethTech\Support\Strings`
* This class is marked as **final** and can't be subclassed



## Methods

### replaceLast



```php
public static Strings::replaceLast(string $search, string $replace, string $subject): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `search` | **string** |  |
| `replace` | **string** |  |
| `subject` | **string** |  |


**Return Value:**





---
### contains



```php
public static Strings::contains(string|null $haystack, string $needle): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string|null** | The &#039;haystack&#039; for which to check occurrences of the &#039;needle&#039;. |
| `needle` | **string** | The &#039;needle&#039; for which to search the &#039;haystack&#039;. |


**Return Value:**

Returns TRUE if the 'haystack' contains one or more occurrences of the 'needle', otherwise FALSE.



---
### startsWithUpper



```php
public static Strings::startsWithUpper(string|null $haystack): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string|null** | The &#039;haystack&#039; for which to examine the first character. |


**Return Value:**

Returns TRUE if the 'haystack' starts with an uppercase letter, otherwise FALSE.



---
### startsWith



```php
public static Strings::startsWith(string|null $haystack, string $needle): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string|null** | The &#039;haystack&#039; for which to examine the beginning character(s). |
| `needle` | **string** | The &#039;needle&#039; for which to search the &#039;haystack&#039;. |


**Return Value:**

Returns TRUE if the 'haystack' begins with the 'needle', otherwise FALSE.



---
### endsWith



```php
public static Strings::endsWith(string|null $haystack, string $needle): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string|null** | The &#039;haystack&#039; for which to examine the ending character(s). |
| `needle` | **string** | The &#039;needle&#039; for which to search the &#039;haystack&#039;. |


**Return Value:**

Returns TRUE if the 'haystack' ends with the 'needle', otherwise FALSE.



---
### isNullOrEmpty



```php
public static Strings::isNullOrEmpty(?string $haystack): bool
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **?string** |  |


**Return Value:**





---
### beforeLast



```php
public static Strings::beforeLast(string $haystack, string $needle): false|string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string** |  |
| `needle` | **string** |  |


**Return Value:**





---
### afterLast



```php
public static Strings::afterLast(string $haystack, string $needle): false|string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `haystack` | **string** |  |
| `needle` | **string** |  |


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
