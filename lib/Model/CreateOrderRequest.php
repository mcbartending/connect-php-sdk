<?php
/**
 * CreateOrderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  SquareConnect
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 Square, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CreateOrderRequest Class Doc Comment
 *
 * @category    Class
 * @description Defines the parameters that can be included in the body of a request to the [CreateOrder](#endpoint-createorder) endpoint.
 * @package     SquareConnect
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateOrderRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'idempotency_key' => 'string',
        'order' => '\SquareConnect\Model\Order'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'idempotency_key' => 'idempotency_key',
        'order' => 'order'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'idempotency_key' => 'setIdempotencyKey',
        'order' => 'setOrder'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'idempotency_key' => 'getIdempotencyKey',
        'order' => 'getOrder'
    );
  
    /**
      * $idempotency_key A value you specify that uniquely identifies this order among orders you've created.  If you're unsure whether a particular order was created successfully, you can reattempt it with the same idempotency key without worrying about creating duplicate orders.  See [Idempotency keys](#idempotencykeys) for more information.
      * @var string
      */
    protected $idempotency_key;
    /**
      * $order The order to be created.
      * @var \SquareConnect\Model\Order
      */
    protected $order;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->idempotency_key = $data["idempotency_key"];
            $this->order = $data["order"];
        }
    }
    /**
     * Gets idempotency_key
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->idempotency_key;
    }
  
    /**
     * Sets idempotency_key
     * @param string $idempotency_key A value you specify that uniquely identifies this order among orders you've created.  If you're unsure whether a particular order was created successfully, you can reattempt it with the same idempotency key without worrying about creating duplicate orders.  See [Idempotency keys](#idempotencykeys) for more information.
     * @return $this
     */
    public function setIdempotencyKey($idempotency_key)
    {
        
        $this->idempotency_key = $idempotency_key;
        return $this;
    }
    /**
     * Gets order
     * @return \SquareConnect\Model\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param \SquareConnect\Model\Order $order The order to be created.
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
