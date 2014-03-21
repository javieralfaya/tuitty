<?php
namespace tuitty\TuittyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Nombre', 'text');
        $builder->add('Apellidos', 'text');
        $builder->add('Email', 'email');
        $builder->add('password', 'repeated', array(
           'first_name' => 'Contrasenia',
           'second_name' => 'Confirmacion',
           'type' => 'password'
        ));
        $builder->add('Fecha', 'date', array(
            'format' => 'dd-MMMM-yyyy'
            ));
//        $builder->add('Sexo', 'repeated', array(
//            'first_name' => 'Hombre',
//            'second_name' => 'Mujer',
//            'type' => 'checkbox'
//        ));
        $builder->add('Sexo', 'choice', array(
            'choices' => array(
                'm' => 'Hombre',
                'f' => 'Mujer'
            ),
            'required'    => true,
            'empty_value' => 'Selecciona uno',
            'empty_data'  => null
        ));
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'tuitty\TuittyBundle\Document\User');
    }

    public function getName()
    {
        return 'user';
    }
}