# Casings

A collection of helper functions to convert between some common string casings.



* Full name: `\SpaethTech\Support\Casings`
* This class is marked as **final** and can't be subclassed



## Methods

### pascal2snake

Converts a PascalCase string to it's snake_case equivalent.

```php
public static Casings::pascal2snake(string $pascal): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `pascal` | **string** | The PascalCase string to convert. |


**Return Value:**

Return the snake_case equivalent.



---
### pascal2camel

Converts a PascalCase string to it's camelCase equivalent.

```php
public static Casings::pascal2camel(string $pascal): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `pascal` | **string** | The PascalCase string to convert. |


**Return Value:**

Return the camelCase equivalent.



---
### pascal2lisp



```php
public static Casings::pascal2lisp(string $pascal): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `pascal` | **string** |  |


**Return Value:**





---
### lisp2camel



```php
public static Casings::lisp2camel(string $lisp): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `lisp` | **string** |  |


**Return Value:**





---
### lisp2pascal



```php
public static Casings::lisp2pascal(string $lisp): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `lisp` | **string** |  |


**Return Value:**





---
### lisp2snake



```php
public static Casings::lisp2snake(string $lisp): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `lisp` | **string** |  |


**Return Value:**





---
### snake2pascal

Converts a snake_case string to it's PascalCase equivalent.

```php
public static Casings::snake2pascal(string $snake): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `snake` | **string** | The snake_case string to convert. |


**Return Value:**

Return the PascalCase equivalent.



---
### snake2camel

Converts a snake_case string to it's camelCase equivalent.

```php
public static Casings::snake2camel(string $snake): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `snake` | **string** | The snake_case string to convert. |


**Return Value:**

Return the camelCase equivalent.



---
### snake2lisp



```php
public static Casings::snake2lisp(string $snake): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `snake` | **string** |  |


**Return Value:**





---
### camel2pascal

Converts a camelCase string to it's PascalCase equivalent.

```php
public static Casings::camel2pascal(string $camel): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `camel` | **string** | The camelCase string to convert. |


**Return Value:**

Return the PascalCase equivalent.



---
### camel2snake

Converts a camelCase string to it's snake_case equivalent.

```php
public static Casings::camel2snake(string $camel): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `camel` | **string** | The camelCase string to convert. |


**Return Value:**

Return the snake_case equivalent.



---
### camel2lisp



```php
public static Casings::camel2lisp(string $camel): string
```



* This method is **static**.




**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `camel` | **string** |  |


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
