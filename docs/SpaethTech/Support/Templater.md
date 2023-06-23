# Templater





* Full name: `\SpaethTech\Support\Templater`



## Constants

| Constant | Type | Value |
|:---------|:-----|:------|
|`\SpaethTech\Support\Templater::VAR_PATTERN`|string|&quot;/^(.*)\\{\\{ *([A-Za-z][A-Za-z0-9_-]*) *\\}\\}(.*)\$/m&quot;|
|`\SpaethTech\Support\Templater::CMD_PATTERN`|string|&quot;/^(.*)\\{\\% *(.*) *\\%\\}(.*)(\r\n|\r|\n)?/m&quot;|

## Methods

### replace

Replaces all occurrence of variables and available commands in the directory specified, recursively.

```php
public static Templater::replace(string $dir, array&lt;string,string&gt; $replacements = [], string $separator = DIRECTORY_SEPARATOR): int
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `dir` | **string** | The directory in which to search. |
| `replacements` | **array<string,string>** | An associative array of variable names and replacement values. |
| `separator` | **string** |  |


**Return Value:**

The number of modified files.



---
### removeLine



```php
public static Templater::removeLine(array $matches): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `matches` | **array** |  |


**Return Value:**





---
### removeComment



```php
public static Templater::removeComment(array $matches): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `matches` | **array** |  |


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
