<?php

/**
 * Short description for file.
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @package       Cake.Test.Fixture
 * @since         CakePHP(tm) v 7660
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Class TestPluginArticleFixture
 *
 * @package       Cake.Test.Fixture
 */
class TestPluginArticleFixture extends CakeTestFixture {

    /**
     * fields property
     *
     * @var array
     */
    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'user_id' => array('type' => 'integer', 'null' => false),
        'title' => array('type' => 'string', 'null' => false),
        'body' => 'text',
        'published' => array('type' => 'string', 'length' => 1, 'default' => 'N'),
        'created' => 'datetime',
        'updated' => 'datetime'
    );

    /**
     * records property
     *
     * @var array
     */
    public $records = array(
        array('user_id' => 1, 'title' => 'First Plugin Article', 'body' => 'First Plugin Article Body', 'published' => 'Y', 'created' => '2008-09-24 10:39:23', 'updated' => '2008-09-24 10:41:31'),
        array('user_id' => 3, 'title' => 'Second Plugin Article', 'body' => 'Second Plugin Article Body', 'published' => 'Y', 'created' => '2008-09-24 10:41:23', 'updated' => '2008-09-24 10:43:31'),
        array('user_id' => 1, 'title' => 'Third Plugin Article', 'body' => 'Third Plugin Article Body', 'published' => 'Y', 'created' => '2008-09-24 10:43:23', 'updated' => '2008-09-24 10:45:31')
    );

}
