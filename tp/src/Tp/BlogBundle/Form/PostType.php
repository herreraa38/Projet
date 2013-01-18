<?php
namespace Tp\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('categories', 'entity', array(
		    'class' => 'TpBlogBundle:Categories',
		    'property' => 'title'
		));
		$builder->add('date', 'date', array(
		    'label' => 'Date',
		    'widget' => 'single_text',
		    'format' => 'yyyy-MM-dd'
		));
		$builder->add('user', 'entity', array(
		    'class' => 'TpBlogBundle:User',
		    'property' => 'name'
		));
		$builder->add('content', 'textarea', array(
			'label' =>'Content'
		));
    }

    public function getName()
    {
        return 'post';
    }
}
?>