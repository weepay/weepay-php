<?php
/**
 * weepay Spl class loader wrapper.
 *
 * @author weepay
 */
class weepayBootstrap
{

    /**
     * Inits and registers classes.
     * @param string $includePath
     */
    public static function initialize($includePath = "weepay")
    {
        $loader = new SplClassLoader($includePath);
        $loader->register();
    }
}

class SplClassLoader
{
    private $_fileExtension = '.php';
    private $_namespace;
    private $_includePath;
    private $_namespaceSeparator = '\\';

    /**
     * Creates a new <tt>SplClassLoader</tt> that loads classes of the
     * specified namespace.
     *
     * @param string $ns
     *            The namespace to use.
     * @param string $includePath
     *            The base path.
     */
    public function __construct($ns = null, $includePath = null)
    {
        $this->_namespace = $ns;
        $this->_includePath = $includePath;
    }

    /**
     * Sets the namespace separator used by classes in the namespace of this class loader.
     *
     * @param string $sep
     *            The separator to use.
     */
    public function setNamespaceSeparator($sep)
    {
        $this->_namespaceSeparator = $sep;
    }

    /**
     * Gets the namespace separator used by classes in the namespace of this class loader.
     *
     * @return string $_namespaceSeparator
     */
    public function getNamespaceSeparator()
    {
        return $this->_namespaceSeparator;
    }

    /**
     * Sets the base include path for all class files in the namespace of this class loader.
     *
     * @param string $includePath
     */
    public function setIncludePath($includePath)
    {
        $this->_includePath = $includePath;
    }

    /**
     * Gets the base include path for all class files in the namespace of this class loader.
     *
     * @return string $includePath
     */
    public function getIncludePath()
    {
        return $this->_includePath;
    }

    /**
     * Sets the file extension of class files in the namespace of this class loader.
     *
     * @param string $fileExtension
     */
    public function setFileExtension($fileExtension)
    {
        $this->_fileExtension = $fileExtension;
    }

    /**
     * Gets the file extension of class files in the namespace of this class loader.
     *
     * @return string $fileExtension
     */
    public function getFileExtension()
    {
        return $this->_fileExtension;
    }

    /**
     * Installs this class loader on the SPL autoload stack.
     */
    public function register()
    {
        spl_autoload_register(array(
            $this,
            'loadClass',
        ));
    }

    /**
     * Uninstalls this class loader from the SPL autoloader stack.
     */
    public function unregister()
    {
        spl_autoload_unregister(array(
            $this,
            'loadClass',
        ));
    }

    /**
     * Loads the given class or interface.
     *
     * @param string $className
     *            The name of the class to load.
     * @return void
     */
    public function loadClass($className)
    {
        if (null === $this->_namespace || $this->_namespace . $this->_namespaceSeparator === substr($className, 0, strlen($this->_namespace . $this->_namespaceSeparator))) {
            $fileName = '';
            if (false !== ($lastNsPos = strripos($className, $this->_namespaceSeparator))) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName = str_replace($this->_namespaceSeparator, DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . $this->_fileExtension;
            // echo "<br/>";
            require $this->_includePath !== null ? $this->_includePath . DIRECTORY_SEPARATOR : '' . $fileName;
        }
    }
}
