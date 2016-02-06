<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: vtgate.proto
//   Date: 2016-01-22 01:34:42

namespace Vitess\Proto\Vtgate {

  class BoundShardQuery extends \DrSlump\Protobuf\Message {

    /**  @var \Vitess\Proto\Query\BoundQuery */
    public $query = null;
    
    /**  @var string */
    public $keyspace = null;
    
    /**  @var string[]  */
    public $shards = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'vtgate.BoundShardQuery');

      // OPTIONAL MESSAGE query = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "query";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\Vitess\Proto\Query\BoundQuery';
      $descriptor->addField($f);

      // OPTIONAL STRING keyspace = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "keyspace";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED STRING shards = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "shards";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <query> has a value
     *
     * @return boolean
     */
    public function hasQuery(){
      return $this->_has(1);
    }
    
    /**
     * Clear <query> value
     *
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function clearQuery(){
      return $this->_clear(1);
    }
    
    /**
     * Get <query> value
     *
     * @return \Vitess\Proto\Query\BoundQuery
     */
    public function getQuery(){
      return $this->_get(1);
    }
    
    /**
     * Set <query> value
     *
     * @param \Vitess\Proto\Query\BoundQuery $value
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function setQuery(\Vitess\Proto\Query\BoundQuery $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <keyspace> has a value
     *
     * @return boolean
     */
    public function hasKeyspace(){
      return $this->_has(2);
    }
    
    /**
     * Clear <keyspace> value
     *
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function clearKeyspace(){
      return $this->_clear(2);
    }
    
    /**
     * Get <keyspace> value
     *
     * @return string
     */
    public function getKeyspace(){
      return $this->_get(2);
    }
    
    /**
     * Set <keyspace> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function setKeyspace( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <shards> has a value
     *
     * @return boolean
     */
    public function hasShards(){
      return $this->_has(3);
    }
    
    /**
     * Clear <shards> value
     *
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function clearShards(){
      return $this->_clear(3);
    }
    
    /**
     * Get <shards> value
     *
     * @param int $idx
     * @return string
     */
    public function getShards($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <shards> value
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function setShards( $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <shards>
     *
     * @return string[]
     */
    public function getShardsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <shards>
     *
     * @param string $value
     * @return \Vitess\Proto\Vtgate\BoundShardQuery
     */
    public function addShards( $value){
     return $this->_add(3, $value);
    }
  }
}
