<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    //move the services collection in homecontroller to this model
    public static function allServices()
    {
        return [
            [
                'id' => 1,
                'title' => 'Web Development and Design',
                'description' => 'Our agency excels in crafting visually stunning and functional
                web platforms. From responsive websites to complex web applications, we combine elegant
                design with robust development techniques to deliver seamless user experiences and drive
                online success.',
                'svg_path' => 'assets/svg/service-bulb.svg',
                'svg_variant' => 'bulb'
            ],
            [
                'id' => 2,
                'title' => 'Custom Business specific software',
                'description' => 'We understand that every business has unique requirements. Our
                agency specializes in developing custom software solutions tailored to your specific
                needs. Whether it is a CRM system, inventory management software, or enterprise resource
                planning (ERP) solution, we create powerful and scalable applications that streamline
                your business processes and enhance overall efficiency. Our team works closely with you
                to ensure that the software aligns perfectly with your workflows, empowering your
                organization to achieve optimal productivity and growth',
                'svg_path' => 'assets/svg/service-ring.svg',
                'svg_variant' => 'ring mt-ser'
            ],
            [
                'id' => 3,
                'title' => 'Mobile
                Applications',
                'description' => 'We specialize in creating bespoke mobile applications that
                cater to your unique business needs. Our expert team leverages the latest technologies
                to build user-friendly and high-performing mobile apps for iOS and Android platforms',
                'svg_path' => 'assets/svg/service-media.svg',
                'svg_variant' => 'media mt-ser'
            ],
        ];
    }

    //function to return a single service
    public static function findService($id)
    {
        $services = Self::allServices();
        foreach ($services as $service) {
            if ($service['id'] == $id) {
                return $service;
            }
        }
    }
}
