<?php
namespace Tp\Admin2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', 'entity', array(
		    'class' => 'TpAdmin2Bundle:Categories',
		    'property' => 'id'
		));
        $builder->add('title', 'entity', array(
		    'class' => 'TpAdmin2Bundle:Categories',
		    'property' => 'title'
		));
    }

    public function getName()
    {
        return 'post';
    }
}
?>