<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // $services = [
        //     [
        //         'title' => 'Web Development and Design',
        //         'description' => 'Our agency excels in crafting visually stunning and functional
        //         web platforms. From responsive websites to complex web applications, we combine elegant
        //         design with robust development techniques to deliver seamless user experiences and drive
        //         online success.',
        //         'svg_path' => 'assets/svg/service-bulb.svg',
        //         'svg_variant' => 'bulb'
        //     ],
        //     [
        //         'title' => 'Custom Business specific software',
        //         'description' => 'We understand that every business has unique requirements. Our
        //         agency specializes in developing custom software solutions tailored to your specific
        //         needs. Whether it is a CRM system, inventory management software, or enterprise resource
        //         planning (ERP) solution, we create powerful and scalable applications that streamline
        //         your business processes and enhance overall efficiency. Our team works closely with you
        //         to ensure that the software aligns perfectly with your workflows, empowering your
        //         organization to achieve optimal productivity and growth',
        //         'svg_path' => 'assets/svg/service-ring.svg',
        //         'svg_variant' => 'ring mt-ser'
        //     ],
        //     [
        //         'title' => 'Mobile
        //         Applications',
        //         'description' => 'We specialize in creating bespoke mobile applications that
        //         cater to your unique business needs. Our expert team leverages the latest technologies
        //         to build user-friendly and high-performing mobile apps for iOS and Android platforms',
        //         'svg_path' => 'assets/svg/service-media.svg',
        //         'svg_variant' => 'media mt-ser'
        //     ],
        // ];

        //get allservices from service model
        $services = Service::allServices();

        //


        // dd($services);

        return view('welcome', compact('services'));
    }

    //function to return a single service
    public function show($id)
    {
        // dd($id);
        //get allservices from service model
        $services = Service::allServices();

        //get a single service from service model
        $service = Service::findService($id);

        // dd($service);
        //return json
        return response()->json($service);
    }
}
