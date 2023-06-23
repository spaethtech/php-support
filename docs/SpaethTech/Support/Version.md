# Version

Class Version



* Full name: `\SpaethTech\Support\Version`
* This class is marked as **final** and can't be subclassed



## Constants

| Constant | Type | Value |
|:---------|:-----|:------|
|`\SpaethTech\Support\Version::REGEX_VERSION`||&quot;/^(?&lt;major&gt;\\d+)\\.(?&lt;minor&gt;\\d+)(?:.(?&lt;build&gt;\\d+))?(?:-(?&lt;release&gt;.*))?\$/&quot;|

## Methods

### __construct



```php
public Version::__construct(string $version): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `version` | **string** |  |


**Return Value:**





---
### __toString



```php
public Version::__toString(): mixed
```









**Return Value:**





---
### getMajorMinor



```php
public Version::getMajorMinor(): string
```









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
