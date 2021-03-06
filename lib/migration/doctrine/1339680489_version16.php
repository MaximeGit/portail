<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version16 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('annonce', 'annonce_departement_id_departement_id');
    }

    public function down()
    {
        $this->createForeignKey('annonce', 'annonce_departement_id_departement_id', array(
             'name' => 'annonce_departement_id_departement_id',
             'local' => 'departement_id',
             'foreign' => 'id',
             'foreignTable' => 'departement',
             'onUpdate' => 'CASCADE',
             'onDelete' => '',
             ));
    }
}