<?php

namespace App\Form;

use App\Entity\Dashboard;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Unique;

class DashboardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Full Name',
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the name field'])
                ]
            ])
            ->add('Username', TextType::class, [
                'label' => 'Username',
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a username']),
                    new Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'User must be at least {{ limit }} characters.',
                        'maxMessage' => 'User name cannot be longer then {{  limit }} characters long.',
                    ]),
                   
                ]
            ])
            ->add('PhoneNumber', TextType::class, [
                'label' => 'Phone number',
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the phone number field']),
                    new Length([
                        'min' => 10,
                        'max' => 15,
                        'minMessage' => 'Phone number must be at least {{ limit }} digits',
                        'maxMessage' => 'Phone number cannot be longer than {{ limit }} digits',
                    ]),
                    new Regex([
                        'pattern' => '/^\d{10,15}$/', 
                        'message' => 'Phone number must only contain digits and be between 10 and 15 digits.',
                    ]),
                ]
            ])
            ->add('DateOfBirth', DateType::class, [
                'label' => 'Date of Birth',
                'widget' => 'single_text', 
                'format' => 'yyyy-MM-dd',
                'input' => 'datetime_immutable',
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the date of birth field']),
                ],
                'html5' => true
            ])
            ->add('Address', TextType::class, [
                'label' => 'Address', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the address field.'])
                ]
            ])
            ->add('City', TextType::class, [
                'label' => 'City', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the city field.'])
                ]
            ])
            ->add('Zip', TextType::class, [
                'label' => 'Zip', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the zip field.'])
                ]
            ])
            ->add('JobTitle', TextType::class, [
                'label' => 'Job Title', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the address field.'])
                ]
            ])
            ->add('CompanyName', TextType::class, [
                'label' => 'Company Name', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the company name field.'])
                ]
            ])
            ->add('YearsOfExperience', NumberType::class, [
                'label' => 'Years of experience', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the years of experience field.']),
                    new Range([
                        'min' => 0,
                        'notInRangeMessage' => 'Years of experience cannot be negative.',
                    ])
                ]
            ])
            ->add('AboutMe', TextType::class, [
                'label' => 'About me', 
                'constraints' => [
                    new NotBlank(['message' => 'Please fill in the "about me" field.'])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dashboard::class,
        ]);
    }
}
