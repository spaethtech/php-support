<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Support;

use ArrayAccess;
use Exception;
use SpaethTech\Support\Exceptions\ArrayTraversalException;

/**
 * Class Arrays
 *
 * @package SpaethTech\Common
 * @author Ryan Spaeth <rspaeth@SpaethTech.net>
 * @final
 */
final class Arrays
{
    public const COMBINE_MODE_OVERWRITE  = 1;
    public const COMBINE_MODE_MERGE      = 2;


    /**
     * @throws Exception
     */
    public static function combineResults(
        array $array, string $name, $value, int $mode = self::COMBINE_MODE_OVERWRITE): array
    {
        if(is_array($value) && array_key_exists($name, $array))
        {
            switch($mode)
            {
                case self::COMBINE_MODE_OVERWRITE:
                    $array[$name] = $value;
                    break;

                case self::COMBINE_MODE_MERGE:
                    //$array[$name] = array_merge($array[$name], is_array($value) ? $value : [$value]);
                    $array[$name] = array_merge($array[$name], $value);
                    break;

                default:
                    throw new Exception("[SpaethTech\Common\ArrayX::combineResults()] Unsupported MODE: '$mode'");
            }

        }
        else
        {
            $array[$name] = $value;
        }

        return $array;
    }


    public static function is_assoc(array $array): bool
    {
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * @param array $array
     * @param string $path
     * @return array|mixed
     * @throws Exception
     * @deprecated
     */
    public static function array_path(array $array, string $path)
    {
        $steps = explode("/",$path);
        $current = $array;

        foreach ($steps as $step)
        {
            if (!is_array($current) || !array_key_exists($step, $current))
                throw new Exception("[SpaethTech\Common\Arrays] Could not traverse the path '$path' in ".
                    print_r($array, true)."!");

            $current = $current[$step];
        }

        return $current;


    }

    /**
     * @param array $array The array for which to traverse.
     * @param string $path The path to use during traversal.
     * @param string $delimiter The delimiter to use when parsing the path, defaults to "/"
     * @param bool $exception Determines whether to throw an Exception on a non-existent path, defaults to TRUE.
     * @param null $default The value to return on a non-existent path when Exceptions are FALSE, defaults to NULL.
     * @return mixed Returns the value at the successfully traversed index.
     * @throws ArrayTraversalException
     */
    /*
    public static function path(array $array, string $path, string $delimiter = "/", bool $exception = true, $default = null)
    {
        $steps = explode($delimiter, $path);
        $current = $array;

        $taken = [];

        foreach ($steps as $step)
        {
            $taken[] = $step;

            if (!array_key_exists($step, $current))
            {
                if($exception)
                    throw new ArrayTraversalException("Could not traverse beyond '".implode($delimiter, $taken)."'");

                return $default;
            }

            $current = $current[$step];

        }

        return $current;
    }
    */

    /**
     * Determine whether the given value is array accessible.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function accessible($value) : bool
    {
        return is_array($value) || $value instanceof ArrayAccess;
    }



    /**
     * Determine if the given key exists in the provided array.
     *
     * @param  ArrayAccess|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function exists($array, $key) : bool
    {
//        if ($array instanceof Collection) {
//            return $array->has($key);
//        }

        if ($array instanceof ArrayAccess) {
            return $array->offsetExists($key);
        }

        if (is_float($key)) {
            $key = (string) $key;
        }

        return array_key_exists($key, $array);
    }


    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  ArrayAccess|array  $array
     * @param  string|int|null  $key
     * @param  mixed $default
     * @return mixed
     */
    public static function get($array, $key, $default = null, string $delimiter = ".")
    {
        if (! self::accessible($array)) {
            return value($default);
        }

        if (is_null($key)) {
            return $array;
        }

        if (self::exists($array, $key)) {
            return $array[$key];
        }

        if (! str_contains($key, $delimiter)) {
            return $array[$key] ?? value($default);
        }

        foreach (explode($delimiter, $key) as $segment) {
            if (self::accessible($array) && self::exists($array, $segment)) {
                $array = $array[$segment];
            } else {
                return value($default);
            }
        }

        return $array;
    }


    /**
     * Check if an item or items exist in an array using "dot" notation.
     *
     * @param ArrayAccess|array $array
     * @param string|array $keys
     * @param string $delimiter
     *
     * @return bool
     */
    public static function has($array, $keys, string $delimiter = ".") : bool
    {
        $keys = (array) $keys;

        if (! $array || $keys === []) {
            return false;
        }

        foreach ($keys as $key) {
            $subKeyArray = $array;

            if (self::exists($array, $key)) {
                continue;
            }

            foreach (explode($delimiter, $key) as $segment) {
                if (self::accessible($subKeyArray) && self::exists($subKeyArray, $segment)) {
                    $subKeyArray = $subKeyArray[$segment];
                } else {
                    return false;
                }
            }
        }

        return true;
    }


    /**
     * Set an array item to a given value using "dot" notation.
     *
     * If no key is given to the method, the entire array will be replaced.
     *
     * @param array $array
     * @param string|int|null $key
     * @param mixed $value
     * @param string $delimiter
     *
     * @return array
     */
    public static function set(array &$array, $key, $value, string $delimiter = ".") : array
    {
        if (is_null($key)) {
            return $array = $value;
        }

        $keys = explode($delimiter, $key);

        foreach ($keys as $i => $key) {
            if (count($keys) === 1) {
                break;
            }

            unset($keys[$i]);

            // If the key doesn't exist at this depth, we will just create an empty array
            // to hold the next value, allowing us to create the arrays to hold final
            // values at the correct depth. Then we'll keep digging into the array.
            if (! isset($array[$key]) || ! is_array($array[$key])) {
                $array[$key] = [];
            }

            $array = &$array[$key];
        }

        $array[array_shift($keys)] = $value;

        return $array;
    }





    /**
     * @param array $array The array for which to traverse.
     * @param string $path The path to use during traversal.
     * @param string $delimiter The delimiter to use when parsing the path, defaults to "/".
     * @param mixed|null $value An optional value that makes this function behave as a setter rather than a getter.
     * @return array|mixed Returns the
     */
    public static function path(array &$array, string $path, string $delimiter = "/", /* & */ $value = null)
    {
        $path = explode($delimiter, $path);

        $args = func_get_args();
        $ref = &$array;

        foreach ($path as $key)
        {
            if (!is_array($ref))
                $ref = [];

            $ref = &$ref[$key];
        }

        $prev = $ref;

        if (array_key_exists(2, $args))
        {
            // value param was passed -> we're setting
            $ref = $value;  // set the value
        }

        return $prev;
    }


    /**
     * @param callable $callback The callback function to execute on every iteration of the traversal.
     * @param array $array An input array for which to traverse, recursively.
     * @return array Returns the mapped array.
     */
    public static function array_map_recursive(callable $callback, array $array): array
    {
        $func = function ($item) use (&$func, &$callback)
        {
            return is_array($item) ? array_map($func, $item) : call_user_func($callback, $item);
        };

        return array_map($func, $array);
    }

    /**
     * @param array $input An input array for which to traverse, recursively.
     * @param callable|null $callback An optional callback function, if none then simply filter our NULL values.
     * @return array Returns the filtered array.
     */
    public static function array_filter_recursive(array $input, callable $callback = null): array
    {
        foreach ($input as &$value)
        {
            if (is_array($value))
            {
                $value = self::array_filter_recursive($value, $callback);
            }
        }

        return $callback !== null ? array_filter($input, $callback) : array_filter($input);
    }


}
