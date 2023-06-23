# Process





* Full name: `\SpaethTech\Support\Process`



## Constants

| Constant | Type | Value |
|:---------|:-----|:------|
|`\SpaethTech\Support\Process::DEFAULT_DESCRIPTORS`||[0 =&gt; array(&quot;pipe&quot;, &quot;r&quot;), 1 =&gt; array(&quot;pipe&quot;, &quot;w&quot;), 2 =&gt; array(&quot;pipe&quot;, &quot;w&quot;)]|
|`\SpaethTech\Support\Process::DEFAULT_PRINT_PREFIX`||&quot; [EXEC]&quot;|

## Methods

### __construct



```php
public Process::__construct(array|string $command, array $descriptors = self::DEFAULT_DESCRIPTORS): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `command` | **array|string** |  |
| `descriptors` | **array** |  |


**Return Value:**





---
### execute



```php
public Process::execute(string|null $cwd = NULL, array|null $env = NULL, array|null $options = NULL): int
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `cwd` | **string|null** |  |
| `env` | **array|null** |  |
| `options` | **array|null** |  |


**Return Value:**





---
### getOutput



```php
public Process::getOutput(bool $compact = false, ?callable $filter = NULL): array
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `compact` | **bool** |  |
| `filter` | **?callable** |  |


**Return Value:**





---
### getError



```php
public Process::getError(bool $compact = false, ?callable $filter = NULL): array
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `compact` | **bool** |  |
| `filter` | **?callable** |  |


**Return Value:**





---
### setOutput



```php
public Process::setOutput(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `output` | **\Symfony\Component\Console\Output\OutputInterface** |  |


**Return Value:**





---
### setPrintPrefix



```php
public Process::setPrintPrefix(string $prefix): mixed
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `prefix` | **string** |  |


**Return Value:**





---
### printOutput



```php
public Process::printOutput(): mixed
```









**Return Value:**





---
### getPadding



```php
public Process::getPadding(): mixed
```









**Return Value:**





---
### printCommand



```php
public Process::printCommand(bool $multiline = false): string
```








**Parameters:**

| Parameter  | Type  | Description  |
|:-----------|:------|:-------------|
| `multiline` | **bool** |  |


**Return Value:**





---
### getExitCode



```php
public Process::getExitCode(): ?int
```









**Return Value:**





---
### getElapsedTime



```php
public Process::getElapsedTime(): float
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
