<?php

namespace ContainerAlJw38d;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder025bf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer72f64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties371bd = [
        
    ];

    public function getConnection()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getConnection', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getMetadataFactory', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getExpressionBuilder', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'beginTransaction', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getCache', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'transactional', array('func' => $func), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->transactional($func);
    }

    public function commit()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'commit', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->commit();
    }

    public function rollback()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'rollback', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getClassMetadata', array('className' => $className), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'createQuery', array('dql' => $dql), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'createNamedQuery', array('name' => $name), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'createQueryBuilder', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'flush', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'clear', array('entityName' => $entityName), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->clear($entityName);
    }

    public function close()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'close', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->close();
    }

    public function persist($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'persist', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'remove', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'refresh', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'detach', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'merge', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'contains', array('entity' => $entity), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getEventManager', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getConfiguration', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'isOpen', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getUnitOfWork', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getProxyFactory', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'initializeObject', array('obj' => $obj), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'getFilters', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'isFiltersStateClean', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'hasFilters', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return $this->valueHolder025bf->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer72f64 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder025bf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder025bf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder025bf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__get', ['name' => $name], $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        if (isset(self::$publicProperties371bd[$name])) {
            return $this->valueHolder025bf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025bf;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder025bf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025bf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder025bf;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__isset', array('name' => $name), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025bf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder025bf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__unset', array('name' => $name), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder025bf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder025bf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__clone', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        $this->valueHolder025bf = clone $this->valueHolder025bf;
    }

    public function __sleep()
    {
        $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, '__sleep', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;

        return array('valueHolder025bf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer72f64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer72f64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer72f64 && ($this->initializer72f64->__invoke($valueHolder025bf, $this, 'initializeProxy', array(), $this->initializer72f64) || 1) && $this->valueHolder025bf = $valueHolder025bf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder025bf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder025bf;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
