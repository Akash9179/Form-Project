<?php

namespace ContainerQSGiJ6O;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0fb51 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43d64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties778a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getConnection', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getMetadataFactory', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getExpressionBuilder', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'beginTransaction', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getCache', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'transactional', array('func' => $func), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->transactional($func);
    }

    public function commit()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'commit', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->commit();
    }

    public function rollback()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'rollback', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getClassMetadata', array('className' => $className), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'createQuery', array('dql' => $dql), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'createNamedQuery', array('name' => $name), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'createQueryBuilder', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'flush', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'clear', array('entityName' => $entityName), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->clear($entityName);
    }

    public function close()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'close', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->close();
    }

    public function persist($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'persist', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'remove', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'refresh', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'detach', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'merge', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'contains', array('entity' => $entity), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getEventManager', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getConfiguration', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'isOpen', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getUnitOfWork', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getProxyFactory', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'initializeObject', array('obj' => $obj), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'getFilters', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'isFiltersStateClean', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'hasFilters', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return $this->valueHolder0fb51->hasFilters();
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

        $instance->initializer43d64 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0fb51) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0fb51 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0fb51->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__get', ['name' => $name], $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        if (isset(self::$publicProperties778a4[$name])) {
            return $this->valueHolder0fb51->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fb51;

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

        $targetObject = $this->valueHolder0fb51;
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
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fb51;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0fb51;
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
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__isset', array('name' => $name), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fb51;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0fb51;
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
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__unset', array('name' => $name), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0fb51;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0fb51;
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
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__clone', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        $this->valueHolder0fb51 = clone $this->valueHolder0fb51;
    }

    public function __sleep()
    {
        $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, '__sleep', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;

        return array('valueHolder0fb51');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43d64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43d64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43d64 && ($this->initializer43d64->__invoke($valueHolder0fb51, $this, 'initializeProxy', array(), $this->initializer43d64) || 1) && $this->valueHolder0fb51 = $valueHolder0fb51;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0fb51;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0fb51;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
