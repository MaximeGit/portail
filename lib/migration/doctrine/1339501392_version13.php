<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version13 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('annonce', 'user_id', 'integer', '8', array(
             ));
        $this->addColumn('annonce', 'email', 'string', '100', array(
             ));
        $this->addColumn('annonce', 'password', 'string', '32', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('annonce', 'user_id');
        $this->removeColumn('annonce', 'email');
        $this->removeColumn('annonce', 'password');
    }
}